#!/bin/bash
# Autor: Di Giraldo
# Instale las dependencias necesarias RClone y fuse para montar la nube
echo "tutorial de instalacion en: https://gorobeta.blogspot.com"
sleep 4s

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

echo "========================================================================="
Print_Style "ADVERTENCIA: Si va a instalar o recuperar un mundo en este servidor," "$RED"
Print_Style "este debe estar en la nube, por lo cual se requiere que inicie seccion" "$RED"
Print_Style "y suba el archivo y espere a que cargue." "$RED"
read -n1 -r -p "Presione cualquier tecla para continuar"
sleep 4s

# Buscar los respaldos en la nube cloudname/foldername
echo "========================================================================="
echo "========================================================================="
Print_Style "Buscando respaldos en su nube dirname/cloudname/foldername" "$CYAN"
Print_Style "Espere un momento..." "$BLUE"
echo "========================================================================="
sleep 3s

# Iniciar o comprobar inicio de Fuse en RClone
echo "========================================================================="
if [ -d dirname/cloudname/foldername/ ];
then
Print_Style "La carpeta cloudname/foldername esta montada..." "$GREEN"
else
sudo rclone mount rclonname: dirname/cloudname --allow-other &
Print_Style "Montando RClone con Fuse..." "$YELLOW"
sudo rclone mount rclonname: dirname/cloudname --allow-other &
fi
echo "========================================================================="
sleep 3s

# Verificar archivos sincronizados
cd ~
cd cloudname
cd foldername
echo "========================================================================="
Print_Style "==========================ARCHIVOS EN LA NUBE============================" "$GREEN"
ls -lt
echo "========================================================================="

echo "-------------------------------------------------------------------------"
Print_Style "Escriba aquí el nombre del mundo a restaurar" "$CYAN"
read_with_prompt BackName "Nombre del Mundo"

echo "========================================================================="
echo "-------------------------------------------------------------------------"
Print_Style "Sincronizando Mundo..." "$BLUE"
sudo rsync -vh $BackName ~/minecraftbe/servername/backups/
sleep 3s

# Restablecer mundos
sudo systemctl daemon-reload
sudo systemctl stop servername.service
      if screen -list | grep -q "servername"; then
     # El servidor aún no se ha detenido después de 30 segundos, dígale a Screen que lo cierre
     Print_Style "El servidor de Minecraft aún no se ha cerrado. -- Cerrando la pantalla..." "$RED"
     screen -S servername -X quit
     sleep 10
      fi

cd ~
cd minecraftbe
cd servername
sudo rm -rf worlds
sudo tar -xf backups/$BackName
sleep 4s

# Verificar archivos sincronizados
cd ~
cd minecraftbe
cd servername
cd worlds
echo "========================================================================="
Print_Style "===========================NOMBRE DEL NIVEL==============================" "$YELLOW"
ls -lt
echo "========================================================================="

sleep 3s

cd ~
cd minecraftbe
cd servername
echo "========================================================================="
Print_Style "Escriba aquí el nivel o nombre del mundo recuperado" "$CYAN"
read -p "Nombre del Nivel: " WoName
if [ "$WoName" != "" ]
then
    Print_Style "Actualizando Nombre de nivel a $WoName" "$MAGENTA"
    sudo sed -i "/level-name=/c\level-name=$WoName" server.properties
    echo "========================================================================="
    sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del nivel configuardo a: ....... /'
else
    sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del Nivel Actual ........ /'
fi
sudo sed -i "/level-seed=/c\level-seed=" server.properties
sleep 3s

Print_Style "========================INICIANDO SERVIDOR==============================" "$REVERSE"

sleep 2s

# Iniciar servidor
/bin/bash dirname/minecraftbe/servername/start.sh
