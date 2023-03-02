<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/default_style.css">
    <title>Cadastre-se</title>
</head>
<body>
    <div class="container">
        <div id="register-message" class="register-message"></div>
    </div>
    <div class="container">
        <form id="form-register">
        <div>
            <input type="text" id="nome" name="nome" placeholder="Insira seu nome" required>
            <input type="email" id="email" name="email" placeholder="Insira seu e-mail" required>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            <input type="password" id="password_repeat" name="password_repeat" placeholder="Repita a senha" required>
        </div>
        <div class="button-container">
            <a href="./login.php">Entre na sua conta</a><button type="submit" form="form-register">Cadastre-se</button>
        </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./js/register.js"></script>
</body>
</html>