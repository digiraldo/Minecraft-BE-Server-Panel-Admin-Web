#!/bin/bash
# Autor: Di Giraldo
# Instale las dependencias necesarias RClone y fuse para montar la nube
echo "tutorial de instalacion en: https://gorobeta.blogspot.com"
sleep 4s

cd ~
echo "Instalando RClone, fuse y otras dependencias..."
sleep 4s
if [ ! -n "`which sudo`" ]; then
  apt-get update && apt-get install sudo -y
fi
sudo apt-get update
sudo apt-get install curl -y
sudo apt-get install sed -y
sudo curl https://rclone.org/install.sh | sudo bash
sudo apt-get install fuse -y

#servernamec="$ServerName"

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

# Configuración del nombre minecraft en la cuenta de la nube
echo "========================================================================="
echo "========================================================================="
Print_Style "ADVERTENCIA: Antes de seguir debe iniciar sesión en" "$RED"
Print_Style "drive, onedrive o la nube que va a utilizar y deberá" "$RED"
Print_Style "crear la carpeta donde realizará las copias de seguridad" "$RED"
echo "_________________________________________________________________________"
read -n1 -r -p "Presione cualquier tecla para continuar"

echo "-------------------------------------------------------------------------"
Print_Style "Escriba aquí el mismo nombre de la carpeta que creaste en tu cuenta de la nube" "$CYAN"
echo "========================================================================="
read_with_prompt FolderName "Nombre de Carpeta"

# Configuración del nombre del servidor
echo "========================================================================="
echo "========================================================================="
Print_Style "Ingrese el nombre de la nube donde creó la carpeta, ejemplo: drive, onedrive, mi_unidad..." "$MAGENTA"
Print_Style "Se utilizará como nombre de la unidad en el Servidor..." "$YELLOW"
echo "========================================================================="

read_with_prompt CloudName "Nombre de la Nube"

# Verifique si el directorio de la unidad en la nube ya existe
cd ~
if [ ! -d "$CloudName" ]; then
  mkdir $CloudName
  cd $CloudName
else
  cd $CloudName
fi
Print_Style "El directorio $DirName/$CloudName es la unidad en la Nube" "$GREEN"

echo "========================================================================="

# Modificar archivo fuse.conf
cd ~
sudo chmod +x /etc/fuse.conf
#sudo sed -i "s/# Allow non-root users to specify the allow_other or allow_root mount options./ Allow non-root users to specify the allow_other or allow_root mount options./g" /etc/fuse.conf
sudo sed -i "s/#user_allow_other/user_allow_other/g" /etc/fuse.conf
Print_Style "Archivo fuse configurado..." "$GREEN"
sudo sed -n "/# Allow/p" /etc/fuse.conf
sudo sed -n "/user_allow_other/p" /etc/fuse.conf

sleep 3s

# Iniciando Configuración Montaje de Unidad
  cd ~
  Print_Style "Iniciando Configuración de RClone para sincronizar la carpeta $DirName/$CloudName ..." "$MAGENTA"
  sleep 4s

  sudo rclone config

# Confirme el nombre de la unidad remota de rclone
echo "========================================================================="
Print_Style "Confirme el nombre de la unidad remota que escribio en RClone" "$YELLOW"
read_with_prompt RclonName "nombre"
echo "========================================================================="

# Montando la unidad al iniciar la máquina del servidor en crontab -e con --allow-other &
cd ~
    echo -n "¿Montar la unidad $DirName/$CloudName/ al iniciar la maquina? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      croncmd="dirname/$CloudName"
      # El nombre de la unidad en RClone debe ser igual $RclonName 
      cronjob="@reboot rclone mount $RclonName: $croncmd --allow-other &"
      ( crontab -l | grep -v -F "$croncmd" ; echo "$cronjob" ) | crontab -
      Print_Style "Montaje de la Unidad programada. Para cambiar o eliminar el montaje automático, escriba crontab -e" "$GREEN"
    fi

# ingresar a la carpeta del servidor minecraft
cd ~
cd minecraftbe
cd servername

# Modificar start.sh y back.sh
sudo sed -i "s/cloudname/$CloudName/g" start.sh
sudo sed -i "s/foldername/$FolderName/g" start.sh
sudo sed -i "s/cloudname/$CloudName/g" back.sh
sudo sed -i "s/foldername/$FolderName/g" back.sh

echo "========================================================================="
Print_Style "Configurando inicio de Fuse en Crontab..." "$CYAN"
echo "$cronjob"
echo "========================================================================="
sleep 3s

# Iniciar o comprobar inicio de Fuse en RClone
echo "========================================================================="
if [ -d dirname/$CloudName/$FolderName/ ];
then
Print_Style "La carpeta dirname/$CloudName/$FolderName esta montada..." "$GREEN"
else
sudo rclone mount $RclonName: $croncmd --allow-other &
Print_Style "Montando RClone con Fuse..." "$YELLOW"
echo "rclone mount $RclonName: $croncmd --allow-other &"
sleep 3s
Print_Style "Carpeta dirname/$CloudName/$FolderName montada. -- Ingresando al Directorio..." "$GREEN"
fi
echo "========================================================================="
sleep 3s

# Verificar archivos sincronizados
cd ~
cd $CloudName
echo "========================================================================="
Print_Style "==============ARCHIVOS Y DIRECTORIOS DE LA NUBE ENCONTRADOS==============" "$GREEN"
ls -l
echo "========================================================================="
sleep 8s

Print_Style "Archivos configurados para el inicio sel sevidor en start.sh..." "$CYAN"
# ingresar a la carpeta del servidor minecraft
cd ~
cd minecraftbe
cd servername
# Mostrar codigo de sincronizacion de la nube en start.sh
sudo sed -n "/sudo rsync -avz/p" start.sh
echo "========================================================================="
sleep 5s

# Reiniciar el servidor?
cd ~
    echo -n "¿Reiniciar el Servidor Minecraft? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      sudo systemctl daemon-reload
    sudo systemctl stop servername.service
      if screen -list | grep -q "servername"; then
     # El servidor aún no se ha detenido después de 30 segundos, dígale a Screen que lo cierre
     echo "El servidor de Minecraft aún no se ha cerrado, cerrando la pantalla..."
     screen -S servername -X quit
     sleep 10
      fi
    sudo systemctl start servername.service
      # ingresar a la carpeta del servidor minecraft
      cd ~
      cd minecraftbe
      cd servername
      sudo sed -n "/server-name=/p" server.properties | sed 's/server-name=/Reiniciando Servidor: .... /'
Print_Style "========================REINICIANDO SERVIDOR==============================" "$BLINK"
    fi

cd ~
echo "========================================================================="
Print_Style "ADVERTENCIA: Si va a instalar o recuperar un mundo en este servidor," "$RED"
Print_Style "este debe estar en la nube de su cuenta sincronizada de Google Drive," "$RED"
Print_Style "Microsoft Driva, Mega, Amazon u Otra" "$RED"
    echo -n "¿Iniciar Recuperacion de un Mundo? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Recuperar mundo e instalarlo en el servidor
        echo "========================================================================="
        Print_Style "Iniciando Recuperación con back.sh" "$YELLOW"
        echo "========================================================================="
        sleep 3s
        /bin/bash dirname/minecraftbe/servername/back.sh
    fi

# Adjuntar a la pantalla
Print_Style "Iniciando la consola con: screen -r servername" "$REVERSE"
sleep 4s
cd ~
screen -r servername
