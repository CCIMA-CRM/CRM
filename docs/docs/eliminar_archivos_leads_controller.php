<?php
session_start();
require_once "../models/leads_model.php";

$model = new Leads_Model();
$response = ['status' => 0];

if (isset($_SESSION['idUser'])) {
    $idFile = intval($_POST['idFile']);

    $table =  'leads_archivos';
    $field = 'Estatus';
    $valueField = 'inactivo';
    $where = 'idArchivo';
    $valueWhere = $idFile;
    
    $update = $model->update($table, $field, $valueField, $where, $valueWhere, 'si');
    
    // Decodificar JSON resultante
    $fileDelete = json_decode($update, true);
    $response = $fileDelete;
    
} else {
    // Destruir sesión si el usuario no está autenticado
    $model->destroySession();
    $response = ['status' => -2, 'message' => 'Usuario no autenticado'];
}

// Enviar respuesta en formato JSON
echo json_encode($response);
?>
