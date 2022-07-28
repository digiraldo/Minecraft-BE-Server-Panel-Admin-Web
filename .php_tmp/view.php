<?php
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
    <h4><img class="rounded-circle" width="30px" height="30px" src="<?php echo $item['img']; ?>"> Item: <?php echo $item['es'] ?></h4>
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <a scope="row" href="" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='<?php echo $item['img']; ?>' />">
        <img width="80px" height="80px" src="<?php echo $item['img']; ?>" />
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
    <a href="../pag/" class="btn btn-primary">Cerrar</a>
  </div>
  <div class="card-footer text-muted">
  <?php echo $item['id'] ?>
  </div>
</div>



<?php include 'partials/footer.php'; ?>