<?php
Class Medicamentos{
    private $nvenda;
    private $ca;
    private $virus;
    private $obs;

    //---------------------------------------------------------------------------------
    
    function getNomeVenda() {
        return $this->nvenda;
    }
    
    function getCompostoAt() {
      return $this->ca;
    }
    
    function getVirus() {
      return $this->virus;
    }

    function getObser() {
      return $this->obs;
    }
    

    //---------------------------------------------------------------------------------


    function setNomeVenda($nvenda) {
      $this->nvenda = $nvenda;
    }

    function setCompostoAt($ca) {
       $this->ca = $ca;
    }

    function setVirus($virus) {
        $this->virus = $virus;
    }
    
    function setObser($obs) {
      $this->obs = $obs;
    }
  }

?>