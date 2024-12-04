<?php
include ('../logica/conect.php');
//en estas variables se almacenan los datos dados en el formulario del archivo "form_insertar" 
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
//consulta de insert
//el id, al ser autoincrementable, se deja en blanco al realizar la consulta(NULL).
$query_insertar="INSERT INTO usuarios(id, nombre, apellido, edad) VALUES ('','$nombre','$apellido','$edad')";
//ejecuto mi consulta
$ejecucion_insertar=mysqli_query($conect, $query_insertar);
//si la consulta se ejecuta, me redirije al archivo principal
if($ejecucion_insertar){
	header('Location:../index.php');
}
?>