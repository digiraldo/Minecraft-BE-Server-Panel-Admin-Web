<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
    header("location: ../../");
}

require 'editar.php';

?>

<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alertas</title>
    <?php include "../includes/scripts.php" ?>

</head>

<body>
<div class="container-fluid">
<div class="card text-white bg-dark">
<div class="card-body">
<h5 class="card-title">
<!-- <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/<?php echo $data[17]['btn'] ?>' />">
<img class="rounded-circle" width="30px" height="30px" src="../includes/img/<?php echo $data[17]['btn'] ?>" /></a> -->
<p><i class="fas fa-tasks fa-lg" style="color: #ff922b;"></i>  Editar: <b>Alertas</b></p>

<a href="index.php" type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
<span aria-hidden="true"><i class="fas fa-window-close"></i></span>
</a>
</h5>
<div class="section">
<table id="tablaRoles" class="table table-striped table-bordered" style="width:100%">

<tbody>
<tr>
    <form method="POST" role="form" enctype="multipart/form-data">
    <th width="3%" scope="col" class="text-white">1</th>
    <td>
        <div class="form-group">
            <div class="col-auto">
                <label class="text-white" for="name">Alerta Tablero 1</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $data[20]['logo']; ?></div>
                    </div>
                    <div class="col-md-3">
                    <select class="custom-select" id="type" name="type">
                        <option value="<?php echo $data[20]['type']; ?>" selected>Seleccionar tipo...</option>
                        <option value="1" style="color: #009B00;"><b>Éxito</b></option>
                        <option value="2" style="color: #2E86C1;"><b>Información</b></option>
                        <option value="3" style="color: #F39C12;">Advertencia</option>
                        <option value="4" style="color: #C41300;">Error</option>
                    </select>
                    </div>
                    <button name="accion" type="submit" value="btnType" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar tipo"><i class="fas fa-save"></i></button>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Título:</div>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data[20]['name']; ?>">
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="name"></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Texto:</div>
                    </div>
                    <textarea type="text" class="form-control" id="txt" name="txt" value="<?php echo $data[20]['txt']; ?>"></textarea>
                </div>
                <small id="alertaHelpBlock" class="form-text text-muted">
                <?php echo $data[20]['logo']; ?>  <b><?php echo $data[20]['name']; ?>:</b>  <?php echo $data[20]['txt']; ?>
                </small>
            </div>

            <div class="custom-control text-white custom-switch custom-switch-md">
                <input type="checkbox" class="custom-control-input" name="Alerta" id="Alerta" <?php echo $data[20]['btn']; ?>>
                <label class="custom-control-label" for="Alerta"> <?php echo ' ' . $data[20]['icon'] . ' ' . $data[20]['spain']; ?></label>
                <button name="accion" type="submit" value="btnAlerta" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
            </div>
        </div>
    </td>
    <th width="9%" scope="col">
        <button name="accion" value="guaralerta" type="submit" type="button" class="btn btn-info btn-sm badge-pill"><i class="fas fa-save"></i></button>
        <button name="accion" value="elimalerta" type="submit" type="button" class="btn btn-danger btn-sm badge-pill"><i class="fas fa-trash-alt"></i></button>
    </th>
    </form>
</tr>
<tr>
    <form method="POST" role="form" enctype="multipart/form-data">
    <th width="3%" scope="col" class="text-white">2</th>
    <td>
        <div class="form-group">
            <div class="col-auto">
                <label class="text-white" for="name">Alerta Tablero 2</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $data[21]['logo']; ?></div>
                    </div>
                    <div class="col-md-3">
                    <select class="custom-select" id="type0" name="type0">
                        <option value="<?php echo $data[21]['type']; ?>" selected>Seleccionar tipo...</option>
                        <option value="1" style="color: #009B00;"><b>Éxito</b></option>
                        <option value="2" style="color: #2E86C1;"><b>Información</b></option>
                        <option value="3" style="color: #F39C12;">Advertencia</option>
                        <option value="4" style="color: #C41300;">Error</option>
                    </select>
                    </div>
                    <button name="accion" type="submit" value="btnType0" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar tipo"><i class="fas fa-save"></i></button>

                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Título:</div>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data[21]['name']; ?>">
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="name"></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Texto:</div>
                    </div>
                    <textarea type="text" class="form-control" id="txt" name="txt" value="<?php echo $data[21]['txt']; ?>"></textarea>
                </div>
                <small id="alerta0HelpBlock" class="form-text text-muted">
                <?php echo $data[21]['logo']; ?> <b><?php echo $data[21]['name']; ?>:</b>  <?php echo $data[21]['txt']; ?>
                </small>
            </div>
            <div class="custom-control text-white custom-switch custom-switch-md">
                <input type="checkbox" class="custom-control-input" name="Alerta0" id="Alerta0" <?php echo $data[21]['btn']; ?>>
                <label class="custom-control-label" for="Alerta0"> <?php echo ' ' . $data[21]['icon'] . ' ' . $data[21]['spain']; ?></label>
                <button name="accion" type="submit" value="btnAlerta0" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
            </div>
        </div>
    </td>
    <th width="9%" scope="col">
        <button name="accion" value="guaralerta0" type="submit" type="button" class="btn btn-info btn-sm badge-pill"><i class="fas fa-save"></i></button>
        <button name="accion" value="elimalerta0" type="submit" type="button" class="btn btn-danger btn-sm badge-pill"><i class="fas fa-trash-alt"></i></button>
    </th>
    </form>
</tr>


<tr>
    <form method="POST" role="form" enctype="multipart/form-data">
    <th width="3%" scope="col" class="text-white">3</th>
    <td>
        <div class="form-group">
            <div class="col-auto">
                <label class="text-white" for="name">Alerta Formulario de Registro</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><?php echo $data[22]['logo']; ?></div>
                    </div>
                    <div class="col-md-3">
                    <select class="custom-select" id="type1" name="type1">
                        <option value="<?php echo $data[22]['type']; ?>" selected>Seleccionar tipo...</option>
                        <option value="1" style="color: #009B00;"><b>Éxito</b></option>
                        <option value="2" style="color: #2E86C1;"><b>Información</b></option>
                        <option value="3" style="color: #F39C12;">Advertencia</option>
                        <option value="4" style="color: #C41300;">Error</option>
                    </select>
                    </div>
                    <button name="accion" type="submit" value="btnType1" class="btn btn-outline-light btn-sm" data-toggle="tooltip" data-placement="top" title="Guardar tipo"><i class="fas fa-save"></i></button>

                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Título:</div>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data[22]['name']; ?>">
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="name"></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Texto 1:</div>
                    </div>
                    
                    <textarea type="text" class="form-control" id="txt" name="txt" value="<?php echo $data[22]['txt']; ?>" rows="1"></textarea>
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="name"></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Texto 2:</div>
                    </div>
                    <textarea type="text" class="form-control" id="txt0" name="txt0" value="<?php echo $data[22]['txt0']; ?>" rows="1"></textarea>
                </div>
            </div>
            <div class="col-auto">
                <label class="sr-only" for="name"></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Texto 3:</div>
                    </div>
                    <textarea type="text" class="form-control" id="txt1" name="txt1" value="<?php echo $data[22]['txt1']; ?>" rows="1"></textarea>
                </div>
                <small id="alerta0HelpBlock" class="form-text text-<?php echo $data[22]['type0'] ?>">
                <?php echo $data[22]['logo']; ?> <b><?php echo $data[22]['name']; ?></b>
                </small>
                <small id="alerta1HelpBlock" class="form-text text-muted">
                <i class="fas fa-check fa-xs"></i>  <?php echo $data[22]['txt']; ?>
                </small>
                <small id="alerta2HelpBlock" class="form-text text-muted">
                <i class="fas fa-check fa-xs"></i>  <?php echo $data[22]['txt0']; ?>
                </small>
                <small id="alerta3HelpBlock" class="form-text text-muted">
                <i class="fas fa-check fa-xs"></i>  <?php echo $data[22]['txt1']; ?>
                </small>
            </div>


            <div class="custom-control text-white custom-switch custom-switch-md">
                <input type="checkbox" class="custom-control-input" name="Alerta1" id="Alerta1" <?php echo $data[22]['btn']; ?>>
                <label class="custom-control-label" for="Alerta1"> <?php echo ' ' . $data[22]['icon'] . ' ' . $data[22]['spain']; ?></label>
                <button name="accion" type="submit" value="btnAlerta1" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
            </div>
        </div>
    </td>
    <th width="9%" scope="col">
        <button name="accion" value="guaralerta1" type="submit" type="button" class="btn btn-info btn-sm badge-pill"><i class="fas fa-save"></i></button>
        <button name="accion" value="elimalerta1" type="submit" type="button" class="btn btn-danger btn-sm badge-pill"><i class="fas fa-trash-alt"></i></button>
    </th>
    </form>
</tr>


</tbody>
</table>
</div>
</div>
<a href="index.php" type="submit" class="btn btn-danger"><i class="fas fa-window-close"></i> Cerrar</a>
</div>
</div>
<?php include '../includes/footer.php' ?>
</body>

</html>