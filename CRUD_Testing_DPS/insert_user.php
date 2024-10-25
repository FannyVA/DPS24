<?php
include("connection.php");
$con = connection();

$id = $_POST['id_tester'];
$nombre = $_POST['nombre'];
$marca = $_POST['apellido'];
$precio = $_POST['edad'];


$sql = "INSERT INTO testers VALUES('$id_testers ,'$nombre','$apellido','$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
