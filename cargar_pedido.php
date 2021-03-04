<?php
include ('middlewares/session.php');
include ("conexion.php");

$cliente=$_POST["cliente"];
$importe=$_POST["importe"];
$time=time();
$imagen=strval($time).'.'.end(explode("/", $_FILES['imagen']['type']));
$id=$_SESSION['id'];

move_uploaded_file($_FILES['imagen']['tmp_name'], 'images/'.$imagen);

mysqli_query(con(), "INSERT INTO pedidos (cliente,importe,estado,img_remito,id_user) VALUES ('$cliente','$importe','procesando','$imagen','$id')");

header("location: mostrar_contenido.php");
?>