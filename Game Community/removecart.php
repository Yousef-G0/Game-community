<?php
require('Connect1.php');


    $sql="delete from cart where id=:id";
    $stmt=$pdo->prepare($sql);
    $id=$_GET['id'];
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    $pdo=null;
    header('Location: cart2.php'); 

?>
