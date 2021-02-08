<?php
session_start();
$show="home";
exec('grep user /root/auth.txt |awk -F"=" \'{print $2}\'',$user);
exec('grep passwd /root/auth.txt |awk -F"=" \'{print $2}\'',$pass);
if ($_GET['login']) {
     if ($_POST['username'] == $user[0]
         && $_POST['password'] == $pass[0]) {
         $_SESSION['loggedin'] = 1;
         header("Location: index.php");
         exit;
     } else 
echo '<script type="text/javascript">
alert("Username atau Password salah!");
</script>';
}
echo '<!DOCTYPE html><html><head>
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="img/fav.ico">
<title>Xderm Mini Gui versi</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script></head>
<style>
body {
  display:flex; flex-direction:column; justify-content:center;
  min-height:0vh; color:black; background-color:#696969;
}
.col-but {
  align-items: center;
  font-family: cursive; color: black;
  border: 2px ridge black;
  background-color: grey;
  align-items: center;
  text-align: center;
}
.col-butt {
  align-items: center;
  font-family: cursive; color: black;
  border: 7px ridge green;
  background-color: grey;
  width: 230px;
  align-items: center;
  text-align: center;
}
</style>
<body>
<div class="header" style="height:60px;">
<div class="sparator" style="margin-top:80px;">';
if ($show == "home"){
	echo'
<center><table align="center"><tr><td class="col-but">
<body style="text-align:center"><br>
<center><img src="img/image.png" width: 80%></center>
<font face="tahoma">
<center><table align="center"><tr><td class="col-butt">Authentication Required.<br><br>
<form action="?login=1" method="post">
<input type="text" autofocus name="username" size="17" placeholder="Username" style="border-radius:3px;"/>
<br><br>
<input type="password" name="password" size="17" placeholder="Password" style="border-radius:3px;"/>
<br><br>
<input type="submit" value="Login" style="width:90px;height:30px;border-radius:10px;background-color:#04A4D5;"/>  
</form><br></table>
</div><br><br><br></table>';
}
    session_unset();
    session_destroy();
?>
