<?php
require 'Automovil.php';

// Crear dos Automoviles diferentes
$auto1 = new Automovil("Blanco", "Nissan", 4, false);
$auto2 = new Automovil("Gris", "Chevrolet", 5, true);

// Mostrar informacion
echo "<h2>Informacion del Automovil 1</h2>";
echo $auto1->mostrarDatos();

echo "<h2>Informacion del Automovil 2</h2>";
echo $auto2->mostrarDatos();
?>