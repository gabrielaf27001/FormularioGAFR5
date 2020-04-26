<?php 

extract ($_REQUEST);
$data=unserialize($data);
?><!DOCTYPE html>
<html>
<head>


	<title > Lista de Vehiculos </title>

</head>
<style>
table{
	border-spacing: 1px;
font-size: 19px; 
font-family: arial;


	padding:6px 13px;


}
	td{

background:#9966FF; 
margin: auto;

	}
	a{
		border-radius: 40px;
		padding: 6px;
		position: relative;
		font-color:black;
	
	}
i{
	font-color:black;

}
	</style>
	<script type="text/javascript">

		function eliminar(id){
			if (confirm("seguro desea eliminar el registro?"))
			{
				window.location="VehiculosControlador.php?operacion=eliminar&id="+id;

			}
		}
		</script>
	</head>
	<body>
		<table align="center">
		<a href="./index.php">Inicio</a>
			<i><center><a href ="vehiculos.html"> Registrar </a></center></i>
			<td> Nro  </td> <td>Marca </td>  <td> Modelo </td> <td>  Placa</td> <td color="#009090"> Numero de Puertas</td>  <td>  Numero de Caucho  </td>
			<td colspan="3"> Opciones </td>
				<?php $num=1;
				for ($i=0; $i< $filas; $i++)
				{
					echo "<tr>";
					?>
					<td><?=$num?></td>
					<?php for ($j =1; $j< $campos; $j++){

						?>
						<td><?=$data[$i][$j]?></td>
                      <?php 
					}
					?>

					<td><a href="VehiculosControlador.php?operacion=modificar&id_vehiculo=<?=$data[$i][0]?>">Modificar </a></td>
						<td><a href="javascript:eliminar(<?=$data[$i][0]?>)">Eliminar</a>
					</td>
					<?php
					$num++;
				}
				?>
			</table>
		</body>
	</html>