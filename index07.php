<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Digite um turno: <input type="text" name="turno">
        <button type="submit">Mostrar</button>
    </form>
    <?php
    if (isset($_GET['turno'])){

    $turno = $_GET['turno'];

    if ($turno == 'M')
        echo ("Bom dia!");

    elseif ($turno == 'V') 
        echo ("Boa tarde!");
        
    elseif ($turno == 'N')
        echo ("Boa noite!");
        
    else
    echo ("valor inválido");
    }
    ?>
</body>
</html>