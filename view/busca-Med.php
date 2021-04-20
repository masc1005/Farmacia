<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/exibe.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<br><br>
<center>
<form method="POST" action="processoMed.php">
<h1>Qual <b>vírus</b> quer tratar?</h1><br>
<h3>(Exibiremos medicamentos)</h3>


    Pesquisar: <input type="text" name="medicamento" placeholder="PESQUISAR">
    <input type="submit" id="busca" value="ENVIAR">
</form>
<br><br>
<a id="busca" href="index.php">Retornar</a>
</center>
    <script src="../view/js/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
</body>
</html>