<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$grupo = $_POST['grupo'];
$comite = $_POST['comite'];
$mail = $_POST['mail'];
$pais = $_POST['pais'];
$numero = $_POST['numero'];

$consulta = $con->query("SELECT * FROM datos WHERE matricula = $matricula");

$number = mysqli_num_rows($consulta);
if ($number >= 1 ) {
  echo "Lo sentimos, ya estás registrado):";
}else{
  $query = $con->query("INSERT INTO datos VALUES('$nombre', '$matricula', '$grupo', '$comite', '$mail', '$pais', '$numero')");
  if ($query) {
    echo "¡Te has registrado con éxito!";
  }else{
    echo "Ha ocurrido un error):";
  }
}
?>
