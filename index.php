<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="img/fav.ico">
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<meta charset="UTF-8">
 <title>
  Xderm Mini Gui versi
 </title>
<style>
body {
  display:flex; flex-direction:column; justify-content:center;
  min-height:0vh; color:black; background-color:#696969;
}
.btn {
  -moz-appearance: none;
  cursor: pointer;
  margin: 2px;
  align-items: center;
}
.btn:hover, .btn:focus {
  color: white;
  outline: 0;
}
.third {
  border-color: green;
  color: white;
  box-shadow: 0 0 40px 40px black inset, 0 0 0 0 black;
  transition: all 150ms ease-in-out;
}
.third:hover {
  border-color: black;
}
.col-md-4 {
  text-align: left;
  font-family: cursive; color: black;
  border: 8px ridge green;
  background-color: grey;
  align-items: center;
  width: 395px;
  height: 50px;
}
.col-butt {
  text-align: center;
  border: 2px ridge black;
  align-items: center;
}
.inline-block {
  display: inline-block;
  text-align: left;
  margin: 5px;
  top: 0px;
}
</style>
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
</script>
<body style="text-align:center">
<center><img src="img/image.png" width: 80%></center>
       <form method="post">
<center><table align="center"><tr><td class="col-butt">
<input type="submit" name="button1" class="btn third" id="strp"
        value="<?php echo exec('cat log/st') ?>"/>
<input type="submit" name="button3" class="btn third" id="logg"
        value="Log"/>
<input type="submit" name="button2" class="btn third" id="config"
        value="<?php echo exec('cat log/config') ?>"/>
<input type="submit" name="button4" class="btn third" id"update"
        value="<?php echo exec('cat log/update') ?>"/>
</div></td></tr></center>
</table>
</form>
<?php
  if (isset($_POST['button1'])) {
  exec('cat log/st',$o);
if ( $o[0] == 'Start' ) {
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gui ./xderm-mini start');
 exec('echo Stop > log/st');
echo '<script>
  document.getElementById("strp").value="Stop";
</script>';
 } else {
 exec('echo > screenlog.0');
 exec('chmod +x xderm-mini');
 exec('screen -L -dmS gui ./xderm-mini stop');
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
  exec('echo > screenlog.0');
  exec('chmod +x xderm-mini');
  exec('screen -L -dmS upd ./xderm-mini update');
  }
  if (isset($_POST['button3'])) {
  exec('echo > screenlog.0');
  exec('cp log/log.txt screenlog.0 2>/dev/null');
  }
?>
<table align="center"><tr><td class="col-md-4"><div class="inline-block">
<pre>
<?php
  if (isset($_POST['simpan'])) {
$config=$_POST['configbox'];
exec('echo \''.$config.'\' > config.txt');
exec("sed -i 's/\r$//g' config.txt");
exec("sed -i ':a;N;$!ba;s/\n\n/ /g' config.txt");
exec('echo "Config telah di update!." > screenlog.0');
  }
if($_POST['button2']){
$data = file_get_contents("config.txt");
echo "<textarea name='configbox' rows='9' cols='50'>$data</textarea>";
echo '<div class="form-box">';
echo "<input type='submit' name='simpan' class='btn third' value='Simpan Config'/></form></div>";
} else {
echo '<div id="log" class="scroll"></div></pre></div>';
}
?>
</td></tr>
</table></head><center><h7><b>Current versi GUI 1.0 Copyright &copy</b></h7></center>
</html>
