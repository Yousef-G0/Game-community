<?php 
require 'Connect1.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    $stmt = $pdo->prepare("INSERT INTO sign (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt -> execute();
   
    header('location: Sign.php');
   
   $pdo = null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
   <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<?php

session_start();
if (array_key_exists('privilleged', $_SESSION))
    if (isset($_SESSION['privilleged'])) {
        header("location:index.php");
    }
?>
    <section>
    <div class="Reg">
    <form  method="post">
    
            <legend>Create Your Account</legend>
            <div class="input">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div><div class="input">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div><div class="input">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div><div class="input">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
            <button type="submit" name="insert">Sign Up</button>
      
    </form>
</div>
</section>
</body>
</html>