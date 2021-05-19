<?php
shell_exec('sudo chown -hR username:www-data dirname/minecraftbe');
shell_exec('sudo chmod -R 775 dirname/minecraftbe');

header("Location: ../tablero");
?>