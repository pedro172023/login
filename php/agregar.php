<?php

if(!empty($_POST)){
	if(isset($_POST["mnombre"]) &&isset($_POST["mdireccion"]) &&isset($_POST["mtelefono"]) &&isset($_POST["mcorreo"]) &&isset($_POST["medad"])){
			include "conexion.php";
			$sql = "insert into contactos(nombre,direccion,telefono,correo,edad) value (\"$_POST[mnombre]\",\"$_POST[mdireccion]\",\"$_POST[mtelefono]\",\"$_POST[mcorreo]\",\"$_POST[medad]\")";
			$query = $con->query($sql);
		}
}
?>
