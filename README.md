# EyvalonMoons

<p align="center">
<img src="https://emoons.eyvalongames.de/img/eyvalonmoons.png">
</p>

The browsergame framework is based on the New-Star web browser game engine [New-Star - github.com/Yaro2709/New-Sta](https://github.com/Yaro2709/New-Star)</br>
and the open source browsergame framework [2Moons - github.com/jkroepke/2Moons](https://github.com/jkroepke/2Moons). 

Full source code is placed at [https://github.com/eyvalon/EyvalonMoons](https://github.com/eyvalon/EyvalonMoons) repository.
The browsergame is for the Eyvalon Community purposes. The opportunity was given to change the game code by the Eyvalonier as a contribution to 2Moons.
There are many things to modify starting from **graphics, languages, code improvements up to EyvalonGames integration and bughunting**.

## Repository structure

- [cache] - temporary cached server .tpl webpages
- [chat] - AJAX ingame client-side chat
- [includes]
  - game engine
  - configuration
  - administration
  - database scheme
  - external libraries
  - webpages functionality
- [install]
  - first installation
  - database creation
- [language] - translations: EN, RU
- [licenses] - open source license schemes
- [sound] - media files
- [mods] - modifications that are devoid of support
- [scripts] - client-side web browser .js scripts
- [styles] 
  - webpages .css templates
  - webpages .tpl templates
  - fonts
  - images
 
## Local installation

- Clone the repo: `git clone https://github.com/eyvalon/EyvalonMoons`
- Install components: `apt install apache2 php7.3 php7.3-gd php7.3-fpm php7.3-mysql php7.3-curl php-ds libapache2-mod mysql-server`
- Setup mysql: `create user USER identified by PASSWORD; create database DB; grant all privileges on DB.* to USER;`
- Set write privileges to dirs: `cache/`, `includes/`
- Run wizard: `127.0.0.1/install/install.php`



## Copyright and license

EyvalonMoons is based on [2Moons](https://github.com/jkroepke/2Moons) and is a Fork of [New-Star](https://github.com/Yaro2709/New-Star)

Code copyright 2009-2016 Jan-Otto Kröpke released under the MIT License.</br>
Code copyright 2020-2022.01 Yaroslav Tsvira released under the MIT License.</br>

**Code copyright 2022.02 EyvalonGames - Stefan Peters released under the MIT License.**
