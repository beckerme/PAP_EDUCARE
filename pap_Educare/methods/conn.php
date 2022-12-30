<?php 

$username = 'root';
$password = '';

try{
    $conn = new PDO('mysql:host=localhost;dbname=pap_educ', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: '.$e->getMessage();
}

// $servidor = 'localhost';
// $usuario = 'root';
// $senha = '';
// $dbname = 'pap_educ';

// $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
// if(!$conexao){
//     die("Houve um erro: ". mysqli_connect_error());
// }


?>