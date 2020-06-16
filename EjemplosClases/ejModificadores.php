<?php
class Vehiculo
{
    private $marca;
    public function mensaje(){
        
            
        echo "Ha entrado a la funcion ";

}
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }
}
$veh = new Vehiculo();
$veh->setMarca("Audi");
echo $veh->mensaje(); 


 class Auto
{
    protected $nombre;
    protected function mensaje(){
        echo "mensaje";
    }
}
class Audi extends Auto {
    public function mensaje(){
         return $this->mensaje();
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        print $this->nombre;
    }
}

abstract class Vehiculos{ 
    private $marca; 
    
    abstract public function mostrar(); 
    
    public function setColor($c) { 
        $this->m = $c; 
    } 
} 

class Mustang extends Vehiculos {
    public function mostrar() {
        echo "Ha entrado a la funcion ";
    }
}

$veh = new Mustang();
$veh->mostrar();
final class Marca{ 
    private $marca; 
    
   }
?>