<?php
 abstract class Aldeano
{

    public $bonus;
    public $arbusto;
    public $velocidadRecoleccion=18; 
    public function getBonus(){
        return $this->bonus;
    }
    
    public function recolectar($reco){
        $this->velocidadRecoleccion=$reco;
          
    }
}