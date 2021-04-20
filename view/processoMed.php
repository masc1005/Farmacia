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

    <form id="bus">
    <h1 class="text-center">Medicamentos</h1>
    <hr/>

    <?php
    include '../model/conex.php';//buscando arquivo da conexão

    $getCon = getCon();//instanciando conexão

    $mdc = $_POST['medicamento'];//buscando parametro

        $query = $getCon->prepare("SELECT * FROM medicamentos WHERE virus = :virus");//criando query de consulta
        $query->bindValue(":virus" , $mdc);
        $query->execute();

        $result = $query->fetchAll();//convertendo querry em string 
        

        foreach($result as $value){
                echo '<div class="text-center text-justify">';
                echo '<br>';
                echo "Nome: <b>".$value['nomeV']."</b><br>";
                echo "Composto Ativo: <b>" .$value['compA']."</b><br><br><br>";
                echo"<hr/><br>";
                echo '</div>';
            }
            echo "<br><br><a id=busca href=busca-Med.php>Retornar</a>";
    ?>

    </form>

    <script src="../view/js/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
</body>
</html>