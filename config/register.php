<?php
require_once "koneksi.php";
$username = $_POST["user name"];
$email = $_POST["email"];
$password = $_POST["password1"];
$password = $_POST["password2"];

$q = $database_connection->prepare("INSERT INTO `register` (`username`, `email`, `password1`, `password2`, `id`) VALUES (?, ?, ?, ?, NULL)");
$q->execute([$username, $email, $password]);
header("Location: ../login.php");
?>