<?php
//mysqli_connect()
//la función mysqli_connect() es utilizada para establecer conexión a nuestra base de datos
/*'localhost'=servidor
'root'=usuario
''=contraseña
'BD'= base de datos*/
//ejemplo...
$conexion=mysqli_connect('localhost', 'root', '', 'BD');
//mysqli_query
//esta función la utilizamos para ejecutar una consulta sql.
//los parámetros requeridos son la variable de conexión y la variable que contenga la consulta.
//'alumnos' es una tabla de ejemplo.
//ejemplo:
$numero=2
$query="DELETE FROM alumnos WHERE id='$numero'";
$ejecucion=mysqli_query($conexion, $query);
//mysqli_fetch_array...
//se utiliza para almacenar los datos de una consulta en un array(arreglo, vector).
//el parámetro requerido es la función que ejecuta la consulta.
//ejemplificación...
$array=mysqli_fetch_array($ejecucion);
//header
//la función header la utilizamos para redireccionar hacia otro archivo.
//por ejemplo...
header('Location:./redireccion.php');
//array_push
//La función 'array_push' agrega valores al final del array, o sea, despúes de la última posición.
//los parámetros requeridos son el array al cual queremos agregar valores, y el/los valor/es que queremos agregar.
//ejemplo...
$array= array ("uno", "dos");
array_push($array, "tres", "cuatro");
print_r($array);
//PD: este archivo es para leerlo nada más, no lo ejecuten porque les va a dar error porque no existe la tabla alumnos.
?>