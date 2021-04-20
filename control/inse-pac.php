<?php

    include '../model/conex.php';
    include_once '../model/Pacien.php';

    //----------------------------------------------------------------------------------------------

    $conex = getCon();//instanciando conexão
    $paciente = new paciente();

    //----------------------------------------------------------------------------------------------

    //buscando parametros 
    $nome = $_POST['nome']; 
    $idade = $_POST['idade'];
    $infec = $_POST['infec'];
    $dos = $_POST['dosa'];

    //----------------------------------------------------------------------------------------------

    $paciente   ->  setNomePaciente($nome);
    $paciente   ->  setIdadePaciente($idade);
    $paciente   ->  setInfecPaciente($infec);
    $paciente   ->  setDosagem($dos);

    //----------------------------------------------------------------------------------------------

    $nome    =      $paciente->getNomePaciente();
    $idade   =      $paciente->getIdadePaciente();
    $infec   =      $paciente->getInfecPaciente();
    $dos     =      $paciente->getDosagem();

    //----------------------------------------------------------------------------------------------

    $sql = 'INSERT INTO paciente (nome,idade,infec,dosagem) VALUES (?,?,?,?)'; //inserindo valores 

    $stmt = $conex->prepare($sql);
    
    //inserindo valores atraves de parametros
    $stmt->bindParam(1,$nome);
    $stmt->bindParam(2,$idade);
    $stmt->bindParam(3,$infec);
    $stmt->bindParam(4,$dos);

    if($stmt->execute()){
        header ('location: ../view/index.php');//redirecionamento para pagina inicial
    }else{
        echo "errooooe!";
    }
?>