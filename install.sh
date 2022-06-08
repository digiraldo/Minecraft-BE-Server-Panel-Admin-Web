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
# Instale las dependencias necesarias para ejecutar el servidor de Minecraft en segundo plano
Print_Style "Instalando screen, unzip, sudo, net-tools, wget y otras dependencias..." "$CYAN"
if [ ! -n "`which sudo`" ]; then
  apt update && apt install sudo -y
fi
sudo apt update
sudo apt-get install php-zip -y
sudo apt-get install zip gzip tar -y
sudo apt-get install curl -y
sudo apt install jq -y
  # sudo apt install -y software-properties-common
  # sudo add-apt-repository universe -y
  # sudo apt-get install ssh -y
  # sudo apt install git -y
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
sleep 2s
curl -H "Accept-Encoding: identity" -L -o SetupMinecraft.sh https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
sudo chmod 777 SetupMinecraft.sh
sleep 2s
echo "========================================================================="
  

else
echo "Tomando SetupMinecraft.sh del repositorio..."
sleep 2s
curl -H "Accept-Encoding: identity" -L -o SetupMinecraft.sh https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/SetupMinecraft.sh
sudo chmod 777 SetupMinecraft.sh
sleep 2s
fi


# Descargar panel.txt desde el repositorio
     # echo "========================================================================="
     # echo "Tomando panel.txt del repositorio..."
     # curl -H "Accept-Encoding: identity" -L -o panel.txt https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.txt
     # sudo chmod 777 panel.txt

     # cd ~

#### busca la linea de la palabra: sudo systemctl start $ServerName.service
#### y la reemplaza con el contenido del documento: panel.txt
#### en el archivo de texto: start.sh
     # echo "========================================================================="
     # Print_Style "Configurando SetupMinecraft.sh para integrar el Panel" "$YELLOW"
     # sudo sed -i '/sudo systemctl start \$ServerName.service/ {
     # r panel.txt
     # d}' SetupMinecraft.sh
     # echo "========================================================================="
     # sleep 2s


# Descargar panel.sh desde el repositorio
echo "========================================================================="
echo "Tomando panel.sh del repositorio..."
curl -H "Accept-Encoding: identity" -L -o panel.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
sudo chmod 777 panel.sh

cd ~

#### busca la linea de la palabra: sudo systemctl start $ServerName.service
#### y la reemplaza con el contenido del documento: panel.sh
#### en el archivo de texto: start.sh
echo "========================================================================="
Print_Style "Configurando SetupMinecraft.sh para integrar el Panel" "$YELLOW"
sudo sed -i '/sudo systemctl start "\$ServerName.service"/ {
r panel.sh
d}' SetupMinecraft.sh
echo "========================================================================="
sleep 2s

# No especiales $, *, ., [, y \

#  Print_Style "Cambiando Traduciendo Palabras" "$BLUE"
#  sleep 2s
#  sudo sed -i "s/ingles/espanol/g" Ubicacion_Archivo_a_Modificar

# Cambio Preguntas a Español
echo "========================================================================="
Print_Style "Traduciendo Configuracion del Servidor" "$YELLOW"
echo "========================================================================="
echo "========================================================================="
Print_Style "Traduciendo Ingreso Ruta del Directorio" "$BLUE"
sleep 2s
sudo sed -i "s/Enter directory path to install Minecraft BE Server/Ingrese la ruta del directorio para instalar Minecraft BE Server/g" SetupMinecraft.sh
sudo sed -i "s/default ~/predeterminado ~/g" SetupMinecraft.sh
sudo sed -i "s/Directory Path/Ruta de Directorio/g" SetupMinecraft.sh

Print_Style "Traduciendo Ingreso de nombre corto" "$BLUE"
sleep 2s
sudo sed -i "s/Enter a short one word label for a new or existing server/Ingrese una etiqueta corta de una palabra para un servidor nuevo o existente/g" SetupMinecraft.sh
sudo sed -i "s/don't use minecraftbe/no uses minecraftbe/g" SetupMinecraft.sh
sudo sed -i "s/It will be used in the folder name and service name/Se utilizará en el nombre de la carpeta y el nombre del servicio./g" SetupMinecraft.sh

Print_Style "Traduciendo Etiqueta o apodo del Servidor" "$BLUE"
sleep 2s
sudo sed -i "s/Server Label/Etiqueta del Servidor/g" SetupMinecraft.sh

Print_Style "Traduciendo Ingreso IPV4 e IPV6" "$BLUE"
sleep 2s
# IPV4
sudo sed -i "s/Enter server IPV4 port/Ingrese el Puerto IPV4 del Servidor/g" SetupMinecraft.sh
sudo sed -i "s/default 19132/por defecto 19132/g" SetupMinecraft.sh
sudo sed -i "s/ingles/Puerto IPV4 del Servidor/g" SetupMinecraft.sh
# IPV6
sudo sed -i "s/Enter server IPV6 port/Ingrese el puerto IPV6 del Servidor/g" SetupMinecraft.sh
sudo sed -i "s/default 19133/por defecto 19133/g" SetupMinecraft.sh
sudo sed -i "s/Server IPV6 Port/Puerto IPV6 del Servidor/g" SetupMinecraft.sh

Print_Style "Traduciendo Inicio del Servidor" "$BLUE"
sleep 2s
sudo sed -i "s/Start Minecraft server at startup automatically/Iniciar el servidor de Minecraft al inicio automáticamente/g" SetupMinecraft.sh

Print_Style "Traduciendo Hacer copias de Seguridad" "$BLUE"
sleep 2s
sudo sed -i "s/Automatically restart and backup server at 4am daily/Reiniciar y hacer copia del mundo a las 4am todos los dias/g" SetupMinecraft.sh
sleep 2s

Print_Style "Traduciendo Configuración Reinicio" "$BLUE"
sleep 2s
sudo sed -i "s/Your time zone is currently set to/Su zona horaria está configurada actualmente en/g" SetupMinecraft.sh
sudo sed -i "s/Current system time/Hora actual del sistema/g" SetupMinecraft.sh
sudo sed -i "s/You can adjust\/remove the selected reboot time later by typing crontab -e or running SetupMinecraft.sh again./You can adjust\/remove the selected reboot time later by typing crontab -e or running SetupMinecraft.sh again./g" SetupMinecraft.sh
sudo sed -i "s/Daily restart scheduled.  To change time or remove automatic restart type crontab -e/Reinicio diario programado. Para cambiar la hora o eliminar el reinicio automático, escriba crontab -e/g" SetupMinecraft.sh
sudo sed -i "s/Setup is complete.  Starting Minecraft server. To view the console use the command screen -r or check the logs folder if the server fails to start/La instalación está completa. Iniciando el Servidor de Minecraft. Para ver la consola, use el comando screen -r o verifique la carpeta de registros si el Servidor no se inicia/g" SetupMinecraft.sh
sudo sed -i "s/Grabbing/Agarrando/g" SetupMinecraft.sh
sudo sed -i "s/from repository.../desde el repositorio .../g" SetupMinecraft.sh
sudo sed -i "s/Setup is complete.  Starting Minecraft \$ServerName server.  To view the console use the command screen -r or check the logs folder if the server fails to start/La instalación está completa. Iniciando el servidor Minecraft \$ServerName. Para ver la consola, use el comando screen -r o verifique la carpeta de registros si el servidor no se inicia/g" SetupMinecraft.sh
sudo sed -i "s/Minecraft server has started.  Type screen -r \$ServerName to view the running server/El servidor de Minecraft se ha iniciado. Escriba screen -r \$ServerName para ver el servidor en ejecución/g" SetupMinecraft.sh
sudo sed -i "s/You can adjust\/remove the selected reboot time later by typing crontab -e or running SetupMinecraft.sh again/Puede ajustar\/eliminar el tiempo de reinicio seleccionado más tarde escribiendo crontab -e o ejecutando SetupMinecraft.sh nuevamente/g" SetupMinecraft.sh
sudo sed -i "s/Don't forget to set up port forwarding on your router!  The default port is 19132/¡No olvide configurar el reenvío de puertos en su enrutador! El puerto predeterminado es 19132/g" SetupMinecraft.sh
echo "========================================================================="


# Desactivando eliminacion de SetupMinecraft.sh para que no lo descargue de nuevo
echo "========================================================================="
Print_Style "Desactivando eliminacion de SetupMinecraft.sh" "$YELLOW"
sudo sed -i "s/-e \"SetupMinecraft.sh\"/-e \"SetupMinecraft_old.sh\"/g" SetupMinecraft.sh
sudo sed -i "s/rm -f/# rm -f/g" SetupMinecraft.sh
sudo sed -i "s/curl https/# curl https/g" SetupMinecraft.sh
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
sleep 4s
# curl $DirName/SetupMinecraft.sh | bash
/bin/bash SetupMinecraft.sh 
echo "========================================================================="
