<?php  
Class virus{
    private $nomeC;
    private $nomeP;
    private $pi;
    private $rem;

    //---------------------------------------------------------------------------------
    
    function getNomeCien() {
        return $this->nomeC;
    }
    
    function getNomePop() {
      return $this->nomeP;
    }
    
    function getPeriodI() {
      return $this->pi;
    }

    function getRemed() {
      return $this->rem;
    }

    //---------------------------------------------------------------------------------

    function setNomeCien($NomeC) {
        $this->nomeC = $nomeC;
    }
  
    function setNomePop($nomeP) {
        $this->NomeP = $nomeP;
    }
  
    function setPeriodI($pi) {
        $this->pi = $pi;
    }
      
    function setRemed($rem) {
        $this->rem = $rem;
    }
}    
?>