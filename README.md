# xderm-mini_GUI Openwrt

![image](https://user-images.githubusercontent.com/20932301/125009423-bb764400-e08e-11eb-8645-46c9bf7fa74b.png)

## Information
xderm-mini GUI is OpenWrt software by @ryanfauzi1 which can help you to inject your connection using VPN injection (SSH/Trojan/Vmess)

Requirements Packages
```
badvpn-tun2socks
coreutils-base64
v2ray-core
corkscrew
procps-ng-ps
git
curl
sshpass
python3-pip
python3 -m pip install requests beautifulsoup4
openssl-util
php7
php7-cgi
php7-mod-session
https-dns-proxy
```

WebUI Page : http://192.168.1.1/xderm

Default ```auth.txt``` (WebUI Login Information)
```
Username  : admin
Password  : xderm
```

Default ```config.txt```
```
host=103.157.1xx.xx
port=443
pudp=7300
user=ryanxxxx
pass=123xxx
sni=www.xxx.xx
vmess://eyJhZGQiOixxxxxxx
trojan://user@server:port
mode=0
```

Connection mode information
```
mode=0    SSH/SSL mode
mode=1    VMESS mode
mode=2    TROJAN mode
mode=3    Multi injection mode (SSH, VMESS, TROJAN)
```

## Installation
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
Run ```bash installtheme``` for installation

#### [Xderm-Mini Installer for STB by Vito Harhari](https://github.com/vitoharhari/xderm-mini)
Copy codes below
```
wget --no-check-certificate "https://raw.githubusercontent.com/vitoharhari/xderm-mini/main/install-xderm-mini" -P /usr/bin/ && chmod 777 /usr/bin/install-xderm-mini && bash install-xderm-mini
```
Run ```bash install-xderm-mini``` for installation

#### [AIN : Auto Installer Tools for STB by Vito Harhari](https://github.com/vitoharhari/ain)
Copy codes below
```
wget --no-check-certificate "https://raw.githubusercontent.com/vitoharhari/ain/main/install-ain" -P /root/ && chmod 777 /root/install-ain && bash install-ain
```
Run ```bash install-xderm-mini``` for installation


#### Fix browser always download login.php file by helmiau
Copy codes below
```
wget --no-check-certificate "https://raw.githubusercontent.com/helmiau/openwrt-config/main/fix-xderm-libernet-gui" -P /root/ && chmod 777 /root/fix-xderm-libernet-gui && cd /root && bash fix-xderm-libernet-gui
```
Run ```bash fix-xderm-libernet-gui``` for installation

## Credits
- [Ryan Fauzi](github.com/ryanfauzi1) ~ Kang Developer
- Agus Sriawan ~ Kang Ngetheme
- [Vito Harhari](github.com/vitoharhari) ~ Kang bikin auto installer xderm-mini
- [Helmi Amirudin](github.com/helmiau) ~ Kang Ngerapihin Readme

Thank you
