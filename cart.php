<?php
session_start();
include "db.php";

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Add item to cart
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];

    $_SESSION["cart"][] = ["product_id" => $product_id, "quantity" => $quantity];
    echo "Item added to cart!";
}

// View cart
foreach ($_SESSION["cart"] as $item) {
    echo "Product ID: " . $item["product_id"] . " Quantity: " . $item["quantity"] . "<br>";
}
?>
