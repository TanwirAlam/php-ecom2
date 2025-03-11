<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    unset($_SESSION["cart"]);
    echo "Order placed successfully!";
}
?>
<form method="POST">
    <button type="submit">Place Order</button>
</form>
