<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

include "../includes/scripts.php";

require __DIR__.'/usuarios.php';

    if (!isset($_GET['name'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$usuarioName = $_GET['name'];
$usuarioN = obtenerUsuarioPorName($usuarioName);
//echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

    if (!$usuarioN) {
        include "../includes/no_encontrado.php";
        exit;
    }


    // Obtener Items
    $jsonIt = file_get_contents(__DIR__ . '../../../config/items.json');
    $ItemsIn = json_decode($jsonIt, true);

    $txtSelUser = (isset($_POST['name'])) ? $_POST['name'] : "";
    $txtIdName = (isset($_POST['IdName'])) ? $_POST['IdName'] : "";
    $txtCantItem = (isset($_POST['CantItem'])) ? $_POST['CantItem'] : "";

    $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

    $give = "give";

    $screenIn = 'sudo -u username screen -Rd servername -X stuff "';
    $screenOut = '$(printf \'\r\')"';

    //$entregar = "$give $usuarioName $txtIdName $txtCantItem";

    //echo $entregar;
    //echo $txtSelUser;

    ///give gorobeta minecraft:brick 5

    // sudo -u username screen -Rd servername -X stuff "$entregar$(printf '\r')"

switch ($accion) {
    case 'btnDar':
        $entregar = "$give $txtSelUser $txtIdName $txtCantItem";
        $toti = "$screenIn$entregar $screenOut";
        shell_exec($toti);

        //echo $toti;

        //unset($_POST);
        //unset($_REQUEST);
        //header("Location: " . $_SERVER['PHP_SELF']);
        break;
}

if (!empty($usuarioN['xuid'])) {
    $iconUsu = ' <i class="fas fa-check-circle" style="color: green;"></i>';
} else {
    $iconUsu = ' <i class="fas fa-times-circle" style="color: red;"></i>';
}


/* if ($usuarioN['xuid']) {
    $iconUsu = '<i class="fas fa-check-circle" style="color: green;"></i>';
} else {
    $iconUsu = '<i class="fas fa-times-circle" style="color: red;"></i>';
} */


?>

<!doctype html>
<html lang="es">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información Usuario</title>
    

  </head>
  <body>


  <div class="container">
<div class="card text-white bg-dark">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-edit"></i> Usuario: <b><?php echo $usuarioN['name'] ?><?php echo $iconUsu ?> </b></h5>
        <div class="section">
        <table class="table table-dark table-striped table-bordered display" id="tablaItems">
            <thead>
                <tr>
                    <th scope="col">Img</th>
                    <th scope="col">Item</th>
                    <th scope="col">Cant</th>
                    <th scope="col">Dar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($ItemsIn as $item) : ?>
                <tr>
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    <td scope="row">
                        <a href="#" scope="row" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='../includes/img/items/<?php echo $item['img']; ?>' />">
                            <img class="rounded-circle" width="32px" height="32px" src="../includes/img/items/<?php echo $item['img']; ?>" alt="<?php echo $item['es'] ?>" />
                        </a>
                    </td>
                    <td>
                        <a href="#" data-bs-toggle="tooltip"  data-bs-html="true" title="
                        <i class='fas fa-language'></i>  <?php echo $item['en']; ?> <br>
                        <i class='fas fa-spell-check'></i>  <?php echo $item['class']; ?> <br>
                        <i class='fas fa-list-alt'></i>  <?php echo $item['id']; ?>
                        "><?php echo $item['es']; ?>
                        </a>
                    </td>
                    <td><input type="number" name="CantItem" id="CantItem"  min="1" max="64" class="form-control form-control-sm" placeholder="" style="width='1px'"></td>
                    <td>
                        <input type="hidden" name="name" value="<?php echo $usuarioN['name'] ?>">
                        <input type="hidden" name="IdName" value="<?php echo $item['id'] ?>">
                        <button name="accion" value="btnDar" type="submit" class="btn btn-success btn-sm" data-bs-toggle="button" data-toggle="tooltip" data-placement="top" title="Entregar"><i class="fas fa-gift"></i></button>
                    </td>
                    </form>
                </tr>
            <?php endforeach;; ?>
            </tbody>
        </table>
        
        </div>
    </div>
    <a href="index.php" type="submit" class="btn btn-danger">Cerrar</a>
</div>
</div>





  </body>
</html>