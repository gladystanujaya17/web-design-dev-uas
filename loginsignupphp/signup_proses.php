<?php 
$username = $_POST['USERNAME'];
$email = $_POST['EMAIL'];
$password = password_hash($_POST['PASSWORD'], PASSWORD_BCRYPT);
$phone = $_POST['PHONE'];

$koneksi = new PDO("mysql:host=localhost;dbname=project_kel2", "root", "");
$sql = "INSERT INTO users (username, email, password, phone_number)
        VALUES (?, ?, ?, ?)";

$result = $koneksi->prepare($sql);
$result->execute([$username, $email, $password, $phone]);

header('Location: login.php');
?>

