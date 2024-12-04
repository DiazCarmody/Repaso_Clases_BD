<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/formstyle.css">
	<title>insertar</title>
	<link rel="shortcut icon" href="imgs/title.jpg">
</head>
<body>
	<h2>Insertar</h2>
<div class="form-container">
	<form class="form" action="../logica/insert.php" method="POST" class="editar">
		<!-- en un input de tipo hidden(oculto) mando el id, el cual voy a utilizar después. Va oculto porque no hace falta que el usuario altere su valor-->
		<input class="input" type="hidden" name="id">
		<input class="input" type="text" name="nombre" required placeholder="nombre">
		<input class="input" type="text" name="apellido" required placeholder="apellido">
		<input class="input" type="number" name="edad" required placeholder="edad">
		<input class="input" type="submit" value="INSERTAR">
	</form>
</div>
</body>
</html>