<?php

include 'LeadsController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = LeadsController::createLead($_POST);

    if ($result) {
        header("Location: ../index.php?status=sukses");
    } else {
        header("Location: ../index.php?status=gagal");
    }
    exit();
}