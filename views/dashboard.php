<?php
    require_once 'controller/SalesController.php';
    require_once 'controller/ProductController.php';
    require_once 'controller/LeadsController.php';
    $allSales   = SalesController::getAllSales();
    $allProduct = ProductController::getAllProduct();
    $allLeads;

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $allLeads = LeadsController::findLead($_GET);
    } else {
        $allLeads = LeadsController::getAllLead();
    }

?>

<h1 class="fs-1 mb-5">Dashboard</h1>

<?php include 'components/SearchComponent.php'; ?>
<?php include 'components/TableComponent.php'; ?>