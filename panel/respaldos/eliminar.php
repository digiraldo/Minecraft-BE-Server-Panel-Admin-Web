<?php
// Usamos el comando "unlink" para borrar el fichero
shell_exec('sudo chmod -R 775 username:www-data /root/minecraftbe/parceros/backups');
unlink($_GET["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"])
?>