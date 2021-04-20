<?php

    include '../model/conex.php';
    include_once '../model/Viru.php';

    $conex = getCon();//instanciando conexão
    $vir = new Virus();

    //----------------------------------------------------------------------------------------------

    //buscando parametros 
    $nomeC = $_POST['nomeC']; 
    $nomeP = $_POST['nomeP'];
    $pi = $_POST['periodI'];
    $rem = $_POST['remedio'];

    //----------------------------------------------------------------------------------------------


    
    //----------------------------------------------------------------------------------------------

    

    //----------------------------------------------------------------------------------------------



    $sql = 'INSERT INTO virus (nomeC,nomeP,periodI,remedio) VALUES (?,?,?,?)'; //inserindo valores 

    
    $stmt = $conex->prepare($sql);
    
    
    //inserindo valores atraves de parametros
    $stmt->bindParam(1,$nomeC);
    $stmt->bindParam(2,$nomeP);
    $stmt->bindParam(3,$pi);
    $stmt->bindParam(4,$rem);

    
    if($stmt->execute()){
        header ('location: ../view/index.php');//redirecionamento para pagina inicial
    }
    else{
        echo "errooooe!";
    }
?>