CREATE DATABASE discriminacion;

USE discriminacion;

CREATE TABLE comentarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    comentario TEXT
);
<?php
$conn = new mysqli("localhost","root","","discriminacion");

if($conn->connect_error){
    die("Error de conexión");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Discriminación</title>
</head>
<body>

<h1>La Discriminación</h1>

<img src="https://via.placeholder.com/300" 

<p>La discriminación ocurre cuando una persona es tratada de forma injusta.</p>

<a href="causas.php">Causas</a> |
<a href="soluciones.php">Soluciones</a>

</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Causas</title>
</head>
<body>

<h1>Causas</h1>

<p>Los prejuicios y la falta de respeto son algunas causas de la discriminación.</p>

<a href="index.php">Inicio</a> |
<a href="soluciones.php">Soluciones</a>

</body>
</html

<!DOCTYPE html>
<html>
<head>
    <title>Soluciones</title>
</head>
<body>

<h1>Soluciones</h1>

<p>Respetar a los demás y promover la igualdad ayuda a evitar la discriminación.</p>

<form action="guardar.php" method="post">
    Nombre:
    <input type="text" name="nombre"><br><br>

    Comentario:
    <textarea name="comentario"></textarea><br><br>

    <input type="submit" value="Guardar">
</form>

<a href="index.php">Inicio</a> |
<a href="causas.php">Causas</a>

</body>
</html>
<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO comentarios(nombre,comentario)
VALUES('$nombre','$comentario')";

$conn->query($sql);

echo "Comentario guardado.";
?>
