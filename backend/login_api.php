<?php
    include_once('./database/dbconnect.php');
    header('Content-Type: application/json');

    $email = $_POST['email'];
    $password = $_POST['password'];

    //inserir novo usuario
    //mysqli_query($GLOBALS['link_DB'],"INSERT INTO users (nome,email,password,token) VALUES ('lucas','$email','$password',4)");
    

    $qr = mysqli_query($link_DB,"SELECT nome,email,senha,token_id FROM users WHERE email='$email'");

    if($qr->num_rows == 0)
    {
        echo json_encode(['error' =>'Email nao cadastrado']);
    }
    else 
    {
        $obj = mysqli_fetch_object($qr);

            if ($obj->senha === $password)
            {
                $token_id = uniqid();
                mysqli_query($link_DB,"UPDATE users SET token_id='$token_id' WHERE email='$email'");
                echo json_encode(['token' => $token_id,'login' => 'success']);
            } 
            else 
            {
                echo json_encode(['error' => 'Senha incorreta']);
            }
    }
