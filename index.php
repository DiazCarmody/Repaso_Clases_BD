<?php 
include('./logica/conect.php');
//consulta que selecciona todo de la tabla usuarios
$query="SELECT * FROM usuarios WHERE 1";
//ejecuto mi consulta
$ejecucion=mysqli_query($conect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Repaso</title>
	<link rel="stylesheet" type="text/css" href="./css/stylez.css">
	<link rel="shortcut icon" href="imgs/title.jpg">
</head>
<body class="bodies">
	<center><h1>Título genérico</h1></center>
		<div class="container">
			<center><table class="tabla">
				<thead>
					<tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th></th><th></th></tr>
				</thead>
				<!--en un while, creo la función "$array", que almacena los datos de la consulta en un array-->
			<?php while($array=mysqli_fetch_array($ejecucion)){ 
				//mientras esto sea verdadero, se ejecuta?>
				<tr class="trtr">
					<td><?php echo $array ['nombre']?></td>
					<td><?php echo $array ['apellido']?></td>
					<td><?php echo $array ['edad']?></td>
					<td>
						<form method="POST" action="./vistas/form_update.php">
							<!--envío el id en un input oculto para utilizarlo en "form_update.php"-->
							<input type="hidden" name="id" value="<?php echo $array['id']; ?>">
							<button class="btn"><input class="btn1" type="submit" value="EDITAR"></button>
						</form>
					</td>
					<td>
						<form method="POST" action="./logica/delete.php">
							<!--envío el id en un input oculto para utilizarlo en "delete.php"-->
							<input type="hidden" name="id" value="<?php echo $array['id']; ?>">
							<button class="btn"><input class="btn1" type="submit" value="ELIMINAR"></button>
						</form>
					</td>
				</tr>
			<?php } ?>
				<tr>
					<!--esto me lleva al archivo "form_insertar", que contiene un formulario en el cual se colocan los datos a insertar-->
					<td><form method="POST" action="./vistas/form_insertar.php">
					<button class="btn3"><input class="btn1" type="submit" value="INSERTAR"></button>
					</form></td>
				</tr>

			</table>
		</center>
		</div>
</body>
</html>