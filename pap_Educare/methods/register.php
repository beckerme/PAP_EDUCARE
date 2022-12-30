<?php 
    require_once('../methods/conn.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = md5($_POST['senha']);

    $query_con = $conn->prepare("INSERT INTO users (name, email, password) 
                SELECT '$nome', '$email', '$password' FROM DUAL WHERE NOT EXISTS(SELECT '$email' FROM users WHERE email = '$email')");
    $query_con->execute();
    $row = $query_con->rowCount();

    if($row == 1){
        echo "Usuario cadastrado.";
        header('Location: ../index.php');
        exit;
    } else {
        echo "Usuario ja existe";
    }

    print_r($query_con->rowCount());

?>