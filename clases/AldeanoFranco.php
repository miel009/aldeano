<?php
class AldeanoFranco extends Aldeano {


    public $bonus;
    public $nombreAldeano;
    public $imagen;
    public function __construct()
    {
        $this->bonus= 25;
        $this->nombreAldeano= "Aldeano Franco";
        $this->imagen="AldeanoFranco.jpg";
    }
    public function getBonus(){
        echo"Cantidad de Bonus=".$this->bonus."";
   
    }
    public function recolectar($reco): void {
        $tiempoRecoleccion = ceil($reco->getAlimento() / $this->velocidadRecoleccion);
        echo "Recolecté todo el alimento en $tiempoRecoleccion minutos.";
}

}