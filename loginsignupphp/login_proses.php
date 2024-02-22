<?php 
session_start();

$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];

$k = new PDO("mysql:host=localhost;dbname=project_kel2", "root", "");

$sql = "SELECT * FROM users
        WHERE username = ?";

$result = $k->prepare($sql);
$result->execute([$username]);
$row = $result->fetch();

if(!empty($row)){
    if(password_verify($password, $row['password'])){
        $_SESSION['uname'] = $row['username'];
        $_SESSION['mail'] = $row['email'];
        $_SESSION['phone'] = $row['phone_number'];
        header('Location: ../index.php');
    }else{
	header('Location: login.php');
    }
}else{
    header('Location: login.php');
}
?>