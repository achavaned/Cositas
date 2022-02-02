<?php
include("db.php");
$con=conectar();

$nombre=$_POST['nombre'];

$sql="INSERT INTO ppl VALUES('$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>