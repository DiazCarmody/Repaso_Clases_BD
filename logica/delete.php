<?php
include ('../logica/conect.php');
//en esta variable se almacena el id que viene del form del archivo "index.php"
$id=$_POST['id'];
//con esta consulta borro la fila donde el id sea igual al id almacenado en la variable
$query_delete="DELETE FROM usuarios WHERE id='$id'";
//ejecuto la consulta
$ejecutar_delete=mysqli_query($conect, $query_delete);
//si se ejecuta la consulta, me lleva al archivo principal
if ($ejecutar_delete) {
	header('Location:../index.php');
}
?>