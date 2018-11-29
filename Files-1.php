<!DOCTYPE html>
<html>
<head>
  <title>Задание 1</title>
</head>
<body>
<form action="Files-1.php" method="post">
  <p>Ваша фамилия: <input type="text" name="fam"/></p>    
  <p>Ваше имя: <input type="text" name="name" /></p>
  <p>Сообщение: <input type="text" name="soob"/></p>
  <p><input type="submit" /></p>
</form>
<?php
$filename = 'message.txt';
if (file_exists($filename)){
	echo "Файл $filename существует";
} else {
	echo "Файл $filename не существует";
}
$handle = fopen("message.txt",'a');
if (isset($_POST['fam'])){
fwrite($handle,$_POST['fam']);
}
if (isset($_POST['name'])){
fwrite($handle,$_POST['name']);
}
if (isset($_POST['soob'])){
fwrite($handle,$_POST['soob']);
}
if (file_exists($filename)){
	fwrite($handle,"Файл $filename существует ");
} else {
	fwrite($handle,"Файл $filename существует ");
}
fclose($handle);
?>
</body>
</html>