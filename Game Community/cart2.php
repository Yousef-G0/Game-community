<?php
include 'Connect1.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>cart</title>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <?php
        include("Connect1.php");
        session_start();
        if (!array_key_exists('privilleged', $_SESSION)) {
            header("location:Sign.php");
        }
        
        if (isset($_SESSION['privilleged'])) {
            $user = $_SESSION['privilleged'];
            echo "<a href='Shop.php'>Shop</a>";
            echo "<a href='cart2.php'>My Cart</a>";
            echo "<a href='Event.html'>Event</a>";
            echo "<a href='Conatct2.php'>Contact</a>";

        } else {
            header("location:Sign.php");
        }
        ?>
    </nav>
    <h1 class="main-title">My Cart</h1>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th >Name</th>
                    <th >Price</th>
                    <th >Quantity</th>
                    <th >Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $user = $_SESSION['privilleged'];
                $sql = "select * from cart where username='$user';";
                $statemnt=$pdo->prepare($sql); 
                $statemnt -> execute();
                $data=$statemnt->fetchAll();
                //$result = mysqli_query($con, $sql);
                if ($data) {
                    $total = 0;
                    //while ($row = mysqli_fetch_array($result)) {
                        foreach($data as $row) {

                        $id = $row['id'];
                        $product_name = $row['product_name'];
                        $product_quantity = $row['product_quantity'];
                        $product_price = $row['product_price'] * $product_quantity;
                        $total += $product_price;

                        echo '
                        <tr>
                            <td>' . $product_name . '</td>
                            <td>' . $product_price . ' JD</td>
                            
                            <td>
                                <form action="updatecart.php">
                                <input type="number"  name="product_quantity" value= ' . $product_quantity . '>
                                <input type="hidden" name="product_id" value= ' . $id . '>
                                <button type="submit"> Update</button>
                                </form>
                            </td>
                           
                            <td>
                            <button><a  href="removecart.php?id=' . $id . '">Delete</a></button>
                            </td>
                            </tr>';

                    }

                }
                ?>

            </tbody>
        </table>
        <?php
       // echo "<p>Total: $total JD<p/>";
        ?>
    </div>
</body>

</html>