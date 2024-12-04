<?php 
//establezco conexión a mi base de datos
$conect=mysqli_connect('','root','','repaso');
//el primer parámetro es el host, en este caso estoy trabajando de manera local, por lo tanto el host será 'localhost'. Yo lo dejé en blanco acá pero es lo mismo que poner localhost.
//el segundo parámetro es el usuario de la base de datos, el usuario por defecto es root y es el que estoy utilizando
//el tercer parámetro es la contraseña de datos. Está vacío porque no uso contraseña acá.
//el cuarto parámetro es el nombre de la base de datos a la cual quiero conectarme, en este caso es "repaso"
?>