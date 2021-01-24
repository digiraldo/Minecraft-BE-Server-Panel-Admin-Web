<?php 
include "../includes/footer.php";
//include "../includes/scripts.php";
//require __DIR__.'/agregar.php';

?>

<!-- Modal -->
<div class="modal fade" id="modalAdmin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAdminLabel"><i class="fas fa-user-plus"></i> Añadir Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- Formulario -->    
<form action="" method="POST" role="form" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputUser">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="inputUser">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword">Contraseña</label>
      <input type="password" name="contrasena" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCountri">Pais</label>
      <input type="text" name="pais" class="form-control" id="inputCountri">
    </div>
    <div class="form-group col-md-7">
      <label for="inputCity">Ciudad</label>
      <input type="text" name="ciudad" class="form-control" id="inputCity">
    </div>
  </div>
  <div class="form-row"> 
    <div class="form-group col-md-8">
      <label for="inputGamertag">Gamertag</label>
      <select id="inputGamertag" name="gamertag" class="form-control">
        <option value="Gamertag" selected>Seleccionar...</option>
        <option value="Gamertag 1">Gamertag 1</option>
        <option value="Gamertag 2">Gamertag 2</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputRol">Rol</label>
      <select id="inputRol" name="rol" class="form-control">
        <option selected>Seleccionar...</option>
        <option value="Administrador">Administrador</option>
        <option value="Editor">Editor</option>
      </select>
    </div>
  </div>
  <div class="form-row"> 
    <div class="form-group col-md-6">
      <label for="inputContacto">Contacto</label>
      <input type="text" name="contacto" class="form-control" id="inputContacto">
    </div>
  </div>
</form>
<!-- Fin formulario --> 

</div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cancelar</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Añadir</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->