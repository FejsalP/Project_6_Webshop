<?php
require ('dbh.inc.php');
require ('Product.php');

$db = new DBController();
$product = new Product($db);

if (isset($_POST['productID'])){
    $result = $product->getProduct($_POST['productID']);
    echo json_encode($result);
}