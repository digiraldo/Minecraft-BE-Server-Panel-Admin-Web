<?php

session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

include 'partials/header.php';

require __DIR__ . '/items.php';

if (!isset($_GET['id'])) {
  /* echo "No Encontrado"; */
  include "partials/no_encontrado.php";
  exit;
}
$itemId = $_GET['id'];

$item = getItemsById($itemId);
/* echo '$item'; echo '<br>'; echo '<pre>'; print_r($item); echo '</pre>'; */
if (!$item) {
  /* echo "No Encontrado"; */
  include "partials/no_encontrado.php";
  exit;
}

/* echo '<pre>'; var_dump($class); echo '</pre>'; */
/* echo '<pre>'; var_dump($_SERVER); echo '</pre>'; */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $item = updateItem($_POST, $itemId);
  /* echo 'POST'; echo '<br>'; echo '<pre>'; print_r($_POST); echo '</pre>'; */
  /* echo '<pre>'; var_dump(explode("~",$_POST["class"])); echo '</pre>'; */
  /* echo '$_FILES'; echo '<br>'; echo '<pre>'; print_r($_FILES); echo '</pre>'; exit; */
  /* echo '$_FILES'; echo '<br>'; echo '<pre>'; print_r($_FILES['img']); echo '</pre>'; exit; */
  /* echo '$_FILES["img"]["name"]'; echo '<br>'; echo '<pre>'; print_r($_FILES['img']['name']); echo '</pre>'; */

  uploadImage($_FILES['img'], $item);

  /* if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
    uploadImage($_FILES['img'], $item);
  } */

  header("Location: index.php");
}


?>



<?php include '_form.php' ?>

