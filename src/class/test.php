<?php
require_once("sql.class.php");

$sql = new Sql;
$last_server_time = $sql->fetch_single("SELECT * FROM time ORDER BY time DESC LIMIT 1", array())["time"];

if(isset($_POST['send_time']))
	$sql->query("INSERT INTO time VALUES(?, ?)", array("", time() + 3600));

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="submit" name="send_time">
</form>

<p id="timer"></p>

<script type="text/javascript">
    let data = <?php echo $last_server_time?>;
    console.log(data);


    function secondsToHms(d) {
    d = Number(d);
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);

    var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
    var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
    var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
    return hDisplay + mDisplay + sDisplay; 
}

function runFunction()
{
    document.getElementById("timer").innerHTML = (secondsToHms(data-new Date().getTime() / 1000));
}


var t=setInterval(runFunction,1000);
</script>
</body>
</html>