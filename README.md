<p align="center">
  <img src="https://github.com/helmiau/xderm-mini_GUI/blob/main/xderm-logo/xderm-icon-256px.png?raw=true" height="140" alt="Xderm Mini Logo"/>
  <br>
  <br>
  <img src="https://github.com/helmiau/xderm-mini_GUI/blob/main/xderm-logo/xderm-logo-typo-tagline-1500px.png?raw=true" height="70" alt="Xderm Mini Logo"/>
  <br>
  <br>
</p>

Index page information
- [About this software, Information, Default WebUI Page, Login Authorization and Configuration.](https://github.com/ryanfauzi1/xderm-mini_GUI#information)
- [Installation, Requirements and Update.](https://github.com/ryanfauzi1/xderm-mini_GUI#installation)
- [Custom Theme, Xderm Auto Installer for STB, Xderm Mini Tools, etc.](https://github.com/ryanfauzi1/xderm-mini_GUI#additional-installation)


## Information
xderm-mini GUI is simple injector tool based on shell script and python commands for OpenWrt by @ryanfauzi1 which help you to inject your OpenWrt connection using VPN injection (SSH/Trojan/Vmess).

**Current version : ```3.1```**

Note : if you need to downgrade, use ***```xdrtool```*** script by using terminal. Scroll down to read ***```xdrtool```*** documentations.

<details><summary>Default information (WebUI address, webui login auth and config) (click to show)</summary>
<p>
  
Default **WebUI Page** : http://192.168.1.1/xderm

Default **auth.txt** (WebUI Login Information) 

```
Username  : admin
Password  : xderm
```

you can change authentication by editing ```/root/auth.txt``` file or by running ```xdrauth``` command using terminal then follow the instructions.

Default **config.txt** 
```
host=103.157.1xx.xx
port=443
pudp=7300
user=ryanxxxx
pass=123xxx
sni=www.xxx.xx
vmess://eyJhZGQiOixxxxxxx
trojan://user@server:port
```
  
</p>
</details>

**Screenshots**
<details><summary>Click here to show some screenshots</summary>
<p>
  
![image](https://user-images.githubusercontent.com/20932301/126107228-9c227a82-b4f0-43c6-82f9-f744e5aabf54.png)

![image](https://user-images.githubusercontent.com/20932301/125009423-bb764400-e08e-11eb-8645-46c9bf7fa74b.png)
  
</p>
</details>

## Installation
Requirements Packages
```
badvpn-tun2socks
coreutils-base64
coreutils-timeout
httping
v2ray-core
corkscrew
procps-ng-ps
git
curl
sshpass
python3-pip
python3 -m pip install requests beautifulsoup4
openssh-client
openssl-util
php7
php7-cgi
php7-mod-session
https-dns-proxy
```

Main Xderm-Mini Installation
```
wget -O installer https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installer && chmod +x installer && ./installer
```

**Run ```xdrtool``` command using terminal to Setup Xderm Mini after initial installation**

This xdrtool contains : below command lists
```
===========================================
               Command Lists
===========================================
     Install Xderm Mini       : 1
     Install Theme by Agus S  : 2
     Update Xderm Mini        : 3
     Fix index.php            : 4
     Change User & Pass Login : 5
     Change Username Only     : 6
     Change Password Only     : 7
     Install Login Page       : 8
     Remove Login Page        : 9
     Install Older Version    : 10
     Remove Xderm Mini Files  : 11
===========================================
  Available Older Version  : v1.0 ~ v3.0
    type 10 for v1.0, 20 for v2.0, etc
===========================================
```

Login Page Installation
```
wget -O installer-login https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installer-login && bash installer-login
```

Login Page Removal
```
wget -O /bin/xderm-rmlogin "https://raw.githubusercontent.com/helmiau/openwrt-config/main/rmlogin-xderm" && chmod +x /bin/xderm-rmlogin && bash xderm-rmlogin
```

for Manual Update
```
wget -O update-manual https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/update-manual && chmod +x update-manual && ./update-manual
```

## Additional Installation
#### [Xderm-Mini Installer for STB by Vito Harhari](https://github.com/vitoharhari/xderm-mini)
Copy codes below
```
wget --no-check-certificate "https://raw.githubusercontent.com/vitoharhari/xderm-mini/main/install-xderm-mini" -P /usr/bin/ && chmod 777 /usr/bin/install-xderm-mini && bash install-xderm-mini
```
Run **```install-xderm-mini```** for installation/usage.

#### [AIN : Auto Installer Tools for STB by Vito Harhari](https://github.com/vitoharhari/ain)
Copy codes below
```
wget --no-check-certificate "https://raw.githubusercontent.com/vitoharhari/ain/main/install-ain" -P /root/ && chmod 777 /root/install-ain && bash install-ain
```
Run **```install-ain```** for installation/usage.

#### Fix browser always download login.php file by helmiau
Copy codes below
```
wget -O /bin/fixphp "https://raw.githubusercontent.com/helmiau/openwrt-config/main/fix-xderm-libernet-gui" && chmod +x /bin/fixphp
```
Run **```fixphp```** for installation/usage.

## Custom Theme
#### Blue Light Theme by Agus Sriawan

<details><summary>Click here to show screenshots</summary>
<p>
  
  ![image](https://user-images.githubusercontent.com/20932301/126102219-f2dbcbb0-3ee3-4952-8076-a144b0e5e7f8.png)
  
</p>
</details>

Copy codes below
```
wget -O installtheme https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installtheme -q && bash installtheme && wget -O /www/xderm/img/image.png https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/image.png -q

```
Run **```installtheme```** for installation/usage.


#### Mejikuhibiniu (RGB) Theme by Adi Putra

<details><summary>Click here to show screenshots</summary>
<p>
  
![image](https://user-images.githubusercontent.com/20932301/126102454-445d1172-6571-4bc5-93ea-37d7d06416ff.png)
  
</p>
</details>

Copy codes below
```
wget -O install-theme-putra https://raw.githubusercontent.com/Putra-0/theme-xderm-putra/main/install-theme-putra && bash install-theme-putra -q && wget -O /www/xderm/img/image.png https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/image.png -q

```
Run **```install-theme-putra```** for installation/usage.


## Credits
- [Tuhan](https://id.wikipedia.org/wiki/Tuhan) ~ Penguasa semesta, sang pemilik ilmu sekaligus sumbernya.
- [Ryan Fauzi](https://github.com/ryanfauzi1) ~ Kang developer utama sing paling guanteng | Kang gebuk bug xderm sekaligus improvisasi
- [Agus Sriawan](https://www.facebook.com/agussriawan.id) ~ Kang bikin tema Blue Light | Kang desain logo tulisan XDERM-MINI
- [Vito Harhari](https://github.com/vitoharhari) ~ Kang bikin auto installer xderm-mini
- [Helmi Amirudin](https://github.com/helmiau) ~ Kang ngerapihin README | Kang desain logo ikon XDRM, improve logo & tagline
- [Adi Putra](https://github.com/Putra-0) ~ Kang bikin [Tema Mejikuhibiniu RGB](https://github.com/Putra-0/theme-xderm-putra)
<br>
<h5 align="center">Copyright by <a href="https://github.com/ryanfauzi1">Ryan Fauzi</a> ® 2021 <br> Thank You ! 🤝</h3>
