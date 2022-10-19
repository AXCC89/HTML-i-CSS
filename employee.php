<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

class Employee {
  //atributos
  private $nombre;
  private $apellido;
  private $sueldo;

  public function __construct($nombre,$apellido,$sueldo)
  {
     $this->nombre = $nombre;
     $this->apellido = $apellido;
     $this->sueldo = $sueldo;
  }
  public function initialize($nombre,$apellido,$sueldo)
  {
     $this->nombre = $nombre;
     $this->apellido = $apellido;
     $this->sueldo = $sueldo;
    
  }
  public function impuesto()
  {
      if ($this->sueldo > 6000) {
        echo 'La persona: '. $this->nombre .' paga impuestos.';
      } elseif ($this->sueldo <= 6000) {
        echo 'La persona: '. $this->nombre .' no paga impuestos.';
    } else {
        echo 'No funcionan los datos.'; 
    }
  }
  public function getNombre() {
    return $this->nombre; 
  }
}   
$employee = new Employee('Ana', 'Perez', 500);
print $employee->impuesto();
?>