<?php 
echo "<h2>Números del 1 al 10 usando for</h2>"; 
for ($i = 1; $i <= 10; $i++) { 
echo "Número: $i <br>"; 
} 
?> 

<?php 
$numero = 5; // Puedes cambiar este valor o pedirlo con un formulario 
echo "<h2>Tabla de multiplicar del $numero</h2>"; 
for ($i = 1; $i <= 10; $i++) { 
echo "$numero x $i = " . ($numero * $i) . "<br>"; 
} 
?> 

<?php 
$nombres = array("Ana", "Carlos", "Beatriz", "Daniel", "Elena");  
echo "<h2>Lista de nombres:</h2>"; 
echo "<ul>"; 
  
for ($i = 0; $i < count($nombres); $i++) { 
    echo "<li>$nombres[$i]</li>"; 
} 
  
echo "</ul>"; 
?> 

<?php 
echo "<h2>Números pares del 2 al 20</h2>"; 
  
for ($i = 2; $i <= 20; $i += 2) { 
    echo "$i <br>"; 
} 
?> 

<?php
echo "<h2>Números del 10 al 1</h2>";

for ($i = 10; $i >= 1; $i--) {
    echo "Número: $i <br>";
}
?>
