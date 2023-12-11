#!/bin/bash
# 
# https://soloconlinux.org.es/colores-en-bash/
# https://soloconlinux.org.es/colores-en-bash/

echo -e "\e[30m Texto en Color #30 NEGRO \e[0m"
echo -e "\e[31m Texto en Color #31 ROJO \e[0m"
echo -e "\e[32m Texto en Color #32 VERDE \e[0m"
echo -e "\e[33m Texto en Color #33 AMARILLO \e[0m"
echo -e "\e[34m Texto en Color #34 AZUL \e[0m"
echo -e "\e[35m Texto en Color #35 MORADO \e[0m"
echo -e "\e[36m Texto en Color #36 CIAN \e[0m"
echo -e "\e[37m Texto en Color #37 GRIS \e[0m"
echo -e "\e[38m Texto en Color #38 BLANCO \e[0m"

echo -e "\e[37m ======================================================================= \e[0m"

echo -e "\e[1;38m Texto en Color + Negrilla \e[0m"
echo -e "\e[3;38m Texto en Color + Cursiva \e[0m"
echo -e "\e[4;38m Texto en Color + Subrayado \e[0m"
echo -e "\e[5;38m Texto en Color + Parpadeo \e[0m"
echo -e "\e[7;38m Texto en Color + Color Inverso \e[0m"

echo -e "\e[37m ======================================================================= \e[0m"

echo -e "\e[1;38m Texto en Color + Color Fondo NEGRO \e[41m"
echo -e "\e[1;38m Texto en Color + Color Fondo ROJO \e[42m"
echo -e "\e[1;38m Texto en Color + Color Fondo VERDE \e[43m"
echo -e "\e[1;38m Texto en Color + Color Fondo AMARILLO \e[44m"
echo -e "\e[1;38m Texto en Color + Color Fondo AZUL \e[45m"
echo -e "\e[1;38m Texto en Color + Color Fondo MORADO \e[46m"
echo -e "\e[1;38m Texto en Color + Color Fondo CIAN \e[47m"
echo -e "\e[1;30m Texto en Color + Color Fondo GRIS \e[48m"
echo -e "\e[1;30m Texto en Color + Color Fondo BLANCO \e[49m"

echo -e "\e[37m ======================================================================= \e[0m"

# Colores (Sin estilo)
echo -e "\e[31m ROJO \e[33m  AMARILLO \e[32m VERDE \e[0m NORMAL"

# Negrita + Colores
echo -e "\e[1;31m ROJO \e[1;33m  AMARILLO \e[1;32m VERDE \e[1;39m NEGRITA \e[0m"

# Tachado + Colores
echo -e "\e[9;31m ROJO \e[9;33m  AMARILLO \e[9;32m VERDE \e[9;39m TACHADO \e[0m"

echo -e "\e[37m ======================================================================= \e[0m"

echo -e ‘Así se escribe \e[1;34mG\e[0m\e[1;31mo\e[0m\e[1;33mo\e[0m\e[1;34mg\e[0m\e[1;32ml\e[0m\e[1;31me\e[0m’

echo -e "\e[37m ======================================================================= \e[0m"