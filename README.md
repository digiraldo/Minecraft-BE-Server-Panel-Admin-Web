# Minecraft Bedrock Edition Server con Panel de Administración Web v1.0

## El Panel de Administración esta en Desarrollo.

## Instalar Servidor Dedicado de Minecraft Bedrock Edition

Antes de iniciar hay que aclarar que el Servidor dedicado de Minecraft Bedrock Edition, es una versión compatible para jugar desde PC con Minecraft para Windows 10, en consolas las ediciones de PlayStation, XBOX y Nintendo Switch y para dispositivos móviles con sistema operativo iPhone y/o Android (anteriormente Minecraft Pocket Edition). Si deseas saber más sobre la versión puede consultarla aquí:  [Minecraft Bedrock Wiki](https://translate.google.com/translate?sl=auto&tl=es&u=https://minecraft.gamepedia.com/Bedrock_Edition)

## Características del Servidor Dedicado:
* Configura el servidor Minecraft Bedrock Edition completamente operativo en un par de minutos
* Soporta distribuciones Ubuntu / Debian
* Configura Minecraft como un servicio del sistema con la opción de iniciarse automáticamente al arrancar
* Copias de seguridad automáticas cuando se reinicia el servidor
* Se actualiza automáticamente a la última versión cuando se inicia el servidor
* Reinicio diario programado opcional del servidor usando cron
* Fácil control del servidor con los scripts `start.sh`, `stop.sh` y `restart.sh`
* Configurar **server.properties** del servidor minecraft con el script `config.sh`
* Realizar copia de Seguridad del mundo en la nube (Google Drive, Microsoft OneDrive) con el script `cloud.sh`
* Restaurar o recuperar copia de un mundo con el script `back.sh`
* Instalacion del Panel de Administración Web.

## Requisitos Mínimos:
* Una computadora con un procesador x86_64 bit.
* 1 GB de RAM o más
* Ubuntu Server 18.04.2

## Funciones habilitadas del Panel de Administración Web:
* Gestión y/o permisos de Usuarios inscritos: `Administrador`, `Editor`, `Usuario` e `Inscrito`, .
* Administración y/o `permisos de usuarios` agregar, editar y eliminar con el Gamertag.
* Funcion de botones `Detener`, `Iniciar` y `Reiniciar` del Servidor en el Panel o Tablero de adminsitración.
* Administración de los Parámetros del Servidor en `Propiedades`.
* Gestión de archivos y en las copias de seguridad automáticas de respaldo del mundo en `Respaldos`.
* Opción de activar o desactivar Respaldos Automáticos Diarios en `Respaldos`.
* Gestión cargar o recuperar `mundos` en el servidor.


## Instalación:

Se recomienda usar Ubuntu Server para ejecutar el servidor dedicado de Minecraft. Está disponible aquí:
[Ubuntu Server](https://ubuntu.com/download/server)   ó  [Ubuntu Server 18.04](http://cdimage.ubuntu.com/releases/18.04/release/)

Una vez tenga su Computador o Servidor Virtual VPS, Inicie sesión en su servidor Linux usando SSH con un mouse y/o teclado copie y pegue el siguiente comando:

INSTALACION DE MINECRAFT BEDROCK EDITION SERVER SIN PANEL DE ADMINISTRACIÓN

```
wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/SetupMinecraft.sh
chmod +x SetupMinecraft.sh
./SetupMinecraft.sh
```

INSTALACION DE MINECRAFT BEDROCK EDITION SERVER CON PANEL DE ADMINISTRACIÓN (Beta)

```
wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/install.sh
chmod +x install.sh
./install.sh
```

Ver Instalación completa en: [Instalar Panel Web](https://gorobeta.blogspot.com/2021/04/instalar-minecraft-bedrock-edition-panel-admin.html)
#
#
#
#
#
#
#
#
==============================

*Aviso de Derechos `(copyright notice)`:*  
Los archivos y/o documentación de instalacion del servidor minecraft **SetupMinecraft** asociados fueron realizados por:  
Derechos de autor (c) 2019 James A. Chambers  
Este tutorial fue realizado para ayudar a la comunidad en Español ya que hay poca información de instalación y configuracion en este idioma. Para más información y soporte, el repositorio de solo instalacion del servidor Minecraft sin panel web en su idioma original inglés: https://github.com/TheRemote/MinecraftBedrockServer
