#!/bin/bash
# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web
# Crear Usuario https://noviello.it/es/como-crear-un-usuario-de-sudo-en-linux-debian/


  DirName=$(readlink -e ~)
  UserName=$(whoami)
  Directorio=minecraftbe
  BackConfig=backub_config

cd ~
# Instale las dependencias necesarias para ejecutar el servidor de Minecraft en segundo plano
echo -e "\e[36m Instalando screen, unzip, sudo, net-tools, wget y otras dependencias... \e[0m"
if [ ! -n "`which sudo`" ]; then
  apt update && apt install sudo -y
fi
sudo apt update
# sudo apt-get install php-zip -y
sudo apt-get install zip gzip tar -y
sudo apt-get install curl -y
sudo apt install jq -y
sudo apt-get install git -y

sudo apt install ca-certificates apt-transport-https -y
sudo apt install software-properties-common -y

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
  echo -e "\e[36m ===================SERVIDORES MONTADOS EN $BackConfig ==================== \e[0m"
  ls -l
  echo -e "\e[36m ========================================================================= \e[0m"
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
  echo -e "\e[36m ===================SERVIDORES MONTADOS EN $Directorio ==================== \e[0m"
  ls -l
  echo -e "\e[36m ========================================================================= \e[0m"
  sleep 6s
fi


cd ~

# Descargar SetupMinecraft.sh desde el repositorio de James A. Chambers - https://jamesachambers.com
# Repositorio de GitHub: https://github.com/TheRemote/MinecraftBedrockServer
echo "========================================================================="
if [ -e "SetupMinecraft.sh" ]; then
echo -e "\e[33m ¡El Instalador ya existe! Actualizandolo... \e[0m"
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
echo -e "\e[33m Configurando SetupMinecraft.sh para integrar el Panel \e[0m"
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
echo -e "\e[33m Traduciendo Configuracion del Servidor \e[0m" #AMARILLO
echo "========================================================================="
echo "========================================================================="
echo -e "\e[36m Traduciendo Ingreso Ruta del Directorio \e[0m" #CIAN
sleep 2s
sudo sed -i "s/Enter directory path to install Minecraft BE Server/Ingrese la ruta del directorio para instalar Minecraft BE Server/g" SetupMinecraft.sh
sudo sed -i "s/default ~/predeterminado ~/g" SetupMinecraft.sh
sudo sed -i "s/Directory Path/Ruta de Directorio/g" SetupMinecraft.sh

echo -e "\e[32m Traduciendo Ingreso de nombre corto \e[0m" #VERDE
sleep 2s
sudo sed -i "s/Enter a short one word label for a new or existing server/Ingrese una etiqueta corta de una palabra para un servidor nuevo o existente/g" SetupMinecraft.sh
sudo sed -i "s/don't use minecraftbe/no uses minecraftbe/g" SetupMinecraft.sh
sudo sed -i "s/It will be used in the folder name and service name/Se utilizará en el nombre de la carpeta y el nombre del servicio./g" SetupMinecraft.sh

echo -e "\e[36m Traduciendo Etiqueta o apodo del Servidor \e[0m" #CIAN
sleep 2s
sudo sed -i "s/Server Label/Etiqueta del Servidor/g" SetupMinecraft.sh

echo -e "\e[32m Traduciendo Ingreso IPV4 e IPV6 \e[0m" #VERDE
sleep 2s
# IPV4
sudo sed -i "s/Enter server IPV4 port/Ingrese el Puerto IPV4 del Servidor/g" SetupMinecraft.sh
sudo sed -i "s/default 19132/por defecto 19132/g" SetupMinecraft.sh
sudo sed -i "s/ingles/Puerto IPV4 del Servidor/g" SetupMinecraft.sh
# IPV6
sudo sed -i "s/Enter server IPV6 port/Ingrese el puerto IPV6 del Servidor/g" SetupMinecraft.sh
sudo sed -i "s/default 19133/por defecto 19133/g" SetupMinecraft.sh
sudo sed -i "s/Server IPV6 Port/Puerto IPV6 del Servidor/g" SetupMinecraft.sh

echo -e "\e[36m Traduciendo Inicio del Servidor \e[0m" #CIAN
sleep 2s
sudo sed -i "s/Start Minecraft server at startup automatically/Iniciar el servidor de Minecraft al inicio automáticamente/g" SetupMinecraft.sh

echo -e "\e[32m Traduciendo Hacer copias de Seguridad \e[0m" #VERDE
sleep 2s
sudo sed -i "s/Automatically restart and backup server at 4am daily/Reiniciar y hacer copia del mundo a las 4am todos los dias/g" SetupMinecraft.sh
sleep 2s

echo -e "\e[36m Traduciendo Configuración Reinicio \e[0m" #CIAN
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
echo -e "\e[33m Desactivando eliminacion de SetupMinecraft.sh \e[0m" #AMARILLO
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
echo -e "\e[35m Ejecutando SetupMinecraft.sh \e[0m" #MORADO
sleep 4s
# curl $DirName/SetupMinecraft.sh | bash
/bin/bash SetupMinecraft.sh 
echo "========================================================================="

