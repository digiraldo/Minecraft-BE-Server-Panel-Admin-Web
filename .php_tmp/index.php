
<?php 
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
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <th scope="row"><a scope="row" href="" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='<?php echo $item['img']; ?>' />">
                        <img class="rounded-circle" width="50px" height="50px" src="<?php echo $item['img']; ?>" /></a></th>         
          <th scope="row"><a href="# " data-bs-toggle="tooltip"  data-bs-html="true" title="
                        <i class='fas fa-language'></i>  <?php echo $item['en']; ?> <br>
                        <i class='fas fa-spell-check'></i>  <?php echo $item['class']; ?> <br>
                        <i class='fas fa-list-alt'></i>  <?php echo $item['id']; ?>
                        ">
                        <?php echo $item['es']; ?></a></th>
          <th scope="row">
            <a href="view.php?id=<?php echo $item['id'] ?>" class="btn btn-warning" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Ver"><i class="fa-solid fa-eye"></i></a>
            <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-info" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Editar"><i class="fas fa-edit"></i></a>
            <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Eliminar"><i class="fa-solid fa-trash-can"></i></a>
          </th>
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="6">No hay Item(s)</td></tr>
          <?php } ?>
      </tbody>
    </table>

    <?php include 'partials/footer.php'; ?>