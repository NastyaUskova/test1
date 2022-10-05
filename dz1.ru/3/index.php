<?php
	setcookie("test", "тест", time()+5);
	if(isset($_COOKIE["test"]))
	echo "установлена";
	else
	echo "нет";
 ?>
 <!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<head>
		<title>день рождения</title>
	</head>
	<body>
		<form action="primer.php" method="POST">
			<p>Когда ваш день рождения?</p>
			<input type="data" name="dr" />
			<input type="submit" name="otpravit" value="ОК" />
		</form>
	</body>
	<?php
	if(!isset($_cookie[$cookie_name])){
	echo "cookie name $cookie_name";
	echo "cookie value $cookie_value";
	}
	?>
</html>
if($_POST=365);[
header("Location:TEST.php")]