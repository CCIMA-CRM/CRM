<?php
session_start();
require_once "../models/leads_model.php";

$model = new Leads_Model();
$response = ['status' => 0];

if (isset($_SESSION['idUser'])) {
    if (isset($_POST['idLead'])) {
        $idLead = intval($_POST['idLead']);

        // Obtener archivos relacionados con el lead
        $filesResult = $model->getLeadFiles($idLead);
        
        // Decodificar JSON resultante
        $filesArray = json_decode($filesResult, true);

        if (is_array($filesArray)) {
            $response = [
                "status" => 1,
                "files" => $filesArray
            ];
        } else {
            $response = ['status' => -1, 'message' => 'No se encontraron archivos o ocurrió un error en la consulta'];
        }
    } else {
        $response = ['status' => -3, 'message' => 'ID del lead no proporcionado'];
    }
} else {
    // Destruir sesión si el usuario no está autenticado
    $model->destroySession();
    $response = ['status' => -2, 'message' => 'Usuario no autenticado'];
}

// Enviar respuesta en formato JSON
echo json_encode($response);
?>
