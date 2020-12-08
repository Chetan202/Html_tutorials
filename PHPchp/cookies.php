<html>
<head>
<title>CREATE COOKIES</title>
<?php
$cookie_name="Student";
$cookie_value="Chetan Jha";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<body>
<?php
if(isset(($_COOKIE[$cookie_name]))
{
	echo"COOKIE NAME'". $cookie_name."'is not set";
}
else{
	echo"COOKIE DONE";
}



?>
</body>

</html>