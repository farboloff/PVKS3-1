<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>
<form method="post" action="">
Фрукты:<br>
<select name="mat">
	<option value="Яблоки">Яблоки</option>
	<option value="Апельсины">Апельсины</option>
	<option value="Ананасы">Ананасы</option>
	<option value="Арбузы">Арбузы</option>
</select>
<br>
<input type=submit valve="ok">
<br><br>
</form>
<?
if(!empty($_POST['mat']))
$mat=$_POST['mat'];             
echo "Мы любим: $mat";
?>
</body>
</html>