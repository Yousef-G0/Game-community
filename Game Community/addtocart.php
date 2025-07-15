<?php
require("Connect1.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_SESSION['privilleged'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];
    $user = $_SESSION['privilleged'];

    $sql = "INSERT INTO cart (product_name, product_price, product_quantity, username) VALUES ('$name', $price, $quantity, '$user')";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    echo '<script>alert("Product ' . $name . ' has been added to the cart successfully")</script>';
    //include('Shop.php');
    header('location: Shop.php');
    exit();

}
else {
    echo '<script>alert("Please login first")</script>';
    include("Sign.php");
}
}
?>