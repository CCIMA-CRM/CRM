<?php
session_start();
require_once "../models/leads_model.php";
$model = new Leads_Model();

$response = ['status' => 0];

if (isset($_SESSION['idUser'])) {
    if (isset($_POST['idLead'])) {
        $idLead = intval($_POST['idLead']);
        
        $filesResult = $model->getLeadFiles($idLead);
        if (!is_null($filesResult)) {
            $response = [
                "status" => 1,
                "files" => json_decode($filesResult, true)
            ];
        } else {
            $response = ['status' => -1];
        }
    } else {
        $response = ['status' => -3, 'message' => 'ID del lead no proporcionado'];
    }
} else {
    $model->destroySession();
    $response = ['status' => -2];
}

echo json_encode($response);

?>
