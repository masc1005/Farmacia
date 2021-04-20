<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    
    <div class="cad">
        <center>
        <img src="img/lg.png" width="175">
        <br><br><br>
    <center>
        <form method="POST" action="../control/inse-pac.php">
        <h1>Cadastro Paciente</h1>
        <center>
        <input id="text" type="text" name="nome" placeholder="Nome" required><br><br>
        <input id="text" type="text" name="idade" placeholder="Idade" required><br><br>
        <input id="text" type="text" name="infec" placeholder="Infecção" required><br><br>
        <input id="text" type="text" name="dosa" placeholder="Dosagem" ><br><br>
        <a id="voltar" href="index.php">Voltar</a>
        <input id="busca" type="submit" value="Cadastrar">
    </center>
    </form>
</div>
</body>
</html>