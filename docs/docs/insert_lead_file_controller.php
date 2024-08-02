<?php
session_start();

require_once '../models/leads_model.php';
$model = new Leads_Model();

$statusResponse = -8;
$response;

if (isset($_SESSION['idUser'])) {

    $idLead = intval($_POST['idLead']);
    $uploadDir = './../views/app/dashboard/add/';
    $uploadedFiles = [];
    $errors = [];

    // Crear el directorio si no existe
    if (!file_exists($uploadDir)) {
        if (!mkdir($uploadDir, 0777, true)) {
            die('Fallo al crear el directorio: ' . $uploadDir);
        }
    }

    if (!empty($_FILES['files'])) {
        foreach ($_FILES['files']['name'] as $key => $name) {
            $tmpName = $_FILES['files']['tmp_name'][$key];
            $fileName = basename($name);
            $targetFilePath = $uploadDir . $fileName;

            // Verificar que el archivo temporal existe y es legible
            if (!is_uploaded_file($tmpName)) {
                $errors[] = "El archivo temporal $tmpName no es un archivo subido válido.";
                continue;
            }

            // Verificar permisos de escritura en el directorio destino
            if (!is_writable($uploadDir)) {
                $errors[] = "El directorio de destino $uploadDir no tiene permisos de escritura.";
                continue;
            }

            if (move_uploaded_file($tmpName, $targetFilePath)) {
                $fileData = array(
                    'URL' => $targetFilePath,
                    'Estatus' => 'activo',
                    'Fecha' => date('Y-m-d H:i:s'), // Asegúrate de usar el mismo formato de fecha que en la tabla leads
                    'idLead' => $idLead, 
                );
                $insertFileResponse = $model->insertLeadFile($fileData);
                if ($insertFileResponse > 0) {
                    $statusResponse = 1;
                    $uploadedFiles[] = $targetFilePath;
                } else {
                    $errors[] = "No se pudo insertar el archivo $fileName en la base de datos";
                }
            } else {
                $errors[] = "No se pudo subir el archivo $fileName. Error: " . print_r(error_get_last(), true);
            }
        }
    } else {
        echo 'No se encontraron archivos en $_FILES.';
    }

    $response = json_encode([
        'status' => $statusResponse,
        'errorReport' => $model->errorReport,
        'uploadErrors' => $errors,
        'uploadedFiles' => $uploadedFiles // Añadir archivos subidos al response
    ]);
} else {
    $model->destroySession();
    $response = json_encode(['status' => $statusResponse]);
}

echo $response;
?>
