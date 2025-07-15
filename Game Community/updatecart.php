<?php
// require 'Connect1.php';
// $sql="select * from cart where id=:id";
// $stmt=$pdo->prepare($sql);

// $id=$_GET['id'];
// $stmt->bindParam(':id',$id,PDO::PARAM_INT);
// $stmt->execute();
// $data=$stmt->FetchAll();
// if($data!=null)
// {
//    foreach($data as $row)
// {
//     $quantity=$row['quantity'];
//     $productId=$row['productid'];
    
// } 
// }
// else{
//     $quantity='not found';
//     $productId='not found';
// }
// if(isset($_POST['update']))
// {
//     $sql="update cart set productid=:productId,quantity=:quantity where id=:id";
//     $stmt=$pdo->prepare($sql);

//     $id=$_GET['id'];
//     $productId=$_POST['productId'];
//     $quantity=$_POST['quantity'];

//     $stmt->bindParam(':id',$id,PDO::PARAM_INT);
//     $stmt->bindParam(':productId',$productId,PDO::PARAM_STR);
//     $stmt->bindParam(':quantity',$quantity,PDO::PARAM_STR);

//     $stmt->execute();
//     $pdo=null;

//     header('location:cart.php');

// }
?>


<?php
include 'Connect1.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $id = $_GET["product_id"];
    $quantity = $_GET['product_quantity'];

    $sql = "update cart set product_quantity= :quantity where id= :id;";
   $stmt = $pdo ->prepare($sql);
   $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //$result = mysqli_query($con, $sql);
    if ($stmt -> execute()) {
        header('Location: cart2.php');
    } else {
        die($pdo);
    }
}

?>
