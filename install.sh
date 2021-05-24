#!/bin/bash
# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web
# Crear Usuario https://noviello.it/es/como-crear-un-usuario-de-sudo-en-linux-debian/

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

cd ~

# Descargar SetupMinecraft.sh desde el repositorio de James A. Chambers - https://jamesachambers.com
# Repositorio de GitHub: https://github.com/TheRemote/MinecraftBedrockServer
echo "========================================================================="
if [ -e "SetupMinecraft.sh" ]; then
Print_Style "¡El Instalador ya existe! Ejecutandolo..." "$YELLOW"
echo "========================================================================="
else
  echo "Tomando SetupMinecraft.sh del repositorio..."
wget https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
chmod +x SetupMinecraft.sh
fi

# No especiales $, *, ., [, y \

# Cambio Preguntas a Español
echo "========================================================================="
Print_Style "Traduciendo Inicio de Servidor Automático" "$YELLOW"
sudo sed -i "s/Start Minecraft server at startup automatically/Iniciar el servidor de Minecraft al inicio automáticamente/g" SetupMinecraft.sh
sleep 2s
echo "========================================================================="

echo "========================================================================="
Print_Style "Traduciendo Copia de seguridad automatica" "$YELLOW"
sudo sed -i "s/Automatically restart and backup server at 4am daily/Reiniciar y hacer copia del mundo a las 4am todos los dias/g" SetupMinecraft.sh
sleep 2s
echo "========================================================================="

# Cambio para ejecutar panel.sh en vez del screen
echo "========================================================================="
Print_Style "Configurando SetupMinecraft.sh para integrar el Panel" "$YELLOW"
sudo sed -i "s/screen -r \$ServerName/bin\/bash panel.sh/g" SetupMinecraft.sh
sleep 2s
echo "========================================================================="

  # Descargar panel.sh desde el repositorio
  echo "========================================================================="
  echo "Tomando panel.sh del repositorio..."
  wget -O panel.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
  sudo chmod +x panel.sh
  sudo sed -i "s:dirname:$DirName:g" panel.sh
  sudo sed -i "s:username:$UserName:g" panel.sh
  sudo sed -i "s:servername:$ServerName:g" panel.sh

  sudo mv panel.sh $DirName/minecraftbe/$ServerName/

# Ejecutar SetupMinecraft.sh Modificado
echo "========================================================================="
Print_Style "Ejecutando SetupMinecraft.sh" "$MAGENTA"
sleep 2s
/bin/bash SetupMinecraft.sh 
echo "========================================================================="
