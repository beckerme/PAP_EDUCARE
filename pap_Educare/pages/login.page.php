<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../methods/login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <button>Login</button>
    </form>

    <div>
        <a href="../pages/register.page.php">Ainda nao tem uma conta? Clique aqui.</a>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">

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
    <title>Login</title>
</head>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form action="../methods/login.php" method="POST" class="form form-login">
                    <h2 class="form-title">Entrar</h2>
                    <!-- <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                    <!-- <p class="form-text">ou utilize sua conta</p> -->
                    <div class="form-input-container">
                        <input type="email" class="form-input" placeholder="Email" name="email" id="email">
                        <input type="password" class="form-input" placeholder="Senha" name="senha" id="senha">
                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <button class="form-button">Logar</button>
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registe-se</a>
                    </p>
                </form>
                <!-- <form class="form form-register">
                    <h2 class="form-title">Criar Conta</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou cadastre seu email</p>
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Nome" name="nome">
                        <input type="email" class="form-input" placeholder="Email" name="email">
                        <input type="password" class="form-input" placeholder="Senha" name="senha">
                    </div>
                    <button type="button" class="form-button">Cadastrar</button>
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form> -->
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Olá Aluno!</h2>
                    <p class="form-text">Cadastre-se e comece a usar a nossa plataforma.</p>
                    <a href="register.page.php"><button class="form-button form-button-light" id="open-register">Registar</button></a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>