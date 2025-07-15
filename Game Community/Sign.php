
<?php 
// if (session_status() == PHP_SESSION_NONE) {
//     
// } 
 include('Connect1.php');
 session_start();

//  if (array_key_exists('privilleged', $_SESSION))
// if (isset($_SESSION['privilleged'])) {
//     header("location:Game.php");
// }
  if (isset($_POST['select'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      $sql = "select * from sign where username= :username and password= :password";  
      $statement= $pdo-> prepare($sql);
      $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
      $statement->execute();
      //$data=$statement->fetchAll();
      $data=$statement -> rowCount();
      if($data == 1){ 
    $_SESSION['privilleged']= $username;
        header('Location: index.php');  

} else {
        echo "<h1 style= 'color:black'>Login failed. Invalid email or password.</h1>";
    }
    $pdo = null;
    //   if ($data) {
    //     header("location: Game.php");
    //     exit();
    // } else {
      
    //     echo "<h1 style= 'color:black'>Login failed. Invalid email or password.</h1>";
    // }
  
}
   
  ?>
  <?php

//Read _Post 
//Connection
//Check if the user registered ?
    //save in session then next page
    //else>>still here
// include("connect.php");
// session_start();

// if (array_key_exists('currentuser', $_SESSION))
// if (isset($_SESSION['currentuser'])) {
//     header("location:products.php");
// }

// //Storage : $_SESSION ['currentuser' : 'asma']



// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $sql = "SELECT * from users where username='$username' and password='$password';";
//     $cakeDetails = mysqli_query($con, $sql);
//     $row = mysqli_fetch_assoc($cakeDetails);
//     if ($row) {
//         $_SESSION['currentuser'] = $username;
//         header("location:products.php");
//     } else {
//         $msg="Invalid username or password 🙁";
//         echo "<script>alert('$msg');</script>";
        
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>    
    <link rel="stylesheet" href="css/sign.css">

    </head>
    <body>
        <section>
     <h1>GamCom</h1>

    <div class="login">
        <form method="post">
            <h2>Login</h2>
            <div class="input">
                <input type="username" name="username" required>
                <label>Username</label>
            </div>
            <div class="input">
                <input type="password" name="password" required>
                <label >Password</label>

            </div>
            <div class="remb">
                <label><input type="checkbox" >Remember User</label>              
            </div>
            <button type="submit" name="select" >Login</button>
            <div class="Sign-Up">
                <p>Don't have an account?
                <a href="SignUp.php">Register</a>
                <div class="Sign-Up">
                <p>Forgot you password?
                <a href="#">Reset</a>
            </p>
         </div>
        </form>
    </div>
       </section>
    </body>
    </html>