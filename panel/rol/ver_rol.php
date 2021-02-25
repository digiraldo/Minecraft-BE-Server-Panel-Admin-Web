<?php
session_start();
if ($_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
    header("location: ../../");
}

//include "../includes/scripts.php";
require __DIR__ . '/roles.php';

if (!isset($_GET['id'])) {
    include "../includes/rol_no_encontrado.php";
    exit;
}
$RolUser = $_GET['id'];
$RolU = obtenerRolPor_Id($RolUser);
//echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

if (!$RolU) {
    include "../includes/rol_no_encontrado.php";
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información Rol</title>
    <?php include "../includes/scripts.php" ?>
    <?php include "../includes/footer.php" ?>

</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/<?php echo $RolU['img']; ?>' />">
                        <img class="rounded-circle" width="30px" height="30px" src="../includes/img/perfil/<?php echo $RolU['img'] ?>" /></a>
                    Usuario: <b><?php echo $RolU['usuario'] ?></b>
                </h5>
                <div class="section">
                    <table id="tablaRoles" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <th scope="col">Nombre:</th>
                                <td><?php echo $RolU['nombre'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Usuario:</th>
                                <td><?php echo $RolU['usuario'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Rol:</th>
                                <td><?php echo $RolU['rol'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Gamertag:</th>
                                <td><?php echo $RolU['gamertag'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Contacto:</th>
                                <td><?php echo $RolU['contacto'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Pais:</th>
                                <td><?php echo $RolU['pais'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Ciudad:</th>
                                <td><?php echo $RolU['ciudad'] ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Fecha:</th>
                                <td><?php echo $RolU['fecha'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="index.php" type="submit" class="btn btn-danger">Cerrar</a>
        </div>
    </div>

</body>

</html>