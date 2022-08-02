
<?php 
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

require 'items.php';

$items = getItems();
/* echo '<pre>'; var_dump($items); echo '</pre>'; */
/*  */

include 'partials/header.php';
?>



    <table class="table table-dark table-striped table-bordered display"  id="myTable">

      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Img</th>
          <th scope="col">Item</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php if(!empty($items)){ $count = 0; foreach($items as $item){ $count++; ?>
        <?php $Pregu = 'Desea eliminar este Item del Inventario?';?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <th scope="row">
            <a href="#" scope="row" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='../includes/img/items/<?php echo $item['img']; ?>' />">
              <img class="rounded-circle" width="32px" height="32px" src="../includes/img/items/<?php echo $item['img']; ?>" alt="<?php echo $item['es'] ?>" />
            </a>
          </th>         
          <th scope="row">
            <a href="#" data-bs-toggle="tooltip"  data-bs-html="true" title="
              <i class='fas fa-language'></i>  <?php echo $item['en']; ?> <br>
              <i class='fas fa-spell-check'></i>  <?php echo $item['class']; ?> <br>
              <i class='fas fa-list-alt'></i>  <?php echo $item['id']; ?>
              "><?php echo $item['es']; ?>
            </a>
          </th>
          <th scope="row">
            <form method="POST" action="delete.php">
            <a href="view.php?id=<?php echo $item['id'] ?>" class="btn btn-warning btn-sm" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Ver"><i class="fa-solid fa-eye"></i></a>
            <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-info btn-sm" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Editar"><i class="fas fa-edit"></i></a>
            
              <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
              <button class="btn btn-danger btn-sm" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Eliminar" onclick="return confirm('<?php echo $Pregu ?>');"><i class="fa-solid fa-trash-can"></i></button>
                   <!-- .alert-primary, .alert-secondary, .alert-success, .alert-danger, .alert-warning, .alert-info, .alert-light, .alert-dark -->
            </form>
          </th>
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="6">No hay Item(s)</td></tr>
          <?php } ?>
      </tbody>
      <div class="text-center">
        <a class="btn btn-primary btn-sm" href="create.php"><i class="fa-solid fa-file-circle-plus"></i> Añadir Item <span class="badge bg-dark"><?php echo count($items); ?></span></a>
        <a class="btn btn-secondary btn-sm" href="../propiedades/"><i class="fa-solid fa-rectangle-xmark"></i> Cerrar</a>
      </div>
    </table>

    <?php include 'partials/footer.php'; ?>