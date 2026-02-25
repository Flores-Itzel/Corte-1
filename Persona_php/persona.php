<?php 
class Persona { 
    public $nombre; 
    public $edad; 
    public $estudio; 
    public $ocupacion;
    public $nacionalidad;
 
    // Constructor para inicializar atributos 
    public function __construct($nombre, $edad, $estudio, $ocupacion, $nacionalidad) { 
        $this->nombre = $nombre; 
        $this->edad = $edad; 
        $this->estudio = $estudio;
        $this->ocupacion = $ocupacion;
        $this->nacionalidad = $nacionalidad; 
    } 
 
    // Método que usa $this-> para acceder a los atributos 
    public function presentarse() { 
        return "Hola, mi nombre es $this->nombre, tengo $this->edad años, estudio $this->estudio, 
$this->ocupacion y soy $this->nacionalidad."; 
    } 
 
    // Método que usa $this-> para modificar un atributo 
    public function cambiarOcupacion($nuevaOcupacion) { 
        $this->ocupacion = $nuevaOcupacion; 
        return "Ahora mi ocupación es: $this->ocupacion"; 
    } 
} 
?> 