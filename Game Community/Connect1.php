<?php 

$pdo= new PDO('mysql:host=localhost;dbname=game community','root','');
//$pdo= new PDO('mysql:host=sql212.infinityfree.com;dbname=if0_35859491_gamecommunity','if0_35859491','3fwWTKz8BEzFY');

if(!$pdo){
    die("Error: Failed to connect to database!");
}
?>

