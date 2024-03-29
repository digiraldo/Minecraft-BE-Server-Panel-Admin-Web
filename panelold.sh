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

cd ~
isitio.conf
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
  sudo rm -rf archivos.php
  sudo rm -rf location
  sudo rm -rf misitio.conf
  sudo rm -rf web.sh
  
  echo -e "\e[36m ==========================SERVIDORES MONTADOS============================ \e[0m" #CIAN
  sleep 2s
  ls -l
  echo -e "\e[36m ========================================================================= \e[0m" #CIAN
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
  # Descargar start.txt desde el repositorio
  echo "Tomando start.txt del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o start.txt https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/start.txt
  chmod +x start.txt
  sudo sed -i "s:dirname:$DirName:g" start.txt
  sudo sed -i "s:servername:$ServerName:g" start.txt

#### busca la linea de la palabra: # Retrieve latest version of Minecraft Bedrock dedicated server
#### y la reemplaza con el contenido del documento: start.txt
#### en el archivo de texto: start.sh
echo "========================================================================="
echo -e "\e[33m Configurando start.sh para copias de seguridad en la nube \e[0m" #AMARILLO
sudo sed -i '/# Retrieve latest version of Minecraft Bedrock dedicated server/ {
r start.txt
d}' $DirName/minecraftbe/$ServerName/start.sh
echo "========================================================================="
sleep 2s

# Cambio start.sh
echo "========================================================================="
echo -e "\e[33m Cambiando copia de seguridad a zip \e[0m" #AMARILLO
sudo sed -i "s/tar -pzvcf/zip -r/g" $DirName/minecraftbe/$ServerName/start.sh
sudo sed -i "s/.tar.gz/.zip/g" $DirName/minecraftbe/$ServerName/start.sh
sleep 2s
echo "========================================================================="

echo "========================================================================="
echo -e "\e[33m Cambiando respaldos de seguridad de 10 a 20 \e[0m" #AMARILLO
sudo sed -i "s/-10/-20/g" $DirName/minecraftbe/$ServerName/start.sh
sleep 2s
echo "========================================================================="

# Cambio stop.sh
echo "========================================================================="
echo -e "\e[33m Traduciendo mensajes al detener el servidor \e[0m" #AMARILLO
sudo sed -i "s/Stopping server in/Deteniendo el Servidor en/g" $DirName/minecraftbe/$ServerName/stop.sh
sudo sed -i "s/seconds/segundos/g" $DirName/minecraftbe/$ServerName/stop.sh
sudo sed -i "s/Stopping server/Servidor detenido o cerrado/g" $DirName/minecraftbe/$ServerName/stop.sh
sleep 2s
echo "========================================================================="

# Cambio restart.sh
echo "========================================================================="
echo -e "\e[33m Traduciendo mensajes de reinicio en el servidor \e[0m" #AMARILLO
sudo sed -i "s/Server is restarting in/Reiniciando en/g" $DirName/minecraftbe/$ServerName/restart.sh
sudo sed -i "s/seconds/segundos/g" $DirName/minecraftbe/$ServerName/restart.sh
sudo sed -i "s/Closing server/Reiniciando servidor/g" $DirName/minecraftbe/$ServerName/restart.sh
sleep 2s
echo "========================================================================="

cd ~
cd minecraftbe
cd $ServerName

  # Descarga web.sh desde el repositorio
  echo "Tomando web.sh del repositorio..."
  curl -H "Accept-Encoding: identity" -L -o web.sh https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/raw/master/web.sh
  chmod +x web.sh

echo -e "\e[32m Configurando el Panel de Administración... \e[0m" #VERDE
sleep 3s

cd ~
cd minecraftbe

sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
echo -e "\e[36m Creando directorios y archivos del panel... \e[0m" #CIAN
sudo mv panel $DirName/minecraftbe/
sudo mv index.php $DirName/minecraftbe/
sudo mv shell.php $DirName/minecraftbe/
sudo mv archivos.php $DirName/minecraftbe/
#  sudo mv uninstall.sh $DirName/


#  sudo mv /root/minecraftbe/parceros/backups /root/drive/minecraftbe/back_23_05_2021
# sudo mv /home/home /root/drive/minecraftbe
## sudo rsync -avz $DirName/minecraftbe/$ServerName/backups/ $DirName/cloudname/foldername
cd ~
cd minecraftbe
if [ ! -d "config" ]; then
  echo -e "\e[33m Instalando Repositorios de Configuración... \e[0m" #AMARILLO
  sudo mv Minecraft-BE-Server-Panel-Admin-Web/config $DirName/minecraftbe/
  sleep 1s  
else
echo -e "\e[33m Directorio Config \e[0m" #AMARILLO

cd config
  echo -e "\e[36m =========================  DIRECTORIO CONFIG  =========================== \e[0m" #CIAN
  ls -l
  echo -e "\e[36m ========================================================================= \e[0m" #CIAN
  sleep 3s
    echo "========================================================================="
    echo -e "\e[31m Sincronizando y haciendo respaldo a los archivos de configuración... \e[0m" #ROJO

# Crear directorios config/allowlist/all_backub si no existen
if [ ! -d "backub_config" ]; then
    sudo mkdir $DirName/backub_config/config
    sudo mkdir $DirName/backub_config/allowlist
    sudo mkdir $DirName/backub_config/all_backub
fi

echo "Comprimiendo directorio de archivos config"
sudo zip -r $DirName/backub_config/config/$(date +%Y.%m.%d_%H\:%M\:%S_Config_$ServerName).zip $DirName/minecraftbe/config

echo "Sincronizando allowlist.json"
sudo rsync -avz --include='*.json' --include='*.properties' --exclude='*' $DirName/minecraftbe/$ServerName/ $DirName/backub_config/allowlist

echo "Comprimiendo todas las configuraciones"
sudo zip -r $DirName/backub_config/all_backub/$(date +%Y.%m.%d_%H\:%M\:%S_Backup_$ServerName).zip $DirName/backub_config

    echo "========================================================================="
    sleep 3s
fi

cd ~
cd minecraftbe

#  echo "========================================================================="
#  if [ -e "/etc/nginx/sites-available/misitio.conf" ]; then
#  Print_Style "¡El Servidor Web ya existe! Actualizando Panel Web..." "$YELLOW"
#  echo "========================================================================="
#  sleep 4s

#  echo "================CONFIGURACIÓN DEL SERVIDOR WEB================"
#  echo "========================================================================="
#  sudo sed -n "/server_name/p" /etc/nginx/sites-available/misitio.conf | sed 's/server_name/Url o IP del Servidor Web: ..... /'
#  sudo sed -n "/listen/p" /etc/nginx/sites-available/misitio.conf | sed 's/listen/Puerto del Servidor Web: ....... /'
#  Print_Style "Verificando srvdatos.json" "$MAGENTA"
jq ".[8].spain" srvdatos.json
jq ".[12].spain" srvdatos.json
sleep 3s

echo "========================================================================="
# Print_Style "Verificando Servidor Web... " "$MAGENTA"
# sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
# =========================================================================
# =========================================================================
# =========================================================================
else
# =========================================================================
# =========================================================================
# =========================================================================
echo "========================================================================="
echo -e "\e[33m ¡El Servidor Web No existe! Instalando Servidor... \e[0m" #AMARILLO
echo "========================================================================="

echo -e "\e[7;38m ======================================== \e[0m" #INVERSO
echo -e "\e[5;38m Instalación del servidor web Nginx y PHP \e[0m" #PARPADEO
echo -e "\e[7;38m ======================================== \e[0m" #INVERSO
sleep 3s

echo -e "\e[35m Instalando php... \e[0m" #MORADO
sudo apt update && sudo apt install php php-fpm -y
# sudo apt update && sudo apt install php8.1 php8.1-fpm -y

# Instalar otras versiones
sudo apt-get update
# sudo apt -y install software-properties-common
# sudo add-apt-repository ppa:ondrej/php
# sudo apt update && sudo apt-get install php7.4 php7.4-fpm php7.4-cli -y


echo -e "\e[35m Instalando nginx... \e[0m" #MORADO
# sudo apt install nginx -y

##### https://www.youtube.com/watch?v=XJINEDKagL0


echo "======================================================================================="
echo -e "\e[36m Creando archivos del Servidor web... \e[0m" #CIAN
cd ~
cd minecraftbe
cd Minecraft-BE-Server-Panel-Admin-Web
sudo mv location $DirName/minecraftbe/
sudo mv ngnixsize $DirName/minecraftbe/
sudo mv misitio.conf $DirName/minecraftbe/

cd ~
cd minecraftbe
# Modificar archivo default para integrar el servidio de php
#cd /
sudo chmod +x /etc/nginx/sites-available/default
echo "======================================================================================="
echo "======================================================================================="
echo -e "\e[32m Agreando index.php a Ngnix... \e[0m" #VERDE
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
echo -e "\e[32m Configurando location de PHP en Ngnix... \e[0m" #VERDE
sleep 1s
sudo sed -i '/# pass PHP scripts to FastCGI server/ {
r location
d}' /etc/nginx/sites-available/default
echo "========================================================================="
sleep 2s

echo "========================================================================="
echo -e "\e[33m Configurando Servidor para subir archivos grandes \e[0m" #AMARILLO
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
echo -e "\e[35m Obteniendo Resultados... \e[0m" #MORADO
sleep 2s
sudo sed -n "/# pass PHP scripts/p" /etc/nginx/sites-available/default
sudo sed -n "/location ~ /p" /etc/nginx/sites-available/default
sudo sed -n "/include snippets\/fastcgi-php.conf;/p" /etc/nginx/sites-available/default
sudo sed -n "/fastcgi_pass unix:\/var\/run\/php\/php7.4-fpm.sock;/p" /etc/nginx/sites-available/default
echo "======================================================================================="
sleep 2s

echo "======================================================================================="
echo -e "\e[33m cargando la configuración del servidor web... \e[0m" #AMARILLO
sudo systemctl reload nginx
sleep 1s
echo "======================================================================================="

echo "======================================================================================="
echo -e "\e[32m Sincronizando Pagina Web con el Servidor de Minecraft... \e[0m" #VERDE
sleep 2s

echo "======================================================================================="
echo -e "\e[36m Creando archivo misitio.conf... \e[0m" #CIAN
sudo rm -rf /etc/nginx/sites-available/misitio.conf
sudo rm -rf /etc/nginx/sites-enabled/misitio.conf
#sudo rm -rf /etc/nginx/sites-available/default
#sudo rm -rf /etc/nginx/sites-enabled/default
sleep 1s
echo "======================================================================================="
sleep 1s
sudo mv $DirName/minecraftbe/misitio.conf /etc/nginx/sites-available

cd ~
cd minecraftbe
sudo cp version.php /var/www/html/
#sudo cp -r minecraftbe/ /var/www/goro/
#sudo cp -r directorio/ ruta_de_destino/nombre_copia

echo "======================================================================================="
echo -e "\e[36m Mostrando la versión php instalada... \e[0m" #CIAN
sleep 1s
sudo php -v
echo "======================================================================================="

# Digitar la version php
echo "========================================================================="
echo "Configurar versión de php instalada:"
echo -e "\e[36m Ejemplo Valores permitidos: "7.2" o "7.4" o "8.1" \e[0m" #CIAN
read_with_prompt VePHP "Versión PHP" 7.4
echo "========================================================================="

# Ver la ip del equipo

echo -e "\e[35m Dirección IP accesible o pública \e[0m" #MORADO
dirección IP accesible

echo -e "\e[31m Dirección IP del Servidor... \e[0m" #ROJO
hostname -I
MYIPV4=$(hostname -I)
# echo "$MYIPV4"


# Digitar la ip del equipo
echo "========================================================================="
echo -e "\e[35m Introduzca la IP - IPV4 del servidor:  $MYIPV4 \e[0m" #MORADO
read_with_prompt IPV4 "Url o dirección IP del servidor" $MYIPV4
echo "========================================================================="

# Digitar el puerto a utilizar
echo "========================================================================="
echo -e "\e[35m Introduzca el puerto para el servidor web, Puerto predeterminado: 80 \e[0m" #MORADO
read_with_prompt Port "Numero del Puerto" 80
echo "========================================================================="

echo -e "\e[33m Configurando la pagina web $IPV4:$Port/index.php... \e[0m" #AMARILLO
sudo sed -i "s:MiIPV4:$IPV4:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s:MiIPV4:$IPV4:g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s:PuertoIPV4:$PortIPV4:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s:PuertoIPV6:$PortIPV6:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/misitio.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/default
sudo sed -i "s:Dedicated Server:$ServerName:g" $DirName/minecraftbe/$ServerName/server.properties
echo "========================================================================="
sleep 2s
#sudo sh -c "echo '$IPV4' >> minecraftbe/server.ip"

echo "========================================================================="
echo -e "\e[36m Habilitando sitio añadido... \e[0m" #CIAN
cd /
cd etc
cd nginx
cd sites-enabled
# sudo ln -s ../sites-available/misitio.conf misitio.conf
sudo ln -s /etc/nginx/sites-available/misitio.conf misitio.conf
echo "========================================================================="
sleep 1s

echo "========================================================================="
echo -e "\e[33m Configurando Permisos... \e[0m" #AMARILLO
cd ~
#Permisos de usuario:grupo y acceso sh desde la web
#Creando grupo Samba
sudo crontab -r -i
sudo userdel -r www-data
sleep 3s
sudo useradd www-data
sleep 3s
sudo addgroup www-data
sudo usermod -aG sudo www-data
sudo usermod $UserName -aG www-data
sudo usermod www-data -aG sudo
sudo usermod -a -G www-data root
echo "========================================================================="
echo "Se ha creado el usuario y el grupo www-data"
  # Print_Style "Por Favor digite la contraseña para el usuario www-data dos veces: " "$MAGENTA"
  # sudo smbpasswd -a www-data
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
echo -e "\e[35m Verificando Servidor Web... \e[0m" #MORADO
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
echo -e "\e[35m Reiniciando Servidor Web...  \e[0m" #MORADO
sleep 1s
sudo systemctl restart nginx
echo "========================================================================="

echo "."
echo "."

echo "========================================================================="
echo -e "\e[32m PANEL DE ADMINISTRACIÓN WEB CREADO \e[0m" #VERDE
echo "========================================================================="
echo "========================================================================="
echo -e "\e[36m Ingrese desde el navegador web con: \e[0m" #CIAN
echo -e "\e[31m http://$IPV4:$Port/ \e[0m" #ROJO
echo "========================================================================="
fi

cd ~
cd minecraftbe
sudo cp version.php /var/www/html/
#sudo cp -r minecraftbe/ /var/www/goro/
#sudo cp -r directorio/ ruta_de_destino/nombre_copia

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
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/dar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/usuarios/_formulario.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/navbar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/includes/signup.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/index.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/mundo.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/subido.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/select.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/eliminar.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/panel/mundo/CargarFicheros.php
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/config/srvdatos.json
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/$ServerName/web.sh
  sudo sed -i "s:servername:$ServerName:g" $DirName/minecraftbe/shell.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/includes/index.php
  sudo sed -i "s:dirname:$DirName:g" $DirName/minecraftbe/panel/includes/signup.php
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
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/usuarios/dar.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/includes/index.php
  sudo sed -i "s:username:$UserName:g" $DirName/minecraftbe/panel/includes/signup.php
  sudo sed -i "s:username:$UserName:g" /etc/sudoers

  sudo rm -rf $DirName/install.sh
  sudo rm -rf $DirName/start.txt
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
echo -e "\e[7;38m ================CONFIGURACIÓN PREDETERMINADA DEL SERVIDOR================ \e[0m" #INVERSO
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

#Permisos del servidor
sudo chmod -R 775 $DirName/minecraftbe
sudo chown -hR $UserName:www-data minecraftbe

#Reinicio del servidor
sudo systemctl restart nginx


echo "========================================================================="
    echo -n "¿Mostrar Coordenadas en el Servidor Minecrft Bedrock? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Activar las coordenadas del servidor
      screen -Rd $ServerName -X stuff "gamerule showCoordinates true$(printf '\r')"
    fi
    
echo "========================================================================="
    echo -n "¿Activar propagar o expandir el fuego en el Servidor Minecrft Bedrock? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Activar las coordenadas del servidor
      screen -Rd $ServerName -X stuff "gamerule doFireTick true$(printf '\r')"
    fi
    
#echo "========================================================================="
#    echo -n "¿Activar que bloques deben tener gotas en el Servidor Minecrft Bedrock? (y/n)"
#    read answer < /dev/tty
#    if [ "$answer" != "${answer#[Yy]}" ]; then
#      # Activar las coordenadas del servidor
#      screen -Rd $ServerName -X stuff "gamerule doTileDrops true$(printf '\r')"
#    fi


# Configuración Completada
  #  Print_Style  "================Iniciando Servidor: $ServerName ================" "$MAGENTA"
  #  sleep 2s
  #  sudo systemctl start $ServerName.service

# Dormir por 8 segundos para que el servidor inicie
  #  sleep 8s
  #  screen -r $ServerName
  
echo "========================================================================="
echo -e "\e[32m emit-server-telemetry=true \e[0m" #VERDE
#  emit-server-telemetry=true
# Habilitar esta telemetria nos ayuda a mejorar el juego.


# sudo chmod -R 777 $DirName/minecraftbe
# sudo chmod -R 777 /etc/nginx/nginx.conf
    #    client_max_body_size = 3000M;
# sudo chmod -R 777 /etc/php/7.4/fpm/php.ini
    #    upload_max_filesize = 3000M
    #    post_max_size = 4000M
# sudo systemctl restart nginx
# sudo systemctl restart php7.4-fpm


# gamerule showcoordinates true
# sudo -u user screen -Rd cursiva -X stuff "gamerule showCoordinates true$(printf '\r')"
# sudo -u user screen -Rd cursiva -X stuff "gamerule showCoordinates false$(printf '\r')"

# sudo -u user screen -Rd cursiva -X stuff "allowlist reload$(printf '\r')"

# zip -r /home/user/minecraftbe/cursiva/backups/$(date +%Y.%m.%d_%H\:%M\:%S_cursiva).zip /home/user/minecraftbe/cursiva/worlds

# sudo chmod -R 777 /home/user/minecraftbe


# List of Minecraft Bedrock Commands
# https://www.pocketgamer.com/minecraft-pocket-edition/minecraft-bedrock-commands/
# https://beebom.com/minecraft-bedrock-commands/
# https://gamedb.gg/games/minecraft/item-ids-item-spawning-guide/
























#!/bin/bash
# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web
# Crear Usuario https://noviello.it/es/como-crear-un-usuario-de-sudo-en-linux-debian/

# Function to read input from user with a prompt
function read_with_prompt {
  variable_name="$1"
  prompt="$2"
  default="${3-}"
  unset $variable_name
  while [[ ! -n ${!variable_name} ]]; do
    read -p "$prompt: " $variable_name </dev/tty
    if [ ! -n "$(which xargs)" ]; then
      declare -g $variable_name=$(echo "${!variable_name}" | xargs)
    fi
    declare -g $variable_name=$(echo "${!variable_name}" | head -n1 | awk '{print $1;}' | tr -cd '[a-zA-Z0-9]._-')
    if [[ -z ${!variable_name} ]] && [[ -n "$default" ]]; then
      declare -g $variable_name=$default
    fi
    echo -n "$prompt : ${!variable_name} -- accept (y/n)?"
    read answer </dev/tty
    if [[ "$answer" == "${answer#[Yy]}" ]]; then
      unset $variable_name
    else
      echo "$prompt: ${!variable_name}"
    fi
  done
}

 # sudo systemctl start $ServerName.service

cd ~
  DirName=$(readlink -e ~)
  UserName=$(whoami)

echo "========================================================================="
echo "========================================================================="
echo "========================================================================="


# Creando directorio minecraftbe ---------------------------------------
cd ~
sudo mkdir $DirName/minecraftbe


echo -e "\e[32m Configurando el Panel de Administración... \e[0m" #VERDE
sleep 3s

cd ~
cd minecraftbe

sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
echo -e "\e[36m Creando directorios y archivos del panel... \e[0m" #CIAN
sudo mv panel $DirName/minecraftbe/
sudo mv index.php $DirName/minecraftbe/
sudo mv shell.php $DirName/minecraftbe/
sudo mv version.php $DirName/minecraftbe/
sudo mv archivos.php $DirName/minecraftbe/




sudo apt update


# Instalar Nginx
echo -e "\e[35m Instalando nginx... \e[0m" #MORADO
sudo apt install nginx -y


# verificar qué perfiles UFW están disponibles
echo "========================================================================="
echo -e "\e[33m Perfiles UFW disponibles \e[0m" #AMARILLO
sudo ufw app list
sleep 1s
#Available applications:
#  Nginx Full
#  Nginx HTTP
#  Nginx HTTPS
#  OpenSSH


#permitir el tráfico HTTP normal en el puerto 80
echo "========================================================================="
echo -e "\e[32m Configurando el Panel de Administración... \e[0m" #VERDE
sudo ufw allow 'Nginx HTTP'
sleep 1s



# verificar el cambio muestra que ahora se permite el tráfico HTTP
echo "========================================================================="
echo -e "\e[33m muestra si se permite el tráfico HTTP \e[0m" #AMARILLO
sudo ufw enable
sleep 1s
sudo ufw status
sleep 3s
# Status: active
# 
# To                         Action      From
# --                         ------      ----
# OpenSSH                    ALLOW       Anywhere
# Nginx HTTP                 ALLOW       Anywhere
# OpenSSH (v6)               ALLOW       Anywhere (v6)
# Nginx HTTP (v6)            ALLOW       Anywhere (v6)


echo "======================================================================================="
echo -e "\e[36m Creando archivos del Servidor web... \e[0m" #CIAN
cd ~
cd minecraftbe
cd Minecraft-BE-Server-Panel-Admin-Web
sudo mv location $DirName/minecraftbe/
sudo mv ngnixsize $DirName/minecraftbe/
sudo mv panel.conf $DirName/minecraftbe/



# Instalar PHP
echo "========================================================================="
echo -e "\e[35m Instalando php... \e[0m" #MORADO
sudo apt install php php-fpm -y

# Creando archivos del Servidor web...
echo "======================================================================================="
echo -e "\e[36m Creando archivos del Servidor web... \e[0m" #CIAN
cd ~
# Cambiar Panel ----------------------------
# sudo mkdir $DirName/minecraftbe
#cd minecraftbe
#cd Minecraft-BE-Server-Panel-Admin-Web
#sudo mv location $DirName/minecraftbe/
#sudo mv ngnixsize $DirName/minecraftbe/
#sudo mv panel.conf $DirName/minecraftbe/

# Asignando $USER, usuario actual del sistema
sudo chown -R $USER:$USER $DirName/minecraftbe


echo "======================================================================================="
echo -e "\e[36m Creando archivo panel.conf... \e[0m" #CIAN
#sudo rm -rf /etc/nginx/sites-available/panel.conf
#sudo rm -rf /etc/nginx/sites-enabled/panel.conf
#sudo rm -rf /etc/nginx/sites-available/default
#sudo rm -rf /etc/nginx/sites-enabled/default
sleep 1s
echo "======================================================================================="
sleep 1s
sudo mv $DirName/minecraftbe/panel.conf /etc/nginx/sites-available


cd ~
cd minecraftbe
sudo cp version.php /var/www/html/
#sudo cp -r minecraftbe/ /var/www/goro/
#sudo cp -r directorio/ ruta_de_destino/nombre_copia

echo "======================================================================================="
echo -e "\e[36m Mostrando la versión php instalada... \e[0m" #CIAN
sleep 1s
sudo php -v
echo "======================================================================================="

# Digitar la version php
echo "========================================================================="
echo "Configurar versión de php instalada:"
echo -e "\e[36m Ejemplo Valores permitidos: "7.2" o "7.4" o "8.1" \e[0m" #CIAN
read_with_prompt VePHP "Versión PHP" 8.1
echo "========================================================================="

# Ver la ip del equipo

echo -e "\e[35m Dirección IP accesible o pública \e[0m" #MORADO
dirección IP accesible

echo -e "\e[31m Dirección IP del Servidor... \e[0m" #ROJO
hostname -I
MYIPV4=$(hostname -I)
# echo "$MYIPV4"
sleep 1s

# Digitar la ip del equipo
echo "========================================================================="
echo -e "\e[35m Introduzca la IP - IPV4 del servidor:  $MYIPV4 \e[0m" #MORADO
read_with_prompt IPV4 "Url o dirección IP del servidor" $MYIPV4
echo "========================================================================="

# Digitar el puerto a utilizar
echo "========================================================================="
echo -e "\e[35m Introduzca el puerto para el servidor web, Puerto predeterminado: 80 \e[0m" #MORADO
read_with_prompt Port "Numero del Puerto" 80
echo "========================================================================="



echo "========================================================================="
echo -e "\e[33m Configurando Servidor para subir archivos grandes \e[0m" #AMARILLO
sudo sed -i '/# server_tokens off;/ {
r ngnixsize
d}' /etc/nginx/nginx.conf
sleep 2s
echo "========================================================================="
sleep 2s


echo "======================================================================================="
echo -e "\e[33m cargando la configuración del servidor web... \e[0m" #AMARILLO
sudo systemctl reload nginx
sleep 1s
echo "======================================================================================="


echo "======================================================================================="
echo -e "\e[32m Sincronizando Pagina Web con el Servidor de Minecraft... \e[0m" #VERDE
sleep 2s

echo "======================================================================================="
echo -e "\e[36m Creando archivo panel.conf... \e[0m" #CIAN
#sudo rm -rf /etc/nginx/sites-available/panel.conf
#sudo rm -rf /etc/nginx/sites-enabled/panel.conf
#sudo rm -rf /etc/nginx/sites-available/default
#sudo rm -rf /etc/nginx/sites-enabled/default
sleep 1s
echo "======================================================================================="
sleep 1s
sudo mv $DirName/minecraftbe/panel.conf /etc/nginx/sites-available

cd ~
cd minecraftbe
sudo cp version.php /var/www/html/

cd ~
  DirName=$(readlink -e ~)
echo "======================================================================================="
echo -e "\e[33m Configurando la pagina web $IPV4:$Port/index.php... \e[0m" #AMARILLO
#sudo sed -i "s:MiIPV4:$IPV4:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s:MiIPV4:$IPV4:g" /etc/nginx/sites-available/panel.conf
#sudo sed -i "s:PuertoIPV4:$PortIPV4:g" $DirName/minecraftbe/config/srvdatos.json
#sudo sed -i "s:PuertoIPV6:$PortIPV6:g" $DirName/minecraftbe/config/srvdatos.json
#sudo sed -i "s/80/$Port/g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/default
sudo sed -i "s/dirname/$DirName/g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s/dirname/$DirName/g" /etc/nginx/sites-available/default
#sudo sed -i "s:Dedicated Server:$ServerName:g" $DirName/minecraftbe/$ServerName/server.properties
echo "========================================================================="
sleep 2s

echo "========================================================================="
echo -e "\e[36m Habilitando sitio añadido... \e[0m" #CIAN
cd ~
# sudo ln -s ../sites-available/panel.conf panel.conf
#sudo ln -s /etc/nginx/sites-available/panel.conf panel.conf
sudo ln -s /etc/nginx/sites-available/panel.conf /etc/nginx/sites-enabled/
echo "========================================================================="
sleep 1s

# Desvinculando archivo de configuración predeterminado del directorio/sites-enabled/
sudo unlink /etc/nginx/sites-enabled/default


echo "========================================================================="
echo -e "\e[35m Verificando Servidor Web... \e[0m" #MORADO
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
echo -e "\e[35m Reiniciando Servidor Web...  \e[0m" #MORADO
sleep 1s
sudo systemctl restart nginx
echo "========================================================================="

echo "."
echo "."

echo "========================================================================="
echo -e "\e[32m PANEL DE ADMINISTRACIÓN WEB CREADO \e[0m" #VERDE
echo "========================================================================="
echo "========================================================================="
echo -e "\e[36m Ingrese desde el navegador web con: \e[0m" #CIAN
echo -e "\e[31m http://$IPV4:$Port/ \e[0m" #ROJO
echo "========================================================================="