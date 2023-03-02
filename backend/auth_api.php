<?php
    include_once('./database/dbconnect.php');
    header('Content-Type: application/json');

    $token_id = $_POST['tokenID'];
    //inserir novo usuario
    //mysqli_query($GLOBALS['link_DB'],"INSERT INTO users (nome,email,password,token) VALUES ('lucas','$email','$password',4)");
    

    $qr = mysqli_query($link_DB,"SELECT nome,email FROM users WHERE token_id='$token_id'");

    $obj = mysqli_fetch_object($qr);
    if($qr->num_rows == 0)
    {
        echo json_encode(['token' => 'token-invalid']);
    }
    else if($obj->email != 'admin@gmail.com')
    {
        echo json_encode(['token' => 'token-valid','isAdmin' => false]);
    }
    else
    {
        echo json_encode(['token' => 'token-valid','isAdmin' => true]);
    }
