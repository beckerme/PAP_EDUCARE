<?php 
require_once('conn.php');

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = md5($_POST['senha']);

$sql = 'SELECT * FROM users where email=:email AND password=:password';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'password' => $password]);
$user = $result->fetch();

if(!empty($user)){
    session_start();

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    header('Location: ../');
} else {
    echo 'Usuario nao encontrado';
}

?>