<?php
session_start();

if (!isset($_POST['email'], $_POST['senha'])) {
    header("Location: login.php");
    exit();
}

$userMaster = "admin@blog.com";
$passHash = password_hash("123456", PASSWORD_DEFAULT);

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === $userMaster && password_verify($senha, $passHash)) {
    $_SESSION['logado'] = true;
    header("Location: index.php");
} else {
    header("Location: login.php?erro=1");
}
exit();
