<?php
include ('../logica/conect.php');
//en esta variable recibo el id enviado desde el formulario del archivo "players.php"
$id=$_POST['id'];
//en esta consulta selecciono todo donde el id sea igual al id almacenado en la variable $id
$query1="SELECT * FROM usuarios WHERE id='$id'";
//ejecuto mi consulta
$ejecucion1=mysqli_query($conect, $query1);
//almaceno los datos de la consulta en un array
$array2=mysqli_fetch_array($ejecucion1);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
	<link rel="stylesheet" href="../css/formstyle.css">
	<link rel="shortcut icon" href="imgs/title.jpg">
</head>
<body>
	<h2>Actualizar</h2>
<div class="form-container">
	<form action="../logica/update.php" method="POST" class="editar">
		<!--envío el id en un input oculto para utilizarlo en update.php-->
		<input type="hidden" name="id" value="<?php echo $array2 ['id']; ?>">
		<input type="text" name="nombre" value="<?php echo $array2 ['nombre']; ?>">
		<input type="text" name="apellido" value="<?php echo $array2 ['apellido']; ?>">
		<input type="number" name="edad" value="<?php echo $array2 ['edad']; ?>">
		<input type="submit" value="EDITAR">
	</form>
</div>
</body>
</html>