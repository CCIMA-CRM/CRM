<?php

define('ZOHO_CLIENT_ID', '1000.6VRHJKGRKBH5302BFI8R76BWZZPXNH');
define('ZOHO_CLIENT_SECRET', 'ca76cd3cc460ca06f8ac8682891ad31fbf7dd37b90');
define('ZOHO_REFRESH_TOKEN', '1000.9ac37ec509ec526a9c9444ca3281ab8e.93e196256155c5e7dbf662302d2d9e8e');

session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -8;
$response;
$insertLeadResponse = null;  // Definimos la variable antes de su uso

if (isset($_SESSION['idUser'])) {

    $uploadDir = './../views/app/dashboard/add/';
    $uploadedFiles = [];
    $errors = [];

    // Crear el directorio si no existe
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

   

    $data = $_POST;
    $leadData = array(
        'name' => $data['name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'domain' => $data['domain'],
        'phone' => $data['phone'],
        'idGender' => $data['idGender'],
        'address' => $data['address'],
        'idMedium' => $data['idMedium'],
        'idLeadStatus' => $data['idLeadStatus']
    );

    $checkEmailResponse = $model->checkEmail($leadData['email'], $leadData['domain']);
    if ($checkEmailResponse >= 0) {

        $checkPhoneResponse = $model->checkPhone($leadData['phone']);
        if ($checkPhoneResponse > 0) {

            $insertEmailResponse = $model->insertEmail($leadData['email'], $leadData['domain'], $checkEmailResponse, 2, 0);
            if ($insertEmailResponse > 0) {

                $insertLeadResponse = $model->insertLead($leadData['name'], $leadData['last_name'], $insertEmailResponse, $_SESSION['idUser'], $leadData['idGender'], $leadData['idMedium']);
                if ($insertLeadResponse > 0) {
                    $statusResponse = 1;
                    if (!empty($_FILES['files'])) {
                        foreach ($_FILES['files']['name'] as $key => $name) {
                            $tmpName = $_FILES['files']['tmp_name'][$key];
                            $fileName = basename($name);
                            $targetFilePath = $uploadDir . $fileName;
                    
                            if (move_uploaded_file($tmpName, $targetFilePath)) {
                                $fileData = array(
                                    'URL' => $targetFilePath,
                                    'Estatus' => 'activo',
                                    'Fecha' => date('Y-m-d H:i:s'), // Asegúrate de usar el mismo formato de fecha que en la tabla leads
                                    'idLead' => $insertLeadResponse, // Asegúrate de que $insertLeadResponse contenga el ID del lead recién insertado
                                );
                                $insertFileResponse = $model->insertLeadFile($fileData);
                                if ($insertFileResponse > 0) {
                                    $uploadedFiles[] = $targetFilePath;
                                } else {
                                    $errors[] = "No se pudo insertar el archivo $fileName en la base de datos";
                                }
                            } else {
                                $errors[] = "No se pudo subir el archivo $fileName";
                            }
                        }
                    }
                    $insertPhoneResponse = $model->insertPhone($leadData['phone'], 1, 2, 2, 0);
                    if ($insertPhoneResponse > 0) {
                        $updateLeadPhoneResponse = $model->update('leads', 'idPhone', $insertPhoneResponse, 'idLead', $insertLeadResponse, 'ii');
                        $statusResponse = (!is_null($updateLeadPhoneResponse)) ? 2 : -5;
                    } else {
                        $statusResponse = -4;
                    }

                    if (!empty($leadData['address'])) {
                        $insertAddressResponse = $model->insertABC('addresses', 'address', $leadData['address'], 'idCountryCode', 1, 'idAddressType', $model::LEAD_ADDRESS_ID, 'sii');
                        if ($insertAddressResponse > 0) {
                            $updateAddressResponse = $model->update('leads', 'idAddress', $insertAddressResponse, 'idLead', $insertLeadResponse, 'ii');
                            $statusResponse = (!is_null($updateAddressResponse)) ? 3 : -7;
                        } else {
                            $statusResponse = -6;
                        }
                    }

                    $curl_handle = curl_init();
                    
                    $postFieldsAccessTokenRequest =
                        'refresh_token='.ZOHO_REFRESH_TOKEN.'&'.
                        'client_id='.ZOHO_CLIENT_ID.'&'.
                        'client_secret='.ZOHO_CLIENT_SECRET.'&'.
                        'grant_type=refresh_token';

                    $accessTokenUrl = 'https://accounts.zoho.com/oauth/v2/token';

                    curl_setopt_array($curl_handle, [
                        CURLOPT_URL => $accessTokenUrl ,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postFieldsAccessTokenRequest,
                        CURLOPT_HTTPHEADER => [
                            'cache-control: no-cache',
                            'Content-Type: application/x-www-form-urlencoded'
                        ]
                    ]);

                    $accessTokenResult = curl_exec($curl_handle);

                    $accessTokenResultJSON = json_decode($accessTokenResult);

                    if (isset($accessTokenResultJSON->access_token)) {

                        $insertContactsUrl = 'https://www.zohoapis.com/crm/v2/Contacts';

                        $adviserField = '"Asesor2": ';
                        $managerField = '"Asesor1": ';
                        $directorField = '"Asesor": ';

                        $leadStatus = [
                            'Por Contactar',
                            'No interesado',
                            'Contactar Despues',
                            'Información enviada',
                            'Recorrido-Visita',
                            'Cotizacion Enviada',
                            'Cliente'
                        ];

                        $leadStatusField = '"Estatus": "'.$leadStatus[$data['idLeadStatus']-1].'"';

                        switch ($_SESSION['idProfile']) {
                            case 1:
                                $directorField .= '"'.$_SESSION['name'].' '.$_SESSION['last_name'].'"';
                                $managerField .= 'null';
                                $adviserField .= 'null';
                                break;
                            case 2:
                                $managerField .= '"'.$_SESSION['name'].' '.$_SESSION['last_name'].'"';
                                $adviserField .= 'null';
                                $directorField .= 'null';
                                break;
                            case 3:
                                $adviserField .= '"'.$_SESSION['name'].' '.$_SESSION['last_name'].'"';
                                $usersTeamQuery = 'SELECT idTeam FROM users_teams WHERE idUser = ? && idTeamProfile = ?';
                                $userTeam = $model->selectByAB($usersTeamQuery, $_SESSION['idUser'], 3, 'ii');
                                if (!is_null($userTeam)) {
                                    $teamManagerQuery = 'SELECT idUser FROM users_teams WHERE idTeam = ? && idTeamProfile = ?';
                                    $teamManager = $model->selectByAB($teamManagerQuery, $userTeam[0], 2, 'ii');
                                    if (!is_null($teamManager)) {
                                        $managerResult = $model->selectBy('name, last_name', 'users', 'idUser', $teamManager[0]['idUser'], 'i');
                                        if (!is_null($managerResult)) {
                                            $managerField .= '"'.$managerResult[0]['name'].' '.$managerResult[0]['last_name'].'"';
                                        } else {
                                            $managerField .= 'null';
                                        }
                                    }
                                }
                                $directorField .= 'null';
                        }

                        $medium = $model->selectBy('medium', 'contact_media', 'idMedium', $data['idMedium'], 'i');

                        $postFieldsInsertContacts = '{
                            "data": [
                                {
                                    "First_Name": "'.$data['name'].'",
                                    "Email": "'.$data['email'].'@'.$data['domain'].'",
                                    "Last_Name": "'.$data['last_name'].'",
                                    "Mobile": "'.$data['phone'].'",
                                    "Fuente_de_Lead": "'.$medium[0]['medium'].'",
                                    '.$leadStatusField.',
                                    '.$directorField.',
                                    '.$managerField.',
                                    '.$adviserField.'
                                }
                            ],
                            "trigger": [
                                "approval",
                                "workflow",
                                "blueprint"
                            ]
                        }';
    
                        curl_setopt_array($curl_handle, [
                            CURLOPT_URL => $insertContactsUrl ,
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => $postFieldsInsertContacts,
                            CURLOPT_HTTPHEADER => [
                                'Authorization: Zoho-oauthtoken '.$accessTokenResultJSON->access_token
                            ]
                        ]);
    
                        $result = curl_exec($curl_handle);
                    }

                    curl_close ($curl_handle);

                } else {
                    $statusResponse = -3;
                }
            } else {
                $statusResponse = -2;
            }
        } else {
            $statusResponse = -1;
        }
    } else {
        $statusResponse = 0;
    }

    $response = json_encode([
        'status' => $statusResponse,
        'errorReport' => $model->errorReport,
        'uploadErrors' => $errors
    ]);
} else {
    $model->destroySession();
    $response = json_encode(['status' => $statusResponse]);
}

echo $response;

?>
