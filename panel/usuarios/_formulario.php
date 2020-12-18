<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user-check"></i> Usuario: <b><?php echo $usuarioN['name'] ?></b></h3>
        </div>
            <div class="card-body">
            <form action="" method="POST" role="form">
                <legend></legend>
                <div class="form-group">
                        <label for="my-input">Nombre</label>
                        <input id="my-input" value="<?php echo $usuarioN['name'] ?>" class="form-control" type="text" name="name">
                </div>

                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Nivel de Permiso</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><b> <?php echo $usuarioN['permission'] ?></b></label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Seleccionar...</option>
                            <option value="visitor">Visitante</option>
                            <option value="member">Miembro</option>
                            <option value="operator">Operador</option>
                        </select>
                    </div>  
            </form>

                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid">
                    </div>
                    <button type="submit" class="btn btn-primary my-1">Guardar</button>
                <a href="index.php" type="submit" class="btn btn-danger">Cerrar</a>
            </form>
            </div>
    </div>

</div>

<!-- "visitor", "member", "operator" -->