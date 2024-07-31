<?php
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../views/app/dashboard/add/';
    $fileName = uniqid() . '_' . $_FILES['file']['name'];
    $uploadFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo json_encode(['status' => 'success', 'url' => $fileName]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al mover el archivo']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error en la subida del archivo']);
}
?>