<?php
include "conexion.php";
$user_id=null;
$sql1= "select * from contactos where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $contactos=$r;
  break;
}}
?>
<?php if($contactos!=null):?>
<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="mnombre">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $contactos->nombre; ?>" name="mnombre" required>
  </div>
  <div class="form-group">
    <label for="mdireccion">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $contactos->direccion; ?>" name="mdireccion" required>
  </div>
  <div class="form-group">
    <label for="mtelefono">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $contactos->telefono; ?>" name="mtelefono" required>
  </div>
  <div class="form-group">
    <label for="mcorreo">Correo</label>
    <input type="email" class="form-control" value="<?php echo $contactos->correo; ?>" name="mcorreo" >
  </div>
  <div class="form-group">
    <label for="phone">Edad</label>
    <input type="text" class="form-control" value="<?php echo $contactos->edad; ?>" name="medad" >
  </div>
<input type="hidden" name="id" value="<?php echo $contactos->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>
<?php else:?>
  <p class="alert alert-danger">Error: No se encuentra</p>
<?php endif;?>
