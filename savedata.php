<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>corriendo php</title>
</head>
<body>
<?php
// Conectar a MySQL
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo '<p>Conectado a </p>';

// Conectar a la base de datos (concurso)
$db_selected = mysql_select_db('concurso', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
echo '<p>Conectado a la base de datos: concurso</p>';

// Creando variables que toman los valores de los input
$nombre = $_POST['nombre'];
echo '<p>Nombre y Apellido: '.$nombre.'</p>';

$cedula = $_POST['cedula'];
echo '<p>Cedula: '.$cedula.'</p>';

$nacionalidad = $_POST['nacionalidad'];
echo '<p>Nacionalidad: '.$nacionalidad.'</p>';

$fechadenac = $_POST['fechadenac'];
echo '<p>Fecha de nacimiento: '.$fechadenac.'</p>';

$titulo = $_POST['titulo'];
echo '<p>Titulo de la Obra: '.$titulo.'</p>';

$descripcion = $_POST['descripcion'];
echo '<p>Descripcion de la obra: '.$descripcion.'</p>';

$archivo = $_POST['archivo'];
echo '<p>Archivo: '.$archivo.'</p>';

// $file = rand(1000,100000)."-".$_FILES['archivo']['name'];
//     $file_loc = $_FILES['archivo']['tmp_name'];
//  $file_size = $_FILES['archivo']['size'];
//  $file_type = $_FILES['archivo']['type'];
//  $folder="uploads/";
 
//  // new file size in KB
//  $new_size = $file_size/1024;  
//  // new file size in KB
 
//  // make file name in lower case
//  $new_file_name = strtolower($file);
//  // make file name in lower case
 
//  $final_file=str_replace(' ','-',$new_file_name);

// Pasando los input al query
$query = "INSERT INTO concursantes (nombreapellido, cedula, nacionalidad, fechanac, titulo, descripcion, archivo) VALUES ('$nombre', '$cedula', '$nacionalidad', '$fechadenac', '$titulo', '$descripcion', '$archivo')";
$retval=mysql_query($query,$link);

 if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
// Cerrando conección
mysql_close($link);
echo 'cerrando conex';
?>
</body>
</html>