<?php
    require_once 'controller/SalesController.php';
    require_once 'controller/ProductController.php';
    $allSales   = SalesController::getAllSales();
    $allProduct = ProductController::getAllProduct();
?>


<h1 class="fs-1 mb-5">Selamat datang di tambah leads</h1>

<?php include 'components/FormComponent.php'; ?>