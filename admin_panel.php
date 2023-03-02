<?php  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_panel.css">
    <link rel="stylesheet" href="./css/default_style.css">
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="container">
        <div class="columns-title">
            <div class="column-name">Nome</div>
            <div class="column-email">E-mail</div>
            <div class="column-actions">Ações</div>
        </div>
        <div id="content-main-users" style="margin-top:20px;"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./js/auth.js"></script>
    <script src="./js/adminGetUsers.js"></script>
</body>
</html>
