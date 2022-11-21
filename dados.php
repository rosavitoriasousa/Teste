<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do forms</title>
</head>
<body>

<?php

    $nome = $_POST["txtnome"];
    $telefone =  $_POST["txttelefone"];
    $email =  $_POST["txtemail"];
    $novidades =  $_POST["rdbnovidades"];
    $msg =  $_POST["txtmensagem"];



    echo "<p>Nome do cliente: ". $nome ."</p>";

    echo "<p>Telefone: ". $telefone ."</p>";

    echo "<p>Email do cliente: ". $email ."</p>";

    if($novidades =="sim"){
        echo "Sim, desejo receber as novidades!!!!";
    }
    else{
        echo "Não quero receber as novidades, já te falei isso. Plmds";
    }

    echo "<p>Mensagem: ". $msg ."</p>";

?>
    
</body>
</html>