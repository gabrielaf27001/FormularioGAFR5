<?php

include('clasedb.php');

extract($_REQUEST);
"USE vehiculos";

class VehiculosControlador 
{
public function eliminar(){
extract($_REQUEST);
$db=new clasedb();
$conex=$db->conectar();

$sql= "DELETE FROM vehiculos WHERE id=".$id;

$res=mysqli_query($conex,$sql);
if ($res){

	?>
	<script type="text/javascript">
		alert("REGISTRO ELIMINADO");
		window.location="VehiculosControlador.php?operacion=ind";
	</script>

<?php
}
else{
	?>
	<script type="text/javascript">
		
		alert("REGISTRO NO ELIMINADO");
		window.location="VehiculosControlador.php?operacion=ind";
	</script>
	<?php
}
	}

public function index()
{
$db=new clasedb();
$conex=$db-> conectar();
$sql="SELECT * FROM vehiculos";
$res=mysqli_query($conex,$sql);
$campos=mysqli_num_fields($res);
$filas=mysqli_num_rows($res);
$i=0;
$datos[]=array(); 

while($data=mysqli_fetch_array($res)){

	for($j=0; $j<$campos; $j++){
		$datos[$i][$j]=$data[$j];

	}
	$i++;
}
mysqli_close($conex);

header("Location: ind.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
return $this->data;
}

public function modificar(){
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();
	$sql = "SELECT * FROM vehiculos WHERE id=".$id_vehiculo;
	$res=mysqli_query($conex,$sql);
	$data=mysqli_fetch_array($res);

header("Location:editar.php?data=".serialize($data));
}



  public function actualizar()
  { 

    extract($_REQUEST);
    $db=new clasedb();
    $conex=$db->conectar();
	$sql= "SELECT * FROM vehiculos WHERE id <>'$id_vehiculo' AND placa='$placa'";

    $res=mysqli_query($conex,$sql);
    $cant=mysqli_num_rows($res);

    if ($cant>0){
      ?>
      <script type="text/javascript">
        alert("Placa del vehiculo ya Registrada");
        window.location="VehiculosControlador.php?operacion=ind";
      </script>
      <?php
    }else {

      $sql="UPDATE vehiculos SET marca='$marca',modelo='$modelo' ,placa='$placa' ,num_puertas='$num_puertas',num_caucho='$num_caucho'  WHERE id = '$id_vehiculo'";
		
      $res=mysqli_query($conex,$sql);

      if($res){
        ?>
    <script type="text/javascript">
          alert("REGISTRO MODIFICADO");
          window.location="VehiculosControlador.php?operacion=index";
        </script>
        <?php
      }else {
        ?>
      <script type="text/javascript">
          alert("ERROR AL MODIFICAR EL REGISTRO");
          window.location="VehiculosControlador.php?operacion=ind";
        </script>
        <?php
      }  }
  }

	static function controlador ($operacion){
$vehiculo=new VehiculosControlador();

switch ($operacion) {
	case 'index':
	$vehiculo->index();
	break;
	case 'registrar':
	$vehiculo->registrar();
	break;
		case 'guardar':
		$vehiculo->guardar();

		break;
		case 'modificar':
		$vehiculo->modificar();
		break;
		case 'actualizar':
		$vehiculo->actualizar();
		break;
		case 'eliminar':
		$vehiculo-> eliminar();
		break;

 	default:
 
?>
<script type ="text/javascript">
	//alert("No existe la ruta");
	window.location="VehiculosControlador.php?operacion=index";
	</script>
	<?php

		break;
}// Cierre del switch
}//cierre de la funcion controlador
	
}
VehiculosControlador::controlador($operacion);
?>