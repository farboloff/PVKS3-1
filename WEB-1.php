<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>
<form action="WEB-1.php" method="post">
	<p>Ваша фамилия: <input type="text" name="fam"/></p>		
	<p>Ваше имя: <input type="text" name="name" /></p>
	<p>Ваше отчество: <input type="text" name="otch"/></p>
	<p>Ваш возраст: <input type="text" name="age" /></p>
	<p><input type="submit" /></p>
</form>
<?php 
$Fam=($_POST['fam']);
$Name=($_POST['name']);
$Otch=($_POST['otch']);
$Age=($_POST['age']);
if ($Fam=="" or $Name=="" or $Otch=="" or $Age=="")
	echo "Вы не заполнили форму до конца!";
else{
if(isset($_POST["fam"]))
	echo "Фамилия: $Fam";
if(isset($_POST["name"]))
	echo "<br>Имя: $Name";
if(isset($_POST["otch"]))
	echo "<br>Отчество: $Otch";
if(isset($_POST["age"]))
	echo "<br>Возраст: $Age";
}
?>
</body>
</html>