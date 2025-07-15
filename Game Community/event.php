<?php

require('Connect1.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_SESSION['privilleged'])){
        $user= $_SESSION['privilleged'];
        $selectedGame= $_POST['game'];
$sql = "insert into event (username , gameselected) values ('$user', '$selectedGame')";

$stmt= $pdo -> prepare($sql);
        $stmt -> execute();
         echo '<script>alert("Thank you for submitting your information!")</script>';
          require('Event.html');         
        exit();
    }
}
?>
