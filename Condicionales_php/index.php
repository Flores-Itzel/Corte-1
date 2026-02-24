<?php 
// Definimos dos números para comparar 
$numero1 = 10; 
$numero2 = 20; 
  
// Estructura IF 
echo "<h2>Ejemplo con IF</h2>"; 
if ($numero1 < $numero2) { 
    echo "El número $numero1 es menor que $numero2"; 
} 
  
// Estructura IF-ELSE 
echo "<h2>Ejemplo con IF-ELSE</h2>"; 
if ($numero1 > $numero2) { 
    echo "El número $numero1 es mayor que $numero2"; 
} else { 
    echo "El número $numero1 NO es mayor que $numero2"; 
} 
  
// Estructura IF-ELSEIF-ELSE con Estaciones 
$temperatura = 5; 
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>"; 
  
if ($temperatura >= 35) { 
    echo "Verano extremo 🥵"; 
} elseif ($temperatura >= 25) { 
    echo "Verano 😊"; 
} elseif ($temperatura >= 15) {
    echo "Primavera 👌"; 
} elseif ($temperatura >=5) {
    echo "Otoño 🍂";
} elseif ($temperatura >=0) {
    echo "Invierno 🥶";
} else {
    echo "Invierno con heladas";
}
?> 