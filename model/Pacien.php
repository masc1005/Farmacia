<?php
Class paciente{
    private $nomepac;
    private $idadepac;
    private $infecpac;
    private $dosagempac;

    //---------------------------------------------------------------------------------
    
    function getNomePaciente() {
        return $this->nomepac;
    }
    
    function getIdadePaciente() {
      return $this->idadepac;
    }
    
    function getInfecPaciente() {
      return $this->infecpac;
    }

    function getDosagem() {
      return $this->dosagempac;
    }
    

    //---------------------------------------------------------------------------------


    function setNomePaciente($nomepac) {
      $this->nomepac = $nomepac;
    }

    function setIdadePaciente($idadepac) {
       $this->idadepac = $idadepac;
    }

    function setInfecPaciente($infecpac) {
        $this->infecpac = $infecpac;
    }
    
    function setDosagem($dosagempac) {
      $this->dosagempac = $dosagempac;
    }
  }

?>