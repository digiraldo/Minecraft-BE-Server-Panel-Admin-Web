<?php
// 'sudo su -l "crontab -u" root
// 'sudo su -l "crontab -u" www-data
// 'sudo su -l "crontab -u" username
$outputOn = shell_exec('sudo crontab -u www-data -l');
$findOn = "0 0 1 1 * dirname/minecraftbe/servername/restart.sh";
$replaceOn = "0 4 * * * dirname/minecraftbe/servername/restart.sh";
$outputOn = str_replace($findOn, $replaceOn, $outputOn);
$fileOn = "/tmp/crontabOn.txt";
file_put_contents($fileOn, $outputOn);
#Luego escribe el nuevo contenido en crontab:
//shell_exec("crontab ".$fileOn);

$output = shell_exec('sudo crontab -u www-data -l');
$find = "0 4 * * * dirname/minecraftbe/servername/restart.sh";
$replace = "0 0 1 1 * dirname/minecraftbe/servername/restart.sh";
$output = str_replace($find, $replace, $output);
$file = "/tmp/crontab.txt";
file_put_contents($file, $output);
#Luego escribe el nuevo contenido en crontab:
//shell_exec("crontab ".$file);

$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$data = json_decode($jsonString, true);

$txtCopia = (isset($_POST['copia'])) ? $_POST['copia'] : "";
$txtCopiaSw = (isset($_POST['CopiaSw'])) ? $_POST['CopiaSw'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
/*
$croncmd = "dirname/minecraftbe/servername/restart.sh";
$cronjob = "0 4 * * * $croncmd";
$crontaOn = shell_exec("( crontab -l | grep -v -F '$croncmd' ; echo '$cronjob' ) | crontab -");
$crontabOff = shell_exec("crontab -r");
*/
// marcar datos obligatorios en el Modal
$error = array();

switch ($accion) {

        // REalizar Copia de Serguridad
    case 'btnCopia':
        $txtCopia = shell_exec("sudo zip -r dirname/minecraftbe/servername/backups/$(date +%Y.%m.%d_%H\:%M\:%S_servername).zip dirname/minecraftbe/servername/worlds");
        $btnaccion = 'Respaldo o copia de seguridad manual realizado con exito';
        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        break;

    case 'btnCopiaSw':
        foreach ($data as $key) {
            if ($data[14]['id'] == '15' && $txtCopiaSw == 'on') {
                $data[14]['data'] = 'Respaldos automáticos activados a las 4 am todos los diás.';
                $data[14]['spain'] = 'Activado';
                $data[14]['btn'] = 'checked';
                $data[14]['icon'] = '<i class="fas fa-check"></i>';
                shell_exec("crontab " . $fileOn);
            } else {
                $data[14]['data'] = 'Respaldos diarios automáticos desactivados';
                $data[14]['spain'] = 'Desactivado';
                $data[14]['btn'] = '';
                $data[14]['icon'] = '<i class="fas fa-times"></i>';
                shell_exec("crontab " . $file);
            }
        }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        //exit;
        break;
}
?>