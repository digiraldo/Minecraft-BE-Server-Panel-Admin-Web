#!/bin/bash
# Este Script es el mismo del autor James A. Chambers a diferencia que fue traducido al español (This Script is the same as that of the author James A. Chambers, unlike that it was translated into Spanish.)
# Script de instalación del servidor de Minecraft - James A. Chambers - https://jamesachambers.com
#
# Instrucciones: https://jamesachambers.com/minecraft-bedrock-edition-ubuntu-dedicated-server-guide/
# Para ejecutar el script de configuración, use:
# wget https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
# chmod +x SetupMinecraft.sh
# ./SetupMinecraft.sh
#
# Repositorio de GitHub: https://github.com/TheRemote/MinecraftBedrockServer

echo "Script de instalación de Minecraft Bedrock Server por James Chambers - 24 de julio de 2019"
echo "La última versión siempre en https://github.com/TheRemote/MinecraftBedrockServer"
echo "¡No olvide configurar el reenvío de puertos en su enrutador! El puerto predeterminado es 19132"

# Colores del terminal
BLACK=$(tput setaf 0)
RED=$(tput setaf 1)
GREEN=$(tput setaf 2)
YELLOW=$(tput setaf 3)
LIME_YELLOW=$(tput setaf 190)
BLUE=$(tput setaf 4)
MAGENTA=$(tput setaf 5)
CYAN=$(tput setaf 6)
WHITE=$(tput setaf 7)
BRIGHT=$(tput bold)
NORMAL=$(tput sgr0)
BLINK=$(tput blink)
REVERSE=$(tput smso)
UNDERLINE=$(tput smul)

# Imprime una línea con color usando códigos de terminal
Print_Style() {
  printf "%s\n" "${2}$1${NORMAL}"
}

# Función para leer la entrada del usuario con un mensaje
function read_with_prompt {
  variable_name="$1"
  prompt="$2"
  default="${3-}"
  unset $variable_name
  while [[ ! -n ${!variable_name} ]]; do
    read -p "$prompt: " $variable_name < /dev/tty
    if [ ! -n "`which xargs`" ]; then
      declare -g $variable_name=$(echo "${!variable_name}" | xargs)
    fi
    declare -g $variable_name=$(echo "${!variable_name}" | head -n1 | awk '{print $1;}')
    if [[ -z ${!variable_name} ]] && [[ -n "$default" ]] ; then
      declare -g $variable_name=$default
    fi
    echo -n "$prompt : ${!variable_name} -- aceptar? (y/n)"
    read answer < /dev/tty
    if [ "$answer" == "${answer#[Yy]}" ]; then
      unset $variable_name
    else
      echo "$prompt: ${!variable_name}"
    fi
  done
}

# Instale las dependencias necesarias para ejecutar el servidor de Minecraft en segundo plano
echo "Instalando screen, unzip, sudo, net-tools, wget..."
if [ ! -n "`which sudo`" ]; then
  apt-get update && apt-get install sudo -y
fi
sudo apt-get update
sudo apt-get install screen unzip wget -y
sudo apt-get install net-tools -y
sudo apt-get install libcurl4 -y
sudo apt-get install openssl -y
sudo apt-get install zip gzip tar -y

# Verifique si el directorio principal del servidor de Minecraft ya existe
cd ~
if [ ! -d "minecraftbe" ]; then
  mkdir minecraftbe
  cd minecraftbe
else
  cd minecraftbe
  if [ -f "bedrock_server" ]; then
    echo "Migración del antiguo servidor Bedrock a minecraftpe/old"
    cd ~
    mv minecraftbe old
    mkdir minecraftbe
    mv old minecraftbe/old
    cd minecraftbe
    echo "Migración completa a minecraftbe/old"
  fi
fi

# Configuración del nombre del servidor
Print_Style "==================DIRECTORIOS Y ARCHIVOS MONTADOS========================" "$BLUE"
ls -l
Print_Style "=========================================================================" "$BLUE"
echo "Ingrese un nombre corto para el servidor nuevo o existente..."
echo "Se utilizará como nombre de la carpeta y el nombre del servidor..."
echo "========================================================================="
read_with_prompt ServerName "Nombre de Servidor"

echo "========================================================================="
if [ -d "$ServerName" ]; then
  echo "¡El directorio minecraftbe/$ServerName ya existe!  Actualizando scripts y configurando el servicio..."
echo "========================================================================="
sleep 4s
  # Obtener la ruta del directorio de inicio y el nombre de usuario
  DirName=$(readlink -e ~)
  UserName=$(whoami)
  UserNow=$(users)
  cd ~
  cd minecraftbe
  cd $ServerName
  echo "El directorio del servidor es: $DirName/minecraftbe/$ServerName"
echo "========================================================================="
  # Eliminar scripts existentes
  sudo rm -rf start.sh stop.sh restart.sh cloud.sh back.sh panel.sh config.sh prop.sh fixpermissions.sh
  sleep 2s
  cd ~
  cd minecraftbe
  sudo chmod -R 777 $DirName/minecraftbe
  sudo rm -rf panel
  sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web
  sudo rm -rf index.php
  sudo rm -rf shell.php
  sudo rm -rf location
  sudo rm -rf misitio.conf
  sudo rm -rf web.sh
  
  Print_Style "==========================SERVIDORES MONTADOS============================" "$CYAN"
  sleep 2s
  ls -l
  Print_Style "=========================================================================" "$CYAN"
  sleep 3s
  cd ~
  cd minecraftbe
  cd $ServerName

  # Descargar panel.sh desde el repositorio
 echo "========================================================================="
  echo "Tomando panel.sh del repositorio..."
  wget -O panel.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
  sudo chmod +x panel.sh
  sudo sed -i "s:dirname:$DirName:g" panel.sh
  sudo sed -i "s:username:$UserName:g" panel.sh
  sudo sed -i "s:servername:$ServerName:g" panel.sh

  # Descarga start.sh desde el repositorio
  echo "Tomando start.sh del repositorio..."
  wget -O start.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/start.sh
  chmod +x start.sh
  sed -i "s:dirname:$DirName:g" start.sh
  sed -i "s:servername:$ServerName:g" start.sh
  
  # Descargar stop.sh desde el repositorio
  echo "Tomando stop.sh del repositorio..."
  wget -O stop.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/stop.sh
  chmod +x stop.sh
  sed -i "s:dirname:$DirName:g" stop.sh
  sed -i "s:servername:$ServerName:g" stop.sh
  
  # Descargar restart.sh desde el repositorio
  echo "Tomando restart.sh del repositorio..."
  wget -O restart.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/restart.sh
  chmod +x restart.sh
  sed -i "s:dirname:$DirName:g" restart.sh
  sed -i "s:servername:$ServerName:g" restart.sh

  # Descarga fixpermissions.sh desde el repositorio
  echo "Tomando fixpermissions.sh del repositorio .."
  wget -O fixpermissions.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/fixpermissions.sh
  chmod +x fixpermissions.sh
  sed -i "s:dirname:$DirName:g" fixpermissions.sh
  sed -i "s:servername:$ServerName:g" fixpermissions.sh
  sed -i "s:userxname:$UserName:g" fixpermissions.sh
  
  # Descargar cloud.sh desde el repositorio
  echo "Tomando cloud.sh del repositorio..."
  wget -O cloud.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/cloud.sh
  chmod +x cloud.sh
  sudo sed -i "s:dirname:$DirName:g" cloud.sh
  sudo sed -i "s:servername:$ServerName:g" cloud.sh
  
  # Descargar back.sh desde el repositorio
  echo "Tomando back.sh del repositorio..."
  wget -O back.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/back.sh
  chmod +x back.sh
  sudo sed -i "s:dirname:$DirName:g" back.sh
  sudo sed -i "s:servername:$ServerName:g" back.sh
  
  # Descargar config.sh desde el repositorio
  echo "Tomando config.sh del repositorio..."
  wget -O config.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/config.sh
  chmod +x config.sh
  sudo sed -i "s:dirname:$DirName:g" config.sh
  sudo sed -i "s:servername:$ServerName:g" config.sh

  # Descargar prop.sh desde el repositorio
  echo "Tomando prop.sh del repositorio..."
  wget -O prop.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/prop.sh
  chmod +x prop.sh
  sudo sed -i "s:dirname:$DirName:g" prop.sh
  sudo sed -i "s:servername:$ServerName:g" prop.sh
  
  # Actualizar el servicio del servidor de Minecraft
  echo "Configurando el servicio $ServerName ..."
  sudo wget -O /etc/systemd/system/$ServerName.service https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/minecraftbe.service
  sudo chmod +x /etc/systemd/system/$ServerName.service
  sudo sed -i "s/userxname/$UserName/g" /etc/systemd/system/$ServerName.service
  sudo sed -i "s:dirname:$DirName:g" /etc/systemd/system/$ServerName.service
  sudo sed -i "s:servername:$ServerName:g" /etc/systemd/system/$ServerName.service
  sudo sed -i "/server-name=/c\server-name=$ServerName" server.properties
  sudo systemctl daemon-reload

  /bin/bash $DirName/minecraftbe/$ServerName/panel.sh

  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/js/logs.js
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/permisos.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/editar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/ver_propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/logs.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/ver_log.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/CargarFicheros.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/size.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/cronon.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/cronoff.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/rol/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/info.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/shell.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/res.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/usuarios.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/_formulario.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/navbar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/signup.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/config/srvdatos.json
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/includes/index.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/cronon.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/cronoff.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/propiedades/index.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/propiedades/editar.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/shell.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/res.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:dirnameusr:$DirName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:dirname:$DirName:g" /etc/nginx/sites-available/misitio.conf
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/eliminar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/res.sh

echo "========================================================================="
echo "Configuranfo iniciao del servidor automáticamente"
#Iniciar el servidor de Minecraft automáticamente
  sudo systemctl enable $ServerName.service
echo "========================================================================="
  

      # Reinicio automático configurado a las 4 am
    echo "========================================================================="
      croncmd="$DirName/minecraftbe/$ServerName/restart.sh"
      cronjob="0 0 1 1 * $croncmd"
      ( sudo crontab -u www-data -l | grep -v -F "$croncmd" ; echo "$cronjob" ) | crontab -
      echo "Reinicio programado. Para cambiar la hora o eliminar el reinicio automático, escriba crontab -e"
    echo "========================================================================="


  # Configuración completada
  echo "========================================================================="
  echo "La configuración está completa. Iniciando el servidor Minecraft $ServerName ..."
  sudo systemctl start $ServerName.service
  # Duerme durante 5 segundos para que el servidor tenga tiempo de comenzar
  sleep 2s
  sudo systemctl restart nginx

  screen -r $ServerName

  exit 0
fi

# Crear directorio de servidor
echo "Creando directorio del servidor de Minecraft (~/minecraftbe/$ServerName)..."
cd ~
cd minecraftbe
mkdir $ServerName
cd $ServerName
mkdir downloads
mkdir backups
mkdir logs


# Verifique la arquitectura de la CPU para ver si necesitamos hacer algo especial para la plataforma en la que se ejecuta el servidor
echo "Obteniendo la arquitectura de la CPU del sistema..."
CPUArch=$(uname -m)
echo "Arquitectura del sistema: $CPUArch"
if [[ "$CPUArch" == *"aarch"* || "$CPUArch" == *"arm"* ]]; then
  # Arquitectura ARM detectada - descargar QEMU y bibliotecas de dependencia
  echo "Plataforma ARM detectada - instalando dependencias..."
  # Compruebe si la última versión de QEMU disponible es al menos 3.0 o superior
  QEMUVer=$(apt-cache show qemu-user-static | grep Version | awk 'NR==1{ print $2 }' | cut -c3-3)
  if [[ "$QEMUVer" -lt "3" ]]; then
    echo "La versión de QEMU disponible no es lo suficientemente alta para emular x86_64. Descargando alternativa..."
    if [[ "$CPUArch" == *"armv7"* || "$CPUArch" == *"armhf"* ]]; then
      wget http://ftp.us.debian.org/debian/pool/main/q/qemu/qemu-user-static_3.1+dfsg-8_armhf.deb
      wget http://ftp.us.debian.org/debian/pool/main/b/binfmt-support/binfmt-support_2.2.0-2_armhf.deb
      sudo dpkg --install binfmt*.deb
      sudo dpkg --install qemu-user*.deb
    elif [[ "$CPUArch" == *"aarch64"* || "$CPUArch" == *"arm64"* ]]; then
      wget http://ftp.us.debian.org/debian/pool/main/q/qemu/qemu-user-static_3.1+dfsg-8_arm64.deb
      wget http://ftp.us.debian.org/debian/pool/main/b/binfmt-support/binfmt-support_2.2.0-2_arm64.deb
      sudo dpkg --install binfmt*.deb
      sudo dpkg --install qemu-user*.deb
    fi
  else
    sudo apt-get install qemu-user-static binfmt-support -y
  fi

  if [ -n "`which qemu-x86_64-static`" ]; then
    echo "QEMU-x86_64-static instalada satisfactoriamente"
  else
    echo "QEMU-x86_64-static no se instaló correctamente; verifique el resultado anterior para ver qué salió mal."
    exit 1
  fi
  
  # Recuperar depende.zip del repositorio de GitHub
  wget -O depends.zip https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/depends.zip
  unzip depends.zip
  sudo mkdir /lib64
  # Cree un enlace flexible ld-linux-x86-64.so.2 mapeado a ld-2.28.so
  sudo ln -s ~/minecraftbe/$ServerName/ld-2.28.so /lib64/ld-linux-x86-64.so.2
fi

# Recupere la última versión del servidor dedicado Minecraft Bedrock
echo "Buscando la última versión del servidor Minecraft Bedrock..."
wget -O downloads/version.html https://minecraft.net/en-us/download/server/bedrock/
DownloadURL=$(grep -o 'https://minecraft.azureedge.net/bin-linux/[^"]*' downloads/version.html)
DownloadFile=$(echo "$DownloadURL" | sed 's#.*/##')
echo "$DownloadURL"
echo "$DownloadFile"

# Descargue la última versión del servidor dedicado Minecraft Bedrock
echo "========================================================================="
echo "Descargando la última versión del servidor Minecraft Bedrock..."
UserName=$(whoami)
DirName=$(readlink -e ~)
wget -O "downloads/$DownloadFile" "$DownloadURL"
unzip -o "downloads/$DownloadFile"

  # Descargar panel.sh desde el repositorio
 echo "========================================================================="
  echo "Tomando panel.sh del repositorio..."
  wget -O panel.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
  sudo chmod +x panel.sh
  sudo sed -i "s:dirname:$DirName:g" panel.sh
  sudo sed -i "s:username:$UserName:g" panel.sh
  sudo sed -i "s:servername:$ServerName:g" panel.sh
  
# Descarga start.sh desde el repositorio
echo "========================================================================="
echo "Tomando start.sh del repositorio..."
wget -O start.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/start.sh
chmod +x start.sh
sed -i "s:dirname:$DirName:g" start.sh
sed -i "s:servername:$ServerName:g" start.sh
#sed -i "s:cloudname:$CloudName:g" start.sh

# Descargar stop.sh desde el repositorio
echo "========================================================================="
echo "Tomando stop.sh del repositorio..."
wget -O stop.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/stop.sh
chmod +x stop.sh
sed -i "s:dirname:$DirName:g" stop.sh
sed -i "s:servername:$ServerName:g" stop.sh

# Descargar restart.sh desde el repositorio
echo "========================================================================="
echo "Tomando restart.sh del repositorio..."
wget -O restart.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/restart.sh
chmod +x restart.sh
sed -i "s:dirname:$DirName:g" restart.sh
sed -i "s:servername:$ServerName:g" restart.sh

# Descarga fixpermissions.sh desde el repositorio
echo "Tomando fixpermissions.sh del repositorio .."
wget -O fixpermissions.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/fixpermissions.sh
chmod +x fixpermissions.sh
sed -i "s:dirname:$DirName:g" fixpermissions.sh
sed -i "s:servername:$ServerName:g" fixpermissions.sh
sed -i "s:userxname:$UserName:g" fixpermissions.sh

# Descargar cloud.sh desde el repositorio
echo "========================================================================="
echo "Tomando restart.sh del repositorio..."
wget -O cloud.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/cloud.sh
chmod +x cloud.sh
sudo sed -i "s:dirname:$DirName:g" cloud.sh
sudo sed -i "s/servername/$ServerName/g" cloud.sh

# Descargar back.sh desde el repositorio
echo "========================================================================="
  echo "Tomando back.sh del repositorio..."
  wget -O back.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/back.sh
  chmod +x back.sh
  sudo sed -i "s:dirname:$DirName:g" back.sh
  sudo sed -i "s:servername:$ServerName:g" back.sh
  
  # Descargar config.sh desde el repositorio
 echo "========================================================================="
  echo "Tomando config.sh del repositorio..."
  wget -O config.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/config.sh
  chmod +x config.sh
  sudo sed -i "s:dirname:$DirName:g" config.sh
  sudo sed -i "s:servername:$ServerName:g" config.sh

  # Descargar prop.sh desde el repositorio
  echo "Tomando prop.sh del repositorio..."
  wget -O prop.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/prop.sh
  chmod +x prop.sh
  sudo sed -i "s:dirname:$DirName:g" prop.sh
  sudo sed -i "s:servername:$ServerName:g" prop.sh

# Configuración del servicio
echo "========================================================================="
echo "Configurando el servicio Minecraft $ServerName ..."
sudo wget -O /etc/systemd/system/$ServerName.service https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/minecraftbe.service
sudo chmod +x /etc/systemd/system/$ServerName.service
sudo sed -i "s/userxname/$UserName/g" /etc/systemd/system/$ServerName.service
sudo sed -i "s:dirname:$DirName:g" /etc/systemd/system/$ServerName.service
sudo sed -i "s:servername:$ServerName:g" /etc/systemd/system/$ServerName.service
sudo sed -i "/server-name=/c\server-name=$ServerName" server.properties
sudo systemctl daemon-reload

 /bin/bash $DirName/minecraftbe/$ServerName/panel.sh

  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/js/logs.js
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/permisos.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/editar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/ver_propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/logs.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/registros/ver_log.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/CargarFicheros.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/size.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/cronon.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/respaldos/cronoff.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/rol/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/info.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/shell.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/tablero/res.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/usuarios.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/_formulario.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/navbar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/signup.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/config/srvdatos.json
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/includes/index.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/cronon.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/respaldos/cronoff.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/propiedades/index.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/propiedades/editar.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/shell.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/tablero/res.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:dirnameusr:$DirName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:dirname:$DirName:g" /etc/nginx/sites-available/misitio.conf
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/eliminar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/res.sh

  # Reinicio automático a las 4 am
  TimeZone=$(cat /etc/timezone)
  CurrentTime=$(date)
  echo "========================================================================="
  echo "Zona horaria actual del sistema: $TimeZone"
  echo "Hora actual del sistema: $CurrentTime"
  echo "========================================================================="
  sleep 2s
  echo "Puede ajustar / eliminar el tiempo de reinicio seleccionado más tarde escribiendo crontab -e o ejecutando SetupMinecraft.sh nuevamente"
  echo "========================================================================="
    croncmd="$DirName/minecraftbe/$ServerName/restart.sh"
    cronjob="0 0 1 1 * $croncmd"
    ( sudo crontab -u www-data -l | grep -v -F "$croncmd" ; echo "$cronjob" ) | crontab -
    echo "Reinicio programado. Para cambiar la hora o eliminar el reinicio automático, escriba crontab -e"
  echo "========================================================================="


echo "========================================================================="
echo "Configurando inicio del servidor automáticamente"
#Iniciar el servidor de Minecraft automáticamente
  sudo systemctl enable $ServerName.service
echo "========================================================================="


# ¡Terminado!
echo "========================================================================="
echo "========================================================================="
echo "La configuración está completa. Iniciando el servidor de Minecraft..."
sudo systemctl start $ServerName.service
echo "========================================================================="
sleep 4s

# Espere hasta 20 segundos para que se inicie el servidor
StartChecks=0
while [ $StartChecks -lt 20 ]; do
  if screen -list | grep -q "$ServerName"; then
    break
  fi
  sleep 1;
  StartChecks=$((StartChecks+1))
done

# Forzar el cierre si el servidor aún está iniciado
echo "========================================================================="
if ! screen -list | grep -q "$ServerName"; then
  echo "El servidor de Minecraft no pudo iniciarse después de 20 segundos."
else
  echo "El servidor de Minecraft se ha iniciado.  Escribe (screen -r $ServerName) para ver el servidor en ejecución!"
fi

cd ~
cd minecraftbe
cd $ServerName
echo "========================================================================="
echo "========================================================================="
Print_Style  "================CONFIGURACIÓN PREDETERMINADA DEL SERVIDOR================" "$REVERSE"
echo "========================================================================="
sudo sed -n "/server-name=/p" server.properties | sed 's/server-name=/Nombre del Servidor: .... /'
sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del Nivel: ....... /'
sudo sed -n "/gamemode=/p" server.properties | sed 's/gamemode=/Modo del Juego: ......... /'
sudo sed -n "/difficulty=/p" server.properties | sed 's/difficulty=/Dificultad del Mundo: ... /'
sudo sed -n "/allow-cheats=/p" server.properties | sed 's/allow-cheats=/Usar Trucos: ............ /'
sudo sed -n "/max-players=/p" server.properties | sed 's/max-players=/Jugadores Máximos: ...... /'
sudo sed -n "/allow-list=/p" server.properties | sed 's/allow-list=/Permiso de Jugadores: ... /'
sudo sed -n "/level-seed=/p" server.properties | sed 's/level-seed=/Número de Semilla: ...... /'
sudo sed -n "/server-port=/p" server.properties | sed 's/server-port=/Puerto IPV4: ............ /'
sudo sed -n "/server-portv6=/p" server.properties | sed 's/server-portv6=/Puerto IPV6: ............ /'
echo "========================================================================="
sleep 3s
sudo systemctl restart nginx

#echo "========================================================================="
 #   echo -n "¿Iniciar Configuración del Servidor: $ServerName? (y/n)"
  #  read answer < /dev/tty
   # if [ "$answer" != "${answer#[Yy]}" ]; then
    #  # Crear copia de seguridad en la nube cloudname
     #   echo "========================================================================="
      #  echo "Iniciando Configuración con config.sh"
       # echo "========================================================================="
        #sleep 3s
        #/bin/bash $DirName/minecraftbe/$ServerName/config.sh
    #fi

# Adjuntar a la pantalla
echo ""
sleep 1s
echo ""
sleep 1s
Print_Style "screen -r $ServerName" "$REVERSE"
Print_Style "Presiona Ctrl a + d, para cerrar screen -r $ServerName" "GREEN"
echo ""
sleep 8s
#screen -r $ServerName
