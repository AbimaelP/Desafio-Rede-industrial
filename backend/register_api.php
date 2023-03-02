<?php
    include_once('./database/dbconnect.php');
    header('Content-Type: application/json');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];
    $token_id = uniqid();

    //inserir novo usuario
    //mysqli_query($GLOBALS['link_DB'],"INSERT INTO users (nome,email,password,token) VALUES ('lucas','$email','$password',4)");
    

    $qr = mysqli_query($link_DB,"SELECT token_id FROM users WHERE email='$email'");

    if($qr->num_rows == 0)
    {
            mysqli_query($link_DB,"INSERT INTO users (nome,email,senha,token_id) VALUES ('$nome','$email','$password','$token_id')");
            echo json_encode(['token' => $token_id,'login' => 'success']);
    }
    else 
    {
        echo json_encode(['error' => 'Já existe usuario com esse e-mail' ]);
    }
