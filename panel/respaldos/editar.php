<?php 
$jsonString = file_get_contents(__DIR__ . '../../../config/srvdatos.json');
$data = json_decode($jsonString, true);

$txtCopia=(isset($_POST['copia']))?$_POST['copia']:"";
$txtCopiaSw=(isset($_POST['CopiaSw']))?$_POST['CopiaSw']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

$croncmd="dirname/minecraftbe/servername/restart.sh";
$cronjob="0 4 * * * $croncmd";
$crontaOn = shell_exec("( crontab -l | grep -v -F '$croncmd' ; echo '$cronjob' ) | crontab -");
$crontabOff = shell_exec("crontab -r");
// marcar datos obligatorios en el Modal
$error=array();

switch ($accion) {

  // REalizar Copia de Serguridad
  case 'btnCopia':
    $txtCopia = shell_exec("sudo zip -r /home/usr/minecraftbe/Parce/backups/$(date +%d.%m.%Y_%H\:%M\:%S_servername).zip /home/usr/minecraftbe/Parce/worlds");
    $btnaccion = 'Respaldo o copia de seguridad manual realizado con exito';
    unset($_POST);
    unset($_REQUEST);
    header("Location: ".$_SERVER['PHP_SELF']);
break;

case 'btnCopiaSw':
    foreach ($data as $key) {
        if ($data[14]['id'] == '15' && $txtCopiaSw == 'on') {
              $data[14]['data'] = 'Respaldos automáticos activados a las 4 am todos los diás.';
              $data[14]['spain'] = 'Activado';
              $data[14]['btn'] = 'checked';
              $data[14]['icon'] = '<i class="fas fa-check"></i>';
              shell_exec("( crontab -l | grep -v -F '$croncmd' ; echo '$cronjob' ) | crontab -");
            }
        else  {
              $data[14]['data'] = 'Respaldos diarios automáticos desactivados';
              $data[14]['spain'] = 'Desactivado';
              $data[14]['btn'] = '';
              $data[14]['icon'] = '<i class="fas fa-times"></i>';
              shell_exec("crontab -r");
            }            
    }

        $newJsonString = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
        file_put_contents(__DIR__ . '../../../config/srvdatos.json', $newJsonString);

        unset($_POST);
        unset($_REQUEST);
        header("Location: ".$_SERVER['PHP_SELF']);
         //exit;
 break;
}

    // Habilitar Usar Trucos en el Servidor
    

?>