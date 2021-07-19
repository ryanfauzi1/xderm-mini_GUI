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

**Current version : ```3.0```**

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

Login Page Installation
```
wget -O installer-login https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installer-login && bash installer-login
```

for Manual Update
```
wget -O update-manual https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/update-manual && chmod +x update-manual && ./update-manual
```

## Additional Installation
#### Theme Installation by Agus Sriawan
Copy codes below
```
wget -O installtheme https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installtheme && bash installtheme
```
Run **```installtheme```** for installation/usage.

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

## Credits
- [Ryan Fauzi](https://github.com/ryanfauzi1) ~ Kang Developer
- [Agus Sriawan](https://www.facebook.com/agussriawan.id) ~ Kang Tema, Kang Buat Logo Tulisan XDERM MINI
- [Vito Harhari](https://github.com/vitoharhari) ~ Kang bikin auto installer xderm-mini
- [Helmi Amirudin](https://github.com/helmiau) ~ Kang Ngerapihin Readme, Kang Buat Logo Icon XDRERM MINI & Improve logo jadul




<h5 align="center">Copyright by <a href="https://github.com/ryanfauzi1">Ryan Fauzi</a> ® 2021 <br> Thank You ! 🤝</h3>
