<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="get">
    Digite o número de um mês: <input type="number" name="mes">
    <button type="submit">Mostrar</button>
</form>

<body>
    <?php
    if (isset($_GET['mes'])) {
    $numMes = $_GET['mes'];
    $mes = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"];
    if ($numMes >= 1 && $numMes <= 12) 
        echo $mes[$numMes - 1];
     else 
        echo "Mês inválido";
    }

    ?>
</body>

</html>