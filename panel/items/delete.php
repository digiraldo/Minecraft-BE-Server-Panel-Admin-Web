<?php
include 'partials/header.php';

require __DIR__ . '/items.php';

/* echo '<pre>'; var_dump($_POST); echo '</pre>'; exit; */
/* echo '<pre>'; print_r($_POST); echo '</pre>'; exit; */

if (!isset($_POST['id'])) {
  /* echo "No Encontrado"; */
  include "partials/no_encontrado.php";
  exit;
}
$itemId = $_POST['id'];
deleteItem($itemId);


header("Location: index.php");
?>
