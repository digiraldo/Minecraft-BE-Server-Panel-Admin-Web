#!/bin/bash
#  Script de corrección de permisos del servidor de Minecraft - James A. Chambers - https://jamesachambers.com

# Asume la propiedad de los archivos del servidor para corregir errores comunes de permisos, como el acceso denegado
# Esto es muy común al restaurar copias de seguridad, mover y editar archivos, etc.

# Si está utilizando el servicio systemd (sudo systemctl start servername), lo realiza automáticamente en cada inicio

echo "Tomar posesión de todos los archivos/carpetas del servidor en dirname/minecraftbe/servername"
sudo chown -Rv userxname dirname/minecraftbe/servername

echo "Completo"