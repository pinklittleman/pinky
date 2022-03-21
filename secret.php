<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>
<html>
<body>
<title>COMING SOON!</title>

<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">


<?php
 echo"users online: ";
 echo file_get_contents("usersout");
 echo"<br>";
 echo"<br>";
 echo file_get_contents( "attacksout");
 echo "<br>"; 
 echo"<br>";
 echo file_get_contents("tempout")
?>
</body>
</html>
