<?php
 abstract class Aldeano
{

    public $bonus;
    public $arbusto;
    public $velocidadRecoleccion=18; //18 unidades de alimento por minuto pa todos los aldeanos
    
    public function getBonus(){
        return $this->bonus;
    }
    
    public function recolectar($reco){
        $this->velocidadRecoleccion=$reco;
           // indique cuánto tiempo le lleva al Aldeano recolectar todo el alimento del Arbusto
    }
}