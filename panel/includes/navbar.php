<?php
/*-------------------------
Autor: Didier Giraldo
Mail: disaned1@gmail.com
---------------------------*/

require '../usuarios/usuarios.php';
$usuarios = obtenerUsuarios();

require '../permisos/permisos.php';
$permisos = obtenerPermisos();

//$jsonPer = file_get_contents(__DIR__ . '../../permisos/permisos.php');
//$permisos = json_decode($jsonPer, true);

//require '../administradores/administradores.php';
//$roles = obtenerRol();

// $jsonwhi = file_get_contents(__DIR__ . '../../../servername/allowlist.json');
// $usrwhi = json_decode($jsonwhi, true);



$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$srvdat = json_decode($jsonString, true);

$archivos = scandir("../../servername/backups");
$num=0;
for ($i=2; $i<count($archivos); $i++) {
    $num++;
// $respaldos = $num; 
}

//echo $num;


$logs = scandir("../../servername/logs");
$numr=0;
for ($i=2; $i<count($logs); $i++)
{$numr++;
// $registros = $numr;
}


// echo $count."</br>";
// print_r($count);

// if (empty($permi)) {
//     $permisos = 0;
// } else {
//     $permisos = obtenerPermisos(); 
// }

?>

     
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="../includes/index.php"><img src="https://www.minecraft.net/etc.clientlibs/minecraft/clientlibs/main/resources/img/menu/menu-buy.gif" alt="" width="30" height="24" class="d-inline-block align-top" data-toggle="tooltip" data-placement="bottom" title="<i class='fas fa-home'></i> Panel Minecraft Bedrock<br/><i class='fas fa-globe'></i> Servidor: <?php echo $srvdat[0]['spain']; ?>">
Panel 
<a href="../registros" class="nav-link" data-toggle="dropdown">
    <i class="far fa-bell"></i>
    <span class="badge badge-warning navbar-badge"><?php echo $newcont; ?></span>
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav me-auto mb-2 mb-lg-0">

<li class="<?php echo $active_tablero;?>">
<a class="nav-link" aria-current="page" href="../tablero" data-toggle="tooltip" data-placement="bottom" title="<?php echo $online; ?>/<?php echo $srvdat[6]['spain']; ?> Jugadores."><i class="fas fa-tachometer-alt"></i> Tablero<span class="badge badge-pill badge-danger"><?php echo $online; ?>/<?php echo $srvdat[6]['spain']; ?></span></a>
</li>

<?php if ($_SESSION['id_rol'] == 4) : ?>
<?php else : ?>

<li class="<?php echo $active_allowlist;?>">
<a class="nav-link" aria-current="page" href="../usuarios" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($usuarios); ?> Jugadores Agregados"><i class="fas fa-user"></i> Allowlist<span class="badge badge-pill badge-primary"><?php echo count($usuarios); ?></span></a>
</li>

<?php if ($_SESSION['id_rol'] == 3) : ?>
<?php else : ?>
<li class="<?php echo $active_permisos;?>">
<a class="nav-link" aria-current="page" href="../permisos" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($permisos); ?> Permisos"><i class="fas fa-user-edit"></i> Permisos<span class="badge badge-pill badge-warning"><?php echo count($permisos); ?></span></a>
</li>

<li class="<?php echo $active_admin;?>">
<a class="nav-link" aria-current="page" href="../rol" data-toggle="tooltip" data-placement="bottom" title="<?php echo count($rolesJ); ?> Roles"><i class="fas fa-user-tie"></i> Roles<span class="badge badge-pill badge-info"><?php echo count($rolesJ); ?></span></a>
</li>
<?php endif ?>

<li class="<?php echo $active_backups;?>">
<a class="nav-link" aria-current="page" href="../respaldos" data-toggle="tooltip" data-placement="bottom" title="<?php echo $num; ?> Respaldos"><i class="fas fa-archive"></i> Respaldos<span class="badge badge-pill badge-success"><?php echo $num; ?></span></a>
</li>

<li class="<?php echo $active_logs;?>">
<a class="nav-link" aria-current="page" href="../registros" data-toggle="tooltip" data-placement="bottom" title="<?php echo $numr; ?> Registros"><i class="fas fa-history"></i> Registros<span class="badge badge-pill badge-secondary"><?php echo $numr; ?></span></a>
</li>

<li class="<?php echo $active_mundo;?>">
<a class="nav-link" aria-current="page" href="../mundo"><i class="fas fa-globe"></i> Mundo</a>
</li>

<li class="<?php echo $active_propiedades;?>">
<a class="nav-link" aria-current="page" href="../propiedades"><i class="fas fa-cog"></i> Propiedades</a>
</li>

<?php endif ?>

</ul>
<div class="dropdown-divider"></div>
<ul class="navbar-nav ml-auto">
<!--        
<li><a href="mailto:didierandresgt@gmail.com" target='_blank' class="btn btn-primary" href="#" role="button"><i class="fas fa-tools"></i></a></li>
-->

<a class="navbar-brand" href="#" data-toggle="tooltip" data-placement="bottom" title="<img class='rounded-lg' width='90px'  src='../includes/img/perfil/<?php echo $_SESSION['img']; ?>' />"><img class="rounded-lg" src="../includes/img/perfil/<?php echo $_SESSION['img']; ?>" height="29" class="d-inline-block align-top" alt=""> </a>

<a class="navbar-brand" href="#" data-toggle="popover" data-placement="bottom" 
title="<img class='rounded-lg' width='180px'  src='../includes/img/perfil/<?php echo $_SESSION['img']; ?>' /><br>" 
data-content="<h5><?php echo (ucwords(strtolower($_SESSION['nombre']))); ?></h5><br>
<i class='fas fa-user-tag'></i> Usuario: <?php echo $_SESSION['user']; ?><br>
<i class='fas fa-gamepad'></i> Gamertag: <?php echo $_SESSION['gamertag']; ?><br>
<i class='fas fa-atlas'></i> País: <?php echo $_SESSION['country']; ?><br>
<i class='fas fa-city'></i> Ciudad: <?php echo $_SESSION['city']; ?><br>
<i class='fas fa-envelope'></i> <?php echo $_SESSION['contact'];?><br>
<i class='fas fa-user-edit'></i> Rol: <?php echo $_SESSION['rol'];?><br>
<i class='fas fa-calendar-alt'></i> Creado: <?php echo $_SESSION['date']; ?><br>
<a href='../rol/edit.php?id=<?php echo $_SESSION['idUser'] ?>' data-toggle='tooltip' data-placement='top' title='Editar' type='submit'><i class='fas fa-pencil-alt'></i> Editar</a><br>
" > <?php echo (ucwords(strtolower($_SESSION['user']))); ?></a>

<!-- 
<span>|</span>
-->        
<a class="btn btn-outline-light" href="../includes/salir.php" role="button" alt="Salir del sistema" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fas fa-sign-out-alt"></i></a>

</ul>

</div>
</div>
</nav>
