<html>
	<head>
		<title>CRUD BASICO CLOUD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>CRUD BASICO CLOUD</h2>
  <a data-toggle="modal" href="#newModal" class="btn btn-default">Agregar nuevo registro</a>
<br>
<br>
  <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" id="agregar">
  <div class="form-group">
    <label for="mnombre">Nombre</label>
    <input type="text" class="form-control" name="mnombre" required>
  </div>
  <div class="form-group">
    <label for="mdireccion">Direccion</label>
    <input type="text" class="form-control" name="mdireccion" required>
  </div>
  <div class="form-group">
    <label for="mtelefono">Telefono</label>
    <input type="text" class="form-control" name="mtelefono" required>
  </div>
  <div class="form-group">
    <label for="mcorreo">Correo</label>
    <input type="email" class="form-control" name="mcorreo" >
  </div>
  <div class="form-group">
    <label for="medad">Edad</label>
    		<input type="text" class="form-control" name="medad" >
  			</div>
  			<button type="submit" class="btn btn-default">Agregar</button>
				</form>
        </div>
      </div>
    </div>
  </div>
<div id="tabla"></div>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
function loadTabla(){
  $('#editModal').modal('hide');
  $.get("./php/tabla.php","",function(data){
    $("#tabla").html(data);
  })
}
loadTabla();
  $("#agregar").submit(function(e){
    e.preventDefault();
    $.post("./php/agregar.php",$("#agregar").serialize(),function(data){
    });
    $("#agregar")[0].reset();
    $('#newModal').modal('hide');
    loadTabla();
  });
</script>
	</body>
</html>
