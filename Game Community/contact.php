
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert'])) {
    require('Connect1.php');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO contact (firstname, lastname, emailaddress, phone, notes) VALUES (:firstname, :lastname, :email, :phone, :notes)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_INT);
    $stmt->bindParam(':notes', $notes, PDO::PARAM_STR);
    $stmt->execute();
    $pdo = null;
    header('Location: index.php');
    exit(); 
}

?>