<?php
if(!empty($_GET)){
			include "conexion.php";
			$sql = "DELETE FROM contactos WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");</script>";
			}
}
?>
