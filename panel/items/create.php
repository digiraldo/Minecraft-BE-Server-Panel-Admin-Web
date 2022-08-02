<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

include 'partials/header.php';

require __DIR__ . '/items.php';


$item = [
    'img' => '',
    'en' => '',
    'es' => '',
    'class' => '',
    'id' => '',
    'idm' => '',
    'data' => '',
    'extension' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = createItem($_POST);
    /* echo 'POST'; echo '<br>'; echo '<pre>'; print_r($_POST); echo '</pre>'; */
    /* echo '<pre>'; var_dump(explode("~",$_POST["class"])); echo '</pre>'; */
    /* echo '$_FILES'; echo '<br>'; echo '<pre>'; print_r($_FILES); echo '</pre>'; exit; */
    /* echo '$_FILES'; echo '<br>'; echo '<pre>'; print_r($_FILES['img']); echo '</pre>'; exit; */
    /* echo '$_FILES["img"]["name"]'; echo '<br>'; echo '<pre>'; print_r($_FILES['img']['name']); echo '</pre>'; */
  
    uploadImage($_FILES['img'], $item);
  
    header("Location: index.php");
  }



?>

<?php include '_form.php' ?>