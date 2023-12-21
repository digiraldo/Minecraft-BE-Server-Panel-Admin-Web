  sudo systemctl start $ServerName.service

cd ~
  DirName=$(readlink -e ~)
  UserName=$(whoami)

echo "========================================================================="
echo "========================================================================="
echo "========================================================================="


# Creando directorio minecraftbe ---------------------------------------
cd ~
sudo mkdir /minecraftbe


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
sleep 2s
#Available applications:
#  Nginx Full
#  Nginx HTTP
#  Nginx HTTPS
#  OpenSSH


#permitir el tráfico HTTP normal en el puerto 80
echo "========================================================================="
echo -e "\e[32m Configurando el Panel de Administración... \e[0m" #VERDE
sudo ufw allow 'Nginx HTTP'
sleep 2s



# verificar el cambio muestra que ahora se permite el tráfico HTTP
echo "========================================================================="
echo -e "\e[33m muestra si se permite el tráfico HTTP \e[0m" #AMARILLO
sudo ufw enable
sleep 1s
sudo ufw status
sleep 1s
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
sudo mkdir $DirName/minecraftbe
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


cd~
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
sudo rm -rf /etc/nginx/sites-available/panel.conf
sudo rm -rf /etc/nginx/sites-enabled/panel.conf
#sudo rm -rf /etc/nginx/sites-available/default
#sudo rm -rf /etc/nginx/sites-enabled/default
sleep 1s
echo "======================================================================================="
sleep 1s
sudo mv $DirName/minecraftbe/panel.conf /etc/nginx/sites-available

cd ~
cd minecraftbe
sudo cp version.php /var/www/html/

echo "======================================================================================="
echo -e "\e[33m Configurando la pagina web $IPV4:$Port/index.php... \e[0m" #AMARILLO
sudo sed -i "s:MiIPV4:$IPV4:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s:MiIPV4:$IPV4:g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s:PuertoIPV4:$PortIPV4:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s:PuertoIPV6:$PortIPV6:g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" $DirName/minecraftbe/config/srvdatos.json
sudo sed -i "s/80/$Port/g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/panel.conf
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/default
sudo sed -i "s:Dedicated Server:$ServerName:g" $DirName/minecraftbe/$ServerName/server.properties
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