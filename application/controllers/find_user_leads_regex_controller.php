<?php
session_start();
require_once "../models/leads_model.php";
$model = new Leads_Model();

$response = ['status' => 0];

if (isset($_SESSION['idUser'])) {
    $userId = $_SESSION['idUser'];  // Obtén el userId de la sesión
    $input = isset($_POST['input']) ? $_POST['input'] : '';
   

    //$leadsResult = $model->searchUser($input, $userId);  // Pasa ambos parámetros
	error_log("User input: " . $input);
		$select = "e.email, p.phone_number, l.*";
		$join = "leads AS l 
				 INNER JOIN emails AS e ON l.idEmail = e.idEmail
				 LEFT JOIN phones AS p ON l.idPhone = p.idPhone";
		$where = "l.idUser = ? AND (l.name LIKE ? OR l.last_name LIKE ? OR e.email LIKE ? OR p.phone_number LIKE ?)";
		$values = "isss"
		$leadsResult->find($select, $join, $where, $values);
    
        if (!empty($leadsResult)) {
        // Para depuración, puedes usar json_encode para convertir el array a una cadena JSON
        echo '<pre>' . print_r($leadsResult, true) . '</pre>';
        $response['leads'] = $leadsResult; // Incluye el resultado en la respuesta
    } else {
        $response['status'] = -1;
    }
} else {
    $model->destroySession();
    $response['status'] = -2; 
}

echo json_encode($response);

?>