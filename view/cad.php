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
        <form method="POST" action="../control/inse-med.php">
        <h1>Cadastro Medicamento</h1>
        <center>
        <input id="text" type="text" name="nvenda" placeholder="Nome de Venda" required><br><br>
        <input id="text" type="text" name="ca" placeholder="Composto Ativo" required><br><br>
        <input id="text" type="text" name="virus" placeholder="virus" required><br><br>
        <input id="text" type="text" name="obs" placeholder="Obs" ><br><br>
        <a id="voltar" href="index.php">Voltar</a>
        <input id="busca" type="submit" value="Cadastrar">
    </center>
    </fieldset>
    </form>
</div>
</body>
</html>