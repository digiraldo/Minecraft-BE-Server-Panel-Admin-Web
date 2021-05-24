Installing, this may take a few minutes...
Please create a default UNIX user account. The username does not need to match your Windows username.
For more information visit: https://aka.ms/wslusers
Enter new UNIX username: gorobeta
New password:
Retype new password:
passwd: password updated successfully
Installation successful!
To run a command as administrator (user "root"), use "sudo <command>".
See "man sudo_root" for details.

Welcome to Ubuntu 20.04.2 LTS (GNU/Linux 4.4.0-19041-Microsoft x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Mon Apr 26 12:08:40 -05 2021

  System load:    0.52      Processes:              7
  Usage of /home: unknown   Users logged in:        0
  Memory usage:   56%       IPv4 address for wifi0: 192.168.1.6
  Swap usage:     0%

1 update can be installed immediately.
0 of these updates are security updates.
To see these additional updates run: apt list --upgradable


The list of available updates is more than a week old.
To check for new updates run: sudo apt update


This message is shown once a day. To disable it please create the
/home/gorobeta/.hushlogin file.
gorobeta@miequipo:~$ wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/SetupMinecraft.sh
--2021-04-26 12:10:22--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/SetupMinecraft.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.111.133, 185.199.108.133, 185.199.109.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.111.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 29404 (29K) [text/plain]
Saving to: ‘SetupMinecraft.sh’

SetupMinecraft.sh                         100%[=====================================================================================>]  28.71K  --.-KB/s    in 0.01s

2021-04-26 12:10:22 (2.57 MB/s) - ‘SetupMinecraft.sh’ saved [29404/29404]

gorobeta@miequipo:~$ chmod +x SetupMinecraft.sh
gorobeta@miequipo:~$ ./SetupMinecraft.sh
Script de instalación de Minecraft Bedrock Server por James Chambers - 24 de julio de 2019
La última versión siempre en https://github.com/TheRemote/MinecraftBedrockServer
¡No olvide configurar el reenvío de puertos en su enrutador! El puerto predeterminado es 19132
Instalando screen, unzip, sudo, net-tools, wget...
[sudo] password for gorobeta:
Hit:1 http://archive.ubuntu.com/ubuntu focal InRelease
Get:2 http://security.ubuntu.com/ubuntu focal-security InRelease [109 kB]
Get:3 http://archive.ubuntu.com/ubuntu focal-updates InRelease [114 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-backports InRelease [101 kB]
Get:5 http://security.ubuntu.com/ubuntu focal-security/main amd64 Packages [623 kB]
Get:6 http://archive.ubuntu.com/ubuntu focal/universe amd64 Packages [8628 kB]
Get:7 http://security.ubuntu.com/ubuntu focal-security/main Translation-en [127 kB]
Get:8 http://security.ubuntu.com/ubuntu focal-security/main amd64 c-n-f Metadata [7464 B]
Get:9 http://security.ubuntu.com/ubuntu focal-security/restricted amd64 Packages [184 kB]
Get:10 http://security.ubuntu.com/ubuntu focal-security/restricted Translation-en [27.0 kB]
Get:11 http://security.ubuntu.com/ubuntu focal-security/restricted amd64 c-n-f Metadata [392 B]
Get:12 http://security.ubuntu.com/ubuntu focal-security/universe amd64 Packages [555 kB]
Get:13 http://security.ubuntu.com/ubuntu focal-security/universe Translation-en [83.6 kB]
Get:14 http://security.ubuntu.com/ubuntu focal-security/universe amd64 c-n-f Metadata [10.9 kB]
Get:15 http://security.ubuntu.com/ubuntu focal-security/multiverse amd64 Packages [14.9 kB]
Get:16 http://security.ubuntu.com/ubuntu focal-security/multiverse Translation-en [3160 B]
Get:17 http://security.ubuntu.com/ubuntu focal-security/multiverse amd64 c-n-f Metadata [340 B]
Get:18 http://archive.ubuntu.com/ubuntu focal/universe Translation-en [5124 kB]
Get:19 http://archive.ubuntu.com/ubuntu focal/universe amd64 c-n-f Metadata [265 kB]
Get:20 http://archive.ubuntu.com/ubuntu focal/multiverse amd64 Packages [144 kB]
Get:21 http://archive.ubuntu.com/ubuntu focal/multiverse Translation-en [104 kB]
Get:22 http://archive.ubuntu.com/ubuntu focal/multiverse amd64 c-n-f Metadata [9136 B]
Get:23 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 Packages [947 kB]
Get:24 http://archive.ubuntu.com/ubuntu focal-updates/main Translation-en [216 kB]
Get:25 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 c-n-f Metadata [13.2 kB]
Get:26 http://archive.ubuntu.com/ubuntu focal-updates/restricted amd64 Packages [207 kB]
Get:27 http://archive.ubuntu.com/ubuntu focal-updates/restricted Translation-en [30.7 kB]
Get:28 http://archive.ubuntu.com/ubuntu focal-updates/restricted amd64 c-n-f Metadata [436 B]
Get:29 http://archive.ubuntu.com/ubuntu focal-updates/universe amd64 Packages [763 kB]
Get:30 http://archive.ubuntu.com/ubuntu focal-updates/universe Translation-en [164 kB]
Get:31 http://archive.ubuntu.com/ubuntu focal-updates/universe amd64 c-n-f Metadata [17.1 kB]
Get:32 http://archive.ubuntu.com/ubuntu focal-updates/multiverse amd64 Packages [21.7 kB]
Get:33 http://archive.ubuntu.com/ubuntu focal-updates/multiverse Translation-en [5508 B]
Get:34 http://archive.ubuntu.com/ubuntu focal-updates/multiverse amd64 c-n-f Metadata [600 B]
Get:35 http://archive.ubuntu.com/ubuntu focal-backports/main amd64 c-n-f Metadata [112 B]
Get:36 http://archive.ubuntu.com/ubuntu focal-backports/restricted amd64 c-n-f Metadata [116 B]
Get:37 http://archive.ubuntu.com/ubuntu focal-backports/universe amd64 Packages [4032 B]
Get:38 http://archive.ubuntu.com/ubuntu focal-backports/universe Translation-en [1448 B]
Get:39 http://archive.ubuntu.com/ubuntu focal-backports/universe amd64 c-n-f Metadata [224 B]
Get:40 http://archive.ubuntu.com/ubuntu focal-backports/multiverse amd64 c-n-f Metadata [116 B]
Fetched 18.6 MB in 1min 6s (281 kB/s)
Reading package lists... Done
Reading package lists... Done
Building dependency tree
Reading state information... Done
wget is already the newest version (1.20.3-1ubuntu1).
wget set to manually installed.
Suggested packages:
  zip
The following NEW packages will be installed:
  unzip
The following packages will be upgraded:
  screen
1 upgraded, 1 newly installed, 0 to remove and 65 not upgraded.
Need to get 746 kB of archives.
After this operation, 593 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 screen amd64 4.8.0-1ubuntu0.1 [577 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal/main amd64 unzip amd64 6.0-25ubuntu1 [169 kB]
Fetched 746 kB in 3s (222 kB/s)
(Reading database ... 32157 files and directories currently installed.)
Preparing to unpack .../screen_4.8.0-1ubuntu0.1_amd64.deb ...
Unpacking screen (4.8.0-1ubuntu0.1) over (4.8.0-1) ...
Selecting previously unselected package unzip.
Preparing to unpack .../unzip_6.0-25ubuntu1_amd64.deb ...
Unpacking unzip (6.0-25ubuntu1) ...
Setting up unzip (6.0-25ubuntu1) ...
Setting up screen (4.8.0-1ubuntu0.1) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for install-info (6.7.0.dfsg.2-5) ...
Processing triggers for mime-support (3.64ubuntu1) ...
Processing triggers for systemd (245.4-4ubuntu3.4) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following NEW packages will be installed:
  net-tools
0 upgraded, 1 newly installed, 0 to remove and 65 not upgraded.
Need to get 196 kB of archives.
After this operation, 864 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal/main amd64 net-tools amd64 1.60+git20180626.aebd88e-1ubuntu1 [196 kB]
Fetched 196 kB in 1s (133 kB/s)
Selecting previously unselected package net-tools.
(Reading database ... 32175 files and directories currently installed.)
Preparing to unpack .../net-tools_1.60+git20180626.aebd88e-1ubuntu1_amd64.deb ...
Unpacking net-tools (1.60+git20180626.aebd88e-1ubuntu1) ...
Setting up net-tools (1.60+git20180626.aebd88e-1ubuntu1) ...
Processing triggers for man-db (2.9.1-1) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  curl
The following packages will be upgraded:
  curl libcurl4
2 upgraded, 0 newly installed, 0 to remove and 63 not upgraded.
Need to get 395 kB of archives.
After this operation, 0 B of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 curl amd64 7.68.0-1ubuntu2.5 [161 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libcurl4 amd64 7.68.0-1ubuntu2.5 [234 kB]
Fetched 395 kB in 3s (124 kB/s)
(Reading database ... 32224 files and directories currently installed.)
Preparing to unpack .../curl_7.68.0-1ubuntu2.5_amd64.deb ...
Unpacking curl (7.68.0-1ubuntu2.5) over (7.68.0-1ubuntu2.4) ...
Preparing to unpack .../libcurl4_7.68.0-1ubuntu2.5_amd64.deb ...
Unpacking libcurl4:amd64 (7.68.0-1ubuntu2.5) over (7.68.0-1ubuntu2.4) ...
Setting up libcurl4:amd64 (7.68.0-1ubuntu2.5) ...
Setting up curl (7.68.0-1ubuntu2.5) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for libc-bin (2.31-0ubuntu9.2) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following packages will be upgraded:
  openssl
1 upgraded, 0 newly installed, 0 to remove and 62 not upgraded.
Need to get 620 kB of archives.
After this operation, 0 B of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 openssl amd64 1.1.1f-1ubuntu2.3 [620 kB]
Fetched 620 kB in 3s (220 kB/s)
(Reading database ... 32224 files and directories currently installed.)
Preparing to unpack .../openssl_1.1.1f-1ubuntu2.3_amd64.deb ...
Unpacking openssl (1.1.1f-1ubuntu2.3) over (1.1.1f-1ubuntu2.2) ...
Setting up openssl (1.1.1f-1ubuntu2.3) ...
Processing triggers for man-db (2.9.1-1) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
gzip is already the newest version (1.10-0ubuntu4).
tar is already the newest version (1.30+dfsg-7ubuntu0.20.04.1).
tar set to manually installed.
The following NEW packages will be installed:
  zip
0 upgraded, 1 newly installed, 0 to remove and 62 not upgraded.
Need to get 167 kB of archives.
After this operation, 638 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal/main amd64 zip amd64 3.0-11build1 [167 kB]
Fetched 167 kB in 2s (87.7 kB/s)
Selecting previously unselected package zip.
(Reading database ... 32224 files and directories currently installed.)
Preparing to unpack .../zip_3.0-11build1_amd64.deb ...
Unpacking zip (3.0-11build1) ...
Setting up zip (3.0-11build1) ...
Processing triggers for man-db (2.9.1-1) ...
==================DIRECTORIOS Y ARCHIVOS MONTADOS========================
total 0
=========================================================================
Ingrese un nombre corto para el servidor nuevo o existente...
Se utilizará como nombre de la carpeta y el nombre del servidor...
=========================================================================
Nombre de Servidor: amigos
Nombre de Servidor : amigos -- aceptar? (y/n)y
Nombre de Servidor: amigos
=========================================================================
Creando directorio del servidor de Minecraft (~/minecraftbe/amigos)...
Obteniendo la arquitectura de la CPU del sistema...
Arquitectura del sistema: x86_64
Buscando la última versión del servidor Minecraft Bedrock...
--2021-04-26 12:43:44--  https://minecraft.net/en-us/download/server/bedrock/
Resolving minecraft.net (minecraft.net)... 13.227.7.51, 13.227.7.64, 13.227.7.53, ...
Connecting to minecraft.net (minecraft.net)|13.227.7.51|:443... connected.
HTTP request sent, awaiting response... 302 Moved Temporarily
Location: https://www.minecraft.net/en-us/download/server/bedrock/ [following]
--2021-04-26 12:43:45--  https://www.minecraft.net/en-us/download/server/bedrock/
Resolving www.minecraft.net (www.minecraft.net)... 190.98.167.83, 190.98.167.56, 190.98.167.66
Connecting to www.minecraft.net (www.minecraft.net)|190.98.167.83|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: unspecified [text/html]
Saving to: ‘downloads/version.html’

downloads/version.html                        [   <=>                                                                                ] 301.76K   585KB/s    in 0.5s

2021-04-26 12:43:46 (585 KB/s) - ‘downloads/version.html’ saved [309007]

https://minecraft.azureedge.net/bin-linux/bedrock-server-1.16.221.01.zip
bedrock-server-1.16.221.01.zip
=========================================================================
Descargando la última versión del servidor Minecraft Bedrock...
--2021-04-26 12:43:47--  https://minecraft.azureedge.net/bin-linux/bedrock-server-1.16.221.01.zip
Resolving minecraft.azureedge.net (minecraft.azureedge.net)... 95.100.87.139, 95.100.87.187, 2600:1419:8400::5f64:578b, ...
Connecting to minecraft.azureedge.net (minecraft.azureedge.net)|95.100.87.139|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 54272498 (52M) [application/octet-stream]
Saving to: ‘downloads/bedrock-server-1.16.221.01.zip’

downloads/bedrock-server-1.16.221.01.zip  100%[=====================================================================================>]  51.76M   622KB/s    in 97s

2021-04-26 12:45:25 (544 KB/s) - ‘downloads/bedrock-server-1.16.221.01.zip’ saved [54272498/54272498]

Archive:  downloads/bedrock-server-1.16.221.01.zip
  inflating: Makefile
  inflating: bedrock_server
  inflating: bedrock_server_how_to.html
  inflating: bedrock_server_symbols.debug
   creating: behavior_packs/
   creating: behavior_packs/chemistry/
  inflating: behavior_packs/chemistry/contents.json
   creating: behavior_packs/chemistry/entities/
  inflating: behavior_packs/chemistry/entities/balloon.json
  inflating: behavior_packs/chemistry/entities/ice_bomb.json
  inflating: behavior_packs/chemistry/manifest.json
  inflating: behavior_packs/chemistry/pack_icon.png
   creating: behavior_packs/experimental_caves_and_cliffs_internal/
  inflating: behavior_packs/experimental_caves_and_cliffs_internal/contents.json
  inflating: behavior_packs/experimental_caves_and_cliffs_internal/manifest.json
  inflating: behavior_packs/experimental_caves_and_cliffs_internal/pack_icon.png
   creating: behavior_packs/test_vanilla_1.11/
  inflating: behavior_packs/test_vanilla_1.11/contents.json
   creating: behavior_packs/test_vanilla_1.11/entities/
  inflating: behavior_packs/test_vanilla_1.11/entities/villager_v2.json
  inflating: behavior_packs/test_vanilla_1.11/manifest.json
   creating: behavior_packs/test_vanilla_1.12/
  inflating: behavior_packs/test_vanilla_1.12/contents.json
   creating: behavior_packs/test_vanilla_1.12/entities/
  inflating: behavior_packs/test_vanilla_1.12/entities/zombie.json
  inflating: behavior_packs/test_vanilla_1.12/entities/zombie_villager_v2.json
  inflating: behavior_packs/test_vanilla_1.12/manifest.json
   creating: behavior_packs/vanilla/
   creating: behavior_packs/vanilla/behavior_trees/
  inflating: behavior_packs/vanilla/behavior_trees/attack.json
  inflating: behavior_packs/vanilla/behavior_trees/attack_mob_test.json
  inflating: behavior_packs/vanilla/behavior_trees/attack_mob_test2.json
  inflating: behavior_packs/vanilla/behavior_trees/break_nearby_block.json
  inflating: behavior_packs/vanilla/behavior_trees/chop_wood.json
  inflating: behavior_packs/vanilla/behavior_trees/collect_items.json
  inflating: behavior_packs/vanilla/behavior_trees/consume_item.json
  inflating: behavior_packs/vanilla/behavior_trees/cooked_chicken_test.json
  inflating: behavior_packs/vanilla/behavior_trees/interact.json
  inflating: behavior_packs/vanilla/behavior_trees/interact_with_at.json
  inflating: behavior_packs/vanilla/behavior_trees/look_at_entity.json
  inflating: behavior_packs/vanilla/behavior_trees/mine_block_at_origin.json
  inflating: behavior_packs/vanilla/behavior_trees/pickup_nearby_item.json
  inflating: behavior_packs/vanilla/behavior_trees/place_block_at.json
  inflating: behavior_packs/vanilla/behavior_trees/silk_touch_test.json
  inflating: behavior_packs/vanilla/behavior_trees/test_nether_portal.json
  inflating: behavior_packs/vanilla/behavior_trees/use_entity.json
  inflating: behavior_packs/vanilla/behavior_trees/wait_one_second.json
  inflating: behavior_packs/vanilla/behavior_trees/wait_seconds.json
  inflating: behavior_packs/vanilla/behavior_trees/wait_ticks.json
  inflating: behavior_packs/vanilla/behavior_trees/wait_two_seconds.json
  inflating: behavior_packs/vanilla/behavior_trees/walk_forward.json
  inflating: behavior_packs/vanilla/contents.json
   creating: behavior_packs/vanilla/entities/
  inflating: behavior_packs/vanilla/entities/agent.json
  inflating: behavior_packs/vanilla/entities/area_effect_cloud.json
  inflating: behavior_packs/vanilla/entities/armor_stand.json
  inflating: behavior_packs/vanilla/entities/arrow.json
  inflating: behavior_packs/vanilla/entities/bat.json
  inflating: behavior_packs/vanilla/entities/blaze.json
  inflating: behavior_packs/vanilla/entities/boat.json
  inflating: behavior_packs/vanilla/entities/cat.json
  inflating: behavior_packs/vanilla/entities/cave_spider.json
  inflating: behavior_packs/vanilla/entities/chest_minecart.json
  inflating: behavior_packs/vanilla/entities/chicken.json
  inflating: behavior_packs/vanilla/entities/command_block_minecart.json
  inflating: behavior_packs/vanilla/entities/cow.json
  inflating: behavior_packs/vanilla/entities/creeper.json
  inflating: behavior_packs/vanilla/entities/dolphin.json
  inflating: behavior_packs/vanilla/entities/donkey.json
  inflating: behavior_packs/vanilla/entities/dragon_fireball.json
  inflating: behavior_packs/vanilla/entities/drowned.json
  inflating: behavior_packs/vanilla/entities/egg.json
  inflating: behavior_packs/vanilla/entities/elder_guardian.json
  inflating: behavior_packs/vanilla/entities/ender_crystal.json
  inflating: behavior_packs/vanilla/entities/ender_dragon.json
  inflating: behavior_packs/vanilla/entities/ender_pearl.json
  inflating: behavior_packs/vanilla/entities/enderman.json
  inflating: behavior_packs/vanilla/entities/endermite.json
  inflating: behavior_packs/vanilla/entities/evocation_illager.json
  inflating: behavior_packs/vanilla/entities/eye_of_ender_signal.json
  inflating: behavior_packs/vanilla/entities/fireball.json
  inflating: behavior_packs/vanilla/entities/fireworks_rocket.json
  inflating: behavior_packs/vanilla/entities/fish.json
  inflating: behavior_packs/vanilla/entities/fishing_hook.json
  inflating: behavior_packs/vanilla/entities/fox.json
  inflating: behavior_packs/vanilla/entities/ghast.json
  inflating: behavior_packs/vanilla/entities/guardian.json
  inflating: behavior_packs/vanilla/entities/hopper_minecart.json
  inflating: behavior_packs/vanilla/entities/horse.json
  inflating: behavior_packs/vanilla/entities/husk.json
  inflating: behavior_packs/vanilla/entities/iron_golem.json
  inflating: behavior_packs/vanilla/entities/lightning_bolt.json
  inflating: behavior_packs/vanilla/entities/lingering_potion.json
  inflating: behavior_packs/vanilla/entities/llama.json
  inflating: behavior_packs/vanilla/entities/llama_spit.json
  inflating: behavior_packs/vanilla/entities/magma_cube.json
  inflating: behavior_packs/vanilla/entities/minecart.json
  inflating: behavior_packs/vanilla/entities/mooshroom.json
  inflating: behavior_packs/vanilla/entities/mule.json
  inflating: behavior_packs/vanilla/entities/npc.json
  inflating: behavior_packs/vanilla/entities/ocelot.json
  inflating: behavior_packs/vanilla/entities/panda.json
  inflating: behavior_packs/vanilla/entities/parrot.json
  inflating: behavior_packs/vanilla/entities/phantom.json
  inflating: behavior_packs/vanilla/entities/pig.json
  inflating: behavior_packs/vanilla/entities/pillager.json
  inflating: behavior_packs/vanilla/entities/player.json
  inflating: behavior_packs/vanilla/entities/polar_bear.json
  inflating: behavior_packs/vanilla/entities/pufferfish.json
  inflating: behavior_packs/vanilla/entities/rabbit.json
  inflating: behavior_packs/vanilla/entities/ravager.json
  inflating: behavior_packs/vanilla/entities/salmon.json
  inflating: behavior_packs/vanilla/entities/sheep.json
  inflating: behavior_packs/vanilla/entities/shulker.json
  inflating: behavior_packs/vanilla/entities/shulker_bullet.json
  inflating: behavior_packs/vanilla/entities/silverfish.json
  inflating: behavior_packs/vanilla/entities/skeleton.json
  inflating: behavior_packs/vanilla/entities/skeleton_horse.json
  inflating: behavior_packs/vanilla/entities/slime.json
  inflating: behavior_packs/vanilla/entities/small_fireball.json
  inflating: behavior_packs/vanilla/entities/snow_golem.json
  inflating: behavior_packs/vanilla/entities/snowball.json
  inflating: behavior_packs/vanilla/entities/spider.json
  inflating: behavior_packs/vanilla/entities/splash_potion.json
  inflating: behavior_packs/vanilla/entities/squid.json
  inflating: behavior_packs/vanilla/entities/stray.json
  inflating: behavior_packs/vanilla/entities/thrown_trident.json
  inflating: behavior_packs/vanilla/entities/tnt.json
  inflating: behavior_packs/vanilla/entities/tnt_minecart.json
  inflating: behavior_packs/vanilla/entities/tripod_camera.json
  inflating: behavior_packs/vanilla/entities/tropicalfish.json
  inflating: behavior_packs/vanilla/entities/turtle.json
  inflating: behavior_packs/vanilla/entities/vex.json
  inflating: behavior_packs/vanilla/entities/villager.json
  inflating: behavior_packs/vanilla/entities/villager_v2.json
  inflating: behavior_packs/vanilla/entities/vindicator.json
  inflating: behavior_packs/vanilla/entities/wandering_trader.json
  inflating: behavior_packs/vanilla/entities/witch.json
  inflating: behavior_packs/vanilla/entities/wither.json
  inflating: behavior_packs/vanilla/entities/wither_skeleton.json
  inflating: behavior_packs/vanilla/entities/wither_skull.json
  inflating: behavior_packs/vanilla/entities/wither_skull_dangerous.json
  inflating: behavior_packs/vanilla/entities/wolf.json
  inflating: behavior_packs/vanilla/entities/xp_bottle.json
  inflating: behavior_packs/vanilla/entities/zombie.json
  inflating: behavior_packs/vanilla/entities/zombie_horse.json
  inflating: behavior_packs/vanilla/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla/entities/zombie_villager.json
  inflating: behavior_packs/vanilla/entities/zombie_villager_v2.json
   creating: behavior_packs/vanilla/items/
  inflating: behavior_packs/vanilla/items/apple.json
  inflating: behavior_packs/vanilla/items/appleEnchanted.json
  inflating: behavior_packs/vanilla/items/baked_potato.json
  inflating: behavior_packs/vanilla/items/beef.json
  inflating: behavior_packs/vanilla/items/beetroot.json
  inflating: behavior_packs/vanilla/items/beetroot_seeds.json
  inflating: behavior_packs/vanilla/items/beetroot_soup.json
  inflating: behavior_packs/vanilla/items/bread.json
  inflating: behavior_packs/vanilla/items/camera.json
  inflating: behavior_packs/vanilla/items/carrot.json
  inflating: behavior_packs/vanilla/items/chicken.json
  inflating: behavior_packs/vanilla/items/chorus_fruit.json
  inflating: behavior_packs/vanilla/items/clownfish.json
  inflating: behavior_packs/vanilla/items/cooked_beef.json
  inflating: behavior_packs/vanilla/items/cooked_chicken.json
  inflating: behavior_packs/vanilla/items/cooked_fish.json
  inflating: behavior_packs/vanilla/items/cooked_porkchop.json
  inflating: behavior_packs/vanilla/items/cooked_rabbit.json
  inflating: behavior_packs/vanilla/items/cooked_salmon.json
  inflating: behavior_packs/vanilla/items/cookie.json
  inflating: behavior_packs/vanilla/items/dried_kelp.json
  inflating: behavior_packs/vanilla/items/fish.json
  inflating: behavior_packs/vanilla/items/golden_apple.json
  inflating: behavior_packs/vanilla/items/golden_carrot.json
  inflating: behavior_packs/vanilla/items/melon.json
  inflating: behavior_packs/vanilla/items/melon_seeds.json
  inflating: behavior_packs/vanilla/items/mushroom_stew.json
  inflating: behavior_packs/vanilla/items/muttonCooked.json
  inflating: behavior_packs/vanilla/items/muttonRaw.json
  inflating: behavior_packs/vanilla/items/nether_wart.json
  inflating: behavior_packs/vanilla/items/poisonous_potato.json
  inflating: behavior_packs/vanilla/items/porkchop.json
  inflating: behavior_packs/vanilla/items/potato.json
  inflating: behavior_packs/vanilla/items/pufferfish.json
  inflating: behavior_packs/vanilla/items/pumpkin_pie.json
  inflating: behavior_packs/vanilla/items/pumpkin_seeds.json
  inflating: behavior_packs/vanilla/items/rabbit.json
  inflating: behavior_packs/vanilla/items/rabbit_stew.json
  inflating: behavior_packs/vanilla/items/rotten_flesh.json
  inflating: behavior_packs/vanilla/items/salmon.json
  inflating: behavior_packs/vanilla/items/spider_eye.json
  inflating: behavior_packs/vanilla/items/suspicious_stew.json
  inflating: behavior_packs/vanilla/items/sweet_berries.json
  inflating: behavior_packs/vanilla/items/wheat_seeds.json
   creating: behavior_packs/vanilla/loot_tables/
   creating: behavior_packs/vanilla/loot_tables/chests/
  inflating: behavior_packs/vanilla/loot_tables/chests/abandoned_mineshaft.json
  inflating: behavior_packs/vanilla/loot_tables/chests/buriedtreasure.json
  inflating: behavior_packs/vanilla/loot_tables/chests/desert_pyramid.json
  inflating: behavior_packs/vanilla/loot_tables/chests/dispenser_trap.json
  inflating: behavior_packs/vanilla/loot_tables/chests/end_city_treasure.json
  inflating: behavior_packs/vanilla/loot_tables/chests/igloo_chest.json
  inflating: behavior_packs/vanilla/loot_tables/chests/jungle_temple.json
  inflating: behavior_packs/vanilla/loot_tables/chests/monster_room.json
  inflating: behavior_packs/vanilla/loot_tables/chests/nether_bridge.json
  inflating: behavior_packs/vanilla/loot_tables/chests/pillager_outpost.json
  inflating: behavior_packs/vanilla/loot_tables/chests/shipwreck.json
  inflating: behavior_packs/vanilla/loot_tables/chests/shipwrecksupply.json
  inflating: behavior_packs/vanilla/loot_tables/chests/shipwrecktreasure.json
  inflating: behavior_packs/vanilla/loot_tables/chests/simple_dungeon.json
  inflating: behavior_packs/vanilla/loot_tables/chests/spawn_bonus_chest.json
  inflating: behavior_packs/vanilla/loot_tables/chests/stronghold_corridor.json
  inflating: behavior_packs/vanilla/loot_tables/chests/stronghold_crossing.json
  inflating: behavior_packs/vanilla/loot_tables/chests/stronghold_library.json
  inflating: behavior_packs/vanilla/loot_tables/chests/underwater_ruin_big.json
  inflating: behavior_packs/vanilla/loot_tables/chests/underwater_ruin_small.json
   creating: behavior_packs/vanilla/loot_tables/chests/village/
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_armorer.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_butcher.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_cartographer.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_desert_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_fletcher.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_mason.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_plains_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_savanna_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_shepherd.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_snowy_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_taiga_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_tannery.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_temple.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_toolsmith.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village/village_weaponsmith.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village_blacksmith.json
  inflating: behavior_packs/vanilla/loot_tables/chests/village_two_room_house.json
  inflating: behavior_packs/vanilla/loot_tables/chests/woodland_mansion.json
  inflating: behavior_packs/vanilla/loot_tables/empty.json
   creating: behavior_packs/vanilla/loot_tables/entities/
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_set_chain.json
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_set_diamond.json
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_set_gold.json
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_set_iron.json
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_set_leather.json
  inflating: behavior_packs/vanilla/loot_tables/entities/armor_stand.json
  inflating: behavior_packs/vanilla/loot_tables/entities/bat.json
  inflating: behavior_packs/vanilla/loot_tables/entities/blaze.json
  inflating: behavior_packs/vanilla/loot_tables/entities/boat.json
  inflating: behavior_packs/vanilla/loot_tables/entities/brown_mooshroom_shear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/cat.json
  inflating: behavior_packs/vanilla/loot_tables/entities/cat_gift.json
  inflating: behavior_packs/vanilla/loot_tables/entities/cave_spider.json
  inflating: behavior_packs/vanilla/loot_tables/entities/chicken.json
  inflating: behavior_packs/vanilla/loot_tables/entities/clownfish.json
  inflating: behavior_packs/vanilla/loot_tables/entities/cow.json
  inflating: behavior_packs/vanilla/loot_tables/entities/creeper.json
  inflating: behavior_packs/vanilla/loot_tables/entities/dolphin.json
  inflating: behavior_packs/vanilla/loot_tables/entities/drowned.json
  inflating: behavior_packs/vanilla/loot_tables/entities/drowned_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/drowned_ranged_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/elder_guardian.json
  inflating: behavior_packs/vanilla/loot_tables/entities/enderman.json
  inflating: behavior_packs/vanilla/loot_tables/entities/endermite.json
  inflating: behavior_packs/vanilla/loot_tables/entities/evocation_illager.json
  inflating: behavior_packs/vanilla/loot_tables/entities/fish.json
  inflating: behavior_packs/vanilla/loot_tables/entities/fox_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/ghast.json
  inflating: behavior_packs/vanilla/loot_tables/entities/giant.json
  inflating: behavior_packs/vanilla/loot_tables/entities/guardian.json
  inflating: behavior_packs/vanilla/loot_tables/entities/horse.json
  inflating: behavior_packs/vanilla/loot_tables/entities/iron_golem.json
  inflating: behavior_packs/vanilla/loot_tables/entities/llama.json
  inflating: behavior_packs/vanilla/loot_tables/entities/magma_cube.json
  inflating: behavior_packs/vanilla/loot_tables/entities/mooshroom.json
  inflating: behavior_packs/vanilla/loot_tables/entities/mooshroom_shear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/ocelot.json
  inflating: behavior_packs/vanilla/loot_tables/entities/panda.json
  inflating: behavior_packs/vanilla/loot_tables/entities/panda_sneeze.json
  inflating: behavior_packs/vanilla/loot_tables/entities/parrot.json
  inflating: behavior_packs/vanilla/loot_tables/entities/phantom.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pig.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pig_saddled.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pillager.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pillager_captain_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pillager_gear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pillager_raid.json
  inflating: behavior_packs/vanilla/loot_tables/entities/polar_bear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/pufferfish.json
  inflating: behavior_packs/vanilla/loot_tables/entities/rabbit.json
  inflating: behavior_packs/vanilla/loot_tables/entities/raider_drops.json
  inflating: behavior_packs/vanilla/loot_tables/entities/ravager.json
  inflating: behavior_packs/vanilla/loot_tables/entities/salmon_large.json
  inflating: behavior_packs/vanilla/loot_tables/entities/salmon_normal.json
  inflating: behavior_packs/vanilla/loot_tables/entities/sea_turtle.json
  inflating: behavior_packs/vanilla/loot_tables/entities/sheep.json
  inflating: behavior_packs/vanilla/loot_tables/entities/sheep_shear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/sheep_sheared.json
  inflating: behavior_packs/vanilla/loot_tables/entities/shulker.json
  inflating: behavior_packs/vanilla/loot_tables/entities/silverfish.json
  inflating: behavior_packs/vanilla/loot_tables/entities/skeleton.json
  inflating: behavior_packs/vanilla/loot_tables/entities/skeleton_gear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/skeleton_horse.json
  inflating: behavior_packs/vanilla/loot_tables/entities/slime.json
  inflating: behavior_packs/vanilla/loot_tables/entities/snowman.json
  inflating: behavior_packs/vanilla/loot_tables/entities/spider.json
  inflating: behavior_packs/vanilla/loot_tables/entities/squid.json
  inflating: behavior_packs/vanilla/loot_tables/entities/stray.json
  inflating: behavior_packs/vanilla/loot_tables/entities/tropicalfish.json
  inflating: behavior_packs/vanilla/loot_tables/entities/vex_gear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/vindication_illager.json
  inflating: behavior_packs/vanilla/loot_tables/entities/vindicator_captain_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/vindicator_gear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/vindicator_raid.json
  inflating: behavior_packs/vanilla/loot_tables/entities/witch.json
  inflating: behavior_packs/vanilla/loot_tables/entities/wither_boss.json
  inflating: behavior_packs/vanilla/loot_tables/entities/wither_skeleton.json
  inflating: behavior_packs/vanilla/loot_tables/entities/wither_skeleton_gear.json
  inflating: behavior_packs/vanilla/loot_tables/entities/wolf.json
  inflating: behavior_packs/vanilla/loot_tables/entities/zombie.json
  inflating: behavior_packs/vanilla/loot_tables/entities/zombie_equipment.json
  inflating: behavior_packs/vanilla/loot_tables/entities/zombie_horse.json
  inflating: behavior_packs/vanilla/loot_tables/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla/loot_tables/entities/zombie_pigman_gear.json
   creating: behavior_packs/vanilla/loot_tables/equipment/
  inflating: behavior_packs/vanilla/loot_tables/equipment/low_tier_items.json
   creating: behavior_packs/vanilla/loot_tables/gameplay/
   creating: behavior_packs/vanilla/loot_tables/gameplay/entities/
  inflating: behavior_packs/vanilla/loot_tables/gameplay/entities/mooshroom_milking.json
   creating: behavior_packs/vanilla/loot_tables/gameplay/fishing/
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing/fish.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing/jungle_fish.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing/jungle_junk.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing/junk.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/fishing/treasure.json
  inflating: behavior_packs/vanilla/loot_tables/gameplay/jungle_fishing.json
  inflating: behavior_packs/vanilla/manifest.json
  inflating: behavior_packs/vanilla/manifest_publish.json
  inflating: behavior_packs/vanilla/pack_icon.png
   creating: behavior_packs/vanilla/recipes/
  inflating: behavior_packs/vanilla/recipes/acacia_boat.json
  inflating: behavior_packs/vanilla/recipes/acacia_door.json
  inflating: behavior_packs/vanilla/recipes/acacia_fence.json
  inflating: behavior_packs/vanilla/recipes/acacia_fence_gate.json
  inflating: behavior_packs/vanilla/recipes/acacia_planks.json
  inflating: behavior_packs/vanilla/recipes/acacia_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/acacia_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/acacia_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/acacia_stairs.json
  inflating: behavior_packs/vanilla/recipes/acacia_wood.json
  inflating: behavior_packs/vanilla/recipes/acacia_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/acacia_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/activator_rail.json
  inflating: behavior_packs/vanilla/recipes/andesite.json
  inflating: behavior_packs/vanilla/recipes/andesite_stairs.json
  inflating: behavior_packs/vanilla/recipes/andesite_wall.json
  inflating: behavior_packs/vanilla/recipes/anvil.json
  inflating: behavior_packs/vanilla/recipes/armor_stand.json
  inflating: behavior_packs/vanilla/recipes/arrow.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_bricks.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_creeper.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_flower.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_skull.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_thing.json
  inflating: behavior_packs/vanilla/recipes/banner_pattern_vines.json
  inflating: behavior_packs/vanilla/recipes/barrel.json
  inflating: behavior_packs/vanilla/recipes/basic_map_to_enhanced.json
  inflating: behavior_packs/vanilla/recipes/beacon.json
  inflating: behavior_packs/vanilla/recipes/beetroot_soup.json
  inflating: behavior_packs/vanilla/recipes/birch_boat.json
  inflating: behavior_packs/vanilla/recipes/birch_door.json
  inflating: behavior_packs/vanilla/recipes/birch_fence.json
  inflating: behavior_packs/vanilla/recipes/birch_fence_gate.json
  inflating: behavior_packs/vanilla/recipes/birch_planks.json
  inflating: behavior_packs/vanilla/recipes/birch_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/birch_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/birch_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/birch_stairs.json
  inflating: behavior_packs/vanilla/recipes/birch_wood.json
  inflating: behavior_packs/vanilla/recipes/birch_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/birch_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/black_banner.json
  inflating: behavior_packs/vanilla/recipes/black_carpet.json
  inflating: behavior_packs/vanilla/recipes/black_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/black_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/black_concrete_powder_from_ink_sac.json
  inflating: behavior_packs/vanilla/recipes/black_dye_from_ink_sac.json
  inflating: behavior_packs/vanilla/recipes/black_dye_from_wither_rose.json
  inflating: behavior_packs/vanilla/recipes/black_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/black_stained_glass_from_ink_sac.json
  inflating: behavior_packs/vanilla/recipes/black_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/black_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/black_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/black_stained_hardened_clay_from_ink_sac.json
  inflating: behavior_packs/vanilla/recipes/blast_furnace.json
  inflating: behavior_packs/vanilla/recipes/blaze_powder.json
  inflating: behavior_packs/vanilla/recipes/blue_banner.json
  inflating: behavior_packs/vanilla/recipes/blue_carpet.json
  inflating: behavior_packs/vanilla/recipes/blue_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/blue_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/blue_concrete_powder_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/blue_dye_from_cornflower.json
  inflating: behavior_packs/vanilla/recipes/blue_dye_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/blue_ice.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_glass_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/blue_stained_hardened_clay_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/boat.json
  inflating: behavior_packs/vanilla/recipes/bone_block.json
  inflating: behavior_packs/vanilla/recipes/bone_meal_from_block.json
  inflating: behavior_packs/vanilla/recipes/bone_meal_from_bone.json
  inflating: behavior_packs/vanilla/recipes/book.json
  inflating: behavior_packs/vanilla/recipes/bow.json
  inflating: behavior_packs/vanilla/recipes/bread.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_blaze_powder.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_ghast_tear.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_golden_carrot.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_magma_cream.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_phantom_membrane.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_puffer_fish.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_rabbit_foot.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_speckled_melon.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_sugar.json
  inflating: behavior_packs/vanilla/recipes/brew_awkward_turtle_helmet.json
  inflating: behavior_packs/vanilla/recipes/brew_fireresistance_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_harming_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_healing_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_healing_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_invisibility_red_stone.json
  inflating: behavior_packs/vanilla/recipes/brew_leaping_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_leaping_glow_stone.json
  inflating: behavior_packs/vanilla/recipes/brew_leaping_red_stone.json
  inflating: behavior_packs/vanilla/recipes/brew_long_leaping_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_long_mundane_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_long_poison_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_long_strength_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_longnightvision_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_longswiftness_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_mundane_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_nightvision_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_nightvision_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_poison_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_poison_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_poison_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_potion_sulphur.json
  inflating: behavior_packs/vanilla/recipes/brew_regeneration_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_regeneration_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_slow_falling_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_slowness_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_splash_potion_dragon_breath.json
  inflating: behavior_packs/vanilla/recipes/brew_strength_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_strength_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_strength_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_strong_healing_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_strong_poison_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_strong_strength_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_swiftness_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_swiftness_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_swiftness_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_thick_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_turtle_master_glowstone_dust.json
  inflating: behavior_packs/vanilla/recipes/brew_turtle_master_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_water_blaze_powder.json
  inflating: behavior_packs/vanilla/recipes/brew_water_breathing_redstone.json
  inflating: behavior_packs/vanilla/recipes/brew_water_fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_water_ghast_tear.json
  inflating: behavior_packs/vanilla/recipes/brew_water_glow_stone.json
  inflating: behavior_packs/vanilla/recipes/brew_water_magma_cream.json
  inflating: behavior_packs/vanilla/recipes/brew_water_nether_wart.json
  inflating: behavior_packs/vanilla/recipes/brew_water_rabbit_foot.json
  inflating: behavior_packs/vanilla/recipes/brew_water_red_stone.json
  inflating: behavior_packs/vanilla/recipes/brew_water_speckled_melon.json
  inflating: behavior_packs/vanilla/recipes/brew_water_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/brew_water_sugar.json
  inflating: behavior_packs/vanilla/recipes/brew_weakness_redstone.json
  inflating: behavior_packs/vanilla/recipes/brewing_stand.json
  inflating: behavior_packs/vanilla/recipes/brick_block.json
  inflating: behavior_packs/vanilla/recipes/brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/brick_wall.json
  inflating: behavior_packs/vanilla/recipes/brown_banner.json
  inflating: behavior_packs/vanilla/recipes/brown_carpet.json
  inflating: behavior_packs/vanilla/recipes/brown_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/brown_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/brown_concrete_powder_from_cocoa_beans.json
  inflating: behavior_packs/vanilla/recipes/brown_dye_from_cocoa_beans.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_glass_from_cocoa_beans.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/brown_stained_hardened_clay_from_cocoa_beans.json
  inflating: behavior_packs/vanilla/recipes/bucket.json
  inflating: behavior_packs/vanilla/recipes/cake.json
  inflating: behavior_packs/vanilla/recipes/campfire.json
  inflating: behavior_packs/vanilla/recipes/campfire_charcoal.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_log2.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_acacia_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_birch_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_jungle_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_oak_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_stripped_spruce_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_charcoal_wood.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_log2.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_acacia_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_birch_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_jungle_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_oak_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_stripped_spruce_log.json
  inflating: behavior_packs/vanilla/recipes/campfire_from_wood.json
  inflating: behavior_packs/vanilla/recipes/carrot_on_a_stick.json
  inflating: behavior_packs/vanilla/recipes/cartography_table.json
  inflating: behavior_packs/vanilla/recipes/cartography_table_locator_map.json
  inflating: behavior_packs/vanilla/recipes/cartography_table_map.json
  inflating: behavior_packs/vanilla/recipes/cauldron.json
  inflating: behavior_packs/vanilla/recipes/chest_minecart.json
  inflating: behavior_packs/vanilla/recipes/clay.json
  inflating: behavior_packs/vanilla/recipes/clock.json
  inflating: behavior_packs/vanilla/recipes/coal.json
  inflating: behavior_packs/vanilla/recipes/coal_block.json
  inflating: behavior_packs/vanilla/recipes/coarse_dirt.json
  inflating: behavior_packs/vanilla/recipes/cobblestone_stairs.json
  inflating: behavior_packs/vanilla/recipes/cobblestone_wall.json
  inflating: behavior_packs/vanilla/recipes/cobweb_to_string.json
  inflating: behavior_packs/vanilla/recipes/comparator.json
  inflating: behavior_packs/vanilla/recipes/compass.json
  inflating: behavior_packs/vanilla/recipes/composter.json
  inflating: behavior_packs/vanilla/recipes/conduit.json
  inflating: behavior_packs/vanilla/recipes/cookie.json
  inflating: behavior_packs/vanilla/recipes/crossbow.json
  inflating: behavior_packs/vanilla/recipes/cyan_banner.json
  inflating: behavior_packs/vanilla/recipes/cyan_carpet.json
  inflating: behavior_packs/vanilla/recipes/cyan_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/cyan_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/cyan_dye.json
  inflating: behavior_packs/vanilla/recipes/cyan_dye_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/cyan_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/cyan_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/cyan_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/cyan_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_boat.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_door.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_fence.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_fence_gate.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_planks.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_stairs.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_wood.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/dark_oak_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/dark_prismarine.json
  inflating: behavior_packs/vanilla/recipes/dark_prismarine_from_ink_sac.json
  inflating: behavior_packs/vanilla/recipes/detector_rail.json
  inflating: behavior_packs/vanilla/recipes/diamond.json
  inflating: behavior_packs/vanilla/recipes/diamond_axe.json
  inflating: behavior_packs/vanilla/recipes/diamond_block.json
  inflating: behavior_packs/vanilla/recipes/diamond_boots.json
  inflating: behavior_packs/vanilla/recipes/diamond_chestplate.json
  inflating: behavior_packs/vanilla/recipes/diamond_helmet.json
  inflating: behavior_packs/vanilla/recipes/diamond_hoe.json
  inflating: behavior_packs/vanilla/recipes/diamond_leggings.json
  inflating: behavior_packs/vanilla/recipes/diamond_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/diamond_shovel.json
  inflating: behavior_packs/vanilla/recipes/diamond_sword.json
  inflating: behavior_packs/vanilla/recipes/diorite.json
  inflating: behavior_packs/vanilla/recipes/diorite_stairs.json
  inflating: behavior_packs/vanilla/recipes/diorite_wall.json
  inflating: behavior_packs/vanilla/recipes/dispenser.json
  inflating: behavior_packs/vanilla/recipes/dried_kelp.json
  inflating: behavior_packs/vanilla/recipes/dried_kelp_block.json
  inflating: behavior_packs/vanilla/recipes/dropper.json
  inflating: behavior_packs/vanilla/recipes/emerald.json
  inflating: behavior_packs/vanilla/recipes/emerald_block.json
  inflating: behavior_packs/vanilla/recipes/empty_map_to_enhanced.json
  inflating: behavior_packs/vanilla/recipes/enchanting_table.json
  inflating: behavior_packs/vanilla/recipes/end_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/end_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/end_bricks.json
  inflating: behavior_packs/vanilla/recipes/end_crystal.json
  inflating: behavior_packs/vanilla/recipes/end_rod.json
  inflating: behavior_packs/vanilla/recipes/ender_chest.json
  inflating: behavior_packs/vanilla/recipes/ender_eye.json
  inflating: behavior_packs/vanilla/recipes/fence.json
  inflating: behavior_packs/vanilla/recipes/fence_gate.json
  inflating: behavior_packs/vanilla/recipes/fermented_spider_eye.json
  inflating: behavior_packs/vanilla/recipes/fishing_rod.json
  inflating: behavior_packs/vanilla/recipes/fletching_table.json
  inflating: behavior_packs/vanilla/recipes/flint_and_steel.json
  inflating: behavior_packs/vanilla/recipes/flower_pot.json
  inflating: behavior_packs/vanilla/recipes/furnace.json
  inflating: behavior_packs/vanilla/recipes/furnace_acacia_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_beef.json
  inflating: behavior_packs/vanilla/recipes/furnace_birch_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_cactus.json
  inflating: behavior_packs/vanilla/recipes/furnace_chainmail_boots.json
  inflating: behavior_packs/vanilla/recipes/furnace_chainmail_chestplate.json
  inflating: behavior_packs/vanilla/recipes/furnace_chainmail_helmet.json
  inflating: behavior_packs/vanilla/recipes/furnace_chainmail_leggings.json
  inflating: behavior_packs/vanilla/recipes/furnace_chicken.json
  inflating: behavior_packs/vanilla/recipes/furnace_chorus_fruit.json
  inflating: behavior_packs/vanilla/recipes/furnace_clay.json
  inflating: behavior_packs/vanilla/recipes/furnace_clay_ball.json
  inflating: behavior_packs/vanilla/recipes/furnace_coal_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_cobblestone.json
  inflating: behavior_packs/vanilla/recipes/furnace_dark_oak_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_diamond_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_emerald_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_fish.json
  inflating: behavior_packs/vanilla/recipes/furnace_gold_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_axe.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_boots.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_chestplate.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_helmet.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_hoe.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_leggings.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_shovel.json
  inflating: behavior_packs/vanilla/recipes/furnace_golden_sword.json
  inflating: behavior_packs/vanilla/recipes/furnace_horse_armor_gold.json
  inflating: behavior_packs/vanilla/recipes/furnace_horse_armor_iron.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_axe.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_boots.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_chestplate.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_helmet.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_hoe.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_leggings.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_shovel.json
  inflating: behavior_packs/vanilla/recipes/furnace_iron_sword.json
  inflating: behavior_packs/vanilla/recipes/furnace_jungle_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_kelp.json
  inflating: behavior_packs/vanilla/recipes/furnace_lapis_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_log2_acacia.json
  inflating: behavior_packs/vanilla/recipes/furnace_log2_dark_oak.json
  inflating: behavior_packs/vanilla/recipes/furnace_log_birch.json
  inflating: behavior_packs/vanilla/recipes/furnace_log_jungle.json
  inflating: behavior_packs/vanilla/recipes/furnace_log_oak.json
  inflating: behavior_packs/vanilla/recipes/furnace_log_spruce.json
  inflating: behavior_packs/vanilla/recipes/furnace_mutton_raw.json
  inflating: behavior_packs/vanilla/recipes/furnace_netherrack.json
  inflating: behavior_packs/vanilla/recipes/furnace_oak_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_porkchop.json
  inflating: behavior_packs/vanilla/recipes/furnace_potato.json
  inflating: behavior_packs/vanilla/recipes/furnace_quartz_block.json
  inflating: behavior_packs/vanilla/recipes/furnace_quartz_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_rabbit.json
  inflating: behavior_packs/vanilla/recipes/furnace_red_sandstone.json
  inflating: behavior_packs/vanilla/recipes/furnace_redstone_ore.json
  inflating: behavior_packs/vanilla/recipes/furnace_salmon.json
  inflating: behavior_packs/vanilla/recipes/furnace_sand.json
  inflating: behavior_packs/vanilla/recipes/furnace_sandstone.json
  inflating: behavior_packs/vanilla/recipes/furnace_sea_pickle.json
  inflating: behavior_packs/vanilla/recipes/furnace_sponge.json
  inflating: behavior_packs/vanilla/recipes/furnace_spruce_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay0.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay1.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay10.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay11.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay12.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay13.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay14.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay15.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay2.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay3.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay4.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay5.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay6.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay7.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay8.json
  inflating: behavior_packs/vanilla/recipes/furnace_stained_hardened_clay9.json
  inflating: behavior_packs/vanilla/recipes/furnace_stone.json
  inflating: behavior_packs/vanilla/recipes/furnace_stone_brick.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_acacia_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_acacia_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_birch_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_birch_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_dark_oak_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_jungle_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_jungle_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_oak_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_oak_wood.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_spruce_log.json
  inflating: behavior_packs/vanilla/recipes/furnace_stripped_spruce_wood.json
  inflating: behavior_packs/vanilla/recipes/glass_bottle.json
  inflating: behavior_packs/vanilla/recipes/glass_pane.json
  inflating: behavior_packs/vanilla/recipes/glowstone.json
  inflating: behavior_packs/vanilla/recipes/gold_block.json
  inflating: behavior_packs/vanilla/recipes/gold_ingot_from_block.json
  inflating: behavior_packs/vanilla/recipes/gold_ingot_from_nuggets.json
  inflating: behavior_packs/vanilla/recipes/gold_nugget.json
  inflating: behavior_packs/vanilla/recipes/golden_apple.json
  inflating: behavior_packs/vanilla/recipes/golden_axe.json
  inflating: behavior_packs/vanilla/recipes/golden_boots.json
  inflating: behavior_packs/vanilla/recipes/golden_carrot.json
  inflating: behavior_packs/vanilla/recipes/golden_chestplate.json
  inflating: behavior_packs/vanilla/recipes/golden_helmet.json
  inflating: behavior_packs/vanilla/recipes/golden_hoe.json
  inflating: behavior_packs/vanilla/recipes/golden_leggings.json
  inflating: behavior_packs/vanilla/recipes/golden_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/golden_rail.json
  inflating: behavior_packs/vanilla/recipes/golden_shovel.json
  inflating: behavior_packs/vanilla/recipes/golden_sword.json
  inflating: behavior_packs/vanilla/recipes/granite.json
  inflating: behavior_packs/vanilla/recipes/granite_stairs.json
  inflating: behavior_packs/vanilla/recipes/granite_wall.json
  inflating: behavior_packs/vanilla/recipes/gray_banner.json
  inflating: behavior_packs/vanilla/recipes/gray_carpet.json
  inflating: behavior_packs/vanilla/recipes/gray_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/gray_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/gray_dye.json
  inflating: behavior_packs/vanilla/recipes/gray_dye_from_black_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/gray_dye_from_ink_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/gray_dye_from_ink_white.json
  inflating: behavior_packs/vanilla/recipes/gray_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/gray_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/gray_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/gray_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/green_banner.json
  inflating: behavior_packs/vanilla/recipes/green_carpet.json
  inflating: behavior_packs/vanilla/recipes/green_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/green_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/green_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/green_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/green_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/green_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/grindstone.json
  inflating: behavior_packs/vanilla/recipes/hay_block.json
  inflating: behavior_packs/vanilla/recipes/heavy_weighted_pressure_plate.json
  inflating: behavior_packs/vanilla/recipes/hopper.json
  inflating: behavior_packs/vanilla/recipes/hopper_minecart.json
  inflating: behavior_packs/vanilla/recipes/iron_axe.json
  inflating: behavior_packs/vanilla/recipes/iron_bars.json
  inflating: behavior_packs/vanilla/recipes/iron_block.json
  inflating: behavior_packs/vanilla/recipes/iron_boots.json
  inflating: behavior_packs/vanilla/recipes/iron_chestplate.json
  inflating: behavior_packs/vanilla/recipes/iron_door.json
  inflating: behavior_packs/vanilla/recipes/iron_helmet.json
  inflating: behavior_packs/vanilla/recipes/iron_hoe.json
  inflating: behavior_packs/vanilla/recipes/iron_ingot_from_block.json
  inflating: behavior_packs/vanilla/recipes/iron_ingot_from_nuggets.json
  inflating: behavior_packs/vanilla/recipes/iron_leggings.json
  inflating: behavior_packs/vanilla/recipes/iron_nugget.json
  inflating: behavior_packs/vanilla/recipes/iron_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/iron_shovel.json
  inflating: behavior_packs/vanilla/recipes/iron_sword.json
  inflating: behavior_packs/vanilla/recipes/iron_trapdoor.json
  inflating: behavior_packs/vanilla/recipes/item_frame.json
  inflating: behavior_packs/vanilla/recipes/jungle_boat.json
  inflating: behavior_packs/vanilla/recipes/jungle_door.json
  inflating: behavior_packs/vanilla/recipes/jungle_fence.json
  inflating: behavior_packs/vanilla/recipes/jungle_fence_gate.json
  inflating: behavior_packs/vanilla/recipes/jungle_planks.json
  inflating: behavior_packs/vanilla/recipes/jungle_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/jungle_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/jungle_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/jungle_stairs.json
  inflating: behavior_packs/vanilla/recipes/jungle_wood.json
  inflating: behavior_packs/vanilla/recipes/jungle_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/jungle_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/ladder.json
  inflating: behavior_packs/vanilla/recipes/lantern.json
  inflating: behavior_packs/vanilla/recipes/lapis_block.json
  inflating: behavior_packs/vanilla/recipes/lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/lead.json
  inflating: behavior_packs/vanilla/recipes/leather.json
  inflating: behavior_packs/vanilla/recipes/leather_boots.json
  inflating: behavior_packs/vanilla/recipes/leather_chestplate.json
  inflating: behavior_packs/vanilla/recipes/leather_helmet.json
  inflating: behavior_packs/vanilla/recipes/leather_horse_armor.json
  inflating: behavior_packs/vanilla/recipes/leather_leggings.json
  inflating: behavior_packs/vanilla/recipes/lectern.json
  inflating: behavior_packs/vanilla/recipes/lever.json
  inflating: behavior_packs/vanilla/recipes/light_blue_banner.json
  inflating: behavior_packs/vanilla/recipes/light_blue_carpet.json
  inflating: behavior_packs/vanilla/recipes/light_blue_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/light_blue_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/light_blue_dye.json
  inflating: behavior_packs/vanilla/recipes/light_blue_dye_from_blue_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/light_blue_dye_from_blue_orchid.json
  inflating: behavior_packs/vanilla/recipes/light_blue_dye_from_lapis_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/light_blue_dye_from_lapis_white.json
  inflating: behavior_packs/vanilla/recipes/light_blue_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/light_blue_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/light_blue_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/light_blue_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/light_gray__carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/light_gray_banner.json
  inflating: behavior_packs/vanilla/recipes/light_gray_carpet.json
  inflating: behavior_packs/vanilla/recipes/light_gray_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_azure_bluet.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_black_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_gray_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_gray_white.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_ink_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_ink_white.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_oxeye_daisy.json
  inflating: behavior_packs/vanilla/recipes/light_gray_dye_from_white_tulip.json
  inflating: behavior_packs/vanilla/recipes/light_gray_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/light_gray_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/light_gray_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/light_gray_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/light_weighted_pressure_plate.json
  inflating: behavior_packs/vanilla/recipes/lime__carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/lime_banner.json
  inflating: behavior_packs/vanilla/recipes/lime_carpet.json
  inflating: behavior_packs/vanilla/recipes/lime_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/lime_dye.json
  inflating: behavior_packs/vanilla/recipes/lime_dye_from_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/lime_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/lime_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/lime_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/lime_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/lit_pumpkin.json
  inflating: behavior_packs/vanilla/recipes/locator_map.json
  inflating: behavior_packs/vanilla/recipes/magenta_banner.json
  inflating: behavior_packs/vanilla/recipes/magenta_carpet.json
  inflating: behavior_packs/vanilla/recipes/magenta_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/magenta_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_allium.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_blue_ink_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_blue_ink_white.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_lapis_ink_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_lapis_ink_white.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_lapis_red_pink.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_lilac.json
  inflating: behavior_packs/vanilla/recipes/magenta_dye_from_purple_and_pink.json
  inflating: behavior_packs/vanilla/recipes/magenta_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/magenta_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/magenta_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/magenta_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/magma.json
  inflating: behavior_packs/vanilla/recipes/magma_cream.json
  inflating: behavior_packs/vanilla/recipes/map.json
  inflating: behavior_packs/vanilla/recipes/melon_block.json
  inflating: behavior_packs/vanilla/recipes/melon_seeds.json
  inflating: behavior_packs/vanilla/recipes/minecart.json
  inflating: behavior_packs/vanilla/recipes/mossy_cobblestone.json
  inflating: behavior_packs/vanilla/recipes/mossy_cobblestone_stairs.json
  inflating: behavior_packs/vanilla/recipes/mossy_cobblestone_wall.json
  inflating: behavior_packs/vanilla/recipes/mossy_stone_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/mossy_stone_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/mossy_stonebrick.json
  inflating: behavior_packs/vanilla/recipes/mushroom_stew.json
  inflating: behavior_packs/vanilla/recipes/nether_brick.json
  inflating: behavior_packs/vanilla/recipes/nether_brick_fence.json
  inflating: behavior_packs/vanilla/recipes/nether_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/nether_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/nether_wart_block.json
  inflating: behavior_packs/vanilla/recipes/oak_planks.json
  inflating: behavior_packs/vanilla/recipes/oak_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/oak_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/oak_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/oak_stairs.json
  inflating: behavior_packs/vanilla/recipes/oak_wood.json
  inflating: behavior_packs/vanilla/recipes/oak_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/oak_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/observer.json
  inflating: behavior_packs/vanilla/recipes/orange_banner.json
  inflating: behavior_packs/vanilla/recipes/orange_carpet.json
  inflating: behavior_packs/vanilla/recipes/orange_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/orange_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/orange_dye_from_orange_tulip.json
  inflating: behavior_packs/vanilla/recipes/orange_dye_from_red_yellow.json
  inflating: behavior_packs/vanilla/recipes/orange_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/orange_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/orange_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/orange_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/packed_ice.json
  inflating: behavior_packs/vanilla/recipes/paper.json
  inflating: behavior_packs/vanilla/recipes/pillar_quartz_block.json
  inflating: behavior_packs/vanilla/recipes/pink_banner.json
  inflating: behavior_packs/vanilla/recipes/pink_carpet.json
  inflating: behavior_packs/vanilla/recipes/pink_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/pink_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/pink_dye.json
  inflating: behavior_packs/vanilla/recipes/pink_dye_from_peony.json
  inflating: behavior_packs/vanilla/recipes/pink_dye_from_pink_tulip.json
  inflating: behavior_packs/vanilla/recipes/pink_dye_from_red_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/pink_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/pink_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/pink_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/pink_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/polished_andesite.json
  inflating: behavior_packs/vanilla/recipes/polished_andesite_stairs.json
  inflating: behavior_packs/vanilla/recipes/polished_diorite.json
  inflating: behavior_packs/vanilla/recipes/polished_diorite_stairs.json
  inflating: behavior_packs/vanilla/recipes/polished_granite.json
  inflating: behavior_packs/vanilla/recipes/polished_granite_stairs.json
  inflating: behavior_packs/vanilla/recipes/prismarine.json
  inflating: behavior_packs/vanilla/recipes/prismarine_bricks.json
  inflating: behavior_packs/vanilla/recipes/prismarine_stairs.json
  inflating: behavior_packs/vanilla/recipes/prismarine_stairs_bricks.json
  inflating: behavior_packs/vanilla/recipes/prismarine_stairs_dark.json
  inflating: behavior_packs/vanilla/recipes/prismarine_wall.json
  inflating: behavior_packs/vanilla/recipes/pumpkin_pie.json
  inflating: behavior_packs/vanilla/recipes/pumpkin_seeds.json
  inflating: behavior_packs/vanilla/recipes/purple_banner.json
  inflating: behavior_packs/vanilla/recipes/purple_carpet.json
  inflating: behavior_packs/vanilla/recipes/purple_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/purple_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/purple_dye.json
  inflating: behavior_packs/vanilla/recipes/purple_dye_from_lapis_lazuli.json
  inflating: behavior_packs/vanilla/recipes/purple_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/purple_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/purple_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/purple_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/purpur_block.json
  inflating: behavior_packs/vanilla/recipes/purpur_stairs.json
  inflating: behavior_packs/vanilla/recipes/quartz_block.json
  inflating: behavior_packs/vanilla/recipes/quartz_stairs.json
  inflating: behavior_packs/vanilla/recipes/rabbit_stew_from_brown_mushroom.json
  inflating: behavior_packs/vanilla/recipes/rabbit_stew_from_red_mushroom.json
  inflating: behavior_packs/vanilla/recipes/rail.json
  inflating: behavior_packs/vanilla/recipes/red_banner.json
  inflating: behavior_packs/vanilla/recipes/red_carpet.json
  inflating: behavior_packs/vanilla/recipes/red_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/red_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/red_dye_from_beetroot.json
  inflating: behavior_packs/vanilla/recipes/red_dye_from_poppy.json
  inflating: behavior_packs/vanilla/recipes/red_dye_from_rose_bush.json
  inflating: behavior_packs/vanilla/recipes/red_dye_from_tulip.json
  inflating: behavior_packs/vanilla/recipes/red_nether_brick.json
  inflating: behavior_packs/vanilla/recipes/red_nether_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/red_nether_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/red_sandstone.json
  inflating: behavior_packs/vanilla/recipes/red_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/red_sandstone_wall.json
  inflating: behavior_packs/vanilla/recipes/red_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/red_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/red_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/red_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/redstone.json
  inflating: behavior_packs/vanilla/recipes/redstone_block.json
  inflating: behavior_packs/vanilla/recipes/redstone_lamp.json
  inflating: behavior_packs/vanilla/recipes/redstone_torch.json
  inflating: behavior_packs/vanilla/recipes/repeater.json
  inflating: behavior_packs/vanilla/recipes/sandstone.json
  inflating: behavior_packs/vanilla/recipes/sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/sandstone_wall.json
  inflating: behavior_packs/vanilla/recipes/scaffolding.json
  inflating: behavior_packs/vanilla/recipes/sealantern.json
  inflating: behavior_packs/vanilla/recipes/shears.json
  inflating: behavior_packs/vanilla/recipes/shield.json
  inflating: behavior_packs/vanilla/recipes/shulker_box.json
  inflating: behavior_packs/vanilla/recipes/sign_acacia.json
  inflating: behavior_packs/vanilla/recipes/sign_birch.json
  inflating: behavior_packs/vanilla/recipes/sign_darkoak.json
  inflating: behavior_packs/vanilla/recipes/sign_jungle.json
  inflating: behavior_packs/vanilla/recipes/sign_oak.json
  inflating: behavior_packs/vanilla/recipes/sign_spruce.json
  inflating: behavior_packs/vanilla/recipes/slime.json
  inflating: behavior_packs/vanilla/recipes/slime_ball.json
  inflating: behavior_packs/vanilla/recipes/smithing_table.json
  inflating: behavior_packs/vanilla/recipes/smoker.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_log2.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_acacia.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_birch.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_dark_oak.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_jungle.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_oak.json
  inflating: behavior_packs/vanilla/recipes/smoker_from_stripped_spruce.json
  inflating: behavior_packs/vanilla/recipes/smooth_quartz_stairs.json
  inflating: behavior_packs/vanilla/recipes/smooth_red_sandstone.json
  inflating: behavior_packs/vanilla/recipes/smooth_red_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/smooth_sandstone.json
  inflating: behavior_packs/vanilla/recipes/smooth_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/snow.json
  inflating: behavior_packs/vanilla/recipes/snow_layer.json
  inflating: behavior_packs/vanilla/recipes/speckled_melon.json
  inflating: behavior_packs/vanilla/recipes/spruce_boat.json
  inflating: behavior_packs/vanilla/recipes/spruce_door.json
  inflating: behavior_packs/vanilla/recipes/spruce_fence.json
  inflating: behavior_packs/vanilla/recipes/spruce_fence_gate.json
  inflating: behavior_packs/vanilla/recipes/spruce_planks.json
  inflating: behavior_packs/vanilla/recipes/spruce_planks_from_stripped.json
  inflating: behavior_packs/vanilla/recipes/spruce_planks_from_stripped_wood.json
  inflating: behavior_packs/vanilla/recipes/spruce_planks_from_wood.json
  inflating: behavior_packs/vanilla/recipes/spruce_stairs.json
  inflating: behavior_packs/vanilla/recipes/spruce_wood.json
  inflating: behavior_packs/vanilla/recipes/spruce_wood_stripped.json
  inflating: behavior_packs/vanilla/recipes/spruce_wooden_slab.json
  inflating: behavior_packs/vanilla/recipes/sticky_piston.json
  inflating: behavior_packs/vanilla/recipes/stone_axe.json
  inflating: behavior_packs/vanilla/recipes/stone_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stone_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/stone_button.json
  inflating: behavior_packs/vanilla/recipes/stone_hoe.json
  inflating: behavior_packs/vanilla/recipes/stone_pickaxe.json
  inflating: behavior_packs/vanilla/recipes/stone_pressure_plate.json
  inflating: behavior_packs/vanilla/recipes/stone_shovel.json
  inflating: behavior_packs/vanilla/recipes/stone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stone_sword.json
  inflating: behavior_packs/vanilla/recipes/stonebrick.json
  inflating: behavior_packs/vanilla/recipes/stonecutter.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_andesite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_andesite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_andesite_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_brick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_cobblestone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_cobblestone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_cobblestone_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_dark_prismarine_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_dark_prismarine_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_diorite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_diorite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_diorite_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_slab2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_stairs2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbrick_wall2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_endbricks.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_granite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_granite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_granite_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_cobblestone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_cobblestone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_cobblestone_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_stonebrick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_stonebrick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_mossy_stonebrick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_nether_brick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_nether_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_nether_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_andesite.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_andesite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_andesite_slab2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_andesite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_andesite_stairs2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_diorite.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_diorite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_diorite_slab2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_diorite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_diorite_stairs2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_granite.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_granite_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_granite_slab2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_granite_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_polished_granite_stairs2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_prismarine_brick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_prismarine_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_prismarine_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_prismarine_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_prismarine_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_purpur_lines.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_purpur_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_purpur_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_quartz_chiseled.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_quartz_lines.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_quartz_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_quartz_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_nether_brick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_nether_brick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_nether_brick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_sandstone_cut.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_sandstone_heiroglyphs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_sandstone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_red_sandstone_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_sandstone_cut.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_sandstone_heiroglyphs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_sandstone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_sandstone_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_quartz_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_quartz_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_red_sandstone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_red_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_sandstone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_sandstone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_smooth_stone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stone_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stone_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_chiseled.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_slab.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_slab2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_stairs.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_stairs2.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_wall.json
  inflating: behavior_packs/vanilla/recipes/stonecutter_stonebrick_wall2.json
  inflating: behavior_packs/vanilla/recipes/string_to_wool.json
  inflating: behavior_packs/vanilla/recipes/sugar.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_allium.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_azure_bluet.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_blue_orchid.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_cornflower.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_dandelion.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_lily_of_the_valley.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_oxeye_daisy.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_poppy.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_tulip_orange.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_tulip_pink.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_tulip_red.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_tulip_white.json
  inflating: behavior_packs/vanilla/recipes/suspicious_stew_from_wither_rose.json
  inflating: behavior_packs/vanilla/recipes/tnt.json
  inflating: behavior_packs/vanilla/recipes/tnt_minecart.json
  inflating: behavior_packs/vanilla/recipes/trapped_chest.json
  inflating: behavior_packs/vanilla/recipes/turtle_helmet.json
  inflating: behavior_packs/vanilla/recipes/wheat.json
  inflating: behavior_packs/vanilla/recipes/white_banner.json
  inflating: behavior_packs/vanilla/recipes/white_carpet.json
  inflating: behavior_packs/vanilla/recipes/white_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/white_concrete_powder_from_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/white_dye_from_bone_meal.json
  inflating: behavior_packs/vanilla/recipes/white_dye_from_lily_of_the_valley.json
  inflating: behavior_packs/vanilla/recipes/white_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/white_stained_glass_from_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/white_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/white_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/white_stained_hardened_clay.json
  inflating: behavior_packs/vanilla/recipes/white_stained_hardened_clay_from_bonemeal.json
  inflating: behavior_packs/vanilla/recipes/wooden_door.json
  inflating: behavior_packs/vanilla/recipes/writable_book.json
  inflating: behavior_packs/vanilla/recipes/yellow_banner.json
  inflating: behavior_packs/vanilla/recipes/yellow_carpet.json
  inflating: behavior_packs/vanilla/recipes/yellow_carpet_from_white.json
  inflating: behavior_packs/vanilla/recipes/yellow_concrete_powder.json
  inflating: behavior_packs/vanilla/recipes/yellow_dye_from_dandelion.json
  inflating: behavior_packs/vanilla/recipes/yellow_dye_from_sunflower.json
  inflating: behavior_packs/vanilla/recipes/yellow_stained_glass.json
  inflating: behavior_packs/vanilla/recipes/yellow_stained_glass_pane.json
  inflating: behavior_packs/vanilla/recipes/yellow_stained_glass_pane_from_pane.json
  inflating: behavior_packs/vanilla/recipes/yellow_stained_hardened_clay.json
   creating: behavior_packs/vanilla/spawn_rules/
  inflating: behavior_packs/vanilla/spawn_rules/bat.json
  inflating: behavior_packs/vanilla/spawn_rules/blaze.json
  inflating: behavior_packs/vanilla/spawn_rules/cat.json
  inflating: behavior_packs/vanilla/spawn_rules/chicken.json
  inflating: behavior_packs/vanilla/spawn_rules/cod.json
  inflating: behavior_packs/vanilla/spawn_rules/cow.json
  inflating: behavior_packs/vanilla/spawn_rules/creeper.json
  inflating: behavior_packs/vanilla/spawn_rules/dolphin.json
  inflating: behavior_packs/vanilla/spawn_rules/donkey.json
  inflating: behavior_packs/vanilla/spawn_rules/drowned.json
  inflating: behavior_packs/vanilla/spawn_rules/enderman.json
  inflating: behavior_packs/vanilla/spawn_rules/fox.json
  inflating: behavior_packs/vanilla/spawn_rules/ghast.json
  inflating: behavior_packs/vanilla/spawn_rules/guardian.json
  inflating: behavior_packs/vanilla/spawn_rules/horse.json
  inflating: behavior_packs/vanilla/spawn_rules/husk.json
  inflating: behavior_packs/vanilla/spawn_rules/llama.json
  inflating: behavior_packs/vanilla/spawn_rules/magma_cube.json
  inflating: behavior_packs/vanilla/spawn_rules/mooshroom.json
  inflating: behavior_packs/vanilla/spawn_rules/ocelot.json
  inflating: behavior_packs/vanilla/spawn_rules/panda.json
  inflating: behavior_packs/vanilla/spawn_rules/parrot.json
  inflating: behavior_packs/vanilla/spawn_rules/phantom.json
  inflating: behavior_packs/vanilla/spawn_rules/pig.json
  inflating: behavior_packs/vanilla/spawn_rules/pillager.json
  inflating: behavior_packs/vanilla/spawn_rules/pillager_patrol.json
  inflating: behavior_packs/vanilla/spawn_rules/polar_bear.json
  inflating: behavior_packs/vanilla/spawn_rules/pufferfish.json
  inflating: behavior_packs/vanilla/spawn_rules/rabbit.json
  inflating: behavior_packs/vanilla/spawn_rules/salmon.json
  inflating: behavior_packs/vanilla/spawn_rules/sheep.json
  inflating: behavior_packs/vanilla/spawn_rules/skeleton.json
  inflating: behavior_packs/vanilla/spawn_rules/slime.json
  inflating: behavior_packs/vanilla/spawn_rules/spider.json
  inflating: behavior_packs/vanilla/spawn_rules/squid.json
  inflating: behavior_packs/vanilla/spawn_rules/stray.json
  inflating: behavior_packs/vanilla/spawn_rules/tropicalfish.json
  inflating: behavior_packs/vanilla/spawn_rules/turtle.json
  inflating: behavior_packs/vanilla/spawn_rules/witch.json
  inflating: behavior_packs/vanilla/spawn_rules/wither_skeleton.json
  inflating: behavior_packs/vanilla/spawn_rules/wolf.json
  inflating: behavior_packs/vanilla/spawn_rules/zombie.json
  inflating: behavior_packs/vanilla/spawn_rules/zombie_pigman.json
   creating: behavior_packs/vanilla/trading/
  inflating: behavior_packs/vanilla/trading/armorer_trades.json
  inflating: behavior_packs/vanilla/trading/butcher_trades.json
  inflating: behavior_packs/vanilla/trading/cartographer_trades.json
  inflating: behavior_packs/vanilla/trading/cleric_trades.json
   creating: behavior_packs/vanilla/trading/economy_trades/
  inflating: behavior_packs/vanilla/trading/economy_trades/armorer_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/butcher_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/cartographer_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/cleric_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/farmer_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/fisherman_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/fletcher_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/leather_worker_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/librarian_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/shepherd_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/stone_mason_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/tool_smith_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/wandering_trader_trades.json
  inflating: behavior_packs/vanilla/trading/economy_trades/weapon_smith_trades.json
  inflating: behavior_packs/vanilla/trading/farmer_trades.json
  inflating: behavior_packs/vanilla/trading/fisherman_trades.json
  inflating: behavior_packs/vanilla/trading/fletcher_trades.json
  inflating: behavior_packs/vanilla/trading/leather_worker_trades.json
  inflating: behavior_packs/vanilla/trading/librarian_trades.json
  inflating: behavior_packs/vanilla/trading/shepherd_trades.json
  inflating: behavior_packs/vanilla/trading/stone_mason_trades.json
  inflating: behavior_packs/vanilla/trading/tool_smith_trades.json
  inflating: behavior_packs/vanilla/trading/weapon_smith_trades.json
   creating: behavior_packs/vanilla_1.14/
  inflating: behavior_packs/vanilla_1.14/contents.json
   creating: behavior_packs/vanilla_1.14/entities/
  inflating: behavior_packs/vanilla_1.14/entities/bee.json
  inflating: behavior_packs/vanilla_1.14/entities/dolphin.json
  inflating: behavior_packs/vanilla_1.14/entities/drowned.json
  inflating: behavior_packs/vanilla_1.14/entities/ocelot.json
  inflating: behavior_packs/vanilla_1.14/entities/panda.json
  inflating: behavior_packs/vanilla_1.14/entities/parrot.json
  inflating: behavior_packs/vanilla_1.14/entities/polar_bear.json
  inflating: behavior_packs/vanilla_1.14/entities/turtle.json
  inflating: behavior_packs/vanilla_1.14/entities/wolf.json
   creating: behavior_packs/vanilla_1.14/items/
  inflating: behavior_packs/vanilla_1.14/items/honey_bottle.json
  inflating: behavior_packs/vanilla_1.14/items/honeycomb.json
  inflating: behavior_packs/vanilla_1.14/manifest.json
   creating: behavior_packs/vanilla_1.14/recipes/
  inflating: behavior_packs/vanilla_1.14/recipes/beehive.json
  inflating: behavior_packs/vanilla_1.14/recipes/honey_block.json
  inflating: behavior_packs/vanilla_1.14/recipes/honey_bottle.json
  inflating: behavior_packs/vanilla_1.14/recipes/honey_bottle_to_sugar.json
  inflating: behavior_packs/vanilla_1.14/recipes/honeycomb_block.json
   creating: behavior_packs/vanilla_1.14/spawn_rules/
  inflating: behavior_packs/vanilla_1.14/spawn_rules/bee.json
  inflating: behavior_packs/vanilla_1.14/spawn_rules/pillager_patrol.json
   creating: behavior_packs/vanilla_1.15/
  inflating: behavior_packs/vanilla_1.15/contents.json
   creating: behavior_packs/vanilla_1.15/entities/
  inflating: behavior_packs/vanilla_1.15/entities/bee.json
  inflating: behavior_packs/vanilla_1.15/entities/blaze.json
  inflating: behavior_packs/vanilla_1.15/entities/cat.json
  inflating: behavior_packs/vanilla_1.15/entities/cave_spider.json
  inflating: behavior_packs/vanilla_1.15/entities/chicken.json
  inflating: behavior_packs/vanilla_1.15/entities/creeper.json
  inflating: behavior_packs/vanilla_1.15/entities/dolphin.json
  inflating: behavior_packs/vanilla_1.15/entities/dragon_fireball.json
  inflating: behavior_packs/vanilla_1.15/entities/drowned.json
  inflating: behavior_packs/vanilla_1.15/entities/elder_guardian.json
  inflating: behavior_packs/vanilla_1.15/entities/enderman.json
  inflating: behavior_packs/vanilla_1.15/entities/endermite.json
  inflating: behavior_packs/vanilla_1.15/entities/fish.json
  inflating: behavior_packs/vanilla_1.15/entities/fox.json
  inflating: behavior_packs/vanilla_1.15/entities/guardian.json
  inflating: behavior_packs/vanilla_1.15/entities/horse.json
  inflating: behavior_packs/vanilla_1.15/entities/husk.json
  inflating: behavior_packs/vanilla_1.15/entities/iron_golem.json
  inflating: behavior_packs/vanilla_1.15/entities/magma_cube.json
  inflating: behavior_packs/vanilla_1.15/entities/ocelot.json
  inflating: behavior_packs/vanilla_1.15/entities/panda.json
  inflating: behavior_packs/vanilla_1.15/entities/phantom.json
  inflating: behavior_packs/vanilla_1.15/entities/pillager.json
  inflating: behavior_packs/vanilla_1.15/entities/polar_bear.json
  inflating: behavior_packs/vanilla_1.15/entities/pufferfish.json
  inflating: behavior_packs/vanilla_1.15/entities/rabbit.json
  inflating: behavior_packs/vanilla_1.15/entities/ravager.json
  inflating: behavior_packs/vanilla_1.15/entities/salmon.json
  inflating: behavior_packs/vanilla_1.15/entities/sheep.json
  inflating: behavior_packs/vanilla_1.15/entities/silverfish.json
  inflating: behavior_packs/vanilla_1.15/entities/skeleton.json
  inflating: behavior_packs/vanilla_1.15/entities/slime.json
  inflating: behavior_packs/vanilla_1.15/entities/snow_golem.json
  inflating: behavior_packs/vanilla_1.15/entities/snowball.json
  inflating: behavior_packs/vanilla_1.15/entities/spider.json
  inflating: behavior_packs/vanilla_1.15/entities/squid.json
  inflating: behavior_packs/vanilla_1.15/entities/stray.json
  inflating: behavior_packs/vanilla_1.15/entities/tropicalfish.json
  inflating: behavior_packs/vanilla_1.15/entities/turtle.json
  inflating: behavior_packs/vanilla_1.15/entities/villager_v2.json
  inflating: behavior_packs/vanilla_1.15/entities/vindicator.json
  inflating: behavior_packs/vanilla_1.15/entities/wither_skeleton.json
  inflating: behavior_packs/vanilla_1.15/entities/wolf.json
  inflating: behavior_packs/vanilla_1.15/entities/zombie.json
  inflating: behavior_packs/vanilla_1.15/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla_1.15/entities/zombie_villager.json
  inflating: behavior_packs/vanilla_1.15/entities/zombie_villager_v2.json
   creating: behavior_packs/vanilla_1.15/loot_tables/
   creating: behavior_packs/vanilla_1.15/loot_tables/entities/
  inflating: behavior_packs/vanilla_1.15/loot_tables/entities/drowned.json
  inflating: behavior_packs/vanilla_1.15/manifest.json
   creating: behavior_packs/vanilla_1.15/recipes/
  inflating: behavior_packs/vanilla_1.15/recipes/brew_slowness_glowstone_dust.json
  inflating: behavior_packs/vanilla_1.15/recipes/brew_strong_poison_fermented_spider_eye.json
   creating: behavior_packs/vanilla_1.15/spawn_rules/
  inflating: behavior_packs/vanilla_1.15/spawn_rules/horse.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/llama.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/panda.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/pillager_patrol.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/polar_bear.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/rabbit.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/squid.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/turtle.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/wolf.json
  inflating: behavior_packs/vanilla_1.15/spawn_rules/zombie.json
   creating: behavior_packs/vanilla_1.16/
   creating: behavior_packs/vanilla_1.16.100/
  inflating: behavior_packs/vanilla_1.16.100/contents.json
   creating: behavior_packs/vanilla_1.16.100/entities/
  inflating: behavior_packs/vanilla_1.16.100/entities/agent.json
  inflating: behavior_packs/vanilla_1.16.100/entities/area_effect_cloud.json
  inflating: behavior_packs/vanilla_1.16.100/entities/armor_stand.json
  inflating: behavior_packs/vanilla_1.16.100/entities/arrow.json
  inflating: behavior_packs/vanilla_1.16.100/entities/bat.json
  inflating: behavior_packs/vanilla_1.16.100/entities/bee.json
  inflating: behavior_packs/vanilla_1.16.100/entities/blaze.json
  inflating: behavior_packs/vanilla_1.16.100/entities/boat.json
  inflating: behavior_packs/vanilla_1.16.100/entities/cat.json
  inflating: behavior_packs/vanilla_1.16.100/entities/cave_spider.json
  inflating: behavior_packs/vanilla_1.16.100/entities/chest_minecart.json
  inflating: behavior_packs/vanilla_1.16.100/entities/chicken.json
  inflating: behavior_packs/vanilla_1.16.100/entities/command_block_minecart.json
  inflating: behavior_packs/vanilla_1.16.100/entities/cow.json
  inflating: behavior_packs/vanilla_1.16.100/entities/creeper.json
  inflating: behavior_packs/vanilla_1.16.100/entities/dolphin.json
  inflating: behavior_packs/vanilla_1.16.100/entities/donkey.json
  inflating: behavior_packs/vanilla_1.16.100/entities/dragon_fireball.json
  inflating: behavior_packs/vanilla_1.16.100/entities/drowned.json
  inflating: behavior_packs/vanilla_1.16.100/entities/egg.json
  inflating: behavior_packs/vanilla_1.16.100/entities/elder_guardian.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ender_crystal.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ender_dragon.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ender_pearl.json
  inflating: behavior_packs/vanilla_1.16.100/entities/enderman.json
  inflating: behavior_packs/vanilla_1.16.100/entities/endermite.json
  inflating: behavior_packs/vanilla_1.16.100/entities/evocation_illager.json
  inflating: behavior_packs/vanilla_1.16.100/entities/eye_of_ender_signal.json
  inflating: behavior_packs/vanilla_1.16.100/entities/fireball.json
  inflating: behavior_packs/vanilla_1.16.100/entities/fireworks_rocket.json
  inflating: behavior_packs/vanilla_1.16.100/entities/fish.json
  inflating: behavior_packs/vanilla_1.16.100/entities/fishing_hook.json
  inflating: behavior_packs/vanilla_1.16.100/entities/fox.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ghast.json
  inflating: behavior_packs/vanilla_1.16.100/entities/guardian.json
  inflating: behavior_packs/vanilla_1.16.100/entities/hoglin.json
  inflating: behavior_packs/vanilla_1.16.100/entities/hopper_minecart.json
  inflating: behavior_packs/vanilla_1.16.100/entities/horse.json
  inflating: behavior_packs/vanilla_1.16.100/entities/husk.json
  inflating: behavior_packs/vanilla_1.16.100/entities/iron_golem.json
  inflating: behavior_packs/vanilla_1.16.100/entities/lightning_bolt.json
  inflating: behavior_packs/vanilla_1.16.100/entities/lingering_potion.json
  inflating: behavior_packs/vanilla_1.16.100/entities/llama.json
  inflating: behavior_packs/vanilla_1.16.100/entities/llama_spit.json
  inflating: behavior_packs/vanilla_1.16.100/entities/magma_cube.json
  inflating: behavior_packs/vanilla_1.16.100/entities/minecart.json
  inflating: behavior_packs/vanilla_1.16.100/entities/mooshroom.json
  inflating: behavior_packs/vanilla_1.16.100/entities/mule.json
  inflating: behavior_packs/vanilla_1.16.100/entities/npc.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ocelot.json
  inflating: behavior_packs/vanilla_1.16.100/entities/panda.json
  inflating: behavior_packs/vanilla_1.16.100/entities/parrot.json
  inflating: behavior_packs/vanilla_1.16.100/entities/phantom.json
  inflating: behavior_packs/vanilla_1.16.100/entities/pig.json
  inflating: behavior_packs/vanilla_1.16.100/entities/piglin.json
  inflating: behavior_packs/vanilla_1.16.100/entities/piglin_brute.json
  inflating: behavior_packs/vanilla_1.16.100/entities/pillager.json
  inflating: behavior_packs/vanilla_1.16.100/entities/player.json
  inflating: behavior_packs/vanilla_1.16.100/entities/polar_bear.json
  inflating: behavior_packs/vanilla_1.16.100/entities/pufferfish.json
  inflating: behavior_packs/vanilla_1.16.100/entities/rabbit.json
  inflating: behavior_packs/vanilla_1.16.100/entities/ravager.json
  inflating: behavior_packs/vanilla_1.16.100/entities/salmon.json
  inflating: behavior_packs/vanilla_1.16.100/entities/sheep.json
  inflating: behavior_packs/vanilla_1.16.100/entities/shulker.json
  inflating: behavior_packs/vanilla_1.16.100/entities/shulker_bullet.json
  inflating: behavior_packs/vanilla_1.16.100/entities/silverfish.json
  inflating: behavior_packs/vanilla_1.16.100/entities/skeleton.json
  inflating: behavior_packs/vanilla_1.16.100/entities/skeleton_horse.json
  inflating: behavior_packs/vanilla_1.16.100/entities/slime.json
  inflating: behavior_packs/vanilla_1.16.100/entities/small_fireball.json
  inflating: behavior_packs/vanilla_1.16.100/entities/snow_golem.json
  inflating: behavior_packs/vanilla_1.16.100/entities/snowball.json
  inflating: behavior_packs/vanilla_1.16.100/entities/spider.json
  inflating: behavior_packs/vanilla_1.16.100/entities/splash_potion.json
  inflating: behavior_packs/vanilla_1.16.100/entities/squid.json
  inflating: behavior_packs/vanilla_1.16.100/entities/stray.json
  inflating: behavior_packs/vanilla_1.16.100/entities/strider.json
  inflating: behavior_packs/vanilla_1.16.100/entities/thrown_trident.json
  inflating: behavior_packs/vanilla_1.16.100/entities/tnt.json
  inflating: behavior_packs/vanilla_1.16.100/entities/tnt_minecart.json
  inflating: behavior_packs/vanilla_1.16.100/entities/tripod_camera.json
  inflating: behavior_packs/vanilla_1.16.100/entities/tropicalfish.json
  inflating: behavior_packs/vanilla_1.16.100/entities/turtle.json
  inflating: behavior_packs/vanilla_1.16.100/entities/vex.json
  inflating: behavior_packs/vanilla_1.16.100/entities/villager.json
  inflating: behavior_packs/vanilla_1.16.100/entities/villager_v2.json
  inflating: behavior_packs/vanilla_1.16.100/entities/vindicator.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wandering_trader.json
  inflating: behavior_packs/vanilla_1.16.100/entities/witch.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wither.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wither_skeleton.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wither_skull.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wither_skull_dangerous.json
  inflating: behavior_packs/vanilla_1.16.100/entities/wolf.json
  inflating: behavior_packs/vanilla_1.16.100/entities/xp_bottle.json
  inflating: behavior_packs/vanilla_1.16.100/entities/xp_orb.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zoglin.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zombie.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zombie_horse.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zombie_villager.json
  inflating: behavior_packs/vanilla_1.16.100/entities/zombie_villager_v2.json
   creating: behavior_packs/vanilla_1.16.100/loot_tables/
   creating: behavior_packs/vanilla_1.16.100/loot_tables/chests/
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/chests/ruined_portal.json
   creating: behavior_packs/vanilla_1.16.100/loot_tables/entities/
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/fish.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/piglin_barter.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/piglin_brute_gear.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/raider_drops.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/salmon_large.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/salmon_normal.json
  inflating: behavior_packs/vanilla_1.16.100/loot_tables/entities/snow_golem_shear.json
  inflating: behavior_packs/vanilla_1.16.100/manifest.json
   creating: behavior_packs/vanilla_1.16.100/recipes/
  inflating: behavior_packs/vanilla_1.16.100/recipes/brewing_stand_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/furnace_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/stone_axe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/stone_hoe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/stone_pickaxe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/stone_shovel_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16.100/recipes/stone_sword_from_blackstone.json
   creating: behavior_packs/vanilla_1.16.100/spawn_rules/
  inflating: behavior_packs/vanilla_1.16.100/spawn_rules/piglin.json
  inflating: behavior_packs/vanilla_1.16.100/spawn_rules/polar_bear.json
  inflating: behavior_packs/vanilla_1.16.100/spawn_rules/slime.json
   creating: behavior_packs/vanilla_1.16.200/
  inflating: behavior_packs/vanilla_1.16.200/contents.json
   creating: behavior_packs/vanilla_1.16.200/entities/
  inflating: behavior_packs/vanilla_1.16.200/entities/bee.json
  inflating: behavior_packs/vanilla_1.16.200/entities/boat.json
  inflating: behavior_packs/vanilla_1.16.200/manifest.json
   creating: behavior_packs/vanilla_1.16.210/
  inflating: behavior_packs/vanilla_1.16.210/contents.json
  inflating: behavior_packs/vanilla_1.16.210/manifest.json
   creating: behavior_packs/vanilla_1.16.220/
  inflating: behavior_packs/vanilla_1.16.220/contents.json
   creating: behavior_packs/vanilla_1.16.220/entities/
  inflating: behavior_packs/vanilla_1.16.220/entities/armor_stand.json
  inflating: behavior_packs/vanilla_1.16.220/entities/chicken.json
  inflating: behavior_packs/vanilla_1.16.220/entities/cow.json
  inflating: behavior_packs/vanilla_1.16.220/entities/drowned.json
  inflating: behavior_packs/vanilla_1.16.220/entities/llama.json
  inflating: behavior_packs/vanilla_1.16.220/entities/pig.json
   creating: behavior_packs/vanilla_1.16.220/loot_tables/
   creating: behavior_packs/vanilla_1.16.220/loot_tables/entities/
  inflating: behavior_packs/vanilla_1.16.220/loot_tables/entities/zombie.json
  inflating: behavior_packs/vanilla_1.16.220/loot_tables/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla_1.16.220/manifest.json
  inflating: behavior_packs/vanilla_1.16/contents.json
   creating: behavior_packs/vanilla_1.16/entities/
  inflating: behavior_packs/vanilla_1.16/entities/bat.json
  inflating: behavior_packs/vanilla_1.16/entities/bee.json
  inflating: behavior_packs/vanilla_1.16/entities/blaze.json
  inflating: behavior_packs/vanilla_1.16/entities/boat.json
  inflating: behavior_packs/vanilla_1.16/entities/cat.json
  inflating: behavior_packs/vanilla_1.16/entities/cave_spider.json
  inflating: behavior_packs/vanilla_1.16/entities/chicken.json
  inflating: behavior_packs/vanilla_1.16/entities/cow.json
  inflating: behavior_packs/vanilla_1.16/entities/creeper.json
  inflating: behavior_packs/vanilla_1.16/entities/dolphin.json
  inflating: behavior_packs/vanilla_1.16/entities/donkey.json
  inflating: behavior_packs/vanilla_1.16/entities/drowned.json
  inflating: behavior_packs/vanilla_1.16/entities/elder_guardian.json
  inflating: behavior_packs/vanilla_1.16/entities/enderman.json
  inflating: behavior_packs/vanilla_1.16/entities/endermite.json
  inflating: behavior_packs/vanilla_1.16/entities/evocation_illager.json
  inflating: behavior_packs/vanilla_1.16/entities/fish.json
  inflating: behavior_packs/vanilla_1.16/entities/fox.json
  inflating: behavior_packs/vanilla_1.16/entities/ghast.json
  inflating: behavior_packs/vanilla_1.16/entities/guardian.json
  inflating: behavior_packs/vanilla_1.16/entities/hoglin.json
  inflating: behavior_packs/vanilla_1.16/entities/horse.json
  inflating: behavior_packs/vanilla_1.16/entities/husk.json
  inflating: behavior_packs/vanilla_1.16/entities/llama.json
  inflating: behavior_packs/vanilla_1.16/entities/magma_cube.json
  inflating: behavior_packs/vanilla_1.16/entities/mooshroom.json
  inflating: behavior_packs/vanilla_1.16/entities/mule.json
  inflating: behavior_packs/vanilla_1.16/entities/ocelot.json
  inflating: behavior_packs/vanilla_1.16/entities/panda.json
  inflating: behavior_packs/vanilla_1.16/entities/parrot.json
  inflating: behavior_packs/vanilla_1.16/entities/phantom.json
  inflating: behavior_packs/vanilla_1.16/entities/pig.json
  inflating: behavior_packs/vanilla_1.16/entities/piglin.json
  inflating: behavior_packs/vanilla_1.16/entities/piglin_brute.json
  inflating: behavior_packs/vanilla_1.16/entities/pillager.json
  inflating: behavior_packs/vanilla_1.16/entities/player.json
  inflating: behavior_packs/vanilla_1.16/entities/polar_bear.json
  inflating: behavior_packs/vanilla_1.16/entities/pufferfish.json
  inflating: behavior_packs/vanilla_1.16/entities/rabbit.json
  inflating: behavior_packs/vanilla_1.16/entities/ravager.json
  inflating: behavior_packs/vanilla_1.16/entities/salmon.json
  inflating: behavior_packs/vanilla_1.16/entities/sheep.json
  inflating: behavior_packs/vanilla_1.16/entities/shulker.json
  inflating: behavior_packs/vanilla_1.16/entities/silverfish.json
  inflating: behavior_packs/vanilla_1.16/entities/skeleton.json
  inflating: behavior_packs/vanilla_1.16/entities/skeleton_horse.json
  inflating: behavior_packs/vanilla_1.16/entities/slime.json
  inflating: behavior_packs/vanilla_1.16/entities/snow_golem.json
  inflating: behavior_packs/vanilla_1.16/entities/snowball.json
  inflating: behavior_packs/vanilla_1.16/entities/spider.json
  inflating: behavior_packs/vanilla_1.16/entities/squid.json
  inflating: behavior_packs/vanilla_1.16/entities/stray.json
  inflating: behavior_packs/vanilla_1.16/entities/strider.json
  inflating: behavior_packs/vanilla_1.16/entities/tropicalfish.json
  inflating: behavior_packs/vanilla_1.16/entities/turtle.json
  inflating: behavior_packs/vanilla_1.16/entities/vex.json
  inflating: behavior_packs/vanilla_1.16/entities/villager.json
  inflating: behavior_packs/vanilla_1.16/entities/villager_v2.json
  inflating: behavior_packs/vanilla_1.16/entities/vindicator.json
  inflating: behavior_packs/vanilla_1.16/entities/wandering_trader.json
  inflating: behavior_packs/vanilla_1.16/entities/witch.json
  inflating: behavior_packs/vanilla_1.16/entities/wither.json
  inflating: behavior_packs/vanilla_1.16/entities/wither_skeleton.json
  inflating: behavior_packs/vanilla_1.16/entities/wolf.json
  inflating: behavior_packs/vanilla_1.16/entities/xp_orb.json
  inflating: behavior_packs/vanilla_1.16/entities/zoglin.json
  inflating: behavior_packs/vanilla_1.16/entities/zombie.json
  inflating: behavior_packs/vanilla_1.16/entities/zombie_horse.json
  inflating: behavior_packs/vanilla_1.16/entities/zombie_pigman.json
  inflating: behavior_packs/vanilla_1.16/entities/zombie_villager.json
  inflating: behavior_packs/vanilla_1.16/entities/zombie_villager_v2.json
   creating: behavior_packs/vanilla_1.16/loot_tables/
   creating: behavior_packs/vanilla_1.16/loot_tables/chests/
  inflating: behavior_packs/vanilla_1.16/loot_tables/chests/bastion_bridge.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/chests/bastion_hoglin_stable.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/chests/bastion_other.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/chests/bastion_treasure.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/chests/ruined_portal.json
   creating: behavior_packs/vanilla_1.16/loot_tables/entities/
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/hoglin.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/piglin_barter.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/piglin_brute_gear.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/piglin_gear_melee.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/piglin_gear_ranged.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/strider.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/strider_saddled.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/zoglin.json
  inflating: behavior_packs/vanilla_1.16/loot_tables/entities/zombified_piglin_rider_gear.json
  inflating: behavior_packs/vanilla_1.16/manifest.json
   creating: behavior_packs/vanilla_1.16/recipes/
  inflating: behavior_packs/vanilla_1.16/recipes/barrel_from_crimson_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/barrel_from_warped_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/beehive_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/beehive_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/blackstone_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/blackstone_stairs.json
  inflating: behavior_packs/vanilla_1.16/recipes/blackstone_wall.json
  inflating: behavior_packs/vanilla_1.16/recipes/bookshelf_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/bookshelf_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/bowl_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/bowl_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_log2.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_acacia_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_birch_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_jungle_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_spruce_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_stripped_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/campfire_from_wood.json
  inflating: behavior_packs/vanilla_1.16/recipes/cartography_table_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/cartography_table_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/chain.json
  inflating: behavior_packs/vanilla_1.16/recipes/chest_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/chest_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/chiseled_nether_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/chiseled_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/composter_from_crimson_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/composter_from_warped_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/crafting_table_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/crafting_table_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_button.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_door.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_fence.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_fence_gate.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_hyphae_stripped.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_planks_from_crimson_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_planks_from_stripped_crimson_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_planks_from_stripped_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_pressure_plate.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_sign.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_stairs.json
  inflating: behavior_packs/vanilla_1.16/recipes/crimson_trapdoor.json
  inflating: behavior_packs/vanilla_1.16/recipes/daylight_detector_from_crimson_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/daylight_detector_from_warped_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/fletching_table_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/fletching_table_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_ancient_debris.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_beef.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_chicken.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_cracked_nether_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_cracked_polished_blackstone_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_fish.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_kelp.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_mutton_raw.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_nether_gold_ore.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_porkchop.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_potato.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_quartz_block.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_rabbit.json
  inflating: behavior_packs/vanilla_1.16/recipes/furnace_salmon.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_crimson_planks2.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_crimson_planks3.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_crimson_planks4.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_warped_planks2.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_warped_planks3.json
  inflating: behavior_packs/vanilla_1.16/recipes/grindstone_from_warped_planks4.json
  inflating: behavior_packs/vanilla_1.16/recipes/jukebox_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/jukebox_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/lectern_from_crimson_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/lectern_from_warped_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/lodestone.json
  inflating: behavior_packs/vanilla_1.16/recipes/loom_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/loom_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/netherite_block.json
  inflating: behavior_packs/vanilla_1.16/recipes/netherite_ingot.json
  inflating: behavior_packs/vanilla_1.16/recipes/netherite_ingot_from_block.json
  inflating: behavior_packs/vanilla_1.16/recipes/noteblock_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/noteblock_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/piston_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/piston_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_basalt.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_brick_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_brick_stairs.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_brick_wall.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_button.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_pressure_plate.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_stairs.json
  inflating: behavior_packs/vanilla_1.16/recipes/polished_blackstone_wall.json
  inflating: behavior_packs/vanilla_1.16/recipes/quartz_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/respawn_anchor.json
  inflating: behavior_packs/vanilla_1.16/recipes/shield_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/shield_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/smithing_table_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/smithing_table_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/smoker_from_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/smoker_from_stripped_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/smoker_from_stripped_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/smoker_from_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_crimson_stem2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_log2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_acacia_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_birch_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_jungle_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_stripped_spruce_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_sand_and_wood.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_log2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_acacia_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_birch_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_dark_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_jungle_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_oak_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_stripped_spruce_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_soul_soil_and_wood.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_stripped_crimson_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_stripped_crimson_stem2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_stripped_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_stripped_warped_stem2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_warped_stem.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_campfire_from_warped_stem2.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_lantern.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_torch_from_soul_sand.json
  inflating: behavior_packs/vanilla_1.16/recipes/soul_torch_from_soul_soil.json
  inflating: behavior_packs/vanilla_1.16/recipes/stick_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/stick_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/stone_axe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stone_hoe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stone_pickaxe_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stone_shovel_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stone_sword_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_blackstone_slab_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_blackstone_stairs_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_blackstone_wall_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_brick_slab_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_brick_stairs_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_brick_wall_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_bricks_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_chiseled_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_chiseled_nether_bricks_from_nether_brick.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_chiseled_polished_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_basalt_from_basalt.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_brick_slab_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_brick_stairs_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_brick_wall_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_bricks_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_slab_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_stairs_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_polished_wall_from_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_quartz_bricks_from_quartz_block.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_quartz_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_slab_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_slab_from_polished_blackstone_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_stairs_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_stairs_from_polished_blackstone_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_wall_from_polished_blackstone.json
  inflating: behavior_packs/vanilla_1.16/recipes/stonecutter_wall_from_polished_blackstone_bricks.json
  inflating: behavior_packs/vanilla_1.16/recipes/target_block.json
  inflating: behavior_packs/vanilla_1.16/recipes/tripwire_hook_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/tripwire_hook_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_button.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_door.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_fence.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_fence_gate.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_fungus_on_a_stick.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_hyphae_stripped.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_planks_from_stripped_log.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_planks_from_stripped_warped_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_planks_from_warped_hyphae.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_pressure_plate.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_sign.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_slab.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_stairs.json
  inflating: behavior_packs/vanilla_1.16/recipes/warped_trapdoor.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_axe_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_axe_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_hoe_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_hoe_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_pickaxe_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_pickaxe_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_shovel_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_shovel_from_warped_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_sword_from_crimson_planks.json
  inflating: behavior_packs/vanilla_1.16/recipes/wooden_sword_from_warped_planks.json
   creating: behavior_packs/vanilla_1.16/spawn_rules/
  inflating: behavior_packs/vanilla_1.16/spawn_rules/enderman.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/ghast.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/hoglin.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/magma_cube.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/piglin.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/skeleton.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/strider.json
  inflating: behavior_packs/vanilla_1.16/spawn_rules/zombie_pigman.json
   creating: behavior_packs/vanilla_1.16/trading/
   creating: behavior_packs/vanilla_1.16/trading/economy_trades/
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/armorer_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/butcher_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/cartographer_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/cleric_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/farmer_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/fisherman_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/fletcher_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/leather_worker_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/librarian_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/shepherd_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/stone_mason_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/tool_smith_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/wandering_trader_trades.json
  inflating: behavior_packs/vanilla_1.16/trading/economy_trades/weapon_smith_trades.json
   creating: behavior_packs/vanilla_gametest/
  inflating: behavior_packs/vanilla_gametest/.prettierrc.json
   creating: behavior_packs/vanilla_gametest/.vscode/
  inflating: behavior_packs/vanilla_gametest/.vscode/extensions.json
  inflating: behavior_packs/vanilla_gametest/.vscode/settings.json
  inflating: behavior_packs/vanilla_gametest/contents.json
  inflating: behavior_packs/vanilla_gametest/manifest.json
  inflating: behavior_packs/vanilla_gametest/pack_icon.png
   creating: behavior_packs/vanilla_gametest/scripts/
  inflating: behavior_packs/vanilla_gametest/scripts/APITests.js
  inflating: behavior_packs/vanilla_gametest/scripts/BlockTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/DebugTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/DispenserTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/DoorTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/Main.js
  inflating: behavior_packs/vanilla_gametest/scripts/MinecartTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/MobTests.js
  inflating: behavior_packs/vanilla_gametest/scripts/PathFindingTests.js
   creating: behavior_packs/vanilla_gametest/structures/
   creating: behavior_packs/vanilla_gametest/structures/APITests/
  inflating: behavior_packs/vanilla_gametest/structures/APITests/on_entity_created.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/BlockTests/
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/concrete_pops_off_waterlogged_chest.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/concrete_solidifies_in_deep_water.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/concrete_solidifies_in_shallow_water.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/concrete_solidifies_next_to_water.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/explosion_drop_location.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/sand_fall_boats.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/sand_fall_shulker.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/turtle_eggs_squish.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/turtle_eggs_survive_item.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/BlockTests/turtle_eggs_survive_xp.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/DebugTests/
  inflating: behavior_packs/vanilla_gametest/structures/DebugTests/always_fail.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DebugTests/always_succeed.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/DispenserTests/
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_arrow_trap.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_carpet_on_llama.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_charge_respawn_anchor.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_chest_on_llama.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_fire.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_fire_crash.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_horsearmor_on_horse.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_minecart.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_minecart_track.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_saddle_on_horse.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_saddle_on_pig.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_shears_mooshroom.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_shears_sheep.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_shears_snowgolem.mcstructure
  inflating: behavior_packs/vanilla_gametest/structures/DispenserTests/dispenser_water.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/DoorTests/
  inflating: behavior_packs/vanilla_gametest/structures/DoorTests/four_villagers_one_door.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/MinecartTests/
  inflating: behavior_packs/vanilla_gametest/structures/MinecartTests/turn.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/MobTests/
  inflating: behavior_packs/vanilla_gametest/structures/MobTests/zombie_burn.mcstructure
   creating: behavior_packs/vanilla_gametest/structures/PathFindingTests/
  inflating: behavior_packs/vanilla_gametest/structures/PathFindingTests/veritcal_template.mcstructure
  inflating: cmake_install.cmake
   creating: definitions/
   creating: definitions/attachables/
  inflating: definitions/attachables/bow.json
  inflating: definitions/attachables/chainmail_boots.json
  inflating: definitions/attachables/chainmail_boots.player.json
  inflating: definitions/attachables/chainmail_chestplate.json
  inflating: definitions/attachables/chainmail_chestplate.player.json
  inflating: definitions/attachables/chainmail_helmet.json
  inflating: definitions/attachables/chainmail_helmet.player.json
  inflating: definitions/attachables/chainmail_leggings.json
  inflating: definitions/attachables/chainmail_leggings.player.json
  inflating: definitions/attachables/crossbow.entity.json
  inflating: definitions/attachables/diamond_boots.json
  inflating: definitions/attachables/diamond_boots.player.json
  inflating: definitions/attachables/diamond_chestplate.json
  inflating: definitions/attachables/diamond_chestplate.player.json
  inflating: definitions/attachables/diamond_helmet.json
  inflating: definitions/attachables/diamond_helmet.player.json
  inflating: definitions/attachables/diamond_leggings.json
  inflating: definitions/attachables/diamond_leggings.player.json
  inflating: definitions/attachables/elytra.json
  inflating: definitions/attachables/golden_boots.json
  inflating: definitions/attachables/golden_boots.player.json
  inflating: definitions/attachables/golden_chestplate.json
  inflating: definitions/attachables/golden_chestplate.player.json
  inflating: definitions/attachables/golden_helmet.json
  inflating: definitions/attachables/golden_helmet.player.json
  inflating: definitions/attachables/golden_leggings.json
  inflating: definitions/attachables/golden_leggings.player.json
  inflating: definitions/attachables/iron_boots.json
  inflating: definitions/attachables/iron_boots.player.json
  inflating: definitions/attachables/iron_chestplate.json
  inflating: definitions/attachables/iron_chestplate.player.json
  inflating: definitions/attachables/iron_helmet.json
  inflating: definitions/attachables/iron_helmet.player.json
  inflating: definitions/attachables/iron_leggings.json
  inflating: definitions/attachables/iron_leggings.player.json
  inflating: definitions/attachables/leather_boots.json
  inflating: definitions/attachables/leather_boots.player.json
  inflating: definitions/attachables/leather_chestplate.json
  inflating: definitions/attachables/leather_chestplate.player.json
  inflating: definitions/attachables/leather_helmet.json
  inflating: definitions/attachables/leather_helmet.player.json
  inflating: definitions/attachables/leather_leggings.json
  inflating: definitions/attachables/leather_leggings.player.json
  inflating: definitions/attachables/netherite_boots.json
  inflating: definitions/attachables/netherite_boots.player.json
  inflating: definitions/attachables/netherite_chestplate.json
  inflating: definitions/attachables/netherite_chestplate.player.json
  inflating: definitions/attachables/netherite_helmet.json
  inflating: definitions/attachables/netherite_helmet.player.json
  inflating: definitions/attachables/netherite_leggings.json
  inflating: definitions/attachables/netherite_leggings.player.json
  inflating: definitions/attachables/shield.entity.json
  inflating: definitions/attachables/trident.entity.json
  inflating: definitions/attachables/turtle_shell_helmet.json
  inflating: definitions/attachables/turtle_shell_helmet.player.json
   creating: definitions/biomes/
  inflating: definitions/biomes/bamboo_jungle.biome.json
  inflating: definitions/biomes/bamboo_jungle_hills.biome.json
  inflating: definitions/biomes/basalt_deltas.biome.json
  inflating: definitions/biomes/beach.biome.json
  inflating: definitions/biomes/birch_forest.biome.json
  inflating: definitions/biomes/birch_forest_hills.biome.json
  inflating: definitions/biomes/birch_forest_hills_mutated.biome.json
  inflating: definitions/biomes/birch_forest_mutated.biome.json
  inflating: definitions/biomes/cold_beach.biome.json
  inflating: definitions/biomes/cold_ocean.biome.json
  inflating: definitions/biomes/cold_taiga.biome.json
  inflating: definitions/biomes/cold_taiga_hills.biome.json
  inflating: definitions/biomes/cold_taiga_mutated.biome.json
  inflating: definitions/biomes/crimson_forest.biome.json
  inflating: definitions/biomes/deep_cold_ocean.biome.json
  inflating: definitions/biomes/deep_frozen_ocean.biome.json
  inflating: definitions/biomes/deep_lukewarm_ocean.biome.json
  inflating: definitions/biomes/deep_ocean.biome.json
  inflating: definitions/biomes/deep_warm_ocean.biome.json
  inflating: definitions/biomes/desert.biome.json
  inflating: definitions/biomes/desert_hills.biome.json
  inflating: definitions/biomes/desert_mutated.biome.json
  inflating: definitions/biomes/extreme_hills.biome.json
  inflating: definitions/biomes/extreme_hills_edge.biome.json
  inflating: definitions/biomes/extreme_hills_mutated.biome.json
  inflating: definitions/biomes/extreme_hills_plus_trees.biome.json
  inflating: definitions/biomes/extreme_hills_plus_trees_mutated.biome.json
  inflating: definitions/biomes/flower_forest.biome.json
  inflating: definitions/biomes/forest.biome.json
  inflating: definitions/biomes/forest_hills.biome.json
  inflating: definitions/biomes/frozen_ocean.biome.json
  inflating: definitions/biomes/frozen_river.biome.json
  inflating: definitions/biomes/hell.biome.json
  inflating: definitions/biomes/ice_mountains.biome.json
  inflating: definitions/biomes/ice_plains.biome.json
  inflating: definitions/biomes/ice_plains_spikes.biome.json
  inflating: definitions/biomes/jungle.biome.json
  inflating: definitions/biomes/jungle_edge.biome.json
  inflating: definitions/biomes/jungle_edge_mutated.biome.json
  inflating: definitions/biomes/jungle_hills.biome.json
  inflating: definitions/biomes/jungle_mutated.biome.json
  inflating: definitions/biomes/legacy_frozen_ocean.biome.json
  inflating: definitions/biomes/lukewarm_ocean.biome.json
  inflating: definitions/biomes/mega_taiga.biome.json
  inflating: definitions/biomes/mega_taiga_hills.biome.json
  inflating: definitions/biomes/mesa.biome.json
  inflating: definitions/biomes/mesa_bryce.biome.json
  inflating: definitions/biomes/mesa_plateau.biome.json
  inflating: definitions/biomes/mesa_plateau_mutated.biome.json
  inflating: definitions/biomes/mesa_plateau_stone.biome.json
  inflating: definitions/biomes/mesa_plateau_stone_mutated.biome.json
  inflating: definitions/biomes/mushroom_island.biome.json
  inflating: definitions/biomes/mushroom_island_shore.biome.json
  inflating: definitions/biomes/ocean.biome.json
  inflating: definitions/biomes/plains.biome.json
  inflating: definitions/biomes/redwood_taiga_hills_mutated.biome.json
  inflating: definitions/biomes/redwood_taiga_mutated.biome.json
  inflating: definitions/biomes/river.biome.json
  inflating: definitions/biomes/roofed_forest.biome.json
  inflating: definitions/biomes/roofed_forest_mutated.biome.json
  inflating: definitions/biomes/savanna.biome.json
  inflating: definitions/biomes/savanna_mutated.biome.json
  inflating: definitions/biomes/savanna_plateau.biome.json
  inflating: definitions/biomes/savanna_plateau_mutated.biome.json
  inflating: definitions/biomes/soulsand_valley.biome.json
  inflating: definitions/biomes/stone_beach.biome.json
  inflating: definitions/biomes/sunflower_plains.biome.json
  inflating: definitions/biomes/swampland.biome.json
  inflating: definitions/biomes/swampland_mutated.biome.json
  inflating: definitions/biomes/taiga.biome.json
  inflating: definitions/biomes/taiga_hills.biome.json
  inflating: definitions/biomes/taiga_mutated.biome.json
  inflating: definitions/biomes/the_end.biome.json
  inflating: definitions/biomes/warm_ocean.biome.json
  inflating: definitions/biomes/warped_forest.biome.json
   creating: definitions/cameras/
  inflating: definitions/cameras/camera_blends.json
   creating: definitions/cameras/cameras/
  inflating: definitions/cameras/cameras/debug.json
  inflating: definitions/cameras/cameras/first_person.json
  inflating: definitions/cameras/cameras/sleep.json
  inflating: definitions/cameras/cameras/third_person.json
  inflating: definitions/cameras/cameras/third_person_front.json
  inflating: definitions/cameras/cameras/tripod.json
   creating: definitions/feature_rules/
  inflating: definitions/feature_rules/bamboo_jungle_after_surface_bamboo_feature.json
  inflating: definitions/feature_rules/bamboo_jungle_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/bamboo_jungle_surface_trees_feature.json
  inflating: definitions/feature_rules/basalt_columns_feature.json
  inflating: definitions/feature_rules/basalt_pillar_feature.json
  inflating: definitions/feature_rules/birch_forest_mutated_surface_trees_feature.json
  inflating: definitions/feature_rules/birch_forest_surface_trees_feature.json
  inflating: definitions/feature_rules/cold_taiga_first_sweet_berry_bush_feature.json
  inflating: definitions/feature_rules/crimson_feature.json
  inflating: definitions/feature_rules/crimson_roots_feature.json
  inflating: definitions/feature_rules/crimson_roots_soul_sand_valley_feature.json
  inflating: definitions/feature_rules/delta_feature.json
  inflating: definitions/feature_rules/desert_after_surface_desert_well_feature.json
  inflating: definitions/feature_rules/desert_or_swamp_after_surface_fossil_feature.json
  inflating: definitions/feature_rules/desert_surface_cactus_feature.json
  inflating: definitions/feature_rules/desert_surface_dead_bush_feature.json
  inflating: definitions/feature_rules/desert_surface_reeds_feature.json
  inflating: definitions/feature_rules/extreme_hills_after_surface_emerald_ore_feature.json
  inflating: definitions/feature_rules/extreme_hills_after_surface_silverfish_feature.json
  inflating: definitions/feature_rules/extreme_hills_plus_trees_surface_trees_feature.json
  inflating: definitions/feature_rules/flower_forest_first_foliage_feature.json
  inflating: definitions/feature_rules/flower_forest_surface_flowers_feature.json
  inflating: definitions/feature_rules/flower_forest_surface_trees_feature.json
  inflating: definitions/feature_rules/forest_first_foliage_feature.json
  inflating: definitions/feature_rules/forest_surface_flowers_feature.json
  inflating: definitions/feature_rules/forest_surface_trees_feature.json
  inflating: definitions/feature_rules/frozen_ocean_after_surface_ice_feature.json
  inflating: definitions/feature_rules/huge_crimson_fungus_feature.json
  inflating: definitions/feature_rules/huge_warped_fungus_feature.json
  inflating: definitions/feature_rules/ice_plains_spikes_first_ice_patch_feature.json
  inflating: definitions/feature_rules/ice_plains_spikes_first_ice_spike_feature.json
  inflating: definitions/feature_rules/ice_surface_trees_feature.json
  inflating: definitions/feature_rules/jungle_after_surface_bamboo_feature.json
  inflating: definitions/feature_rules/jungle_after_surface_melon_feature.json
  inflating: definitions/feature_rules/jungle_after_surface_vines_feature.json
  inflating: definitions/feature_rules/jungle_edge_surface_trees_feature.json
  inflating: definitions/feature_rules/jungle_surface_flowers_feature.json
  inflating: definitions/feature_rules/jungle_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/jungle_surface_trees_feature.json
  inflating: definitions/feature_rules/mega_taiga_first_forest_rock_feature.json
  inflating: definitions/feature_rules/mega_taiga_surface_dead_bush_feature.json
  inflating: definitions/feature_rules/mega_taiga_surface_mushrooms_feature.json
  inflating: definitions/feature_rules/mega_taiga_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/mega_taiga_surface_trees_feature.json
  inflating: definitions/feature_rules/mesa_before_surface_gold_ore_feature.json
  inflating: definitions/feature_rules/mesa_plateau_stone_surface_trees_feature.json
  inflating: definitions/feature_rules/mesa_surface_cactus_feature.json
  inflating: definitions/feature_rules/mesa_surface_dead_bush_feature.json
  inflating: definitions/feature_rules/mesa_surface_reeds_feature.json
  inflating: definitions/feature_rules/mushroom_island_surface_huge_mushroom_feature.json
  inflating: definitions/feature_rules/mushroom_island_surface_mushrooms_feature.json
  inflating: definitions/feature_rules/nether_cave_carver_feature.json
  inflating: definitions/feature_rules/nether_soul_sand_underground_feature_rules.json
  inflating: definitions/feature_rules/nether_sprouts_feature_rules.json
  inflating: definitions/feature_rules/netherwart_forest_trees_feature.json
  inflating: definitions/feature_rules/ocean_surface_kelp_feature.json
  inflating: definitions/feature_rules/ocean_surface_seagrass_feature.json
  inflating: definitions/feature_rules/overworld_cave_carver_feature.json
  inflating: definitions/feature_rules/overworld_surface_clay_feature.json
  inflating: definitions/feature_rules/overworld_surface_extra_brown_mushroom_feature.json
  inflating: definitions/feature_rules/overworld_surface_extra_red_mushroom_feature.json
  inflating: definitions/feature_rules/overworld_surface_flowers_feature.json
  inflating: definitions/feature_rules/overworld_surface_gravel_feature.json
  inflating: definitions/feature_rules/overworld_surface_kelp_feature.json
  inflating: definitions/feature_rules/overworld_surface_pumpkin_feature.json
  inflating: definitions/feature_rules/overworld_surface_reeds_feature.json
  inflating: definitions/feature_rules/overworld_surface_sand_feature.json
  inflating: definitions/feature_rules/overworld_surface_springs_feature.json
  inflating: definitions/feature_rules/overworld_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/overworld_underground_andesite_feature.json
  inflating: definitions/feature_rules/overworld_underground_coal_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_diamond_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_diorite_feature.json
  inflating: definitions/feature_rules/overworld_underground_dirt_feature.json
  inflating: definitions/feature_rules/overworld_underground_extra_gravel_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_gold_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_granite_feature.json
  inflating: definitions/feature_rules/overworld_underground_gravel_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_iron_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_lapis_ore_feature.json
  inflating: definitions/feature_rules/overworld_underground_redstone_ore_feature.json
  inflating: definitions/feature_rules/overworld_underwater_cave_carver_feature.json
  inflating: definitions/feature_rules/plains_first_double_plant_grass_feature.json
  inflating: definitions/feature_rules/plains_first_double_plant_sunflower_feature.json
  inflating: definitions/feature_rules/plains_surface_flowers_feature.json
  inflating: definitions/feature_rules/plains_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/plains_surface_trees_feature.json
  inflating: definitions/feature_rules/redwood_taiga_hills_mutated_surface_trees_feature.json
  inflating: definitions/feature_rules/redwood_taiga_mutated_surface_trees_feature.json
  inflating: definitions/feature_rules/river_surface_seagrass_feature.json
  inflating: definitions/feature_rules/roofed_forest_first_foliage_feature.json
  inflating: definitions/feature_rules/savanna_first_double_plant_grass_feature.json
  inflating: definitions/feature_rules/savanna_mutated_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/savanna_mutated_surface_trees_feature.json
  inflating: definitions/feature_rules/savanna_surface_flowers_feature.json
  inflating: definitions/feature_rules/savanna_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/savanna_surface_trees_feature.json
  inflating: definitions/feature_rules/soulsand_valley_fossil_surface_feature.json
  inflating: definitions/feature_rules/swamp_surface_dead_bush_feature.json
  inflating: definitions/feature_rules/swamp_surface_flowers_feature.json
  inflating: definitions/feature_rules/swamp_surface_mushrooms_feature.json
  inflating: definitions/feature_rules/swamp_surface_reeds_feature.json
  inflating: definitions/feature_rules/swamp_surface_swamp_foliage_feature.json
  inflating: definitions/feature_rules/swamp_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/swamp_surface_waterlily_feature.json
  inflating: definitions/feature_rules/taiga_first_double_plant_fern_feature.json
  inflating: definitions/feature_rules/taiga_first_sweet_berry_bush_feature.json
  inflating: definitions/feature_rules/taiga_surface_mushrooms_feature.json
  inflating: definitions/feature_rules/taiga_surface_tall_grass_feature.json
  inflating: definitions/feature_rules/taiga_surface_trees_feature.json
  inflating: definitions/feature_rules/twisting_vines_cluster_feature.json
  inflating: definitions/feature_rules/warm_ocean_after_surface_coral_crust_feature.json
  inflating: definitions/feature_rules/warm_ocean_after_surface_coral_feature.json
  inflating: definitions/feature_rules/warm_ocean_after_surface_coral_hang_feature.json
  inflating: definitions/feature_rules/warm_ocean_after_surface_pickle_feature.json
  inflating: definitions/feature_rules/warm_ocean_after_surface_sea_anemone_feature.json
  inflating: definitions/feature_rules/warped_fungus_crimson_feature.json
  inflating: definitions/feature_rules/warped_fungus_feature.json
  inflating: definitions/feature_rules/warped_roots_feature.json
  inflating: definitions/feature_rules/weeping_vines_cluster_feature.json
   creating: definitions/features/
  inflating: definitions/features/andesite_feature.json
  inflating: definitions/features/bamboo_then_podzol_feature.json
  inflating: definitions/features/beehive_east_feature.json
  inflating: definitions/features/beehive_esw_order_feature.json
  inflating: definitions/features/beehive_feature.json
  inflating: definitions/features/beehive_search_feature.json
  inflating: definitions/features/beehive_south_feature.json
  inflating: definitions/features/beehive_swe_order_feature.json
  inflating: definitions/features/beehive_wes_order_feature.json
  inflating: definitions/features/beehive_west_feature.json
  inflating: definitions/features/birch_tree_feature.json
  inflating: definitions/features/birch_tree_with_beehive_feature.json
  inflating: definitions/features/birch_tree_with_optional_beehive_feature.json
  inflating: definitions/features/brown_mushroom_feature.json
  inflating: definitions/features/coal_ore_feature.json
  inflating: definitions/features/cocoa_age_0_feature.json
  inflating: definitions/features/cocoa_age_1_feature.json
  inflating: definitions/features/cocoa_age_2_feature.json
  inflating: definitions/features/crimson_fungus_feature.json
  inflating: definitions/features/crimson_fungus_scatter_feature.json
  inflating: definitions/features/crimson_roots_feature.json
  inflating: definitions/features/crimson_roots_scatter_feature.json
  inflating: definitions/features/diamond_ore_feature.json
  inflating: definitions/features/diorite_feature.json
  inflating: definitions/features/dirt_feature.json
  inflating: definitions/features/fallen_birch_tree_feature.json
  inflating: definitions/features/fallen_jungle_tree_feature.json
  inflating: definitions/features/fallen_oak_tree_feature.json
  inflating: definitions/features/fallen_spruce_tree_feature.json
  inflating: definitions/features/fallen_super_birch_tree_feature.json
  inflating: definitions/features/fancy_oak_tree_feature.json
  inflating: definitions/features/fancy_oak_tree_with_beehive_feature.json
  inflating: definitions/features/fancy_oak_tree_with_optional_beehive_feature.json
  inflating: definitions/features/fern_double_plant_feature.json
  inflating: definitions/features/fern_double_plant_lower_feature.json
  inflating: definitions/features/fern_double_plant_patch_feature.json
  inflating: definitions/features/fern_double_plant_upper_feature.json
  inflating: definitions/features/fern_feature.json
  inflating: definitions/features/fixup_fern_double_plant_upper_position_feature.json
  inflating: definitions/features/fixup_grass_double_plant_upper_position_feature.json
  inflating: definitions/features/fixup_lapis_position_feature.json
  inflating: definitions/features/fixup_mesa_gold_position_feature.json
  inflating: definitions/features/fixup_sunflower_double_plant_upper_position_feature.json
  inflating: definitions/features/fixup_vines_position_feature.json
  inflating: definitions/features/fixup_waterlily_position_feature.json
  inflating: definitions/features/gold_ore_feature.json
  inflating: definitions/features/granite_feature.json
  inflating: definitions/features/grass_double_plant_feature.json
  inflating: definitions/features/grass_double_plant_lower_feature.json
  inflating: definitions/features/grass_double_plant_patch_feature.json
  inflating: definitions/features/grass_double_plant_upper_feature.json
  inflating: definitions/features/gravel_ore_feature.json
  inflating: definitions/features/iron_ore_feature.json
  inflating: definitions/features/jungle_bush_feature.json
  inflating: definitions/features/jungle_tall_grass_feature.json
  inflating: definitions/features/jungle_tree_feature.json
  inflating: definitions/features/jungle_tree_with_cocoa_feature.json
  inflating: definitions/features/lapis_ore_feature.json
  inflating: definitions/features/mega_jungle_tree_feature.json
  inflating: definitions/features/mega_pine_tree_feature.json
  inflating: definitions/features/mega_spruce_tree_feature.json
  inflating: definitions/features/nether_hell_cave_carver_feature.json
  inflating: definitions/features/nether_soul_sand_underground_feature.json
  inflating: definitions/features/nether_sprouts_feature.json
  inflating: definitions/features/nether_sprouts_scatter_feature.json
  inflating: definitions/features/noop_undecorated_jungle_tree_feature.json
  inflating: definitions/features/oak_tree_feature.json
  inflating: definitions/features/oak_tree_with_beehive_feature.json
  inflating: definitions/features/oak_tree_with_optional_beehive_feature.json
  inflating: definitions/features/oak_tree_with_vines_feature.json
  inflating: definitions/features/optional_beehive_feature.json
  inflating: definitions/features/optional_fallen_birch_tree_feature.json
  inflating: definitions/features/optional_fallen_jungle_tree_feature.json
  inflating: definitions/features/optional_fallen_oak_tree_feature.json
  inflating: definitions/features/optional_fallen_spruce_tree_feature.json
  inflating: definitions/features/optional_fallen_super_birch_tree_feature.json
  inflating: definitions/features/optional_ferns_feature.json
  inflating: definitions/features/optional_jungle_tree_cocoa_feature.json
  inflating: definitions/features/optional_log_brown_mushroom_feature.json
  inflating: definitions/features/optional_log_mushrooms_feature.json
  inflating: definitions/features/optional_lower_cocoa_feature.json
  inflating: definitions/features/optional_oak_tree_with_vines_feature.json
  inflating: definitions/features/optional_podzol_feature.json
  inflating: definitions/features/optional_roofed_tree_with_vines_feature.json
  inflating: definitions/features/optional_spruce_tree_with_vines_feature.json
  inflating: definitions/features/optional_tall_grass_feature.json
  inflating: definitions/features/optional_undecorated_jungle_tree_with_vines_feature.json
  inflating: definitions/features/optional_upper_cocoa_feature.json
  inflating: definitions/features/pine_tree_feature.json
  inflating: definitions/features/red_mushroom_feature.json
  inflating: definitions/features/redstone_ore_feature.json
  inflating: definitions/features/roofed_tree_feature.json
  inflating: definitions/features/roofed_tree_with_vines_feature.json
  inflating: definitions/features/savanna_tree_feature.json
  inflating: definitions/features/scatter_fern_feature.json
  inflating: definitions/features/scatter_jungle_tree_cocoa_feature.json
  inflating: definitions/features/scatter_jungle_tree_lower_cocoa_feature.json
  inflating: definitions/features/scatter_jungle_tree_upper_cocoa_feature.json
  inflating: definitions/features/scatter_tall_grass_around_forest_foliage_feature.json
  inflating: definitions/features/scatter_tall_grass_around_tree_feature.json
  inflating: definitions/features/scatter_tall_grass_feature.json
  inflating: definitions/features/select_beehive_feature.json
  inflating: definitions/features/select_birch_tree_feature.json
  inflating: definitions/features/select_cocoa_feature.json
  inflating: definitions/features/select_jungle_tree_feature.json
  inflating: definitions/features/select_log_mushroom_feature.json
  inflating: definitions/features/select_oak_tree_feature.json
  inflating: definitions/features/select_roofed_tree_feature.json
  inflating: definitions/features/select_spruce_tree_feature.json
  inflating: definitions/features/select_standing_oak_tree_feature.json
  inflating: definitions/features/select_standing_spruce_tree_feature.json
  inflating: definitions/features/select_super_birch_tree_feature.json
  inflating: definitions/features/select_undecorated_jungle_tree_feature.json
  inflating: definitions/features/silverfish_feature.json
  inflating: definitions/features/spruce_tree_feature.json
  inflating: definitions/features/spruce_tree_with_vines_feature.json
  inflating: definitions/features/sunflower_double_plant_feature.json
  inflating: definitions/features/sunflower_double_plant_lower_feature.json
  inflating: definitions/features/sunflower_double_plant_patch_feature.json
  inflating: definitions/features/sunflower_double_plant_upper_feature.json
  inflating: definitions/features/super_birch_tree_feature.json
  inflating: definitions/features/super_birch_tree_with_optional_beehive_feature.json
  inflating: definitions/features/swamp_tree_feature.json
  inflating: definitions/features/taiga_tall_grass_feature.json
  inflating: definitions/features/tall_grass_feature.json
  inflating: definitions/features/undecorated_jungle_tree_feature.json
  inflating: definitions/features/undecorated_jungle_tree_with_vines_feature.json
  inflating: definitions/features/underground_cave_carver_feature.json
  inflating: definitions/features/underground_underwater_cave_carver_feature.json
  inflating: definitions/features/warped_fungus_feature.json
  inflating: definitions/features/warped_fungus_scatter_feature.json
  inflating: definitions/features/warped_roots_feature.json
  inflating: definitions/features/warped_roots_scatter_feature.json
   creating: definitions/persona/
  inflating: definitions/persona/Alex.json
  inflating: definitions/persona/Steve.json
   creating: definitions/spawn_groups/
  inflating: definitions/spawn_groups/raid_group_0.json
  inflating: definitions/spawn_groups/raid_group_1.json
  inflating: definitions/spawn_groups/raid_group_2.json
  inflating: definitions/spawn_groups/raid_group_3.json
  inflating: definitions/spawn_groups/raid_group_4.json
  inflating: definitions/spawn_groups/raid_group_5.json
  inflating: definitions/spawn_groups/raid_group_6.json
  inflating: permissions.json
  inflating: release-notes.txt
   creating: resource_packs/
   creating: resource_packs/chemistry/
  inflating: resource_packs/chemistry/blocks.json
  inflating: resource_packs/chemistry/contents.json
   creating: resource_packs/chemistry/entity/
  inflating: resource_packs/chemistry/entity/balloon.entity.json
  inflating: resource_packs/chemistry/entity/ice_bomb.entity.json
  inflating: resource_packs/chemistry/manifest.json
   creating: resource_packs/chemistry/materials/
  inflating: resource_packs/chemistry/materials/entity.material
   creating: resource_packs/chemistry/models/
   creating: resource_packs/chemistry/models/entity/
  inflating: resource_packs/chemistry/models/entity/balloon.geo.json
  inflating: resource_packs/chemistry/pack_icon.png
   creating: resource_packs/chemistry/particles/
  inflating: resource_packs/chemistry/particles/evaporation_elephant_toothpaste.json
   creating: resource_packs/chemistry/render_controllers/
  inflating: resource_packs/chemistry/render_controllers/balloon.render_controllers.json
   creating: resource_packs/chemistry/sounds/
  inflating: resource_packs/chemistry/sounds.json
   creating: resource_packs/chemistry/sounds/block/
  inflating: resource_packs/chemistry/sounds/block/elemconstruct_active.fsb
   creating: resource_packs/chemistry/sounds/mob/
  inflating: resource_packs/chemistry/sounds/mob/balloon_pop.fsb
  inflating: resource_packs/chemistry/sounds/sound_definitions.json
   creating: resource_packs/chemistry/textures/
   creating: resource_packs/chemistry/textures/blocks/
  inflating: resource_packs/chemistry/textures/blocks/chemical_heat.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_inside.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_inside_bottom.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_side_a.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_side_b.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_side_c.png
  inflating: resource_packs/chemistry/textures/blocks/compound_creator_top.png
  inflating: resource_packs/chemistry/textures/blocks/element_000_unknown.png
  inflating: resource_packs/chemistry/textures/blocks/element_001_h.png
  inflating: resource_packs/chemistry/textures/blocks/element_002_he.png
  inflating: resource_packs/chemistry/textures/blocks/element_003_li.png
  inflating: resource_packs/chemistry/textures/blocks/element_004_be.png
  inflating: resource_packs/chemistry/textures/blocks/element_005_b.png
  inflating: resource_packs/chemistry/textures/blocks/element_006_c.png
  inflating: resource_packs/chemistry/textures/blocks/element_007_n.png
  inflating: resource_packs/chemistry/textures/blocks/element_008_o.png
  inflating: resource_packs/chemistry/textures/blocks/element_009_f.png
  inflating: resource_packs/chemistry/textures/blocks/element_010_ne.png
  inflating: resource_packs/chemistry/textures/blocks/element_011_na.png
  inflating: resource_packs/chemistry/textures/blocks/element_012_mg.png
  inflating: resource_packs/chemistry/textures/blocks/element_013_al.png
  inflating: resource_packs/chemistry/textures/blocks/element_014_si.png
  inflating: resource_packs/chemistry/textures/blocks/element_015_p.png
  inflating: resource_packs/chemistry/textures/blocks/element_016_s.png
  inflating: resource_packs/chemistry/textures/blocks/element_017_cl.png
  inflating: resource_packs/chemistry/textures/blocks/element_018_ar.png
  inflating: resource_packs/chemistry/textures/blocks/element_019_k.png
  inflating: resource_packs/chemistry/textures/blocks/element_020_ca.png
  inflating: resource_packs/chemistry/textures/blocks/element_021_sc.png
  inflating: resource_packs/chemistry/textures/blocks/element_022_ti.png
  inflating: resource_packs/chemistry/textures/blocks/element_023_v.png
  inflating: resource_packs/chemistry/textures/blocks/element_024_cr.png
  inflating: resource_packs/chemistry/textures/blocks/element_025_mn.png
  inflating: resource_packs/chemistry/textures/blocks/element_026_fe.png
  inflating: resource_packs/chemistry/textures/blocks/element_027_co.png
  inflating: resource_packs/chemistry/textures/blocks/element_028_ni.png
  inflating: resource_packs/chemistry/textures/blocks/element_029_cu.png
  inflating: resource_packs/chemistry/textures/blocks/element_030_zn.png
  inflating: resource_packs/chemistry/textures/blocks/element_031_ga.png
  inflating: resource_packs/chemistry/textures/blocks/element_032_ge.png
  inflating: resource_packs/chemistry/textures/blocks/element_033_as.png
  inflating: resource_packs/chemistry/textures/blocks/element_034_se.png
  inflating: resource_packs/chemistry/textures/blocks/element_035_br.png
  inflating: resource_packs/chemistry/textures/blocks/element_036_kr.png
  inflating: resource_packs/chemistry/textures/blocks/element_037_rb.png
  inflating: resource_packs/chemistry/textures/blocks/element_038_sr.png
  inflating: resource_packs/chemistry/textures/blocks/element_039_y.png
  inflating: resource_packs/chemistry/textures/blocks/element_040_zr.png
  inflating: resource_packs/chemistry/textures/blocks/element_041_nb.png
  inflating: resource_packs/chemistry/textures/blocks/element_042_mo.png
  inflating: resource_packs/chemistry/textures/blocks/element_043_tc.png
  inflating: resource_packs/chemistry/textures/blocks/element_044_ru.png
  inflating: resource_packs/chemistry/textures/blocks/element_045_rh.png
  inflating: resource_packs/chemistry/textures/blocks/element_046_pd.png
  inflating: resource_packs/chemistry/textures/blocks/element_047_ag.png
  inflating: resource_packs/chemistry/textures/blocks/element_048_cd.png
  inflating: resource_packs/chemistry/textures/blocks/element_049_in.png
  inflating: resource_packs/chemistry/textures/blocks/element_050_sn.png
  inflating: resource_packs/chemistry/textures/blocks/element_051_sb.png
  inflating: resource_packs/chemistry/textures/blocks/element_052_te.png
  inflating: resource_packs/chemistry/textures/blocks/element_053_i.png
  inflating: resource_packs/chemistry/textures/blocks/element_054_xe.png
  inflating: resource_packs/chemistry/textures/blocks/element_055_cs.png
  inflating: resource_packs/chemistry/textures/blocks/element_056_ba.png
  inflating: resource_packs/chemistry/textures/blocks/element_057_la.png
  inflating: resource_packs/chemistry/textures/blocks/element_058_ce.png
  inflating: resource_packs/chemistry/textures/blocks/element_059_pr.png
  inflating: resource_packs/chemistry/textures/blocks/element_060_nd.png
  inflating: resource_packs/chemistry/textures/blocks/element_061_pm.png
  inflating: resource_packs/chemistry/textures/blocks/element_062_sm.png
  inflating: resource_packs/chemistry/textures/blocks/element_063_eu.png
  inflating: resource_packs/chemistry/textures/blocks/element_064_gd.png
  inflating: resource_packs/chemistry/textures/blocks/element_065_tb.png
  inflating: resource_packs/chemistry/textures/blocks/element_066_dy.png
  inflating: resource_packs/chemistry/textures/blocks/element_067_ho.png
  inflating: resource_packs/chemistry/textures/blocks/element_068_er.png
  inflating: resource_packs/chemistry/textures/blocks/element_069_tm.png
  inflating: resource_packs/chemistry/textures/blocks/element_070_yb.png
  inflating: resource_packs/chemistry/textures/blocks/element_071_lu.png
  inflating: resource_packs/chemistry/textures/blocks/element_072_hf.png
  inflating: resource_packs/chemistry/textures/blocks/element_073_ta.png
  inflating: resource_packs/chemistry/textures/blocks/element_074_w.png
  inflating: resource_packs/chemistry/textures/blocks/element_075_re.png
  inflating: resource_packs/chemistry/textures/blocks/element_076_os.png
  inflating: resource_packs/chemistry/textures/blocks/element_077_ir.png
  inflating: resource_packs/chemistry/textures/blocks/element_078_pt.png
  inflating: resource_packs/chemistry/textures/blocks/element_079_au.png
  inflating: resource_packs/chemistry/textures/blocks/element_080_hg.png
  inflating: resource_packs/chemistry/textures/blocks/element_081_tl.png
  inflating: resource_packs/chemistry/textures/blocks/element_082_pb.png
  inflating: resource_packs/chemistry/textures/blocks/element_083_bi.png
  inflating: resource_packs/chemistry/textures/blocks/element_084_po.png
  inflating: resource_packs/chemistry/textures/blocks/element_085_at.png
  inflating: resource_packs/chemistry/textures/blocks/element_086_rn.png
  inflating: resource_packs/chemistry/textures/blocks/element_087_fr.png
  inflating: resource_packs/chemistry/textures/blocks/element_088_ra.png
  inflating: resource_packs/chemistry/textures/blocks/element_089_ac.png
  inflating: resource_packs/chemistry/textures/blocks/element_090_th.png
  inflating: resource_packs/chemistry/textures/blocks/element_091_pa.png
  inflating: resource_packs/chemistry/textures/blocks/element_092_u.png
  inflating: resource_packs/chemistry/textures/blocks/element_093_np.png
  inflating: resource_packs/chemistry/textures/blocks/element_094_pu.png
  inflating: resource_packs/chemistry/textures/blocks/element_095_am.png
  inflating: resource_packs/chemistry/textures/blocks/element_096_cm.png
  inflating: resource_packs/chemistry/textures/blocks/element_097_bk.png
  inflating: resource_packs/chemistry/textures/blocks/element_098_cf.png
  inflating: resource_packs/chemistry/textures/blocks/element_099_es.png
  inflating: resource_packs/chemistry/textures/blocks/element_100_fm.png
  inflating: resource_packs/chemistry/textures/blocks/element_101_md.png
  inflating: resource_packs/chemistry/textures/blocks/element_102_no.png
  inflating: resource_packs/chemistry/textures/blocks/element_103_lr.png
  inflating: resource_packs/chemistry/textures/blocks/element_104_rf.png
  inflating: resource_packs/chemistry/textures/blocks/element_105_db.png
  inflating: resource_packs/chemistry/textures/blocks/element_106_sg.png
  inflating: resource_packs/chemistry/textures/blocks/element_107_bh.png
  inflating: resource_packs/chemistry/textures/blocks/element_108_hs.png
  inflating: resource_packs/chemistry/textures/blocks/element_109_mt.png
  inflating: resource_packs/chemistry/textures/blocks/element_110_ds.png
  inflating: resource_packs/chemistry/textures/blocks/element_111_rg.png
  inflating: resource_packs/chemistry/textures/blocks/element_112_cn.png
  inflating: resource_packs/chemistry/textures/blocks/element_113_nh.png
  inflating: resource_packs/chemistry/textures/blocks/element_114_fl.png
  inflating: resource_packs/chemistry/textures/blocks/element_115_mc.png
  inflating: resource_packs/chemistry/textures/blocks/element_116_lv.png
  inflating: resource_packs/chemistry/textures/blocks/element_117_ts.png
  inflating: resource_packs/chemistry/textures/blocks/element_118_og.png
  inflating: resource_packs/chemistry/textures/blocks/element_constructor_back.png
  inflating: resource_packs/chemistry/textures/blocks/element_constructor_front.png
  inflating: resource_packs/chemistry/textures/blocks/element_constructor_side_a.png
  inflating: resource_packs/chemistry/textures/blocks/element_constructor_side_b.png
  inflating: resource_packs/chemistry/textures/blocks/element_constructor_top.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_blue.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_brown.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_cyan.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_gray.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_green.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_light_blue.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_lime.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_magenta.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_orange.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_pink.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_purple.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_red.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_white.png
  inflating: resource_packs/chemistry/textures/blocks/glow_stick_yellow.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_black.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_blue.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_brown.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_cyan.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_gray.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_green.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_light_blue.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_lime.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_magenta.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_orange.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_pink.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_purple.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_red.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_silver.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_white.png
  inflating: resource_packs/chemistry/textures/blocks/hard_glass_yellow.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_bottom.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_front.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_side_a.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_side_b.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_side_c.png
  inflating: resource_packs/chemistry/textures/blocks/lab_table_top.png
  inflating: resource_packs/chemistry/textures/blocks/material_reducer_bottom.png
  inflating: resource_packs/chemistry/textures/blocks/material_reducer_front.png
  inflating: resource_packs/chemistry/textures/blocks/material_reducer_side.png
  inflating: resource_packs/chemistry/textures/blocks/material_reducer_top.png
  inflating: resource_packs/chemistry/textures/blocks/tnt_bottom_underwater.png
  inflating: resource_packs/chemistry/textures/blocks/tnt_side_underwater.png
  inflating: resource_packs/chemistry/textures/blocks/tnt_top_underwater.png
  inflating: resource_packs/chemistry/textures/blocks/torch_blue.png
  inflating: resource_packs/chemistry/textures/blocks/torch_green.png
  inflating: resource_packs/chemistry/textures/blocks/torch_purple.png
  inflating: resource_packs/chemistry/textures/blocks/torch_red.png
  inflating: resource_packs/chemistry/textures/blocks/torch_underwater.png
   creating: resource_packs/chemistry/textures/entity/
  inflating: resource_packs/chemistry/textures/entity/balloon.tga
  inflating: resource_packs/chemistry/textures/flipbook_textures.json
  inflating: resource_packs/chemistry/textures/item_texture.json
   creating: resource_packs/chemistry/textures/items/
  inflating: resource_packs/chemistry/textures/items/balloon.tga
  inflating: resource_packs/chemistry/textures/items/bleach.png
   creating: resource_packs/chemistry/textures/items/compounds/
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_black.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_blue.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_brown.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_clear.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_dark_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_green.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_indigo.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_light_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_orange.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_purple.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_red.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_white.png
  inflating: resource_packs/chemistry/textures/items/compounds/beaker_yellow.png
  inflating: resource_packs/chemistry/textures/items/compounds/bleach.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_black.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_blue.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_brown.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_clear.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_dark_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_green.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_indigo.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_light_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_orange.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_purple.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_red.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_white.png
  inflating: resource_packs/chemistry/textures/items/compounds/flask_yellow.png
  inflating: resource_packs/chemistry/textures/items/compounds/garbage.png
  inflating: resource_packs/chemistry/textures/items/compounds/glue.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_black.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_blue.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_brown.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_clear.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_dark_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_green.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_indigo.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_light_grey.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_orange.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_purple.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_red.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_white.png
  inflating: resource_packs/chemistry/textures/items/compounds/jar_yellow.png
  inflating: resource_packs/chemistry/textures/items/compounds/salt.png
  inflating: resource_packs/chemistry/textures/items/ice_bomb.png
  inflating: resource_packs/chemistry/textures/items/medicine_blindness.png
  inflating: resource_packs/chemistry/textures/items/medicine_nausea.png
  inflating: resource_packs/chemistry/textures/items/medicine_poison.png
  inflating: resource_packs/chemistry/textures/items/medicine_weakness.png
  inflating: resource_packs/chemistry/textures/items/rapid_fertilizer.png
  inflating: resource_packs/chemistry/textures/items/sparkler_blue.png
  inflating: resource_packs/chemistry/textures/items/sparkler_blue_off.png
  inflating: resource_packs/chemistry/textures/items/sparkler_green.png
  inflating: resource_packs/chemistry/textures/items/sparkler_green_off.png
  inflating: resource_packs/chemistry/textures/items/sparkler_orange.png
  inflating: resource_packs/chemistry/textures/items/sparkler_orange_off.png
  inflating: resource_packs/chemistry/textures/items/sparkler_purple.png
  inflating: resource_packs/chemistry/textures/items/sparkler_purple_off.png
  inflating: resource_packs/chemistry/textures/items/sparkler_red.png
  inflating: resource_packs/chemistry/textures/items/sparkler_red_off.png
   creating: resource_packs/chemistry/textures/particle/
  inflating: resource_packs/chemistry/textures/particle/elephant_toothpaste.png
  inflating: resource_packs/chemistry/textures/particle/particles.png
  inflating: resource_packs/chemistry/textures/terrain_texture.json
  inflating: resource_packs/chemistry/textures/textures_list.json
   creating: resource_packs/chemistry/textures/ui/
  inflating: resource_packs/chemistry/textures/ui/arrow_down.png
  inflating: resource_packs/chemistry/textures/ui/beaker_active.png
  inflating: resource_packs/chemistry/textures/ui/beaker_default.png
  inflating: resource_packs/chemistry/textures/ui/button_slash.png
  inflating: resource_packs/chemistry/textures/ui/chemistry_slider_background_hover.json
  inflating: resource_packs/chemistry/textures/ui/chemistry_slider_background_hover.png
  inflating: resource_packs/chemistry/textures/ui/chemistry_slider_button_default.json
  inflating: resource_packs/chemistry/textures/ui/chemistry_slider_button_default.png
  inflating: resource_packs/chemistry/textures/ui/compound_background.json
  inflating: resource_packs/chemistry/textures/ui/compound_background.png
  inflating: resource_packs/chemistry/textures/ui/dialog_indent_horiz.json
  inflating: resource_packs/chemistry/textures/ui/dialog_indent_horiz.png
  inflating: resource_packs/chemistry/textures/ui/electron.png
  inflating: resource_packs/chemistry/textures/ui/electron_lowdetail.png
  inflating: resource_packs/chemistry/textures/ui/flask_active.png
  inflating: resource_packs/chemistry/textures/ui/flask_default.png
  inflating: resource_packs/chemistry/textures/ui/jar_active.png
  inflating: resource_packs/chemistry/textures/ui/jar_default.png
  inflating: resource_packs/chemistry/textures/ui/material_reducer_connectors.png
  inflating: resource_packs/chemistry/textures/ui/material_reducer_connectors_pocket.png
  inflating: resource_packs/chemistry/textures/ui/microscope.png
  inflating: resource_packs/chemistry/textures/ui/neutron.png
  inflating: resource_packs/chemistry/textures/ui/placeholder_element.png
  inflating: resource_packs/chemistry/textures/ui/proton.png
  inflating: resource_packs/chemistry/textures/ui/proton_lowdetail.png
  inflating: resource_packs/chemistry/textures/ui/white_slider_progress.json
  inflating: resource_packs/chemistry/textures/ui/white_slider_progress.png
   creating: resource_packs/chemistry/ui/
  inflating: resource_packs/chemistry/ui/_ui_defs.json
  inflating: resource_packs/chemistry/ui/chemistry_common_pocket.json
  inflating: resource_packs/chemistry/ui/compound_creator_screen.json
  inflating: resource_packs/chemistry/ui/compound_creator_screen_pocket.json
  inflating: resource_packs/chemistry/ui/element_constructor_screen.json
  inflating: resource_packs/chemistry/ui/element_constructor_screen_pocket.json
  inflating: resource_packs/chemistry/ui/lab_table_screen.json
  inflating: resource_packs/chemistry/ui/lab_table_screen_pocket.json
  inflating: resource_packs/chemistry/ui/material_reducer_screen.json
  inflating: resource_packs/chemistry/ui/material_reducer_screen_pocket.json
   creating: resource_packs/vanilla/
  inflating: resource_packs/vanilla/blocks.json
  inflating: resource_packs/vanilla/manifest.json
   creating: resource_packs/vanilla/texts/
  inflating: resource_packs/vanilla/texts/bg_BG.lang
  inflating: resource_packs/vanilla/texts/cs_CZ.lang
  inflating: resource_packs/vanilla/texts/da_DK.lang
  inflating: resource_packs/vanilla/texts/de_DE.lang
  inflating: resource_packs/vanilla/texts/el_GR.lang
  inflating: resource_packs/vanilla/texts/en_GB.lang
  inflating: resource_packs/vanilla/texts/en_US.lang
  inflating: resource_packs/vanilla/texts/es_ES.lang
  inflating: resource_packs/vanilla/texts/es_MX.lang
  inflating: resource_packs/vanilla/texts/fi_FI.lang
  inflating: resource_packs/vanilla/texts/fr_CA.lang
  inflating: resource_packs/vanilla/texts/fr_FR.lang
  inflating: resource_packs/vanilla/texts/hu_HU.lang
  inflating: resource_packs/vanilla/texts/id_ID.lang
  inflating: resource_packs/vanilla/texts/it_IT.lang
  inflating: resource_packs/vanilla/texts/ja_JP.lang
  inflating: resource_packs/vanilla/texts/ko_KR.lang
  inflating: resource_packs/vanilla/texts/language_names.json
  inflating: resource_packs/vanilla/texts/languages.json
  inflating: resource_packs/vanilla/texts/nb_NO.lang
  inflating: resource_packs/vanilla/texts/nl_NL.lang
  inflating: resource_packs/vanilla/texts/pl_PL.lang
  inflating: resource_packs/vanilla/texts/pt_BR.lang
  inflating: resource_packs/vanilla/texts/pt_PT.lang
  inflating: resource_packs/vanilla/texts/ru_RU.lang
  inflating: resource_packs/vanilla/texts/sk_SK.lang
  inflating: resource_packs/vanilla/texts/sv_SE.lang
  inflating: resource_packs/vanilla/texts/tr_TR.lang
  inflating: resource_packs/vanilla/texts/uk_UA.lang
  inflating: resource_packs/vanilla/texts/zh_CN.lang
  inflating: resource_packs/vanilla/texts/zh_TW.lang
  inflating: server.properties
   creating: structures/
   creating: structures/bastion/
   creating: structures/bastion/blocks/
  inflating: structures/bastion/blocks/air.nbt
  inflating: structures/bastion/blocks/gold.nbt
   creating: structures/bastion/bridge/
   creating: structures/bastion/bridge/bridge_pieces/
  inflating: structures/bastion/bridge/bridge_pieces/bridge.nbt
   creating: structures/bastion/bridge/connectors/
  inflating: structures/bastion/bridge/connectors/back_bridge_bottom.nbt
  inflating: structures/bastion/bridge/connectors/back_bridge_top.nbt
   creating: structures/bastion/bridge/legs/
  inflating: structures/bastion/bridge/legs/leg_0.nbt
  inflating: structures/bastion/bridge/legs/leg_1.nbt
   creating: structures/bastion/bridge/rampart_plates/
  inflating: structures/bastion/bridge/rampart_plates/plate_0.nbt
   creating: structures/bastion/bridge/ramparts/
  inflating: structures/bastion/bridge/ramparts/rampart_0.nbt
  inflating: structures/bastion/bridge/ramparts/rampart_1.nbt
   creating: structures/bastion/bridge/starting_pieces/
  inflating: structures/bastion/bridge/starting_pieces/entrance.nbt
  inflating: structures/bastion/bridge/starting_pieces/entrance_base.nbt
  inflating: structures/bastion/bridge/starting_pieces/entrance_face.nbt
   creating: structures/bastion/bridge/walls/
  inflating: structures/bastion/bridge/walls/wall_base_0.nbt
  inflating: structures/bastion/bridge/walls/wall_base_1.nbt
   creating: structures/bastion/hoglin_stable/
  inflating: structures/bastion/hoglin_stable/air_base.nbt
   creating: structures/bastion/hoglin_stable/connectors/
  inflating: structures/bastion/hoglin_stable/connectors/end_post_connector.nbt
   creating: structures/bastion/hoglin_stable/large_stables/
  inflating: structures/bastion/hoglin_stable/large_stables/inner_0.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/inner_1.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/inner_2.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/inner_3.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/inner_4.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/outer_0.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/outer_1.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/outer_2.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/outer_3.nbt
  inflating: structures/bastion/hoglin_stable/large_stables/outer_4.nbt
   creating: structures/bastion/hoglin_stable/posts/
  inflating: structures/bastion/hoglin_stable/posts/end_post.nbt
  inflating: structures/bastion/hoglin_stable/posts/stair_post.nbt
   creating: structures/bastion/hoglin_stable/rampart_plates/
  inflating: structures/bastion/hoglin_stable/rampart_plates/rampart_plate_1.nbt
   creating: structures/bastion/hoglin_stable/ramparts/
  inflating: structures/bastion/hoglin_stable/ramparts/ramparts_1.nbt
  inflating: structures/bastion/hoglin_stable/ramparts/ramparts_2.nbt
  inflating: structures/bastion/hoglin_stable/ramparts/ramparts_3.nbt
   creating: structures/bastion/hoglin_stable/small_stables/
  inflating: structures/bastion/hoglin_stable/small_stables/inner_0.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/inner_1.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/inner_2.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/inner_3.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/outer_0.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/outer_1.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/outer_2.nbt
  inflating: structures/bastion/hoglin_stable/small_stables/outer_3.nbt
   creating: structures/bastion/hoglin_stable/stairs/
  inflating: structures/bastion/hoglin_stable/stairs/stairs_1_0.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_1_1.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_1_2.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_1_3.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_1_4.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_2_0.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_2_1.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_2_2.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_2_3.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_2_4.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_3_0.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_3_1.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_3_2.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_3_3.nbt
  inflating: structures/bastion/hoglin_stable/stairs/stairs_3_4.nbt
   creating: structures/bastion/hoglin_stable/starting_pieces/
  inflating: structures/bastion/hoglin_stable/starting_pieces/stairs_0_mirrored.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/stairs_1_mirrored.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/stairs_2_mirrored.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/stairs_3_mirrored.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/stairs_4_mirrored.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/starting_stairs_0.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/starting_stairs_1.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/starting_stairs_2.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/starting_stairs_3.nbt
  inflating: structures/bastion/hoglin_stable/starting_pieces/starting_stairs_4.nbt
   creating: structures/bastion/hoglin_stable/walls/
  inflating: structures/bastion/hoglin_stable/walls/side_wall_0.nbt
  inflating: structures/bastion/hoglin_stable/walls/side_wall_1.nbt
  inflating: structures/bastion/hoglin_stable/walls/wall_base.nbt
  inflating: structures/bastion/jigsaw_test.nbt
   creating: structures/bastion/mobs/
  inflating: structures/bastion/mobs/crossbow_piglin.mcstructure
  inflating: structures/bastion/mobs/empty.nbt
  inflating: structures/bastion/mobs/hoglin.mcstructure
  inflating: structures/bastion/mobs/melee_piglin.mcstructure
  inflating: structures/bastion/mobs/melee_piglin_always.mcstructure
  inflating: structures/bastion/mobs/sword_piglin.mcstructure
   creating: structures/bastion/treasure/
   creating: structures/bastion/treasure/bases/
   creating: structures/bastion/treasure/bases/centers/
  inflating: structures/bastion/treasure/bases/centers/center_0.nbt
  inflating: structures/bastion/treasure/bases/centers/center_1.nbt
  inflating: structures/bastion/treasure/bases/centers/center_2.nbt
  inflating: structures/bastion/treasure/bases/centers/center_3.nbt
  inflating: structures/bastion/treasure/bases/lava_basin.nbt
  inflating: structures/bastion/treasure/big_air_full.nbt
   creating: structures/bastion/treasure/brains/
  inflating: structures/bastion/treasure/brains/center_brain.nbt
   creating: structures/bastion/treasure/connectors/
  inflating: structures/bastion/treasure/connectors/center_to_wall_middle.nbt
  inflating: structures/bastion/treasure/connectors/center_to_wall_top.nbt
  inflating: structures/bastion/treasure/connectors/center_to_wall_top_entrance.nbt
   creating: structures/bastion/treasure/corners/
   creating: structures/bastion/treasure/corners/bottom/
  inflating: structures/bastion/treasure/corners/bottom/corner_0.nbt
  inflating: structures/bastion/treasure/corners/bottom/corner_1.nbt
   creating: structures/bastion/treasure/corners/edges/
  inflating: structures/bastion/treasure/corners/edges/bottom.nbt
  inflating: structures/bastion/treasure/corners/edges/middle.nbt
  inflating: structures/bastion/treasure/corners/edges/top.nbt
   creating: structures/bastion/treasure/corners/middle/
  inflating: structures/bastion/treasure/corners/middle/corner_0.nbt
  inflating: structures/bastion/treasure/corners/middle/corner_1.nbt
   creating: structures/bastion/treasure/corners/top/
  inflating: structures/bastion/treasure/corners/top/corner_0.nbt
  inflating: structures/bastion/treasure/corners/top/corner_1.nbt
   creating: structures/bastion/treasure/entrances/
  inflating: structures/bastion/treasure/entrances/entrance_0.nbt
   creating: structures/bastion/treasure/extensions/
  inflating: structures/bastion/treasure/extensions/empty.nbt
  inflating: structures/bastion/treasure/extensions/fire_room.nbt
  inflating: structures/bastion/treasure/extensions/house_0.nbt
  inflating: structures/bastion/treasure/extensions/house_1.nbt
  inflating: structures/bastion/treasure/extensions/large_bridge_0.nbt
  inflating: structures/bastion/treasure/extensions/large_bridge_1.nbt
  inflating: structures/bastion/treasure/extensions/large_bridge_2.nbt
  inflating: structures/bastion/treasure/extensions/large_bridge_3.nbt
  inflating: structures/bastion/treasure/extensions/roofed_bridge.nbt
  inflating: structures/bastion/treasure/extensions/small_bridge_0.nbt
  inflating: structures/bastion/treasure/extensions/small_bridge_1.nbt
  inflating: structures/bastion/treasure/extensions/small_bridge_2.nbt
  inflating: structures/bastion/treasure/extensions/small_bridge_3.nbt
   creating: structures/bastion/treasure/ramparts/
  inflating: structures/bastion/treasure/ramparts/bottom_wall_0.nbt
  inflating: structures/bastion/treasure/ramparts/lava_basin.nbt
  inflating: structures/bastion/treasure/ramparts/lava_basin_main.nbt
  inflating: structures/bastion/treasure/ramparts/lava_basin_side.nbt
  inflating: structures/bastion/treasure/ramparts/mid_wall_main.nbt
  inflating: structures/bastion/treasure/ramparts/mid_wall_side.nbt
  inflating: structures/bastion/treasure/ramparts/top_wall.nbt
   creating: structures/bastion/treasure/roofs/
  inflating: structures/bastion/treasure/roofs/center_roof.nbt
  inflating: structures/bastion/treasure/roofs/corner_roof.nbt
  inflating: structures/bastion/treasure/roofs/wall_roof.nbt
   creating: structures/bastion/treasure/stairs/
  inflating: structures/bastion/treasure/stairs/lower_stairs.nbt
   creating: structures/bastion/treasure/walls/
   creating: structures/bastion/treasure/walls/bottom/
  inflating: structures/bastion/treasure/walls/bottom/wall_0.nbt
  inflating: structures/bastion/treasure/walls/bottom/wall_1.nbt
  inflating: structures/bastion/treasure/walls/bottom/wall_2.nbt
  inflating: structures/bastion/treasure/walls/bottom/wall_3.nbt
  inflating: structures/bastion/treasure/walls/entrance_wall.nbt
  inflating: structures/bastion/treasure/walls/lava_wall.nbt
   creating: structures/bastion/treasure/walls/mid/
  inflating: structures/bastion/treasure/walls/mid/wall_0.nbt
  inflating: structures/bastion/treasure/walls/mid/wall_1.nbt
  inflating: structures/bastion/treasure/walls/mid/wall_2.nbt
   creating: structures/bastion/treasure/walls/outer/
  inflating: structures/bastion/treasure/walls/outer/bottom_corner.nbt
  inflating: structures/bastion/treasure/walls/outer/medium_outer_wall.nbt
  inflating: structures/bastion/treasure/walls/outer/mid_corner.nbt
  inflating: structures/bastion/treasure/walls/outer/outer_wall.nbt
  inflating: structures/bastion/treasure/walls/outer/tall_outer_wall.nbt
  inflating: structures/bastion/treasure/walls/outer/top_corner.nbt
   creating: structures/bastion/treasure/walls/top/
  inflating: structures/bastion/treasure/walls/top/main_entrance.nbt
  inflating: structures/bastion/treasure/walls/top/wall_0.nbt
  inflating: structures/bastion/treasure/walls/top/wall_1.nbt
   creating: structures/bastion/units/
  inflating: structures/bastion/units/air_base.nbt
   creating: structures/bastion/units/center_pieces/
  inflating: structures/bastion/units/center_pieces/center_0.nbt
  inflating: structures/bastion/units/center_pieces/center_1.nbt
  inflating: structures/bastion/units/center_pieces/center_2.nbt
   creating: structures/bastion/units/edges/
  inflating: structures/bastion/units/edges/edge_0.nbt
   creating: structures/bastion/units/fillers/
  inflating: structures/bastion/units/fillers/stage_0.nbt
   creating: structures/bastion/units/pathways/
  inflating: structures/bastion/units/pathways/pathway_0.nbt
  inflating: structures/bastion/units/pathways/pathway_wall_0.nbt
   creating: structures/bastion/units/rampart_plates/
  inflating: structures/bastion/units/rampart_plates/plate_0.nbt
   creating: structures/bastion/units/ramparts/
  inflating: structures/bastion/units/ramparts/ramparts_0.nbt
  inflating: structures/bastion/units/ramparts/ramparts_1.nbt
  inflating: structures/bastion/units/ramparts/ramparts_2.nbt
   creating: structures/bastion/units/stages/
   creating: structures/bastion/units/stages/rot/
  inflating: structures/bastion/units/stages/rot/stage_1_0.nbt
  inflating: structures/bastion/units/stages/stage_0_0.nbt
  inflating: structures/bastion/units/stages/stage_0_1.nbt
  inflating: structures/bastion/units/stages/stage_0_2.nbt
  inflating: structures/bastion/units/stages/stage_0_3.nbt
  inflating: structures/bastion/units/stages/stage_1_0.nbt
  inflating: structures/bastion/units/stages/stage_1_1.nbt
  inflating: structures/bastion/units/stages/stage_1_2.nbt
  inflating: structures/bastion/units/stages/stage_1_3.nbt
  inflating: structures/bastion/units/stages/stage_2_0.nbt
  inflating: structures/bastion/units/stages/stage_2_1.nbt
  inflating: structures/bastion/units/stages/stage_3_0.nbt
  inflating: structures/bastion/units/stages/stage_3_1.nbt
  inflating: structures/bastion/units/stages/stage_3_2.nbt
  inflating: structures/bastion/units/stages/stage_3_3.nbt
   creating: structures/bastion/units/wall_units/
  inflating: structures/bastion/units/wall_units/edge_0.nbt
  inflating: structures/bastion/units/wall_units/edge_0_large.nbt
  inflating: structures/bastion/units/wall_units/unit_0.nbt
   creating: structures/bastion/units/walls/
  inflating: structures/bastion/units/walls/connected_wall.nbt
  inflating: structures/bastion/units/walls/wall_base.nbt
   creating: structures/coralcrust/
  inflating: structures/coralcrust/crust1.nbt
  inflating: structures/coralcrust/crust2.nbt
  inflating: structures/coralcrust/crust3.nbt
  inflating: structures/coralcrust/crust4.nbt
  inflating: structures/coralcrust/crust5.nbt
  inflating: structures/coralcrust/outcropping1.nbt
  inflating: structures/coralcrust/outcropping2.nbt
  inflating: structures/coralcrust/outcropping3.nbt
  inflating: structures/coralcrust/outcropping4.nbt
  inflating: structures/coralcrust/outcropping5.nbt
  inflating: structures/coralcrust/outcropping6.nbt
   creating: structures/endcity/
  inflating: structures/endcity/base_floor.nbt
  inflating: structures/endcity/base_roof.nbt
  inflating: structures/endcity/bridge_end.nbt
  inflating: structures/endcity/bridge_gentle_stairs.nbt
  inflating: structures/endcity/bridge_piece.nbt
  inflating: structures/endcity/bridge_steep_stairs.nbt
  inflating: structures/endcity/fat_tower_base.nbt
  inflating: structures/endcity/fat_tower_middle.nbt
  inflating: structures/endcity/fat_tower_top.nbt
  inflating: structures/endcity/second_floor.nbt
  inflating: structures/endcity/second_floor_2.nbt
  inflating: structures/endcity/second_roof.nbt
  inflating: structures/endcity/ship.nbt
  inflating: structures/endcity/third_floor.nbt
  inflating: structures/endcity/third_floor_b.nbt
  inflating: structures/endcity/third_floor_c.nbt
  inflating: structures/endcity/third_roof.nbt
  inflating: structures/endcity/tower_base.nbt
  inflating: structures/endcity/tower_floor.nbt
  inflating: structures/endcity/tower_piece.nbt
  inflating: structures/endcity/tower_top.nbt
   creating: structures/fossils/
  inflating: structures/fossils/fossil_skull_01.nbt
  inflating: structures/fossils/fossil_skull_01_coal.nbt
  inflating: structures/fossils/fossil_skull_02.nbt
  inflating: structures/fossils/fossil_skull_02_coal.nbt
  inflating: structures/fossils/fossil_skull_03.nbt
  inflating: structures/fossils/fossil_skull_03_coal.nbt
  inflating: structures/fossils/fossil_skull_04.nbt
  inflating: structures/fossils/fossil_skull_04_coal.nbt
  inflating: structures/fossils/fossil_spine_01.nbt
  inflating: structures/fossils/fossil_spine_01_coal.nbt
  inflating: structures/fossils/fossil_spine_02.nbt
  inflating: structures/fossils/fossil_spine_02_coal.nbt
  inflating: structures/fossils/fossil_spine_03.nbt
  inflating: structures/fossils/fossil_spine_03_coal.nbt
  inflating: structures/fossils/fossil_spine_04.nbt
  inflating: structures/fossils/fossil_spine_04_coal.nbt
   creating: structures/igloo/
  inflating: structures/igloo/igloo_bottom.nbt
  inflating: structures/igloo/igloo_middle.nbt
  inflating: structures/igloo/igloo_top_no_trapdoor.nbt
  inflating: structures/igloo/igloo_top_trapdoor.nbt
   creating: structures/mansion/
  inflating: structures/mansion/1x1_a1.nbt
  inflating: structures/mansion/1x1_a2.nbt
  inflating: structures/mansion/1x1_a3.nbt
  inflating: structures/mansion/1x1_a4.nbt
  inflating: structures/mansion/1x1_a5.nbt
  inflating: structures/mansion/1x1_as1.nbt
  inflating: structures/mansion/1x1_as2.nbt
  inflating: structures/mansion/1x1_as3.nbt
  inflating: structures/mansion/1x1_as4.nbt
  inflating: structures/mansion/1x1_b1.nbt
  inflating: structures/mansion/1x1_b2.nbt
  inflating: structures/mansion/1x1_b3.nbt
  inflating: structures/mansion/1x1_b4.nbt
  inflating: structures/mansion/1x1_b5.nbt
  inflating: structures/mansion/1x2_a1.nbt
  inflating: structures/mansion/1x2_a2.nbt
  inflating: structures/mansion/1x2_a3.nbt
  inflating: structures/mansion/1x2_a4.nbt
  inflating: structures/mansion/1x2_a5.nbt
  inflating: structures/mansion/1x2_a6.nbt
  inflating: structures/mansion/1x2_a7.nbt
  inflating: structures/mansion/1x2_a8.nbt
  inflating: structures/mansion/1x2_a9.nbt
  inflating: structures/mansion/1x2_b1.nbt
  inflating: structures/mansion/1x2_b2.nbt
  inflating: structures/mansion/1x2_b3.nbt
  inflating: structures/mansion/1x2_b4.nbt
  inflating: structures/mansion/1x2_b5.nbt
  inflating: structures/mansion/1x2_c1.nbt
  inflating: structures/mansion/1x2_c2.nbt
  inflating: structures/mansion/1x2_c3.nbt
  inflating: structures/mansion/1x2_c4.nbt
  inflating: structures/mansion/1x2_c_stairs.nbt
  inflating: structures/mansion/1x2_d1.nbt
  inflating: structures/mansion/1x2_d2.nbt
  inflating: structures/mansion/1x2_d3.nbt
  inflating: structures/mansion/1x2_d4.nbt
  inflating: structures/mansion/1x2_d5.nbt
  inflating: structures/mansion/1x2_d_stairs.nbt
  inflating: structures/mansion/1x2_s1.nbt
  inflating: structures/mansion/1x2_s2.nbt
  inflating: structures/mansion/1x2_se1.nbt
  inflating: structures/mansion/2x2_a1.nbt
  inflating: structures/mansion/2x2_a2.nbt
  inflating: structures/mansion/2x2_a3.nbt
  inflating: structures/mansion/2x2_a4.nbt
  inflating: structures/mansion/2x2_b1.nbt
  inflating: structures/mansion/2x2_b2.nbt
  inflating: structures/mansion/2x2_b3.nbt
  inflating: structures/mansion/2x2_b4.nbt
  inflating: structures/mansion/2x2_b5.nbt
  inflating: structures/mansion/2x2_s1.nbt
  inflating: structures/mansion/carpet_east.nbt
  inflating: structures/mansion/carpet_north.nbt
  inflating: structures/mansion/carpet_south.nbt
  inflating: structures/mansion/carpet_south_2.nbt
  inflating: structures/mansion/carpet_west.nbt
  inflating: structures/mansion/carpet_west_2.nbt
  inflating: structures/mansion/corridor_floor.nbt
  inflating: structures/mansion/corridor_floor_2.nbt
  inflating: structures/mansion/entrance.nbt
  inflating: structures/mansion/indoors_door.nbt
  inflating: structures/mansion/indoors_door_2.nbt
  inflating: structures/mansion/indoors_wall.nbt
  inflating: structures/mansion/indoors_wall_2.nbt
  inflating: structures/mansion/roof.nbt
  inflating: structures/mansion/roof_corner.nbt
  inflating: structures/mansion/roof_front.nbt
  inflating: structures/mansion/roof_inner_corner.nbt
  inflating: structures/mansion/small_wall.nbt
  inflating: structures/mansion/small_wall_corner.nbt
  inflating: structures/mansion/wall_corner.nbt
  inflating: structures/mansion/wall_flat.nbt
  inflating: structures/mansion/wall_window.nbt
   creating: structures/nether_fossils/
  inflating: structures/nether_fossils/fossil_1.nbt
  inflating: structures/nether_fossils/fossil_10.nbt
  inflating: structures/nether_fossils/fossil_11.nbt
  inflating: structures/nether_fossils/fossil_12.nbt
  inflating: structures/nether_fossils/fossil_13.nbt
  inflating: structures/nether_fossils/fossil_14.nbt
  inflating: structures/nether_fossils/fossil_2.nbt
  inflating: structures/nether_fossils/fossil_3.nbt
  inflating: structures/nether_fossils/fossil_4.nbt
  inflating: structures/nether_fossils/fossil_5.nbt
  inflating: structures/nether_fossils/fossil_6.nbt
  inflating: structures/nether_fossils/fossil_7.nbt
  inflating: structures/nether_fossils/fossil_8.nbt
  inflating: structures/nether_fossils/fossil_9.nbt
   creating: structures/pillageroutpost/
  inflating: structures/pillageroutpost/feature_cage1.nbt
  inflating: structures/pillageroutpost/feature_cage2.nbt
  inflating: structures/pillageroutpost/feature_logs.nbt
  inflating: structures/pillageroutpost/feature_targets.nbt
  inflating: structures/pillageroutpost/feature_tent1.nbt
  inflating: structures/pillageroutpost/feature_tent2.nbt
  inflating: structures/pillageroutpost/watchtower.nbt
  inflating: structures/pillageroutpost/watchtower_overgrown.nbt
   creating: structures/ruin/
  inflating: structures/ruin/big_ruin1_brick.nbt
  inflating: structures/ruin/big_ruin1_cracked.nbt
  inflating: structures/ruin/big_ruin1_mossy.nbt
  inflating: structures/ruin/big_ruin2_brick.nbt
  inflating: structures/ruin/big_ruin2_cracked.nbt
  inflating: structures/ruin/big_ruin2_mossy.nbt
  inflating: structures/ruin/big_ruin3_brick.nbt
  inflating: structures/ruin/big_ruin3_cracked.nbt
  inflating: structures/ruin/big_ruin3_mossy.nbt
  inflating: structures/ruin/big_ruin8_brick.nbt
  inflating: structures/ruin/big_ruin8_cracked.nbt
  inflating: structures/ruin/big_ruin8_mossy.nbt
  inflating: structures/ruin/big_ruin_warm4.nbt
  inflating: structures/ruin/big_ruin_warm5.nbt
  inflating: structures/ruin/big_ruin_warm6.nbt
  inflating: structures/ruin/big_ruin_warm7.nbt
  inflating: structures/ruin/ruin1_brick.nbt
  inflating: structures/ruin/ruin1_cracked.nbt
  inflating: structures/ruin/ruin1_mossy.nbt
  inflating: structures/ruin/ruin2_brick.nbt
  inflating: structures/ruin/ruin2_cracked.nbt
  inflating: structures/ruin/ruin2_mossy.nbt
  inflating: structures/ruin/ruin3_brick.nbt
  inflating: structures/ruin/ruin3_cracked.nbt
  inflating: structures/ruin/ruin3_mossy.nbt
  inflating: structures/ruin/ruin4.nbt
  inflating: structures/ruin/ruin4_brick.nbt
  inflating: structures/ruin/ruin4_cracked.nbt
  inflating: structures/ruin/ruin4_mossy.nbt
  inflating: structures/ruin/ruin5_brick.nbt
  inflating: structures/ruin/ruin5_cracked.nbt
  inflating: structures/ruin/ruin5_mossy.nbt
  inflating: structures/ruin/ruin6_brick.nbt
  inflating: structures/ruin/ruin6_cracked.nbt
  inflating: structures/ruin/ruin6_mossy.nbt
  inflating: structures/ruin/ruin7_brick.nbt
  inflating: structures/ruin/ruin7_cracked.nbt
  inflating: structures/ruin/ruin7_mossy.nbt
  inflating: structures/ruin/ruin8_brick.nbt
  inflating: structures/ruin/ruin8_cracked.nbt
  inflating: structures/ruin/ruin8_mossy.nbt
  inflating: structures/ruin/ruin_warm1.nbt
  inflating: structures/ruin/ruin_warm2.nbt
  inflating: structures/ruin/ruin_warm3.nbt
  inflating: structures/ruin/ruin_warm4.nbt
  inflating: structures/ruin/ruin_warm5.nbt
  inflating: structures/ruin/ruin_warm6.nbt
  inflating: structures/ruin/ruin_warm7.nbt
  inflating: structures/ruin/ruin_warm8.nbt
   creating: structures/ruined_portal/
  inflating: structures/ruined_portal/giant_portal_1.nbt
  inflating: structures/ruined_portal/giant_portal_2.nbt
  inflating: structures/ruined_portal/giant_portal_3.nbt
  inflating: structures/ruined_portal/portal_1.nbt
  inflating: structures/ruined_portal/portal_10.nbt
  inflating: structures/ruined_portal/portal_2.nbt
  inflating: structures/ruined_portal/portal_3.nbt
  inflating: structures/ruined_portal/portal_4.nbt
  inflating: structures/ruined_portal/portal_5.nbt
  inflating: structures/ruined_portal/portal_6.nbt
  inflating: structures/ruined_portal/portal_7.nbt
  inflating: structures/ruined_portal/portal_8.nbt
  inflating: structures/ruined_portal/portal_9.nbt
   creating: structures/shipwreck/
  inflating: structures/shipwreck/swrightsideupbackhalf.nbt
  inflating: structures/shipwreck/swrightsideupbackhalfdegraded.nbt
  inflating: structures/shipwreck/swrightsideupfronthalf.nbt
  inflating: structures/shipwreck/swrightsideupfronthalfdegraded.nbt
  inflating: structures/shipwreck/swrightsideupfull.nbt
  inflating: structures/shipwreck/swrightsideupfulldegraded.nbt
  inflating: structures/shipwreck/swsidewaysbackhalf.nbt
  inflating: structures/shipwreck/swsidewaysbackhalfdegraded.nbt
  inflating: structures/shipwreck/swsidewaysfronthalf.nbt
  inflating: structures/shipwreck/swsidewaysfronthalfdegraded.nbt
  inflating: structures/shipwreck/swsidewaysfull.nbt
  inflating: structures/shipwreck/swsidewaysfulldegraded.nbt
  inflating: structures/shipwreck/swupsidedownbackhalf.nbt
  inflating: structures/shipwreck/swupsidedownbackhalfdegraded.nbt
  inflating: structures/shipwreck/swupsidedownfronthalf.nbt
  inflating: structures/shipwreck/swupsidedownfronthalfdegraded.nbt
  inflating: structures/shipwreck/swupsidedownfull.nbt
  inflating: structures/shipwreck/swupsidedownfulldegraded.nbt
  inflating: structures/shipwreck/swwithmast.nbt
  inflating: structures/shipwreck/swwithmastdegraded.nbt
   creating: structures/village/
   creating: structures/village/common/
   creating: structures/village/common/animals/
  inflating: structures/village/common/animals/cat.nbt
  inflating: structures/village/common/animals/cows_1.nbt
  inflating: structures/village/common/animals/horses_1.nbt
  inflating: structures/village/common/animals/horses_2.nbt
  inflating: structures/village/common/animals/pigs_1.nbt
  inflating: structures/village/common/animals/sheep_1.nbt
  inflating: structures/village/common/villager.nbt
  inflating: structures/village/common/well_bottom.nbt
   creating: structures/village/desert/
  inflating: structures/village/desert/desert_lamp_1.nbt
   creating: structures/village/desert/houses/
  inflating: structures/village/desert/houses/desert_animal_pen_1.nbt
  inflating: structures/village/desert/houses/desert_animal_pen_2.nbt
  inflating: structures/village/desert/houses/desert_armorer_1.nbt
  inflating: structures/village/desert/houses/desert_butcher_shop_1.nbt
  inflating: structures/village/desert/houses/desert_cartographer_house_1.nbt
  inflating: structures/village/desert/houses/desert_farm_1.nbt
  inflating: structures/village/desert/houses/desert_farm_2.nbt
  inflating: structures/village/desert/houses/desert_fisher_1.nbt
  inflating: structures/village/desert/houses/desert_fletcher_house_1.nbt
  inflating: structures/village/desert/houses/desert_large_farm_1.nbt
  inflating: structures/village/desert/houses/desert_library_1.nbt
  inflating: structures/village/desert/houses/desert_mason_1.nbt
  inflating: structures/village/desert/houses/desert_medium_house_1.nbt
  inflating: structures/village/desert/houses/desert_medium_house_2.nbt
  inflating: structures/village/desert/houses/desert_shepherd_house_1.nbt
  inflating: structures/village/desert/houses/desert_small_house_1.nbt
  inflating: structures/village/desert/houses/desert_small_house_2.nbt
  inflating: structures/village/desert/houses/desert_small_house_3.nbt
  inflating: structures/village/desert/houses/desert_small_house_4.nbt
  inflating: structures/village/desert/houses/desert_small_house_5.nbt
  inflating: structures/village/desert/houses/desert_small_house_6.nbt
  inflating: structures/village/desert/houses/desert_small_house_7.nbt
  inflating: structures/village/desert/houses/desert_small_house_8.nbt
  inflating: structures/village/desert/houses/desert_tannery_1.nbt
  inflating: structures/village/desert/houses/desert_temple_1.nbt
  inflating: structures/village/desert/houses/desert_temple_2.nbt
  inflating: structures/village/desert/houses/desert_tool_smith_1.nbt
  inflating: structures/village/desert/houses/desert_weaponsmith_1.nbt
   creating: structures/village/desert/streets/
  inflating: structures/village/desert/streets/corner_01.nbt
  inflating: structures/village/desert/streets/corner_02.nbt
  inflating: structures/village/desert/streets/crossroad_01.nbt
  inflating: structures/village/desert/streets/crossroad_02.nbt
  inflating: structures/village/desert/streets/crossroad_03.nbt
  inflating: structures/village/desert/streets/square_01.nbt
  inflating: structures/village/desert/streets/square_02.nbt
  inflating: structures/village/desert/streets/straight_01.nbt
  inflating: structures/village/desert/streets/straight_02.nbt
  inflating: structures/village/desert/streets/straight_03.nbt
  inflating: structures/village/desert/streets/turn_01.nbt
   creating: structures/village/desert/terminators/
  inflating: structures/village/desert/terminators/terminator_01.nbt
  inflating: structures/village/desert/terminators/terminator_02.nbt
   creating: structures/village/desert/town_centers/
  inflating: structures/village/desert/town_centers/desert_meeting_point_1.nbt
  inflating: structures/village/desert/town_centers/desert_meeting_point_2.nbt
  inflating: structures/village/desert/town_centers/desert_meeting_point_3.nbt
   creating: structures/village/plains/
   creating: structures/village/plains/houses/
  inflating: structures/village/plains/houses/plains_accessory_1.nbt
  inflating: structures/village/plains/houses/plains_animal_pen_1.nbt
  inflating: structures/village/plains/houses/plains_animal_pen_2.nbt
  inflating: structures/village/plains/houses/plains_animal_pen_3.nbt
  inflating: structures/village/plains/houses/plains_armorer_house_1.nbt
  inflating: structures/village/plains/houses/plains_big_house_1.nbt
  inflating: structures/village/plains/houses/plains_butcher_shop_1.nbt
  inflating: structures/village/plains/houses/plains_butcher_shop_2.nbt
  inflating: structures/village/plains/houses/plains_cartographer_1.nbt
  inflating: structures/village/plains/houses/plains_fisher_cottage_1.nbt
  inflating: structures/village/plains/houses/plains_fletcher_house_1.nbt
  inflating: structures/village/plains/houses/plains_large_farm_1.nbt
  inflating: structures/village/plains/houses/plains_library_1.nbt
  inflating: structures/village/plains/houses/plains_library_2.nbt
  inflating: structures/village/plains/houses/plains_masons_house_1.nbt
  inflating: structures/village/plains/houses/plains_medium_house_1.nbt
  inflating: structures/village/plains/houses/plains_medium_house_2.nbt
  inflating: structures/village/plains/houses/plains_meeting_point_4.nbt
  inflating: structures/village/plains/houses/plains_meeting_point_5.nbt
  inflating: structures/village/plains/houses/plains_shepherds_house_1.nbt
  inflating: structures/village/plains/houses/plains_small_farm_1.nbt
  inflating: structures/village/plains/houses/plains_small_house_1.nbt
  inflating: structures/village/plains/houses/plains_small_house_2.nbt
  inflating: structures/village/plains/houses/plains_small_house_3.nbt
  inflating: structures/village/plains/houses/plains_small_house_4.nbt
  inflating: structures/village/plains/houses/plains_small_house_5.nbt
  inflating: structures/village/plains/houses/plains_small_house_6.nbt
  inflating: structures/village/plains/houses/plains_small_house_7.nbt
  inflating: structures/village/plains/houses/plains_small_house_8.nbt
  inflating: structures/village/plains/houses/plains_stable_1.nbt
  inflating: structures/village/plains/houses/plains_stable_2.nbt
  inflating: structures/village/plains/houses/plains_tannery_1.nbt
  inflating: structures/village/plains/houses/plains_temple_3.nbt
  inflating: structures/village/plains/houses/plains_temple_4.nbt
  inflating: structures/village/plains/houses/plains_tool_smith_1.nbt
  inflating: structures/village/plains/houses/plains_weaponsmith_1.nbt
  inflating: structures/village/plains/plains_lamp_1.nbt
   creating: structures/village/plains/streets/
  inflating: structures/village/plains/streets/corner_01.nbt
  inflating: structures/village/plains/streets/corner_02.nbt
  inflating: structures/village/plains/streets/corner_03.nbt
  inflating: structures/village/plains/streets/crossroad_01.nbt
  inflating: structures/village/plains/streets/crossroad_02.nbt
  inflating: structures/village/plains/streets/crossroad_03.nbt
  inflating: structures/village/plains/streets/crossroad_04.nbt
  inflating: structures/village/plains/streets/crossroad_05.nbt
  inflating: structures/village/plains/streets/crossroad_06.nbt
  inflating: structures/village/plains/streets/straight_01.nbt
  inflating: structures/village/plains/streets/straight_02.nbt
  inflating: structures/village/plains/streets/straight_03.nbt
  inflating: structures/village/plains/streets/straight_04.nbt
  inflating: structures/village/plains/streets/straight_05.nbt
  inflating: structures/village/plains/streets/straight_06.nbt
  inflating: structures/village/plains/streets/turn_01.nbt
   creating: structures/village/plains/terminators/
  inflating: structures/village/plains/terminators/terminator_01.nbt
  inflating: structures/village/plains/terminators/terminator_02.nbt
  inflating: structures/village/plains/terminators/terminator_03.nbt
  inflating: structures/village/plains/terminators/terminator_04.nbt
   creating: structures/village/plains/town_centers/
  inflating: structures/village/plains/town_centers/plains_fountain_01.nbt
  inflating: structures/village/plains/town_centers/plains_meeting_point_1.nbt
  inflating: structures/village/plains/town_centers/plains_meeting_point_2.nbt
  inflating: structures/village/plains/town_centers/plains_meeting_point_3.nbt
   creating: structures/village/plains/villagers/
  inflating: structures/village/plains/villagers/armorer.nbt
  inflating: structures/village/plains/villagers/butcher.nbt
  inflating: structures/village/plains/villagers/cartographer.nbt
  inflating: structures/village/plains/villagers/cleric.nbt
  inflating: structures/village/plains/villagers/farmer.nbt
  inflating: structures/village/plains/villagers/fishermen.nbt
  inflating: structures/village/plains/villagers/fletcher.nbt
  inflating: structures/village/plains/villagers/leatherworker.nbt
  inflating: structures/village/plains/villagers/librarian.nbt
  inflating: structures/village/plains/villagers/nitwit.nbt
  inflating: structures/village/plains/villagers/shepherd.nbt
  inflating: structures/village/plains/villagers/toolsmith.nbt
  inflating: structures/village/plains/villagers/unemployed.nbt
  inflating: structures/village/plains/villagers/weaponsmith.nbt
   creating: structures/village/savanna/
   creating: structures/village/savanna/houses/
  inflating: structures/village/savanna/houses/savanna_animal_pen_1.nbt
  inflating: structures/village/savanna/houses/savanna_animal_pen_2.nbt
  inflating: structures/village/savanna/houses/savanna_animal_pen_3.nbt
  inflating: structures/village/savanna/houses/savanna_armorer_1.nbt
  inflating: structures/village/savanna/houses/savanna_butchers_shop_1.nbt
  inflating: structures/village/savanna/houses/savanna_butchers_shop_2.nbt
  inflating: structures/village/savanna/houses/savanna_cartographer_1.nbt
  inflating: structures/village/savanna/houses/savanna_fisher_cottage_1.nbt
  inflating: structures/village/savanna/houses/savanna_fletcher_house_1.nbt
  inflating: structures/village/savanna/houses/savanna_large_farm_1.nbt
  inflating: structures/village/savanna/houses/savanna_large_farm_2.nbt
  inflating: structures/village/savanna/houses/savanna_library_1.nbt
  inflating: structures/village/savanna/houses/savanna_mason_1.nbt
  inflating: structures/village/savanna/houses/savanna_medium_house_1.nbt
  inflating: structures/village/savanna/houses/savanna_medium_house_2.nbt
  inflating: structures/village/savanna/houses/savanna_shepherd_1.nbt
  inflating: structures/village/savanna/houses/savanna_small_farm.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_1.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_2.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_3.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_4.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_5.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_6.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_7.nbt
  inflating: structures/village/savanna/houses/savanna_small_house_8.nbt
  inflating: structures/village/savanna/houses/savanna_tannery_1.nbt
  inflating: structures/village/savanna/houses/savanna_temple_1.nbt
  inflating: structures/village/savanna/houses/savanna_temple_2.nbt
  inflating: structures/village/savanna/houses/savanna_tool_smith_1.nbt
  inflating: structures/village/savanna/houses/savanna_weaponsmith_1.nbt
  inflating: structures/village/savanna/houses/savanna_weaponsmith_2.nbt
  inflating: structures/village/savanna/savanna_lamp_post_01.nbt
   creating: structures/village/savanna/streets/
  inflating: structures/village/savanna/streets/corner_01.nbt
  inflating: structures/village/savanna/streets/corner_03.nbt
  inflating: structures/village/savanna/streets/crossroad_02.nbt
  inflating: structures/village/savanna/streets/crossroad_03.nbt
  inflating: structures/village/savanna/streets/crossroad_04.nbt
  inflating: structures/village/savanna/streets/crossroad_05.nbt
  inflating: structures/village/savanna/streets/crossroad_06.nbt
  inflating: structures/village/savanna/streets/crossroad_07.nbt
  inflating: structures/village/savanna/streets/split_01.nbt
  inflating: structures/village/savanna/streets/split_02.nbt
  inflating: structures/village/savanna/streets/straight_02.nbt
  inflating: structures/village/savanna/streets/straight_04.nbt
  inflating: structures/village/savanna/streets/straight_05.nbt
  inflating: structures/village/savanna/streets/straight_06.nbt
  inflating: structures/village/savanna/streets/straight_08.nbt
  inflating: structures/village/savanna/streets/straight_09.nbt
  inflating: structures/village/savanna/streets/straight_10.nbt
  inflating: structures/village/savanna/streets/straight_11.nbt
  inflating: structures/village/savanna/streets/turn_01.nbt
   creating: structures/village/savanna/terminators/
  inflating: structures/village/savanna/terminators/terminator_05.nbt
   creating: structures/village/savanna/town_centers/
  inflating: structures/village/savanna/town_centers/savanna_meeting_point_1.nbt
  inflating: structures/village/savanna/town_centers/savanna_meeting_point_2.nbt
  inflating: structures/village/savanna/town_centers/savanna_meeting_point_3.nbt
  inflating: structures/village/savanna/town_centers/savanna_meeting_point_4.nbt
   creating: structures/village/snowy/
   creating: structures/village/snowy/houses/
  inflating: structures/village/snowy/houses/snowy_animal_pen_1.nbt
  inflating: structures/village/snowy/houses/snowy_animal_pen_2.nbt
  inflating: structures/village/snowy/houses/snowy_armorer_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_armorer_house_2.nbt
  inflating: structures/village/snowy/houses/snowy_butchers_shop_1.nbt
  inflating: structures/village/snowy/houses/snowy_butchers_shop_2.nbt
  inflating: structures/village/snowy/houses/snowy_cartographer_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_farm_1.nbt
  inflating: structures/village/snowy/houses/snowy_farm_2.nbt
  inflating: structures/village/snowy/houses/snowy_fisher_cottage.nbt
  inflating: structures/village/snowy/houses/snowy_fletcher_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_library_1.nbt
  inflating: structures/village/snowy/houses/snowy_masons_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_masons_house_2.nbt
  inflating: structures/village/snowy/houses/snowy_medium_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_medium_house_2.nbt
  inflating: structures/village/snowy/houses/snowy_medium_house_3.nbt
  inflating: structures/village/snowy/houses/snowy_shepherds_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_1.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_2.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_3.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_4.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_5.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_6.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_7.nbt
  inflating: structures/village/snowy/houses/snowy_small_house_8.nbt
  inflating: structures/village/snowy/houses/snowy_tannery_1.nbt
  inflating: structures/village/snowy/houses/snowy_temple_1.nbt
  inflating: structures/village/snowy/houses/snowy_tool_smith_1.nbt
  inflating: structures/village/snowy/houses/snowy_weapon_smith_1.nbt
  inflating: structures/village/snowy/snowy_lamp_post_01.nbt
  inflating: structures/village/snowy/snowy_lamp_post_02.nbt
  inflating: structures/village/snowy/snowy_lamp_post_03.nbt
   creating: structures/village/snowy/streets/
  inflating: structures/village/snowy/streets/corner_01.nbt
  inflating: structures/village/snowy/streets/corner_02.nbt
  inflating: structures/village/snowy/streets/corner_03.nbt
  inflating: structures/village/snowy/streets/crossroad_01.nbt
  inflating: structures/village/snowy/streets/crossroad_02.nbt
  inflating: structures/village/snowy/streets/crossroad_03.nbt
  inflating: structures/village/snowy/streets/crossroad_04.nbt
  inflating: structures/village/snowy/streets/crossroad_05.nbt
  inflating: structures/village/snowy/streets/crossroad_06.nbt
  inflating: structures/village/snowy/streets/square_01.nbt
  inflating: structures/village/snowy/streets/straight_01.nbt
  inflating: structures/village/snowy/streets/straight_02.nbt
  inflating: structures/village/snowy/streets/straight_03.nbt
  inflating: structures/village/snowy/streets/straight_04.nbt
  inflating: structures/village/snowy/streets/straight_06.nbt
  inflating: structures/village/snowy/streets/straight_08.nbt
  inflating: structures/village/snowy/streets/turn_01.nbt
   creating: structures/village/snowy/town_centers/
  inflating: structures/village/snowy/town_centers/snowy_meeting_point_1.nbt
  inflating: structures/village/snowy/town_centers/snowy_meeting_point_2.nbt
  inflating: structures/village/snowy/town_centers/snowy_meeting_point_3.nbt
   creating: structures/village/taiga/
   creating: structures/village/taiga/houses/
  inflating: structures/village/taiga/houses/taiga_animal_pen_1.nbt
  inflating: structures/village/taiga/houses/taiga_armorer_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_armorer_house_2.nbt
  inflating: structures/village/taiga/houses/taiga_butcher_shop_1.nbt
  inflating: structures/village/taiga/houses/taiga_cartographer_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_decoration_1.nbt
  inflating: structures/village/taiga/houses/taiga_fisher_cottage_1.nbt
  inflating: structures/village/taiga/houses/taiga_fletcher_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_lamp_post_1.nbt
  inflating: structures/village/taiga/houses/taiga_large_farm_1.nbt
  inflating: structures/village/taiga/houses/taiga_large_farm_2.nbt
  inflating: structures/village/taiga/houses/taiga_library_1.nbt
  inflating: structures/village/taiga/houses/taiga_masons_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_medium_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_medium_house_2.nbt
  inflating: structures/village/taiga/houses/taiga_medium_house_3.nbt
  inflating: structures/village/taiga/houses/taiga_medium_house_4.nbt
  inflating: structures/village/taiga/houses/taiga_shepherds_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_small_farm_1.nbt
  inflating: structures/village/taiga/houses/taiga_small_house_1.nbt
  inflating: structures/village/taiga/houses/taiga_small_house_2.nbt
  inflating: structures/village/taiga/houses/taiga_small_house_3.nbt
  inflating: structures/village/taiga/houses/taiga_small_house_4.nbt
  inflating: structures/village/taiga/houses/taiga_small_house_5.nbt
  inflating: structures/village/taiga/houses/taiga_tannery_1.nbt
  inflating: structures/village/taiga/houses/taiga_temple_1.nbt
  inflating: structures/village/taiga/houses/taiga_tool_smith_1.nbt
  inflating: structures/village/taiga/houses/taiga_weaponsmith_1.nbt
  inflating: structures/village/taiga/houses/taiga_weaponsmith_2.nbt
   creating: structures/village/taiga/streets/
  inflating: structures/village/taiga/streets/corner_01.nbt
  inflating: structures/village/taiga/streets/corner_02.nbt
  inflating: structures/village/taiga/streets/corner_03.nbt
  inflating: structures/village/taiga/streets/crossroad_01.nbt
  inflating: structures/village/taiga/streets/crossroad_02.nbt
  inflating: structures/village/taiga/streets/crossroad_04.nbt
  inflating: structures/village/taiga/streets/crossroad_05.nbt
  inflating: structures/village/taiga/streets/crossroad_06.nbt
  inflating: structures/village/taiga/streets/straight_01.nbt
  inflating: structures/village/taiga/streets/straight_02.nbt
  inflating: structures/village/taiga/streets/straight_03.nbt
  inflating: structures/village/taiga/streets/straight_04.nbt
  inflating: structures/village/taiga/streets/straight_05.nbt
  inflating: structures/village/taiga/streets/straight_06.nbt
  inflating: structures/village/taiga/streets/turn_01.nbt
  inflating: structures/village/taiga/taiga_decoration_1.nbt
  inflating: structures/village/taiga/taiga_decoration_2.nbt
  inflating: structures/village/taiga/taiga_decoration_3.nbt
  inflating: structures/village/taiga/taiga_decoration_4.nbt
  inflating: structures/village/taiga/taiga_decoration_5.nbt
  inflating: structures/village/taiga/taiga_lamp_post_1.nbt
   creating: structures/village/taiga/town_centers/
  inflating: structures/village/taiga/town_centers/taiga_meeting_point_1.nbt
  inflating: structures/village/taiga/town_centers/taiga_meeting_point_2.nbt
  inflating: whitelist.json
=========================================================================
Tomando panel.sh del repositorio...
--2021-04-26 12:45:40--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/panel.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.111.133, 185.199.108.133, 185.199.109.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.111.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 13860 (14K) [text/plain]
Saving to: ‘panel.sh’

panel.sh                                  100%[=====================================================================================>]  13.54K  --.-KB/s    in 0.009s

2021-04-26 12:45:40 (1.40 MB/s) - ‘panel.sh’ saved [13860/13860]

=========================================================================
Tomando start.sh del repositorio...
--2021-04-26 12:45:41--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/start.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.108.133, 185.199.109.133, 185.199.110.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.108.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 4625 (4.5K) [text/plain]
Saving to: ‘start.sh’

start.sh                                  100%[=====================================================================================>]   4.52K  --.-KB/s    in 0.001s

2021-04-26 12:45:41 (6.04 MB/s) - ‘start.sh’ saved [4625/4625]

=========================================================================
Tomando stop.sh del repositorio...
--2021-04-26 12:45:41--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/stop.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.110.133, 185.199.111.133, 185.199.108.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.110.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 2396 (2.3K) [text/plain]
Saving to: ‘stop.sh’

stop.sh                                   100%[=====================================================================================>]   2.34K  --.-KB/s    in 0s

2021-04-26 12:45:42 (8.96 MB/s) - ‘stop.sh’ saved [2396/2396]

=========================================================================
Tomando restart.sh del repositorio...
--2021-04-26 12:45:42--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/restart.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.110.133, 185.199.111.133, 185.199.108.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.110.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 2055 (2.0K) [text/plain]
Saving to: ‘restart.sh’

restart.sh                                100%[=====================================================================================>]   2.01K  --.-KB/s    in 0.001s

2021-04-26 12:45:43 (3.90 MB/s) - ‘restart.sh’ saved [2055/2055]

Tomando fixpermissions.sh del repositorio ..
--2021-04-26 12:45:43--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/fixpermissions.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.108.133, 185.199.109.133, 185.199.110.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.108.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 622 [text/plain]
Saving to: ‘fixpermissions.sh’

fixpermissions.sh                         100%[=====================================================================================>]     622  --.-KB/s    in 0s

2021-04-26 12:45:44 (5.12 MB/s) - ‘fixpermissions.sh’ saved [622/622]

=========================================================================
Tomando restart.sh del repositorio...
--2021-04-26 12:45:44--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/cloud.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.111.133, 185.199.108.133, 185.199.109.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.111.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 8897 (8.7K) [text/plain]
Saving to: ‘cloud.sh’

cloud.sh                                  100%[=====================================================================================>]   8.69K  --.-KB/s    in 0.004s

2021-04-26 12:45:45 (2.01 MB/s) - ‘cloud.sh’ saved [8897/8897]

=========================================================================
Tomando back.sh del repositorio...
--2021-04-26 12:45:45--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/back.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.109.133, 185.199.110.133, 185.199.111.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.109.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 5373 (5.2K) [text/plain]
Saving to: ‘back.sh’

back.sh                                   100%[=====================================================================================>]   5.25K  --.-KB/s    in 0.001s

2021-04-26 12:45:46 (8.68 MB/s) - ‘back.sh’ saved [5373/5373]

=========================================================================
Tomando config.sh del repositorio...
--2021-04-26 12:45:46--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/config.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.108.133, 185.199.109.133, 185.199.110.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.108.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 9827 (9.6K) [text/plain]
Saving to: ‘config.sh’

config.sh                                 100%[=====================================================================================>]   9.60K  --.-KB/s    in 0.004s

2021-04-26 12:45:46 (2.16 MB/s) - ‘config.sh’ saved [9827/9827]

Tomando prop.sh del repositorio...
--2021-04-26 12:45:47--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/prop.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.110.133, 185.199.111.133, 185.199.108.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.110.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 2624 (2.6K) [text/plain]
Saving to: ‘prop.sh’

prop.sh                                   100%[=====================================================================================>]   2.56K  --.-KB/s    in 0s

2021-04-26 12:45:47 (6.79 MB/s) - ‘prop.sh’ saved [2624/2624]

=========================================================================
Configurando el servicio Minecraft amigos ...
--2021-04-26 12:45:48--  https://raw.githubusercontent.com/TheRemote/MinecraftBedrockServer/master/minecraftbe.service
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.111.133, 185.199.108.133, 185.199.109.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.111.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 430 [text/plain]
Saving to: ‘/etc/systemd/system/amigos.service’

/etc/systemd/system/amigos.service        100%[=====================================================================================>]     430  --.-KB/s    in 0s

2021-04-26 12:45:48 (4.34 MB/s) - ‘/etc/systemd/system/amigos.service’ saved [430/430]

System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down
Instalando screen, unzip, sudo, net-tools, wget y otras dependencias...
Get:1 http://security.ubuntu.com/ubuntu focal-security InRelease [109 kB]
Hit:2 http://archive.ubuntu.com/ubuntu focal InRelease
Get:3 http://archive.ubuntu.com/ubuntu focal-updates InRelease [114 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-backports InRelease [101 kB]
Get:5 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 c-n-f Metadata [13.2 kB]
Get:6 http://archive.ubuntu.com/ubuntu focal-updates/universe amd64 c-n-f Metadata [17.2 kB]
Fetched 354 kB in 3s (135 kB/s)
Reading package lists... Done
Building dependency tree
Reading state information... Done
62 packages can be upgraded. Run 'apt list --upgradable' to see them.
Reading package lists... Done
Building dependency tree
Reading state information... Done
software-properties-common is already the newest version (0.98.9.4).
software-properties-common set to manually installed.
0 upgraded, 0 newly installed, 0 to remove and 62 not upgraded.
'universe' distribution component is already enabled for all sources.
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  openssh-client openssh-server openssh-sftp-server
Suggested packages:
  keychain libpam-ssh monkeysphere ssh-askpass molly-guard
The following NEW packages will be installed:
  ssh
The following packages will be upgraded:
  openssh-client openssh-server openssh-sftp-server
3 upgraded, 1 newly installed, 0 to remove and 59 not upgraded.
Need to get 1105 kB of archives.
After this operation, 120 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 openssh-sftp-server amd64 1:8.2p1-4ubuntu0.2 [51.5 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 openssh-server amd64 1:8.2p1-4ubuntu0.2 [377 kB]
Get:3 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 openssh-client amd64 1:8.2p1-4ubuntu0.2 [671 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 ssh all 1:8.2p1-4ubuntu0.2 [5084 B]
Fetched 1105 kB in 5s (203 kB/s)
Preconfiguring packages ...
(Reading database ... 32238 files and directories currently installed.)
Preparing to unpack .../openssh-sftp-server_1%3a8.2p1-4ubuntu0.2_amd64.deb ...
Unpacking openssh-sftp-server (1:8.2p1-4ubuntu0.2) over (1:8.2p1-4ubuntu0.1) ...
Preparing to unpack .../openssh-server_1%3a8.2p1-4ubuntu0.2_amd64.deb ...
Unpacking openssh-server (1:8.2p1-4ubuntu0.2) over (1:8.2p1-4ubuntu0.1) ...
Preparing to unpack .../openssh-client_1%3a8.2p1-4ubuntu0.2_amd64.deb ...
Unpacking openssh-client (1:8.2p1-4ubuntu0.2) over (1:8.2p1-4ubuntu0.1) ...
Selecting previously unselected package ssh.
Preparing to unpack .../ssh_1%3a8.2p1-4ubuntu0.2_all.deb ...
Unpacking ssh (1:8.2p1-4ubuntu0.2) ...
Setting up openssh-client (1:8.2p1-4ubuntu0.2) ...
Setting up openssh-sftp-server (1:8.2p1-4ubuntu0.2) ...
Setting up openssh-server (1:8.2p1-4ubuntu0.2) ...
Creating SSH2 RSA key; this may take some time ...
3072 SHA256:h9E9ajbiEWoMzVgrfCkJfaIP+1Wgm3wlMU5uA790P7Y root@DESKTOP-RHMC5Q9 (RSA)
Creating SSH2 ECDSA key; this may take some time ...
256 SHA256:yL4ej5+JaubgaO1MYMP/qvGyOoQFwuKVwMBDV81Bi0Y root@DESKTOP-RHMC5Q9 (ECDSA)
Creating SSH2 ED25519 key; this may take some time ...
256 SHA256:u2gMIBuvsq2A6/5YctiMhL3tSPsGYVl+k/JNoIK5LqQ root@DESKTOP-RHMC5Q9 (ED25519)
invoke-rc.d: could not determine current runlevel
Setting up ssh (1:8.2p1-4ubuntu0.2) ...
Processing triggers for systemd (245.4-4ubuntu3.4) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for ufw (0.36-6) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
Suggested packages:
  git-daemon-run | git-daemon-sysvinit git-doc git-el git-email git-gui gitk gitweb git-cvs git-mediawiki git-svn
The following packages will be upgraded:
  git
1 upgraded, 0 newly installed, 0 to remove and 58 not upgraded.
Need to get 4557 kB of archives.
After this operation, 0 B of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 git amd64 1:2.25.1-1ubuntu3.1 [4557 kB]
Fetched 4557 kB in 16s (292 kB/s)
(Reading database ... 32242 files and directories currently installed.)
Preparing to unpack .../git_1%3a2.25.1-1ubuntu3.1_amd64.deb ...
Unpacking git (1:2.25.1-1ubuntu3.1) over (1:2.25.1-1ubuntu3) ...
Setting up git (1:2.25.1-1ubuntu3.1) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  libzip5 php-common php7.4-common php7.4-zip
The following NEW packages will be installed:
  libzip5 php-common php-zip php7.4-common php7.4-zip
0 upgraded, 5 newly installed, 0 to remove and 58 not upgraded.
Need to get 1061 kB of archives.
After this operation, 7904 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal/universe amd64 libzip5 amd64 1.5.1-0ubuntu1 [46.7 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal/main amd64 php-common all 2:75 [11.9 kB]
Get:3 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-common amd64 7.4.3-4ubuntu2.4 [979 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-updates/universe amd64 php7.4-zip amd64 7.4.3-4ubuntu2.4 [21.5 kB]
Get:5 http://archive.ubuntu.com/ubuntu focal/universe amd64 php-zip all 2:7.4+75 [1996 B]
Fetched 1061 kB in 3s (329 kB/s)
Selecting previously unselected package libzip5:amd64.
(Reading database ... 32242 files and directories currently installed.)
Preparing to unpack .../libzip5_1.5.1-0ubuntu1_amd64.deb ...
Unpacking libzip5:amd64 (1.5.1-0ubuntu1) ...
Selecting previously unselected package php-common.
Preparing to unpack .../php-common_2%3a75_all.deb ...
Unpacking php-common (2:75) ...
Selecting previously unselected package php7.4-common.
Preparing to unpack .../php7.4-common_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-common (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-zip.
Preparing to unpack .../php7.4-zip_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-zip (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php-zip.
Preparing to unpack .../php-zip_2%3a7.4+75_all.deb ...
Unpacking php-zip (2:7.4+75) ...
Setting up php-common (2:75) ...
Created symlink /etc/systemd/system/timers.target.wants/phpsessionclean.timer → /lib/systemd/system/phpsessionclean.timer.
Setting up php7.4-common (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/calendar.ini with new version

Creating config file /etc/php/7.4/mods-available/ctype.ini with new version

Creating config file /etc/php/7.4/mods-available/exif.ini with new version

Creating config file /etc/php/7.4/mods-available/fileinfo.ini with new version

Creating config file /etc/php/7.4/mods-available/ffi.ini with new version

Creating config file /etc/php/7.4/mods-available/ftp.ini with new version

Creating config file /etc/php/7.4/mods-available/gettext.ini with new version

Creating config file /etc/php/7.4/mods-available/iconv.ini with new version

Creating config file /etc/php/7.4/mods-available/pdo.ini with new version

Creating config file /etc/php/7.4/mods-available/phar.ini with new version

Creating config file /etc/php/7.4/mods-available/posix.ini with new version

Creating config file /etc/php/7.4/mods-available/shmop.ini with new version

Creating config file /etc/php/7.4/mods-available/sockets.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvmsg.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvsem.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvshm.ini with new version

Creating config file /etc/php/7.4/mods-available/tokenizer.ini with new version
Setting up libzip5:amd64 (1.5.1-0ubuntu1) ...
Setting up php7.4-zip (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/zip.ini with new version
Setting up php-zip (2:7.4+75) ...
Processing triggers for libc-bin (2.31-0ubuntu9.2) ...
Reading package lists... Done
Building dependency tree
Reading state information... Done
vim is already the newest version (2:8.1.2269-1ubuntu5).
vim set to manually installed.
0 upgraded, 0 newly installed, 0 to remove and 58 not upgraded.
Tomando web.sh del repositorio...
--2021-04-26 12:48:18--  https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/raw/master/web.sh
Resolving github.com (github.com)... 140.82.114.4
Connecting to github.com (github.com)|140.82.114.4|:443... connected.
HTTP request sent, awaiting response... 302 Found
Location: https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/web.sh [following]
--2021-04-26 12:48:19--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/web.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.109.133, 185.199.110.133, 185.199.111.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.109.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 10885 (11K) [text/plain]
Saving to: ‘web.sh’

web.sh                                    100%[=====================================================================================>]  10.63K  --.-KB/s    in 0.01s

2021-04-26 12:48:20 (871 KB/s) - ‘web.sh’ saved [10885/10885]

Configurando el Panel de Administración...
Cloning into 'Minecraft-BE-Server-Panel-Admin-Web'...
remote: Enumerating objects: 1657, done.
remote: Counting objects: 100% (432/432), done.
remote: Compressing objects: 100% (275/275), done.
remote: Total 1657 (delta 265), reused 299 (delta 153), pack-reused 1225
Receiving objects: 100% (1657/1657), 6.41 MiB | 560.00 KiB/s, done.
Resolving deltas: 100% (1047/1047), done.
=======================================================================================
Creando directorios y archivos del panel...
Instalando Repositorios de Configuración...
=========================================================================
=========================================================================
¡El Servidor Web No existe! Instalando Servidor...
=========================================================================
Instalando nginx y php...
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  libgd3 libjbig0 libjpeg-turbo8 libjpeg8 libnginx-mod-http-image-filter libnginx-mod-http-xslt-filter libnginx-mod-mail libnginx-mod-stream libtiff5 libwebp6
  nginx-common nginx-core
Suggested packages:
  libgd-tools fcgiwrap nginx-doc ssl-cert
The following NEW packages will be installed:
  libgd3 libjbig0 libjpeg-turbo8 libjpeg8 libnginx-mod-http-image-filter libnginx-mod-http-xslt-filter libnginx-mod-mail libnginx-mod-stream libtiff5 libwebp6 nginx
  nginx-common nginx-core
0 upgraded, 13 newly installed, 0 to remove and 58 not upgraded.
Need to get 1214 kB of archives.
After this operation, 4275 kB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libjpeg-turbo8 amd64 2.0.3-0ubuntu1.20.04.1 [117 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal/main amd64 libjpeg8 amd64 8c-2ubuntu8 [2194 B]
Get:3 http://archive.ubuntu.com/ubuntu focal/main amd64 libjbig0 amd64 2.1-3.1build1 [26.7 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal/main amd64 libwebp6 amd64 0.6.1-2 [185 kB]
Get:5 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libtiff5 amd64 4.1.0+git191117-2ubuntu0.20.04.1 [162 kB]
Get:6 http://archive.ubuntu.com/ubuntu focal/main amd64 libgd3 amd64 2.2.5-5.2ubuntu2 [118 kB]
Get:7 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 nginx-common all 1.18.0-0ubuntu1 [37.3 kB]
Get:8 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libnginx-mod-http-image-filter amd64 1.18.0-0ubuntu1 [14.3 kB]
Get:9 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libnginx-mod-http-xslt-filter amd64 1.18.0-0ubuntu1 [12.6 kB]
Get:10 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libnginx-mod-mail amd64 1.18.0-0ubuntu1 [42.3 kB]
Get:11 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 libnginx-mod-stream amd64 1.18.0-0ubuntu1 [66.9 kB]
Get:12 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 nginx-core amd64 1.18.0-0ubuntu1 [425 kB]
Get:13 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 nginx all 1.18.0-0ubuntu1 [3624 B]
Fetched 1214 kB in 5s (243 kB/s)
Preconfiguring packages ...
Selecting previously unselected package libjpeg-turbo8:amd64.
(Reading database ... 32337 files and directories currently installed.)
Preparing to unpack .../00-libjpeg-turbo8_2.0.3-0ubuntu1.20.04.1_amd64.deb ...
Unpacking libjpeg-turbo8:amd64 (2.0.3-0ubuntu1.20.04.1) ...
Selecting previously unselected package libjpeg8:amd64.
Preparing to unpack .../01-libjpeg8_8c-2ubuntu8_amd64.deb ...
Unpacking libjpeg8:amd64 (8c-2ubuntu8) ...
Selecting previously unselected package libjbig0:amd64.
Preparing to unpack .../02-libjbig0_2.1-3.1build1_amd64.deb ...
Unpacking libjbig0:amd64 (2.1-3.1build1) ...
Selecting previously unselected package libwebp6:amd64.
Preparing to unpack .../03-libwebp6_0.6.1-2_amd64.deb ...
Unpacking libwebp6:amd64 (0.6.1-2) ...
Selecting previously unselected package libtiff5:amd64.
Preparing to unpack .../04-libtiff5_4.1.0+git191117-2ubuntu0.20.04.1_amd64.deb ...
Unpacking libtiff5:amd64 (4.1.0+git191117-2ubuntu0.20.04.1) ...
Selecting previously unselected package libgd3:amd64.
Preparing to unpack .../05-libgd3_2.2.5-5.2ubuntu2_amd64.deb ...
Unpacking libgd3:amd64 (2.2.5-5.2ubuntu2) ...
Selecting previously unselected package nginx-common.
Preparing to unpack .../06-nginx-common_1.18.0-0ubuntu1_all.deb ...
Unpacking nginx-common (1.18.0-0ubuntu1) ...
Selecting previously unselected package libnginx-mod-http-image-filter.
Preparing to unpack .../07-libnginx-mod-http-image-filter_1.18.0-0ubuntu1_amd64.deb ...
Unpacking libnginx-mod-http-image-filter (1.18.0-0ubuntu1) ...
Selecting previously unselected package libnginx-mod-http-xslt-filter.
Preparing to unpack .../08-libnginx-mod-http-xslt-filter_1.18.0-0ubuntu1_amd64.deb ...
Unpacking libnginx-mod-http-xslt-filter (1.18.0-0ubuntu1) ...
Selecting previously unselected package libnginx-mod-mail.
Preparing to unpack .../09-libnginx-mod-mail_1.18.0-0ubuntu1_amd64.deb ...
Unpacking libnginx-mod-mail (1.18.0-0ubuntu1) ...
Selecting previously unselected package libnginx-mod-stream.
Preparing to unpack .../10-libnginx-mod-stream_1.18.0-0ubuntu1_amd64.deb ...
Unpacking libnginx-mod-stream (1.18.0-0ubuntu1) ...
Selecting previously unselected package nginx-core.
Preparing to unpack .../11-nginx-core_1.18.0-0ubuntu1_amd64.deb ...
Unpacking nginx-core (1.18.0-0ubuntu1) ...
Selecting previously unselected package nginx.
Preparing to unpack .../12-nginx_1.18.0-0ubuntu1_all.deb ...
Unpacking nginx (1.18.0-0ubuntu1) ...
Setting up nginx-common (1.18.0-0ubuntu1) ...
Created symlink /etc/systemd/system/multi-user.target.wants/nginx.service → /lib/systemd/system/nginx.service.
Setting up libjbig0:amd64 (2.1-3.1build1) ...
Setting up libnginx-mod-http-xslt-filter (1.18.0-0ubuntu1) ...
Setting up libwebp6:amd64 (0.6.1-2) ...
Setting up libjpeg-turbo8:amd64 (2.0.3-0ubuntu1.20.04.1) ...
Setting up libjpeg8:amd64 (8c-2ubuntu8) ...
Setting up libnginx-mod-mail (1.18.0-0ubuntu1) ...
Setting up libnginx-mod-stream (1.18.0-0ubuntu1) ...
Setting up libtiff5:amd64 (4.1.0+git191117-2ubuntu0.20.04.1) ...
Setting up libgd3:amd64 (2.2.5-5.2ubuntu2) ...
Setting up libnginx-mod-http-image-filter (1.18.0-0ubuntu1) ...
Setting up nginx-core (1.18.0-0ubuntu1) ...
Cannot open netlink socket: Protocol not supported
invoke-rc.d: could not determine current runlevel
Setting up nginx (1.18.0-0ubuntu1) ...
Processing triggers for ufw (0.36-6) ...
Processing triggers for systemd (245.4-4ubuntu3.4) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for libc-bin (2.31-0ubuntu9.2) ...
Get:1 http://security.ubuntu.com/ubuntu focal-security InRelease [109 kB]
Hit:2 http://archive.ubuntu.com/ubuntu focal InRelease
Hit:3 http://archive.ubuntu.com/ubuntu focal-updates InRelease
Get:4 http://archive.ubuntu.com/ubuntu focal-backports InRelease [101 kB]
Fetched 210 kB in 4s (50.1 kB/s)
Reading package lists... Done
Building dependency tree
Reading state information... Done
58 packages can be upgraded. Run 'apt list --upgradable' to see them.
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  php7.4-cli php7.4-fpm php7.4-json php7.4-opcache php7.4-readline
Suggested packages:
  php-pear
The following NEW packages will be installed:
  php-fpm php7.4-cli php7.4-fpm php7.4-json php7.4-opcache php7.4-readline
0 upgraded, 6 newly installed, 0 to remove and 58 not upgraded.
Need to get 3088 kB of archives.
After this operation, 10.4 MB of additional disk space will be used.
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-json amd64 7.4.3-4ubuntu2.4 [19.2 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-opcache amd64 7.4.3-4ubuntu2.4 [198 kB]
Get:3 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-readline amd64 7.4.3-4ubuntu2.4 [12.6 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-cli amd64 7.4.3-4ubuntu2.4 [1422 kB]
Get:5 http://archive.ubuntu.com/ubuntu focal-updates/universe amd64 php7.4-fpm amd64 7.4.3-4ubuntu2.4 [1433 kB]
Get:6 http://archive.ubuntu.com/ubuntu focal/universe amd64 php-fpm all 2:7.4+75 [2792 B]
Fetched 3088 kB in 11s (284 kB/s)
Selecting previously unselected package php7.4-json.
(Reading database ... 32447 files and directories currently installed.)
Preparing to unpack .../0-php7.4-json_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-json (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-opcache.
Preparing to unpack .../1-php7.4-opcache_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-opcache (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-readline.
Preparing to unpack .../2-php7.4-readline_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-readline (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-cli.
Preparing to unpack .../3-php7.4-cli_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-cli (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php7.4-fpm.
Preparing to unpack .../4-php7.4-fpm_7.4.3-4ubuntu2.4_amd64.deb ...
Unpacking php7.4-fpm (7.4.3-4ubuntu2.4) ...
Selecting previously unselected package php-fpm.
Preparing to unpack .../5-php-fpm_2%3a7.4+75_all.deb ...
Unpacking php-fpm (2:7.4+75) ...
Setting up php7.4-json (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/json.ini with new version
Setting up php7.4-readline (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/readline.ini with new version
Setting up php7.4-opcache (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/mods-available/opcache.ini with new version
Setting up php7.4-cli (7.4.3-4ubuntu2.4) ...
update-alternatives: using /usr/bin/php7.4 to provide /usr/bin/php (php) in auto mode
update-alternatives: using /usr/bin/phar7.4 to provide /usr/bin/phar (phar) in auto mode
update-alternatives: using /usr/bin/phar.phar7.4 to provide /usr/bin/phar.phar (phar.phar) in auto mode

Creating config file /etc/php/7.4/cli/php.ini with new version
Setting up php7.4-fpm (7.4.3-4ubuntu2.4) ...

Creating config file /etc/php/7.4/fpm/php.ini with new version
Created symlink /etc/systemd/system/multi-user.target.wants/php7.4-fpm.service → /lib/systemd/system/php7.4-fpm.service.
invoke-rc.d: could not determine current runlevel
Setting up php-fpm (2:7.4+75) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for systemd (245.4-4ubuntu3.4) ...
Processing triggers for php7.4-cli (7.4.3-4ubuntu2.4) ...
Processing triggers for php7.4-fpm (7.4.3-4ubuntu2.4) ...
invoke-rc.d: could not determine current runlevel
=======================================================================================
Creando archivos del Servidor web...
=======================================================================================
=======================================================================================
Agreando index.php a Ngnix...
=======================================================================================
        # Add index.php to the list if you are using PHP
        index index.html index.php index.htm index.nginx-debian.html;
=======================================================================================
======================================================================================
=========================================================================
Configurando location de PHP en Ngnix...
=========================================================================
=========================================================================
Configurando Servidor para subir archivos grandes
=========================================================================
=======================================================================================
Obteniendo Resultados...
        location ~ \.php$ {
        #location ~ \.php$ {
        #location ~ /\.ht {
                include snippets/fastcgi-php.conf;
        #       include snippets/fastcgi-php.conf;
        #       fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
=======================================================================================
=======================================================================================
cargando la configuración del servidor web...
System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down
=======================================================================================
=======================================================================================
Sincronizando Pagina Web con el Servidor de Minecraft...
=======================================================================================
Creando archivo misitio.conf...
=======================================================================================
=======================================================================================
Mostrando la versión php instalada...
PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies
=======================================================================================
=========================================================================
Configurar versión de php instalada:
Ejemplo Valores permitidos: 7.2 o 7.4
Versión PHP: 7.4
Versión PHP : 7.4 -- aceptar? (y/n)y
Versión PHP: 7.4
=========================================================================
Dirección IP del Servidor...
192.168.1.6
=========================================================================
Introduzca la IP - IPV4 del servidor:
Url o dirección IP del servidor: 192.168.1.6
Url o dirección IP del servidor : 192.168.1.6 -- aceptar? (y/n)y
Url o dirección IP del servidor: 192.168.1.6
=========================================================================
=========================================================================
Introduzca el puerto para el servidor web, Puerto predeterminado: 80
Numero del Puerto: 9070
Numero del Puerto : 9070 -- aceptar? (y/n)y
Numero del Puerto: 9070
=========================================================================
Configurando la pagina web 192.168.1.6:9070/index.php...
=========================================================================
=========================================================================
Habilitando sitio añadido...
=========================================================================
=========================================================================
Configurando Permisos...
no crontab for root
useradd: user 'www-data' already exists
addgroup: The group `www-data' already exists.
=========================================================================
Se ha creado el usuario y el grupo www-data
Por Favor digite la contraseña para el usuario www-data dos veces:
sudo: smbpasswd: command not found
=========================================================================
www-data ALL=(ALL) NOPASSWD: ALL
gorobeta ALL=(ALL) NOPASSWD: ALL
%developers ALL=(www-data)NOPASSWD:/usr/bin/crontab
=========================================================================
Verificando Servidor Web...
nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful
=========================================================================
=========================================================================
Reiniciando Servidor Web...
System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down
=========================================================================
.
.
=========================================================================
PANEL DE ADMINISTRACIÓN WEB CREADO
=========================================================================
=========================================================================
Ingrese desde el navegador web con:
http://192.168.1.6:9070/
=========================================================================




         _ _ _ _ _ _
      ._|=|=|=|=|=|=|_._._
      |=|_|_|_|_|_|_|=|X|x|
        |=|=|=|=|=|_|_|x|X|
                  |X|_|_|=|_
              ._|X|x|X|_|_|=|
            ._|X|x|X| |=|_|=|
          ._|X|x|X|   |=|_|=|
        ._|X|x|X|     |=|_|=|
      ._|X|x|X|       |=|_|=|
    ._|X|x|X|           |=|
  ._|X|x|X|
._|X|x|X|
|X|x|X|
|X|X|





=========================================================================
Zona horaria actual del sistema: America/Bogota
Hora actual del sistema: Mon Apr 26 12:56:03 -05 2021
=========================================================================
Puede ajustar / eliminar el tiempo de reinicio seleccionado más tarde escribiendo crontab -e o ejecutando SetupMinecraft.sh nuevamente
=========================================================================
no crontab for www-data
Reinicio programado. Para cambiar la hora o eliminar el reinicio automático, escriba crontab -e
=========================================================================
=========================================================================
Configuranfo iniciao del servidor automáticamente
Configuration file /etc/systemd/system/amigos.service is marked executable. Please remove executable permission bits. Proceeding anyway.
Created symlink /etc/systemd/system/multi-user.target.wants/amigos.service → /etc/systemd/system/amigos.service.
=========================================================================
=========================================================================
=========================================================================
La configuración está completa. Iniciando el servidor de Minecraft...
System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down
=========================================================================
=========================================================================
El servidor de Minecraft no pudo iniciarse después de 20 segundos.
=========================================================================
=========================================================================
================CONFIGURACIÓN PREDETERMINADA DEL SERVIDOR================
=========================================================================
Nombre del Servidor: .... amigos
Nombre del Nivel: ....... Bedrock level
Modo del Juego: ......... survival
force-Modo del Juego: ......... false
# force-Modo del Juego: ......... false (or force-gamemode  is not defined in the server.properties)
# force-Modo del Juego: ......... true forces the server to send to the client gamemode values
Dificultad del Mundo: ... easy
Usar Trucos: ............ false
Jugadores Máximos: ...... 10
Permiso de Jugadores: ... false
Número de Semilla: ......
Puerto IPV4: ............ 19132
Puerto IPV6: ............ 19133
=========================================================================
System has not been booted with systemd as init system (PID 1). Can't operate.
Failed to connect to bus: Host is down


screen -r amigos

gorobeta@miequipo:~$




gorobeta@DESKTOP-RHMC5Q9:~$ wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/SetupMinecraft.sh
--2021-04-26 19:07:35--  https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/SetupMinecraft.sh
Resolving raw.githubusercontent.com (raw.githubusercontent.com)... 185.199.110.133, 185.199.111.133, 185.199.108.133, ...
Connecting to raw.githubusercontent.com (raw.githubusercontent.com)|185.199.110.133|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 29404 (29K) [text/plain]
Saving to: ‘SetupMinecraft.sh.1’

SetupMinecraft.sh.1    100%[============================>]  28.71K  --.-KB/s    in 0.05s

2021-04-26 19:07:36 (622 KB/s) - ‘SetupMinecraft.sh.1’ saved [29404/29404]

gorobeta@DESKTOP-RHMC5Q9:~$ chmod +x SetupMinecraft.sh
gorobeta@DESKTOP-RHMC5Q9:~$ ./SetupMinecraft.sh






Al final del script, configurará el servidor de Minecraft y le hará algunas preguntas. Explicaré aquí lo que significan.

**`Start Minecraft server at startup automatically (y/n)?` ¿Iniciar el servidor de Minecraft automáticamente (y/n)?** - Esto configurará el servicio o mundo de Minecraft para que se inicie automáticamente cuando se inicie el servidor Dedicado. Esta es una excelente opción para configurar un servidor de Minecraft que siempre esté disponible las 24 horas.

**`Automatically restart and backup server at 4am daily (y/n)?` ¿Reiniciar automáticamente y hacer una copia de seguridad del servidor a las 4 am todos los días (y/n)** - Esto agregará un trabajo cron al servidor que reinicia el servidor todos los días a las 4 am. Esto es genial porque cada vez que el servidor se reinicia, hace una copia de seguridad del servidor o mundo de Minecraft y a la vez se actualiza a la última versión del software dedicado de Minecraft Bedrock Edition.


*Eso es todo para el script de configuración. ¡El servidor terminará de configurarse y arrancará! comenzará a mostrar resultados en la consola, las líneas son:*

**Starting Server**, Iniciando Servidor  
**Version 1.16.40.2**, Versión del Juego  
**Level Name: Bedrock level**, Nombre del nivel predeterminado  
**Game mode: 0 Survival**, Modo de Juego Sobreviviente predeterminado  
**Difficulty: 1 EASY**, Dificultad del juego Fácil.  
**IPv4 supported, port: 19132**, Número de puerto para IP versión 4 predeterminado  
**IPv6 supported, port: 19133**, Número de puerto para IP versión 6 predeterminado  
**Server started**, podrá conectarse desde el cliente.

Y listo, solo deben ubicar la IP de su servidor o Computador y el puerto 19132, que en la mayoría de los casos es el IPV4.

## Iniciar, detener y reiniciar el servidor
El servidor se puede iniciar, detener y reiniciar de dos formas diferentes. Puede usar los scripts proporcionados en la carpeta de Minecraft o puede usar systemctl. Aquí están los comandos:

```
cd ~/minecraftbe/nombredelservidor

./start.sh  
./stop.sh  
./restart.sh
```

ó

```
sudo systemctl start minecraftbe  
sudo systemctl stop minecraftbe  
sudo systemctl restart minecraftbe
```

## Iniciar, detener y reiniciar el Servidor Web
El servidor web se puede iniciar, detener, reiniciar y recargar usando systemctl. Aquí están los comandos:

```
sudo systemctl start nginx 
sudo systemctl stop nginx 
sudo systemctl restart nginx
sudo systemctl reload nginx
```

## Backups automáticos
El servidor realiza una copia de seguridad cada vez que se inicia. Esto le ayuda a recuperarse fácilmente si algo sale mal. Este sistema funciona mejor si configuró el servidor para que se reinicie diariamente, ya que significa que tendrá una copia de seguridad todos los días.

Para acceder a estas copias de seguridad, escriba:

```
cd ~/minecraftbe/nombredelservidor/backups  
ls -lt
```


Cuando se realiza una copia de seguridad, el nombre del archivo será la fecha y la hora en que se realizó la copia de seguridad. Si necesita restaurar una copia de seguridad de su mundo, es muy fácil. Sustituya la marca de tiempo en mi ejemplo (13.11.2020_22.06.30_Mundo.tar.gz) por la copia de seguridad a la que desea retroceder. Tipo:

```
cd ~/minecraftbe/nombredelservidor  
./stop.sh  
rm -rf worlds  
tar -xf backups/13.11.2020_22.06.30_Mundo.tar.gz
./start.sh
```

¡Tu mundo ahora ha sido restaurado! Es una buena idea descargar estas copias de seguridad del servidor periódicamente en caso de que falle el almacenamiento del servidor.