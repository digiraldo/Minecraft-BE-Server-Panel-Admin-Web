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
<title><?php echo $data[18]['name']; ?></title>
<?php include "../includes/scripts.php" ?>

</head>

<body>
<div class="container-fluid">



<div class="container">

<div class="card text-white bg-dark">
<div class="card-body">
<h5 class="card-title">
<a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/<?php echo $data[17]['btn'] ?>' />">
<img class="rounded-circle" width="30px" height="30px" src="../includes/img/<?php echo $data[17]['btn'] ?>" /></a>
Editar: <b><?php echo $data[18]['name']; ?></b>

    <div class="custom-control custom-switch custom-switch-md">
        <form method="POST" role="form" enctype="multipart/form-data">
        <input type="checkbox" class="custom-control-input" name="UsarRegla" id="UsarRegla" <?php echo $data[19]['btn']; ?>>
        <label class="custom-control-label" for="UsarRegla"> <?php echo ' '.$data[19]['icon'].' '.$data[19]['spain']; ?></label>
        <button name="accion" type="submit" value="btnUsarRegla" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
        </form>
    </div>

<a href="index.php" type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
    <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
</a>
</h5>
<div class="section">
<table id="tablaRoles" class="table table-striped table-bordered" style="width:100%">

<tbody>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">#</th>
<td>


<div class="col-auto">
    <label class="sr-only" for="name"></label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <div class="input-group-text">Título:</div>
        </div>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $data[18]['name']; ?>">
    </div>
    <small id="nameHelpBlock" class="form-text text-white">
            <?php echo 'Título:' . ' ' . $data[18]['name']; ?>
    </small>
</div>
 
</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="name" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>    
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" class="text-white" width="3%" scope="col">1</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data']; ?>" class="form-control" id="data" name="data" rows="1"></textarea>
<small id="dataHelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data']; ?>
</small>
</div>
</td>

<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>   
</tr>
<tr>
<form action="reglas.php" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">2</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data0']; ?>" class="form-control" id="data0" name="data0" rows="1"></textarea>
<small id="data0HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data0']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data0" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">3</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data1'];?>" class="form-control" id="data1" name="data1" rows="1"></textarea>
<small id="data1HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data1']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data1" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>    
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">4</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data2']; ?>" class="form-control" id="data2" name="data2" rows="1"></textarea>
<small id="data2HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data2']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data2" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">5</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data3']; ?>" class="form-control" id="data3" name="data3" rows="1"></textarea>
<small id="data3HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data3']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data3" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">6</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data4']; ?>" class="form-control" id="data4" name="data4" rows="1"></textarea>
<small id="data4HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data4']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data4" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">7</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data5']; ?>" class="form-control" id="data5" name="data5" rows="1"></textarea>
<small id="data5HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data5']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data5" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">8</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data6']; ?>" class="form-control" id="data6" name="data6" rows="1"></textarea>
<small id="data6HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data6']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data6" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">9</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data7']; ?>" class="form-control" id="data7" name="data7" rows="1"></textarea>
<small id="data7HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data7']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data7" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">10</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data8']; ?>" class="form-control" id="data8" name="data8" rows="1"></textarea>
<small id="data8HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data8']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data8" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">11</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data9']; ?>" class="form-control" id="data9" name="data9" rows="1"></textarea>
<small id="data9HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data9']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data9" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">12</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data10']; ?>" class="form-control" id="data10" name="data10" rows="1"></textarea>
<small id="data10HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data10']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data10" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">13</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data11']; ?>" class="form-control" id="data11" name="data11" rows="1"></textarea>
<small id="data11HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data11']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data11" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>
<tr>
<form action="" method="POST" role="form" enctype="multipart/form-data">
<th class="text-white" width="3%" scope="col">14</th>
<td>

<div class="form-group">
<textarea value="<?php echo $data[18]['data12']; ?>" class="form-control" id="data12" name="data12" rows="1"></textarea>
<small id="data12HelpBlock" class="form-text text-white">
<i class="fas fa-check fa-xs"></i> <?php echo $data[18]['data12']; ?>
</small>
</div>

</td>
<th width="9%" scope="col">
<button name="accion" value="btnReglas" type="submit" type="button" class="btn btn-info btn-sm"><i class="fas fa-save"></i></button>
<button name="accion" value="data12" type="submit" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
</th>
</form>
</tr>

</tbody>
</table>
</div>
<div class="card-title">
<b>Alerta de Reglas o Normas <?php echo $data[23]['spain']; ?></b>
    <div class="custom-control custom-switch custom-switch-md">
        <form method="POST" role="form" enctype="multipart/form-data">
        <input type="checkbox" class="custom-control-input" name="UsarRegla0" id="UsarRegla0" <?php echo $data[23]['btn']; ?>>
        <label class="custom-control-label" for="UsarRegla0"> <?php echo ' '.$data[23]['icon'].' '.$data[23]['spain']; ?></label>
        <button name="accion" type="submit" value="btnUsarRegla0" class="btn btn-outline-light btn-sm badge-pill" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fas fa-save"></i></button>
        </form>
    </div>
</div>
</div>

<a href="index.php" type="submit" class="btn btn-danger"><i class="fas fa-window-close"></i> Cerrar</a>
</div>
</div>

</div>

<?php include '../includes/footer.php' ?>
</body>

</html>