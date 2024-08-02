<?php
session_start();
require_once "../models/leads_model.php";
$model = new Leads_Model();

$response = ['status' => 0];

if (isset($_SESSION['idUser'])) {
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 3000;
	//$limit = 3000;
	$offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;

    $leadsResult = $model->getLeadsByIdUser($_SESSION['idUser'], $limit, $offset);
    if (!is_null($leadsResult)) {
        $selectContactMediaResult = $model->selectFrom('*', 'contact_media');
        $totalLeads = $model->getTotalLeadCount($_SESSION['idUser']);
        $response = [
            "status" => 1,
            "leads" => json_decode($leadsResult, true),
            "media" => $selectContactMediaResult,
            "totalLeads" => $totalLeads
        ];
    } else {
        $response = ['status' => -1];
    }
} else {
    $model->destroySession();
    $response = ['status' => -2];
}

echo json_encode($response);

?>