<?php
include ('conect.php');
//en estas variables recibo los valores que me mandaron desde el formulario del archivo "form_update"
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$clase=$_POST['clase'];
//consulta de update, busca la fila donde el id sea igual al id que viene del form
$query2="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', edad='$edad' WHERE id=$id";
//ejecuto mi consulta
$ejecucion2=mysqli_query($conect, $query2);
//si variable ejecución es verdadero, me manda a la página principal
if($ejecucion2){
	header('Location:../index.php');
}
else {
	echo 'algo salió mal';
}
?>