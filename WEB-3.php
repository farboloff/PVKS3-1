<!DOCTYPE html>
<html>
<head>
	<title>Задание 3</title>
</head>
<body>
<form action="WEB-3.php" method="post">
	<p>Дата рождения: <input type="text" name="date_birth"/></p>		
	<p><input type="submit" /></p>
</form>	
<?php
    $now = new DateTime('now');
    $date_birth=($_POST['date_birth']);
    $interval = $now->diff( new DateTime($date_birth));
    if ($date_birth=="") echo "Вы ничего не ввели!";
    else
    echo 'Полных лет: ' . $interval->format('%y');
 ?>   
</body>
</html>