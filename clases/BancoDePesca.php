<?php
class BancoDePesca
{
    public $alimentoDisponible;

    public function __construct() {
        
        $this->alimentoDisponible = 225;
        
       
    }
    
    public function getAlimento()
    {
        return $this->alimentoDisponible;
    }
}
