
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

<h1>Nome do paciente:</h1>

<form method="POST" action="processoPac.php">
    Pesquisar:<input type="text" name="non" placeholder="PESQUISAR">
    <input type="submit" id="busca" value="ENVIAR">
</form>
<br><br>
<a id="busca" href="index.php">Retornar</a>
<center>
    <script src="../view/js/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
</body>
</html>