<?php
require("Connect1.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_SESSION['privilleged'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];
    $user = $_SESSION['privilleged'];

    // Use named placeholders in the SQL query
    $sql = "INSERT INTO cart (product_name, product_price, product_quantity, username) VALUES ('$name', $price, $quantity, '$user')";

    // Prepare the SQL statement
    $stmt = $pdo->prepare($sql);

    // Execute the statement
    $stmt->execute();

    // Redirect to Shop.html after successful insertion
    header("location: Shop.php");
    exit();

}
else {
    echo '<script>alert("Please login first")</script>';
    include("Sign.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Ultimate Edition </title>
    <link rel="stylesheet" href="css/product1.css">
</head>
<body>
    <div class="container">
        <div class="boxright">
            <div class="main-image-box">
                <img src="photo/pc10.jpg" id="bigimg" class="main-image">
            </div>
            <div class="small-images">
                <div class="image-box"> <img src="photo/pc11.jpg" class="image"></div>
                <div class="image-box"> <img src="photo/pc12.jpg" class="image"></div>
            </div>
        </div>
        <div class="details">
            <h1>Here is the product in single view </h1>
            <p>Avaliable (In Stock)</p>
            <h2>$ 500</h2>
            <form  method="post">
                <table class="inputs">
                    <input type="hidden" name="product_name" value="PC Ultimate Edition ">
                    <tr>
                        <td>Quantity</td>
                        <td align="right"><input type="number" name="product_quantity" id="first" required></td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td align="right"><input type="number" id="second"  readonly></td>
                    </tr>
                    <tr>
                        <td>Sales Tax 5.7%</td>
                        <td align="right"><input type="number" id="third" readonly></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td align="right"><input type="number" name="product_price" id="fourth" readonly></td>
                    </tr>
                </table>
                <h4>Specification</h4>
                <p>Experience the next generation of gaming with the Ultimate Edition.</p>
                <h3>Recomended</h3>
                <div class="recomend">
                        <h4>Controller / Camera or VR / Wheel</h4>
                        <img src="photo/cont.jpg" id="rec" class="image">
                        <img src="photo/camera.jpg" id="rec" class="image">
                        <img src="photo/wheel.jpg" id="rec" class="image">
                    </div>
               
                    
                    <button type="submit" name="insert" >Add to Cart</button>
                </form>
                   </div>
    </div>
    <script src="js/shop.js"> </script>
</body>
</html>