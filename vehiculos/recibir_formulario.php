<?php
include('clasedb.php');

extract($_REQUEST);

$db=new clasedb();
$con=$db->conectar();

$sql="INSERT INTO vehiculos(marca,modelo,placa,num_puertas,num_caucho) VALUES('".$marca."','".$modelo."','".$placa."','".$num_puertas."','".$num_caucho."')";

$resultado=mysqli_query($con,$sql);
 

?>
 
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	
<?php
if ($resultado) {
	?>
	<b>Registro ingresado ---> <a href="index.php">Volver</a></b>
	<?php
}else{
	?>
	<b>Registro no ingresado ---> <a href="index.php">Volver</a></b>
	<?php
}
?>
</body>
</html>