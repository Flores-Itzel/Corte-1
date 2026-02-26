<?php
class Producto {
    public $nombre;
    public $precio;
    public $categoria;
    public $stock;
    
    public function __construct($nombre, $precio, $categoria, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->stock = $stock;
    }
    
    public function aplicarDescuento($porcentaje) {
        $this->precio = $this->precio - ($this->precio * $porcentaje / 100);
    }
    
    public function estaDisponible() {
        return $this->stock > 0;
    }
    
    public function mostrarInfo() {
        return "Producto: " . $this->nombre .
               " | Precio: $" . $this->precio .
               " | Categoría: " . $this->categoria .
               " | Stock: " . $this->stock;
    }
}

$producto1 = new Producto("Laptop", 15000, "Electrónica", 5);
$producto2 = new Producto("Mouse", 300, "Accesorios", 0);
$producto3 = new Producto("Cuaderno", 50, "Papelería", 20);

// Aplicar descuento al primero
$producto1->aplicarDescuento(10);

// Mostrar información
echo "<h2>Productos</h2>";
echo "<p>" . $producto1->mostrarInfo() . "</p>";
echo "<p>" . $producto2->mostrarInfo() . "</p>";
echo "<p>" . $producto3->mostrarInfo() . "</p>";
