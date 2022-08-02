<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

include 'partials/header.php';

require __DIR__.'/items.php';

if (!isset($_GET['id'])) {
    /* echo "No Encontrado"; */
    include "partials/no_encontrado.php";
    exit;
}
$itemId = $_GET['id'];

$item = getItemsById($itemId);
/* echo '<pre>'; var_dump($item); echo '</pre>'; */
if (!$item) {
    /* echo "No Encontrado"; */
    include "partials/no_encontrado.php";
    exit;
}


?>


<div class="card text-center text-white bg-dark">
  <div class="card-header">
    <h4><img class="rounded-circle" width="30px" height="30px" src="../includes/img/items/<?php echo $item['img']; ?>"> Item: <?php echo $item['es'] ?></h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <a scope="row" href="" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='../includes/img/items/<?php echo $item['img']; ?>' />">
        <img width="80px" height="80px" src="../includes/img/items/<?php echo $item['img']; ?>" />
        </a>
    </h5>
    <table class="table table-dark table-striped table-bordered display">
  <tbody>
    <tr>
      <th scope="row">English:</th>
      <td><?php echo $item['en'] ?></td>
    </tr>
    <tr>
      <th scope="row">Español:</th>
      <td><?php echo $item['es'] ?></td>
    </tr>
    <tr>
      <th scope="row">Clase:</th>
      <td><?php echo $item['class'] ?></td>
    </tr>
    <tr>
      <th scope="row">Id:</th>
      <td><?php echo $item['id'] ?></td>
    </tr>
    <tr>
      <th scope="row">Id Minecraft:</th>
      <td><?php echo $item['idm'] ?></td>
    </tr>
    <tr>
      <th scope="row">Minecraft Value:</th>
      <td><?php echo $item['data'] ?></td>
    </tr>
  </tbody>
</table>
<br>
    <a href="../items/" class="btn btn-primary"><i class="fa-solid fa-rectangle-xmark"></i> Cerrar</a>
    <a class="btn btn-secondary" href="update.php?id=<?php echo $item['id'] ?>"><i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
    <form style="display: inline-block" method="POST" action="delete.php">
        <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
        <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
    </form>
  </div>
  <div class="card-footer text-muted">
  <?php echo $item['id'] ?>
  </div>
</div>



<?php include 'partials/footer.php'; ?>