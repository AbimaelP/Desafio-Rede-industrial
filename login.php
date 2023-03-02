<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/default_style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div id="login-message" class="login-message"></div>
    </div>
    <div class="container">
        <form id="form-auth">
            <input type="text" id="email" name="email" placeholder="Insira seu e-mail" required>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            <button type="submit" form="form-auth">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>