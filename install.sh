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

  DirName=$(readlink -e ~)
  UserName=$(whoami)
  Directorio=minecraftbe
  BackConfig=backub_config

cd ~
if [ ! -d "backub_config" ]; then
echo "El directorio ${BackConfig} no existe"
  sudo mkdir backub_config
else
echo "El directorio ${BackConfig} existe"
cd backub_config
sleep 2s
  Print_Style "===================SERVIDORES MONTADOS EN $BackConfig ====================" "$CYAN"
  ls -l
  Print_Style "=========================================================================" "$CYAN"
  sleep 6s
  echo "========================================================================="
    sleep 3s
fi

cd ~
if [ ! -d "minecraftbe" ]; then
echo "El directorio ${Directorio} no existe"
else
echo "El directorio ${Directorio} existe"
cd minecraftbe
sleep 2s
  Print_Style "===================SERVIDORES MONTADOS EN $Directorio ====================" "$CYAN"
  ls -l
  Print_Style "=========================================================================" "$CYAN"
  sleep 6s
fi


cd ~

# Descargar SetupMinecraft.sh desde el repositorio de James A. Chambers - https://jamesachambers.com
# Repositorio de GitHub: https://github.com/TheRemote/MinecraftBedrockServer
echo "========================================================================="
if [ -e "SetupMinecraft.sh" ]; then
Print_Style "¡El Instalador ya existe! Actualizandolo..." "$YELLOW"
sudo rm -rf SetupMinecraft.sh
curl -H "Accept-Encoding: identity" -L -o SetupMinecraft.sh https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
sudo chmod 777 SetupMinecraft.sh
echo "========================================================================="
  

else
echo "Tomando SetupMinecraft.sh del repositorio..."
curl -H "Accept-Encoding: identity" -L -o SetupMinecraft.sh https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
sudo chmod 777 SetupMinecraft.sh
fi


# Descargar panel.txt desde el repositorio
echo "========================================================================="
echo "Tomando panel.txt del repositorio..."
curl -H "Accept-Encoding: identity" -L -o panel.txt https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.txt
sudo chmod 777 panel.txt

cd ~

# Cambio Preguntas a Español
echo "========================================================================="
Print_Style "Traduciendo Inicio screen" "$YELLOW"
sudo sed -i "s/Minecraft server has started.  Type screen -r \$ServerName to view the running server/El servidor de Minecraft se ha iniciado. Escriba screen -r servername para ver el servidor en ejecución/g" SetupMinecraft.sh
sleep 2s
echo "========================================================================="


#### busca la linea de la palabra: sudo systemctl start $ServerName.service
#### y la reemplaza con el contenido del documento: panel.txt
#### en el archivo de texto: start.sh
echo "========================================================================="
Print_Style "Configurando SetupMinecraft.sh para integrar el Panel" "$YELLOW"
sudo sed -i '/sudo systemctl start \$ServerName.service/ {
r panel.txt
d}' SetupMinecraft.sh
echo "========================================================================="
sleep 2s

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
   # echo "========================================================================="
   # Print_Style "Configurando SetupMinecraft.sh para integrar el Panel" "$YELLOW"
   # sudo sed -i "s/screen -r \$ServerName/bin\/bash panel.sh/g" SetupMinecraft.sh
   # sleep 2s
   # echo "========================================================================="


# Ejecutar SetupMinecraft.sh Modificado
echo "========================================================================="
Print_Style "Ejecutando SetupMinecraft.sh" "$MAGENTA"
sleep 2s
# curl $DirName/SetupMinecraft.sh | bash
/bin/bash SetupMinecraft.sh 
echo "========================================================================="
