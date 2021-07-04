  sudo systemctl start $ServerName.service

cd ~
  DirName=$(readlink -e ~)
  UserName=$(whoami)

echo "========================================================================="
echo "========================================================================="
echo "========================================================================="

  cd ~
  cd minecraftbe
  cd $ServerName
# Descargar panel.sh desde el repositorio
#     echo "========================================================================="
#     echo "Tomando panel.sh del repositorio..."
#     curl -H "Accept-Encoding: identity" -L -o panel.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
#     sudo chmod +x panel.sh
#     sudo sed -i "s:dirname:$DirName:g" panel.sh
#     sudo sed -i "s:username:$UserName:g" panel.sh
#     sudo sed -i "s:servername:$ServerName:g" panel.sh


# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web

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

cd ~

##### NOTA, Verificar si actualizó los Servername = servername, Dirname = dirname, Username = username
##### NOTA, Verificar si actualizó los Servername = $ServerName, Dirname = $DirName, Username = $UserName


# Compruebe si el servidor se está ejecutando
#      if ! screen -list | grep -q "\.$ServerName"; then
#        echo "¡El servidor no se está ejecutando actualmente!"
#        exit 1
#      else
#        sudo systemctl stop $ServerName
#        screen -S $ServerName -X quit
#      fi
#      echo "Servidor Minecraft $ServerName detenido."

# Cambio start.sh
echo "========================================================================="
Print_Style "Cambiando copia de seguridad a zip" "$YELLOW"
sudo sed -i "s/tar -pzvcf/zip -r/g" $DirName/minecraftbe/$ServerName/start.sh
sudo sed -i "s/.tar.gz/.zip/g" $DirName/minecraftbe/$ServerName/start.sh
sleep 2s
echo "========================================================================="

echo "========================================================================="
Print_Style "Cambiando respaldos de seguridad de 10 a 20" "$YELLOW"
sudo sed -i "s/-10/-20/g" $DirName/minecraftbe/$ServerName/start.sh
sleep 2s
echo "========================================================================="

# Cambio stop.sh
echo "========================================================================="
Print_Style "Traduciendo mensajes al detener el servidor" "$YELLOW"
sudo sed -i "s/Stopping server in/Deteniendo el Servidor en/g" $DirName/minecraftbe/$ServerName/stop.sh
sudo sed -i "s/seconds/segundos/g" $DirName/minecraftbe/$ServerName/stop.sh
sudo sed -i "s/Stopping server/Servidor detenido o cerrado/g" $DirName/minecraftbe/$ServerName/stop.sh
sleep 2s
echo "========================================================================="

# Cambio restart.sh
echo "========================================================================="
Print_Style "Traduciendo mensajes de reinicio en el servidor" "$YELLOW"
sudo sed -i "s/Server is restarting in/Reiniciando en/g" $DirName/minecraftbe/$ServerName/restart.sh
sudo sed -i "s/seconds/segundos/g" $DirName/minecraftbe/$ServerName/restart.sh
sudo sed -i "s/Closing server/Reiniciando servidor/g" $DirName/minecraftbe/$ServerName/restart.sh
sleep 2s
echo "========================================================================="


  # Eliminar scripts existentes
  sudo rm -rf cloud.sh back.sh panel.sh config.sh prop.sh
  sleep 2s
  cd ~
  sudo rm -rf uninstall.sh
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


  # Descargar cloud.sh desde el repositorio
  echo "Tomando cloud.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o cloud.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/cloud.sh
  chmod +x cloud.sh
  sudo sed -i "s:dirname:$DirName:g" cloud.sh
  sudo sed -i "s:servername:$ServerName:g" cloud.sh
  
  # Descargar back.sh desde el repositorio
  echo "Tomando back.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o back.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/back.sh
  chmod +x back.sh
  sudo sed -i "s:dirname:$DirName:g" back.sh
  sudo sed -i "s:servername:$ServerName:g" back.sh
  
  # Descargar config.sh desde el repositorio
  echo "Tomando config.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o config.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/config.sh
  chmod +x config.sh
  sudo sed -i "s:dirname:$DirName:g" config.sh
  sudo sed -i "s:servername:$ServerName:g" config.sh

  # Descargar prop.sh desde el repositorio
  echo "Tomando prop.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o prop.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/prop.sh
  chmod +x prop.sh
  sudo sed -i "s:dirname:$DirName:g" prop.sh
  sudo sed -i "s:servername:$ServerName:g" prop.sh

  cd ~
  # Descargar uninstall.sh desde el repositorio
  echo "Tomando uninstall.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o uninstall.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/uninstall.sh
  chmod +x uninstall.sh
  sudo sed -i "s:dirname:$DirName:g" uninstall.sh
  sudo sed -i "s:servername:$ServerName:g" uninstall.sh

cd ~
cd minecraftbe
  # Descargar start.txt desde el repositorio
  echo "Tomando start.txt del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o start.txt https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/start.txt
  chmod +x start.txt
  sudo sed -i "s:dirname:$DirName:g" start.txt
  sudo sed -i "s:servername:$ServerName:g" start.txt


cd ~
cd minecraftbe
cd $ServerName

  # Descarga web.sh desde el repositorio
  echo "Tomando web.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o web.sh https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/raw/master/web.sh
  chmod +x web.sh

Print_Style "Configurando el Panel de Administración..." "$GREEN"
sleep 3s

cd ~
cd minecraftbe

sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
Print_Style "Creando directorios y archivos del panel..." "$CYAN"
sudo mv panel $DirName/minecraftbe/
sudo mv index.php $DirName/minecraftbe/
sudo mv shell.php $DirName/minecraftbe/
#  sudo mv uninstall.sh $DirName/


#  sudo mv /root/minecraftbe/parceros/backups /root/drive/minecraftbe/back_23_05_2021
# sudo mv /home/home /root/drive/minecraftbe
## sudo rsync -avz $DirName/minecraftbe/$ServerName/backups/ $DirName/cloudname/foldername
cd ~
cd minecraftbe
if [ ! -d "config" ]; then
  Print_Style "Instalando Repositorios de Configuración..." "$YELLOW"
  sudo mv Minecraft-BE-Server-Panel-Admin-Web/config $DirName/minecraftbe/
  sleep 1s  
else
Print_Style "Directorio Config" "$YELLOW"

cd config
  Print_Style "=========================  DIRECTORIO CONFIG  ===========================" "$CYAN"
  ls -l
  Print_Style "=========================================================================" "$CYAN"
  sleep 3s
    echo "========================================================================="
    Print_Style "Sincronizando y haciendo respaldo a los archivos de configuración..." "$RED"

# Crear directorios config/whitelist/all_backub si no existen
if [ ! -d "backub_config" ]; then
    sudo mkdir $DirName/backub_config/config
    sudo mkdir $DirName/backub_config/whitelist
    sudo mkdir $DirName/backub_config/all_backub
fi

echo "Comprimiendo directorio de archivos config"
sudo zip -r $DirName/backub_config/config/$(date +%Y.%m.%d_%H\:%M\:%S_Config_$ServerName).zip $DirName/minecraftbe/config

echo "Sincronizando whitelist.json"
sudo rsync -avz --include='*.json' --include='*.properties' --exclude='*' $DirName/minecraftbe/$ServerName/ $DirName/backub_config/whitelist

echo "Comprimiendo todas las configuraciones"
sudo zip -r $DirName/backub_config/all_backub/$(date +%Y.%m.%d_%H\:%M\:%S_Backup_$ServerName).zip $DirName/backub_config

    echo "========================================================================="
    sleep 3s
fi

cd ~
cd minecraftbe
#Permisos del servidor
sudo chmod -R 775 $DirName/minecraftbe


echo "========================================================================="
if [ -e "/etc/nginx/sites-available/misitio.conf" ]; then
Print_Style "¡El Servidor Web ya existe! Actualizando Panel Web..." "$YELLOW"
echo "========================================================================="
sleep 4s

echo "================CONFIGURACIÓN DEL SERVIDOR WEB================"
echo "========================================================================="
sudo sed -n "/server_name/p" /etc/nginx/sites-available/misitio.conf | sed 's/server_name/Url o IP del Servidor Web: ..... /'
sudo sed -n "/listen/p" /etc/nginx/sites-available/misitio.conf | sed 's/listen/Puerto del Servidor Web: ....... /'
sleep 3s

echo "========================================================================="
Print_Style "Verificando Servidor Web... " "$MAGENTA"
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
else
echo "========================================================================="
Print_Style "¡El Servidor Web No existe! Instalando Servidor..." "$YELLOW"
echo "========================================================================="
Print_Style "Instalando nginx y php..." "$MAGENTA"
sleep 4s
sudo apt install nginx -y
sudo apt update && sudo apt install php-fpm -y

echo "======================================================================================="
Print_Style "Creando archivos del Servidor web..." "$CYAN"
cd ~
cd minecraftbe
cd Minecraft-BE-Server-Panel-Admin-Web
sudo mv location $DirName/minecraftbe/
sudo mv ngnixsize $DirName/minecraftbe/
sudo mv misitio.conf $DirName/minecraftbe/

#### busca la linea de la palabra: # Retrieve latest version of Minecraft Bedrock dedicated server
#### y la reemplaza con el contenido del documento: start.txt
#### en el archivo de texto: start.sh
echo "========================================================================="
Print_Style "Configurando start.sh para copias de seguridad en la nube" "$YELLOW"
sudo sed -i '/# Retrieve latest version of Minecraft Bedrock dedicated server/ {
r start.txt
d}' $DirName/minecraftbe/$ServerName/start.sh
echo "========================================================================="
sleep 2s

cd ~
cd minecraftbe
# Modificar archivo default para integrar el servidio de php
#cd /
sudo chmod +x /etc/nginx/sites-available/default
echo "======================================================================================="
echo "======================================================================================="
Print_Style "Agreando index.php a Ngnix..." "$GREEN"
sleep 1s
echo "======================================================================================="
#sudo sed -i "s/# Allow non-root users to specify the allow_other or allow_root mount options./ Allow non-root users to specify the allow_other or allow_root mount options./g" >
sudo sed -i "s/index index.html index.htm index.nginx-debian.html;/index index.html index.php index.htm index.nginx-debian.html;/g" /etc/nginx/sites-available/default
sudo sed -n "/# Add index.php to/p" /etc/nginx/sites-available/default
sudo sed -n "/index index.html index.php index.htm index.nginx-debian.html;/p" /etc/nginx/sites-available/default
echo "======================================================================================="
sleep 2s
echo "======================================================================================"

echo "========================================================================="
Print_Style "Configurando location de PHP en Ngnix..." "$GREEN"
sleep 1s
sudo sed -i '/# pass PHP scripts to FastCGI server/ {
r location
d}' /etc/nginx/sites-available/default
echo "========================================================================="
sleep 2s

echo "========================================================================="
Print_Style "Configurando Servidor para subir archivos grandes" "$YELLOW"
sudo sed -i '/# server_tokens off;/ {
r ngnixsize
d}' /etc/nginx/nginx.conf
sleep 2s
echo "========================================================================="
sleep 2s

sudo rm -rf $DirName/minecraftbe/location
sudo rm -rf $DirName/minecraftbe/ngnixsize
sudo rm -rf $DirName/minecraftbe/start

echo "======================================================================================="
Print_Style "Obteniendo Resultados..." "$MAGENTA"
sleep 2s
sudo sed -n "/# pass PHP scripts/p" /etc/nginx/sites-available/default
sudo sed -n "/location ~ /p" /etc/nginx/sites-available/default
sudo sed -n "/include snippets\/fastcgi-php.conf;/p" /etc/nginx/sites-available/default
sudo sed -n "/fastcgi_pass unix:\/var\/run\/php\/php7.4-fpm.sock;/p" /etc/nginx/sites-available/default
echo "======================================================================================="
sleep 2s

echo "======================================================================================="
Print_Style "cargando la configuración del servidor web..." "$YELLOW"
sudo systemctl reload nginx
sleep 1s
echo "======================================================================================="

echo "======================================================================================="
Print_Style "Sincronizando Pagina Web con el Servidor de Minecraft..." "$GREEN"
sleep 2s

echo "======================================================================================="
Print_Style "Creando archivo misitio.conf..." "$CYAN"
sudo rm -rf /etc/nginx/sites-available/misitio.conf
sudo rm -rf /etc/nginx/sites-enabled/misitio.conf
#sudo rm -rf /etc/nginx/sites-available/default
#sudo rm -rf /etc/nginx/sites-enabled/default
sleep 1s
echo "======================================================================================="
sleep 1s
sudo mv $DirName/minecraftbe/misitio.conf /etc/nginx/sites-available

echo "======================================================================================="
Print_Style "Mostrando la versión php instalada..." "$CYAN"
sleep 1s
sudo php -v
echo "======================================================================================="

# Digitar la version php
echo "========================================================================="
echo "Configurar versión de php instalada:"
Print_Style "Ejemplo Valores permitidos: "7.2" o "7.4" " "$CYAN"
read_with_prompt VePHP "Versión PHP" 7.4
echo "========================================================================="

# Ver la ip del equipo
Print_Style "Dirección IP del Servidor..." "$RED"
hostname -I
sleep 1s

# Digitar la ip del equipo
echo "========================================================================="
Print_Style "Introduzca la IP - IPV4 del servidor: " "$MAGENTA"
read_with_prompt IPV4 "Url o dirección IP del servidor"
echo "========================================================================="

# Digitar el puerto a utilizar
echo "========================================================================="
Print_Style "Introduzca el puerto para el servidor web, Puerto predeterminado: 80" "$MAGENTA"
read_with_prompt Port "Numero del Puerto" 80
echo "========================================================================="

Print_Style "Configurando la pagina web $IPV4:$Port/index.php..." "$YELLOW"
sudo sed -i "s/MiIPV4/$IPV4/g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/MiIPV4/$IPV4/g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s/80/$Port/g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/default
echo "========================================================================="
sleep 2s
#sudo sh -c "echo '$IPV4' >> minecraftbe/server.ip"

echo "========================================================================="
Print_Style "Habilitando sitio añadido..." "$CYAN"
cd /
cd etc
cd nginx
cd sites-enabled
sudo ln -s ../sites-available/misitio.conf misitio.conf
echo "========================================================================="
sleep 1s

echo "========================================================================="
Print_Style "Configurando Permisos..." "$YELLOW"
cd ~
#Permisos de usuario:grupo y acceso sh desde la web
#Creando grupo Samba
sudo crontab -r -i
sudo userdel -r www-data
sleep 3s
sudo useradd www-data
sudo addgroup www-data
sudo usermod -aG sudo www-data
sudo usermod $UserName -aG www-data
sudo usermod www-data -aG sudo
echo "========================================================================="
echo "Se ha creado el usuario y el grupo www-data"
Print_Style "Por Favor digite la contraseña para el usuario www-data dos veces: " "$MAGENTA"
sudo smbpasswd -a www-data
echo "========================================================================="

sudo chown -hR $UserName:www-data minecraftbe
sudo sed -i '/www-data ALL=(ALL) NOPASSWD: ALL/d' /etc/sudoers
sudo sed -i '$a www-data ALL=(ALL) NOPASSWD: ALL' /etc/sudoers
sudo sed -n "/www-data ALL=(ALL) NOPASSWD: ALL/p" /etc/sudoers
sudo sed -i '/$UserName ALL=(ALL) NOPASSWD: ALL/d' /etc/sudoers
sudo sed -i '$a $UserName ALL=(ALL) NOPASSWD: ALL' /etc/sudoers
sudo sed -n "/$UserName ALL=(ALL) NOPASSWD: ALL/p" /etc/sudoers
sudo sed -i '/\%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab/d' /etc/sudoers
sudo sed -i '$a \%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab' /etc/sudoers
sudo sed -n "/\%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab/p" /etc/sudoers

sleep 2s

echo "========================================================================="
Print_Style "Verificando Servidor Web... " "$MAGENTA"
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
Print_Style "Reiniciando Servidor Web... " "$MAGENTA"
sleep 1s
sudo systemctl restart nginx
echo "========================================================================="

echo "."
echo "."

echo "========================================================================="
Print_Style "PANEL DE ADMINISTRACIÓN WEB CREADO" "$GREEN"
echo "========================================================================="
echo "========================================================================="
Print_Style "Ingrese desde el navegador web con:" "$CYAN"
Print_Style "http://$IPV4:$Port/" "$RED"
echo "========================================================================="
fi
#Elimina repositorio clonado
cd ~
cd minecraftbe
sleep 1s
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web


  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/js/logs.js
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/permisos/permisos.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/editar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/ver_propiedades.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/propiedades/ver_archivo_srv.php
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
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/reload.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/_formulario.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/navbar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/signup.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/eliminar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/CargarFicheros.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/config/srvdatos.json
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/shell.php
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
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/usuarios/reload.sh
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/mundo/eliminar.php
  sudo sed -i "s:dirnameusr:$DirName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:dirname:$DirName:g" /etc/nginx/sites-available/misitio.conf
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/shell.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/editar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/respaldos/eliminar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sto.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/sta.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/tablero/res.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/usuarios/reload.sh
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/includes/index.php
  sudo sed -i "s:username:$UserName:g" /etc/sudoers
  sudo sed -i "s:PuertoIPV4:$PortIPV4:g" $DirName/minecraftbe/config/srvdatos.json
  sudo sed -i "s:PuertoIPV6:$PortIPV6:g" $DirName/minecraftbe/config/srvdatos.json

  sudo rm -rf $DirName/install.sh
  sudo rm -rf $DirName/panel.txt
  sudo rm -rf $DirName/panel.sh
  sudo rm -rf $DirName/downloads
  sudo rm -rf $DirName/backups
  sudo rm -rf $DirName/logs


echo ""
echo ""
echo ""
echo ""
echo "         _ _ _ _ _ _"
echo "      ._|=|=|=|=|=|=|_._._"
echo "      |=|_|_|_|_|_|_|=|X|x|"
echo "        |=|=|=|=|=|_|_|x|X|"
echo "                  |X|_|_|=|_"
echo "              ._|X|x|X|_|_|=|"
echo "            ._|X|x|X| |=|_|=|"
echo "          ._|X|x|X|   |=|_|=|"
echo "        ._|X|x|X|     |=|_|=|"
echo "      ._|X|x|X|       |=|_|=|"
echo "    ._|X|x|X|           |=|"
echo "  ._|X|x|X|"
echo "._|X|x|X|"
echo "|X|x|X|"
echo "|X|X|"
echo ""
echo ""
echo ""
echo ""
sleep 3s
echo ""
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
sudo sed -n "/white-list=/p" server.properties | sed 's/white-list=/Permiso de Jugadores: ... /'
sudo sed -n "/level-seed=/p" server.properties | sed 's/level-seed=/Número de Semilla: ...... /'
sudo sed -n "/server-port=/p" server.properties | sed 's/server-port=/Puerto IPV4: ............ /'
sudo sed -n "/server-portv6=/p" server.properties | sed 's/server-portv6=/Puerto IPV6: ............ /'
echo "========================================================================="
sleep 3s
sudo systemctl restart nginx

# Configuración Completada
  #  Print_Style  "================Iniciando Servidor: $ServerName ================" "$MAGENTA"
  #  sleep 2s
  #  sudo systemctl start $ServerName.service

# Dormir por 8 segundos para que el servidor inicie
  #  sleep 8s
  #  screen -r $ServerName