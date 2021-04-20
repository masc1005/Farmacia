<?php

    include '../model/conex.php';
    include_once '../model/Medic.php';

    //----------------------------------------------------------------------------------------------

    $conex = getCon();//instanciando conexão
    $med = new Medicamentos();

    //----------------------------------------------------------------------------------------------

    //buscando parametros 
    $nvenda = $_POST['nvenda']; 
    $ca     = $_POST['ca'];
    $virus  = $_POST['virus'];
    $obs    = $_POST['obs'];

    //----------------------------------------------------------------------------------------------


    $med   ->  setNomeVenda($nvenda);
    $med   ->  setCompostoAt($ca);
    $med   ->  setVirus($virus);
    $med   ->  setObser($obs);

    //----------------------------------------------------------------------------------------------

    $nvenda  =      $med ->      getNomeVenda();
    $ca      =      $med ->      getCompostoAt();
    $virus   =      $med ->      getVirus();
    $obs     =      $med ->      getObser();

    //----------------------------------------------------------------------------------------------

    $sql = 'INSERT INTO medicamentos (nomeV,compA,virus,obs) VALUES (?,?,?,?)'; //inserindo valores 

    $stmt = $conex -> prepare($sql);
    
    //inserindo valores atraves de parametros
    $stmt -> bindParam(1,$nvenda);
    $stmt -> bindParam(2,$ca);
    $stmt -> bindParam(3,$virus);
    $stmt -> bindParam(4,$obs);

    if($stmt->execute()){
        header ('location: ../view/index.php');//redirecionamento para pagina inicial
    }else{
        echo "errooooe!";
    }
?>