
<?php
class Producto{//clase producto
//atributos
	private $nombre;
	private $precio;
	protected $proveedor;

    public function __construct($nombre ,$precio, $proveedor){
        
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->proveedor=$proveedor;
    }
    

public function total ($producto,$proveedor,$nombre){
    $cantidad=7;
 $precio=800;   
    $total = $precio * $cantidad;
    
    echo "<br> $total<br>";
 return $total;
}
    public function CalcDescuento($precio){     
        
        $descuento = 0;
        $total = 0;
        $descuento = ($precio / 100) * 30;
        $total = $precio - $descuento;
        return $total;
    
}
}
    $nombre = "Producto";
    $precio = 200;
    $proveedor = 'x'; //asignacion de valores

    $producto = new Producto($nombre,$precio,$proveedor);
    $total = $producto->total($nombre,$precio,$proveedor) . " $.";
    $total = $producto->CalcDescuento($precio) . " $.";
    echo "Precio con descuento = " .$total . "<br>";
    
        


    class Calculadora{// clase calculadora
            //atributos
            protected $n1;
           protected $n2;
            public function __construct( $n1 ,$n2 ){
            $this->n1=$n1;
            $this->n2=$n2;  }
    public function sumar ($n1,$n2){//$n1 y $n2 son los parametros que se pasan a la funcion
            $r=$n1+$n2;
            echo "<br>suma  $r";
            return $r; 
             }
        public function restar($n1,$n2){
        	$r=$n1-$n2;
        	echo "<br> resta $r";
            return $r;
        }
        
        public function multiplicar($n1,$n2) {
        // cuerpo de la funcion
            $r=$n1*$n2;
            echo  "<br> multiplicacion: $r</br>"; 
        return $r;}
    }
    $n1=9;
    $n2=9;
    $calc = new Calculadora(9,9);
    $calc->sumar($n1,$n2);
    $calc->restar($n1,$n2);
    $calc->multiplicar($n1,$n2);


class Sustancia
{
    private $func;
    private $masa;
    private $densidad;
    private $volumen;
    private $r;
    public function __construct($func)
    {
        $this->func = $func;
        $this->densidad=$densidad=9;
    }

      public function calcVolumen($masa,$densidad,$volumen){
return $this->masa / $this->densidad;
}
       public function calcDensidad($masa,$densidad,$volumen){
return $this->masa / $this->volumen;   
    }
    private function calcMasa($masa,$densidad,$volumen)
    {
        $r=$densidad * $volumen;
        echo '<br>Masa = '.$r;
    }

    public function b(Sustancia $a)
    {
        $a->func;
        
$densidad=7;
$masa=9;
$volumen=2; //asignacion de valores 
        
        $a->calcMasa($masa,$densidad,$volumen); // llamada funcion privada
    }
}
$densidad=3;
$masa=9;
$volumen=9;
$Sustancia = new Sustancia("Sustancia");

$Sustancia->b(new Sustancia($masa,$densidad,$volumen));
 echo "<br>Volumen : " . $Sustancia->calcVolumen($masa,$densidad,$volumen) . " <br/>";


    echo "densidad:" . $Sustancia->calcDensidad($masa,$densidad,$volumen) . "<br> ";


    ?>