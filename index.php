<?php
 exec("ls login.php|awk 'NR==1'|awk -F '.' '{print $1}'",$clo);
  if ($clo[0]) {
include 'header.php';
ceklogin();
  };
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/ico.png">
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<meta charset="UTF-8"><title>Xderm Mini</title>
<style>
		body {
			display: flex; 
			flex-direction: column; 
			justify-content: center;
			min-height: 0vh; 
			color: black; 
			background-image:url(img/background.jpg);
			background-size: cover;
			-webkit-background-size: cover;
			background-repeat: no-repeat;
		}
		
		.btn {
			-moz-appearance: none;
			cursor: pointer;
			margin: 5px;
			align-items: center;
			border: 2px solid #132130 ;
			border-radius: 3px;
			background: #132130;
		}

		.btn:hover, .btn:focus {
			color: #000000;
			outline: 0;
		}
		.geser {
			border-color: #132130;
			color: #ffffff;
			padding: 3px 20px;
			background-image: linear-gradient(45deg, #00ACD0 50%, transparent 50%);
			background-position: 100%;
			background-size: 400%;
			transition: background 300ms ease-in-out;
		}
		
		.geser:hover {
			 background-position: 0;
		}

		.script_txt {
			text-align: left;
			font-family: cursive;
			font-weight: bold;			
			color: #000;
			border: 8px;
			border-radius: 10px;
			background: hsla(0, 0%, 100%, .3);
			align-items: center;
			width: 395px;
			height: 50px;
		}

		.col-butt {
			text-align: center;
			border: 5px;
			align-items: center;
		}

		.inline-block {
			display: inline-block;
			text-align: left;
			margin: 5px;
			top: 0px;
		}
		
		.box_script {
			width: 450px;
			border: none;
			border-radius: 10px;
			margin: 3% auto;
			padding: 10px 10px;
			background-color: black;
			box-shadow: 0px 0px 5px 2px #132130;
		}
		
		.footer {
			width: 100%;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #ffffff;
			font-weight: bold;
			bottom: 0px;
			z-index: 1;
			background: repeating-linear-gradient(-45deg, red 0%, yellow 7.14%, rgb(0,255,0) 14.28%,
						rgb(0,255,255) 21.4%, cyan 28.56%, blue 35.7%, magenta 42.84%, red 50%);
			background-size: 600vw 600vw;
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			animation: slide 10s linear infinite forwards;
		}
		
		@keyframes slide {
			0% {background-position-x: 0%;}
			100% {background-position-x: 600vw;}
		}	
		
		.blink { 
			-webkit-animation: blink .75s linear infinite; 
			-moz-animation: blink .75s linear infinite; 
			-ms-animation: blink .75s linear infinite; 
			-o-animation: blink .75s linear infinite; 
			animation: blink .75s linear infinite; 
			color: #00ACD0; 
			font-weight: bold; 
		} 

		@-webkit-keyframes blink { 
			0% { opacity: 1; } 
			50% { opacity: 1; } 
			50.01% { opacity: 0; } 
			100% { opacity: 0; } 
		} 

		@-moz-keyframes blink { 
			0% { opacity: 1; }
			50% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; } 
		}
 
		@-ms-keyframes blink { 
			0% { opacity: 1; } 
			5O% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; }
		}
 
		@-o-keyframes blink 
			0% { opacity: 1; } 
			50% { opacity: 1; }
			50.01% { opacity: 0; } 
			100% { opacity: 0; }
		}
 
		@keyframes blink { 
			0% { opacity: 1; } 
			50% opacity: 1; }
			50.01% { opacity: 0;} 
			100% { opacity: 0; } 
		}
		
</style>
<script>
function shipping_calc() {
  var val = document.getElementById("idconf").value;
 if (val === "config1") {
   var data = document.getElementById("isi1").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config2") {
   var data = document.getElementById("isi2").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config3") {
   var data = document.getElementById("isi3").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config4") {
   var data = document.getElementById("isi4").value;
   document.getElementById("isi").value= data;
 }
 if (val === "config5") {
   var data = document.getElementById("isi5").value;
   document.getElementById("isi").value= data;
 }
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "screenlog.0",
		cache: false,
                success: function(result) {
		    $("#log").html(result);
                }
            });
        $(document).ready(function() {
                $.ajaxSetup({ cache: false });
                        });
                var textarea = document.getElementById("log");
                textarea.scrollTop = textarea.scrollHeight;
        }, 1000);
    });
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<body class="box_script" style="text-align:center">
	<center>
<?php
$filename = 'login.php';

if (file_exists($filename)) {
    echo '<a href="login.php" onClick="logout()">';
} else {
    echo '<a href="index.php" onClick="logout()">';
}
?>
		<img src="img/image.png" width: 90%></a>
	</center>
    <form method="post">
		<center>
			<table align="center"><tr><td class="col-butt">
				
				<input type="submit" name="button1" class="btn geser"  id="strp"
					value="<?php echo exec('cat log/st') ?>"/>
	
				<input type="submit" name="button3" class="btn geser" id="logg"
					value="Log"/>
				
				<input type="submit" name="button2" class="btn geser" id="config"
					value="Config"/>
				
				<input type="submit" name="button5" class="btn geser" id="about"
					value="About"/>

				</td></tr>
			</table>
		</center>
<?php
  exec('cat /var/update.xderm',$z);
    if ($z[0]) {
 if ( $z[0] != '3.0' ){
echo '<pre><h3 style="color:lime">New versi GUI Detected, Please Update!!</h3></pre>';
};
    };
  if (isset($_POST['button1'])) {
  exec('cat log/st',$o);
if ( $o[0] == 'Start' ) {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gua ./xderm-mini start');
 exec('echo Stop > log/st');
echo '<script>
  document.getElementById("strp").value="Stop";
</script>';
 } else {
 exec('killall -q xderm-mini');
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gu ./xderm-mini stop');
 exec('echo Start > log/st');
echo '<script>
  document.getElementById("strp").value="Start";
</script>';
}
  }
  if (isset($_POST['button2'])) {
  exec('echo > screenlog.0');
  }
  if (isset($_POST['button4'])) {
  exec('killall -q xderm-mini');
  exec('echo > screenlog.0');
  exec('chmod +x xderm-mini');
  exec('screen -L -dmS upd ./xderm-mini update');
  }
  if (isset($_POST['button3'])) {
  exec('cp log/log.txt screenlog.0 2>/dev/null');
  }
  if (isset($_POST['button5'])) {
  exec('echo " " > screenlog.0');
  }
?>
<table align="center"><tr><td class="script_txt"><div class="inline-block"><pre>
<?php
 if (isset($_POST['simpan'])) {
 $config=$_POST['configbox'];
 $conf=$_POST['profile'];
 $use_stunnel=$_POST['use_stunnel'];
 $use_gotun=$_POST['use_gotun'];
 $use_restfw=$_POST['use_restfw'];
 $use_waitmodem=$_POST['use_waitmodem'];
 $mode=$_POST['mode'];
 if ($use_stunnel <> 'yes' ){$use_stunnel='no';}
 if ($use_gotun <> 'yes' ){$use_gotun='no';}
 if ($use_restfw <> 'yes' ){$use_restfw='no';}
 if ($use_waitmodem <> 'yes' ){$use_waitmodem='no';}
 exec('echo "'.$mode.'" > config/mode.default');
 exec('echo "'.$config.'" > config/'.$conf);
 exec('sed -i \'/mode=/,+0 d\' config/'.$conf);
 exec('sed -i \'s/\r$//g\' config/'.$conf);
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
 exec('echo "'.$config.'" > config.txt');
 exec('sed -i \'s/\r$//g\' config.txt');
 exec('sed -i \':a;N;$!ba;s/\n\n//g\' config.txt');
 exec('echo "'.$use_stunnel.'" > config/stun');
 exec('echo "'.$use_gotun.'" > config/gotun');
 exec('echo "'.$use_restfw.'" > config/firewall');
 exec('echo "'.$use_waitmodem.'" > config/modem');
 exec('echo "'.$conf.'" > config/default');
 exec('echo "Config telah di update." > screenlog.0');
 exec('echo "\''.$conf.'\' Menjadi default Config. !" >> screenlog.0');
 $use_boot=$_POST['use_boot'];
if ($use_boot <> 'yes' ){ exec('./xderm-mini disable');
} else { exec('./xderm-mini enable'); }
 exec("cat config/default",$default);
 }
if($_POST['button2']){
exec("cat config/mode.list|awk 'NR==1'",$adamode);
$adamode=$adamode[0];
if (!$adamode) {
exec("echo SSH. >> config/mode.list");
exec("echo Vmess. >> config/mode.list");
exec("echo Trojan. >> config/mode.list");
exec("echo Multi. >> config/mode.list"); }

exec("cat config/config.list|awk 'NR==1'",$ada);
$ada=$ada[0];
if ($ada) {
exec("cat config/default",$default);
$default=$default[0];
 if ($default) {
echo "<h3><center>Current active profile is <b>[ $default ]</b></center></h3>";
$data = file_get_contents("config/$default");
echo "<textarea name='configbox' id='isi' placeholder='Masukkan config disini' rows='9' cols='50' wrap='hard'>$data</textarea>";
 } else {
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' placeholder='Masukkan config disini' rows='9' cols='50' wrap='hard'>$data</textarea>";
 }
$data1 = file_get_contents("config/config1");
echo "<textarea name='configbox1' id='isi1' rows='3' cols='10' style='display:none;' wrap='hard'>$data1</textarea>";
$data2 = file_get_contents("config/config2");
echo "<textarea name='configbox2' id='isi2' rows='3' cols='10' style='display:none;' wrap='hard'>$data2</textarea>";
$data3 = file_get_contents("config/config3");
echo "<textarea name='configbox3' id='isi3' rows='3' cols='10' style='display:none;' wrap='hard'>$data3</textarea>";
$data4 = file_get_contents("config/config4");
echo "<textarea name='configbox4' id='isi4' rows='3' cols='10' style='display:none;' wrap='hard'>$data4</textarea>";
$data5 = file_get_contents("config/config5");
echo "<textarea name='configbox5' id='isi5' rows='3' cols='10' style='display:none;' wrap='hard'>$data5</textarea>";
} else {
exec("mkdir -p config;touch config/config.list config/config1 config/config2");
exec("touch config/config3 config/config4 config/config5 config/mode.list");
exec("echo config1 >> config/config.list");
exec("echo config2 >> config/config.list");
exec("echo config3 >> config/config.list");
exec("echo config4 >> config/config.list");
exec("echo config5 >> config/config.list");
exec("echo config1 >> config/default");
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' id='isi' rows='9' cols='50' wrap='hard'>$data</textarea>";
$config=$_POST['configbox'];
$conf=$_POST['profile'];
exec('echo "'.$config.'" > config/'.$conf);
exec('sed -i \'s/\r$//g\' config/'.$conf);
exec('sed -i \':a;N;$!ba;s/\n\n//g\' config/'.$conf);
};
echo '<div class="form-box">';
echo '<select name="profile" id="idconf" onchange="shipping_calc()">';
exec("cat config/config.list",$list);
exec("cat config/default",$default);
$default=$default[0];
$x=0;
while($x<count($list)){
if ( $default == $list[$x] ){
echo "<option value=\"$list[$x]\" selected>$list[$x]</option>";
} else {
echo "<option value=\"$list[$x]\">$list[$x]</option>";}
  $x++;}
echo '<form method="post"'>
exec("cat config/stun|awk 'NR==1'",$stun);
  if (!$stun[0]) { exec("echo yes > config/stun"); }
 if ( $stun[0] == "yes"){
echo '<input type="checkbox" name="use_stunnel" value="yes" checked>stunnel'; }
else {
echo '<input type="checkbox" name="use_stunnel" value="yes">stunnel'; }
exec("touch /etc/rc.local");
exec("cat /etc/rc.local 2>/dev/null|grep xderm|grep button|awk '{print $2}'|awk 'NR==1'",$boot);

exec("cat config/gotun|awk 'NR==1'",$gotun);
  if (!$gotun[0]) { exec("echo no > config/gotun"); }
 if ( $gotun[0] == "yes"){
echo '<input type="checkbox" name="use_gotun" value="yes" checked>go-tun2socks'; }
else {
echo '<input type="checkbox" name="use_gotun" value="yes">go-tun2socks'; }

exec("cat config/firewall|awk 'NR==1'",$restfw);
  if (!$restfw[0]) { exec("echo no > config/firewall"); }
 if ( $restfw[0] == "yes"){
echo '<input type="checkbox" name="use_restfw" value="yes" checked>Restart Firewall<br>'; }
else {
echo '<input type="checkbox" name="use_restfw" value="yes">Restart Firewall<br>'; }

echo '<select name="mode" id="idmode">';
exec("cat config/mode.list",$modelist);
exec("cat config/mode.default",$modedefault);
$modedefault=$modedefault[0];
$u=0;
while($u<count($modelist)){
if ( $modedefault == $modelist[$u] ){
echo "<option value=\"$modelist[$u]\" selected>$modelist[$u]</option>";
} else {
echo "<option value=\"$modelist[$u]\">$modelist[$u]</option>";}
  $u++;}

exec("cat config/modem|awk 'NR==1'",$modem);
  if (!$modem[0]) { exec("echo no > config/modem"); }
 if ( $modem[0] == "yes"){
echo '<input type="checkbox" name="use_waitmodem" value="yes" checked>Waiting Modem '; }
else {
echo '<input type="checkbox" name="use_waitmodem" value="yes">Waiting Modem '; }

 if ($boot[0]) {
echo '<input type="checkbox" name="use_boot" value="yes" checked>ON-Boot'; }
else {
echo '<input type="checkbox" name="use_boot" value="yes">ON-Boot'; }
echo  "\n\n";
echo '<input type="submit" name="simpan" class="btn geser" style="display: flex; width: 98%; height: 50px; margin-right: 20px; flex-shrink: 0; font-weight: bold; ! important;" value="Save Xderm Settings and VPN Profile"/></form></div>';
} else {
echo '<div id="log" class="scroll"></div></pre></div>';
}

if($_POST['button5']){
echo '<div class="footer slide" style="display: flex; height: 110%; flex-shrink: 0; font-weight: bold; font-size: 120%; font-align: center; ! important; margin-top: -10%"><p style="text-align:center">
        Xderm Mini Informations
    </div>';
echo "
<textarea readonly rows='12' cols='50' wrap='hard' style='text-align:center; background-color: #FFFFFF; ! important';>
Xderm Mini is simple injector tool based on shell script and python commands for OpenWrt by @ryanfauzi1 which help you to inject your OpenWrt connection using VPN injection (SSH/Trojan/Vmess).

===============
Additional Installation
===============

Add login page
wget -O installer-login https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/installer-login && bash installer-login

Remove login page
wget -O /bin/xderm-rmlogin https://raw.githubusercontent.com/helmiau/openwrt-config/main/rmlogin-xderm && chmod +x /bin/xderm-rmlogin && xderm-rmlogin

Manual Update
wget -O update-manual https://raw.githubusercontent.com/ryanfauzi1/xderm-mini_GUI/main/update-manual && chmod +x update-manual && ./update-manual

Fix download index.php file
wget -O /bin/fixphp https://raw.githubusercontent.com/helmiau/openwrt-config/main/fix-xderm-libernet-gui && chmod +x /bin/fixphp && fixphp

===============

===============
Default auth.txt (WebUI Login Information)
===============
Username  : admin
Password  : xderm
===============
Edit /root/auth.txt file or by run xdrauth command using terminal to change password
===============

===============
Default config.txt
===============
host=103.157.1xx.xx
port=443
pudp=7300
user=ryanxxxx
pass=123xxx
sni=www.xxx.xx
vmess://eyJhZGQiOixxxxxxx
trojan://user@server:port
===============

</textarea>
";
echo '<p style="text-align:center; font-size:80%;">Read more info at <a href="https://github.com/ryanfauzi1/xderm-mini_GUI">Xderm Mini Github Repo</a></p>';
$xdermver = "3.0";
echo '<input type="submit" name="button4" class="btn geser" id="update" style="align:center; display: flex; width: 98%; margin-right: 20px; flex-shrink: 0; font-weight: bold; ! important;" value="Current version : v3.0 • Click to check update"/>';


echo '<div class="footer slide" style="display: flex; height: 110%; flex-shrink: 0; font-weight: bold; font-size: 80%; font-align: center; ! important; padding-bottom: 10px"><p style="text-align:center">
        Logo by <a href="http://me.helmiau.my.id">Helmi Amirudin</a> • Theme by <a href="https://www.facebook.com/agussriawan.id">Agus Sriawan</a><br>
		Copyright &copy <a href="https://github.com/ryanfauzi1">Ryan Fauzi</a>
    </div>';
}

?>
</td></tr>
</table></head>
</div>
</html>
