<?php

if(!empty($_POST)){
	if(isset($_POST["mnombre"]) &&isset($_POST["mdireccion"]) &&isset($_POST["mtelefono"]) &&isset($_POST["mcorreo"]) &&isset($_POST["medad"])){
			include "conexion.php";
			$sql = "update contactos set nombre=\"$_POST[mnombre]\",direccion=\"$_POST[mdireccion]\",telefono=\"$_POST[mtelefono]\",correo=\"$_POST[mcorreo]\",edad=\"$_POST[medad]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");</script>";
			}
	}
}
?>
