<?php
    include_once('./database/dbconnect.php');
    header('Content-Type: application/json');

    $token = $_POST['token'];
    //inserir novo usuario
    //mysqli_query($GLOBALS['link_DB'],"INSERT INTO users (nome,email,password,token) VALUES ('lucas','$email','$password',4)");
    

    mysqli_query($link_DB,"DELETE FROM users WHERE token_id='$token'");

    echo json_encode('Usuario excluido');