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
    <h1 class="text-center">Vírus</h1>
    <hr/>
    <?php
    
    include '../model/conex.php';//buscando arquivo da conexão

    $getCon = getCon();//instanciando conexão

    $virs = $_POST['virus'];//buscando parametro  
    
    
        //$query = $getCon->prepare("SELECT * FROM virus WHERE remedio = :reme");//criando query de consulta

        $query = $getCon->prepare("SELECT a.idvir, a.nomeC, a.nomeP, a.periodI, b.idmed, b.nomeV, b.virus
        FROM virus a INNER JOIN medicamentos b ON ( a.remedio = b.nomeV ) WHERE a.remedio = :reme");
        
        $query->bindValue(":reme" , $virs);

        $query->execute();

        $result = $query->fetchAll();//convertendo querry em string
        

        foreach($result as $value){//exibindo valores do banco de dados
                echo '<div class="text-center text-justify">';
                echo '<br>';
                echo "Nome Científico: ".$value['nomeC']."<br>";
                echo "Nome Popular: " .$value['nomeP']."<br>";
                echo "Perdiodo de Incubação: " .$value['periodI']."<br><br><br>";
                echo "<a id=busca href=busca-Med.php>Deseja se tratar?</a><br>";
                echo"<hr/><br>";
                echo '</div>';
                
            }
            echo "<a id=busca href=busca-Vir.php>Ou Retornar?</a><br><br>";4

?>
    </form>

    <script src="../view/js/jquery-3.4.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
</body>
</html>