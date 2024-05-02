<?php
class Pesquero
{
    public $nombre;
    public $bancoDePesca;    



public function __construct()
    {   
        $this->bancoDePesca = new BancoDePesca;
        $this->nombre= "Pesquero Manuel";
        $this->imagen= "";
    }


    public function recolectar(){
        return $this->bancoDePesca->getAlimento();    
}

}
