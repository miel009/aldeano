<?php
class Arbusto
{
    private $cantidadAlimento;

    public function __construct() {
        // Código para inicializar las propiedades del objeto
        $this->cantidadAlimento = 125;
        
        // ... (más asignaciones)
      }

    public function getAlimento()
    {   
        return $this->cantidadAlimento;
        //devuelve un entero con la cantidad total de comida que posee dicho arbusto
    }
}