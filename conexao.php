<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "12345678" ;
        $banco = "db_empregosetimb";


        $cd = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    


    ?>
</body>
</html>