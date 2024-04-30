<?php
class BancoDePesca
{
    public $alimentoDisponible;

    public function __construct() {
        // Código para inicializar las propiedades del objeto
        $this->alimentoDisponible = 225;
        
        // ... (más asignaciones)
    }
    
    public function getAlimento()
    {
        return $this->alimentoDisponible;
    }
}
