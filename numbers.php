<!DOCTYPE html>
<html>
<head>
	<title>Операторы</title>
</head>
<body>
<?php
	$oper1;
	$oper2;
	$oper3;
	$oper4;
	$number1 = 10;
	$number2 = 5;
	echo "Первое число=",$number1;
	echo "<br>Второе число=",$number2;
	echo "<br>Сложение=",$oper1=$number1+$number2;
	echo "<br>Вычитание=",$oper2=$number1-$number2;
	if($number2!=0)
	echo "<br>Деление=",$oper3=$number1/$number2;
	else echo "<br>Делить на 0 нельзя";
	echo "<br>Умножение=",$oper4=$number1*$number2;
?>	
</body>
</html>