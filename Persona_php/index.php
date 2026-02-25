<?php 
require 'persona.php'; // Incluimos la clase Persona 
 
// Crear instancia de Persona 
$persona1 = new persona("Carlos", 25, "ING Informatica", "Estudiante", "Mexicano"); 
 
// Mostrar información de la persona usando el método presentarse() 
echo "<h2>Datos de la persona</h2>"; 
echo "<p>" . $persona1->presentarse() . "</p>"; 
 
// Modificar la ocupación usando $this-> 
echo "<p>" . $persona1->cambiarOcupacion("Desarrollador Web") . "</p>"; 
 
// Mostrar información actualizada 
echo "<p>" . $persona1->presentarse() . "</p>"; 
?> 