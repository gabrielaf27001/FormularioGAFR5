<?php
extract($_REQUEST);
$data=unserialize($data);

?>
<!DOCTYPE html>

<html>
<head>
<title></title>
<style type="text/css">

table{
	border-color:blue;
	border-spacing: 30px;
	background:-webkit-linear-gradient(indigo,white,indigo);
	height: 300px;}
button {
    width: 90px
    height:90px;
    background: midnightblue;
    padding: 10px 15px;
    margin: 6px 10px;
    position: center;
    font-size: 17px;
   
    border-radius: 43px;
}


</style>
</head>
<body>
<br>
<form action="VehiculosControlador.php" method="post" name="formulario">


	<table align="center" width="170px">
	<center>
			<strong> Editar Vehiculo</strong>
	<td>
		<b>Marca:</b>
			<input type="text" name="marca" id="marca" value="<?=$data[1]?>"> 
		
		
 				<b>Modelo:</b>
				<input type="text" name="modelo" id="modelo" value="<?=$data[2]?>">
		
				<b>Placa:</b>
				<input type="text" name="placa" id="placa"  value="<?=$data[3]?>">
			
		
<b> Numero de Puertas:</b>
	<input type="number" name="num_puertas" id="num_puertas" value="<?=$data[4]?>">
			
<b>Numero de Caucho:</b><input type="text" name="num_caucho" id="num_caucho" value="<?=$data[5]?>">
			
			
					<input type="hidden" name="id_vehiculo" value="<?=$data[0]?>">

					<input type="hidden" name="operacion" value="actualizar">
				
            <button onclick>Enviar</button>
</td>
			
			</center>
			</table>
		</form>
</body>  
</html>