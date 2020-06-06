

<?php
class Vehiculos
{
    private $modelo;
    private $placa;
    private $marca;
    private $num_puertas;
    private $num_caucho;
    
    function __construct($modelo,$placa,$marca,$num_caucho,$num_puertas){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->placa=$placa;
        $this->num_puertas=$num_puertas;
        $this->num_caucho=$num_caucho;
    }
  public  function CalcAceite($aceite){
$litros=3;
$porcent=30;

$aceite=$litros*1000*$porcent/100;

return $aceite;
  }}

  class Moto extends Vehiculos{
    public $aceite;
    function __construct ($aceite){
        $this->aceite=$aceite;
  }
   }
