<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>

<html>
<head>
	<title>Editando Personas</title>
</head>
<body>
<br>
<form action="PersonasControlador.php" method="post" name="formulario">
	<table>
		<tr>
			<td colspan="2"> Editar Personas:</td>
		</tr>
		<tr>
			<td>Nombres:</td><td><input type="text" name="nombres" id="nombres"
				title="Ingrese sus nombres" value="<?=$data[1]?>"> </td>
 
			</tr>
			<tr>

				<td>Apellidos:</td><td><input type="text" name="apellidos" id="apellidos" title="Ingrese sus apellidos"value="<?=$data[2]?>"></td>
			</tr>
			<tr>
				<td>Cedula:</td><td><input type="number" name="id" id="id" title="Ingrese su cedula" value="<?=$data[3]?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id_persona" value="<?=$data[0]?>">
					<input type="hidden" name="operacion" value="actualizar">
					<input type="submit" name="enviar" value="Enviar"></td>
				</tr>
			</table>
		</form>
</body>  
</html>