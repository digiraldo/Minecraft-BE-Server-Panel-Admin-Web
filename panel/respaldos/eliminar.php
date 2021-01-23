<?php
// Usamos el comando "unlink" para borrar el fichero
unlink($_GET["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"])
?>