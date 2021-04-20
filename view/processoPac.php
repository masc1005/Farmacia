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
    <h1 class="text-center">Paciente</h1>
    <hr/>



    <?php
    include '../model/conex.php';//buscando arquivo da conexão

    $getCon = getCon();//instanciando conexão

    $noP = $_POST['non'];//buscando parametro


        $query = $getCon->prepare("SELECT a.idpac, a.nome, a.idade, a.infec, a.dosagem, b.idvir, b.remedio 
        FROM paciente a INNER JOIN virus b ON (a.infec = b.nomeP) WHERE a.nome = :no_paciente");
        
        $query->bindValue(":no_paciente" , $noP);
        
        $query->execute();
        
        $result = $query->fetchAll();//convertendo querry em string
        

        foreach($result as $value){//exibindo valores do banco de dados
                echo "<div class=text-center text-justify>";
                echo "<br>";
                echo "Nome: <b>" .$value['nome']."</b><br>";
                echo "Idade: <b>" .$value['idade']."</b><br>";
                echo "infecção: <b>" .$value['infec']."</b><br>";                     
                echo "Remédio: <b>" .$value['remedio']."</b><br>";
                echo "Dosagem: <b>" .$value['dosagem']."</b><br>";
                echo "<hr/><br>";
                echo "</div>";
            }
            echo "<a id=busca href=busca-Pac.php>Retornar</a><br><br>";
    
    ?>



    </form>

    <script src="../view/js/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
</body>
</html>