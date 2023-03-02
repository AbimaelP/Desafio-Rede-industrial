<?php
    include_once('./database/dbconnect.php');
    header('Content-Type: application/json');

    $token_id = $_POST['tokenID'];

    $qr = mysqli_query($link_DB,"SELECT nome,email,token_id FROM users");

    if($qr->num_rows == 0)
    {
        echo json_encode(['error' => 'Não existem usuarios cadastrados']);
    }
    else 
    {
        $count = 0;
        while ($obj = mysqli_fetch_object($qr)) {
            $usuarios[$count][0] = $obj->nome;
            $usuarios[$count][1] = $obj->email;
            $usuarios[$count][2] = $obj->token_id;
            $count++;
        }

        echo json_encode($usuarios);
        
    }
