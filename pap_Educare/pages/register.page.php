<?php 
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../login_test/css/reset.css">
    <link rel="stylesheet" href="../login_test/css/colors.css">
    <link rel="stylesheet" href="../login_test/css/main.css">
    <link rel="stylesheet" href="../login_test/css/login-container.css">
    <link rel="stylesheet" href="../login_test/css/form-container.css">
    <link rel="stylesheet" href="../login_test/css/form.css">
    <link rel="stylesheet" href="../login_test/css/form-title.css">
    <link rel="stylesheet" href="../login_test/css/form-social.css">
    <link rel="stylesheet" href="../login_test/css/social-icon.css">
    <link rel="stylesheet" href="../login_test/css/form-input-container.css">
    <link rel="stylesheet" href="../login_test/css/form-input.css">
    <link rel="stylesheet" href="../login_test/css/form-button.css">
    <link rel="stylesheet" href="../login_test/css/overlay-container.css">
    <link rel="stylesheet" href="../login_test/css/overlay.css">
    <link rel="stylesheet" href="../login_test/css/mobile-text.css">

    <script src="./js/login.js" defer></script>
    <title>Cadastro</title>
</head>
<body>
<main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form action="../methods/register.php" method="POST" class="form form-login">
                    <h2 class="form-title">Registar:</h2>
                    <div class="form-input-container">
                        <input type="text" name="nome" id="nome" class="form-input" placeholder="Nome" required>
                        <input type="email" class="form-input" placeholder="Email" name="email" id="email">
                        <input type="password" class="form-input" placeholder="Senha" name="senha" id="senha">
                    </div>
                    <button class="form-button">Registe-se</button>
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registe-se</a>
                    </p>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já está cadastrado?</h2>
                    <p class="form-text">Faça o login abaixo</p>
                    <a href="login.page.php"><button class="form-button form-button-light" id="open-register">Login</button></a>
                </div>
            </div>
        </div>
    </main>
    <!-- <form action="../methods/register.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required> <br> <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required> <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br> <br>
        <button>Cadastrar</button>
    </form> -->

    <p><a href="login.page.php">Já tem uma conta?</a></p>
</body>
</html>