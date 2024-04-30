<?php
class AldeanoChino extends Aldeano 
{
    public $bonus;
    public $nombreAldeano;
    public $imagen;
    public function __construct()
    {
        $this->bonus=0;
        $this->nombreAldeano= "Aldeano Chino";
        $this->imagen= "";
    }
    public function getBonus(){
        echo"Cantidad de Bonus=".$this->bonus;
       
    }
    
    public function recolectar($reco): void {
        $tiempoRecoleccion = ceil($reco->getAlimento() / $this->velocidadRecoleccion);
        echo "Recolecté todo el alimento en $tiempoRecoleccion minutos.";
}


}