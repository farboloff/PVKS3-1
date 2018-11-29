<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>
<h1>Покупка в магазине!</h1>
<?php
	require_once "products.php"
	$firm1 = new firm1 (3,"");
	$Client2 = new Client2 (46000, "4276 8000 5241 2887");
	echo "Первый клиент: <br>";
	$Client1 -> info();
	echo "<br>";
	echo "Первый клиент покупает монитор Asus Prime Edition  <br>";
	$money = 6499;
	$Client1 ->buy($money);
	echo "На сумму: ".$money." рублей<br>";
	echo "<br>";

	echo "Первый клиент: <br>";
	$Client1 -> OstInfo();


	echo "Покупка подтверждена! <br>";
	echo "Спасибо за покупку, приходите к нам ещё!";
	$Client1 -> accept();
	echo "<br><br><br>";

	echo "Второй клиент: <br>";
	$Client2 -> info();
	echo "<br>";

	echo "Второй клиент покупает ремень грм для Nissan Sunny <br>";
	$money = 1700;
	$Client2 -> buy($money);
	echo "На сумму: " .$money." рублей<br>";
	echo "<br>";

	echo "Второй клиент <br>";
	$Client2 -> OstInfo();
	echo "Покупка подтверждена!";
	echo "<br>";

	echo "Второй клиент решил сдать, т.к. не подошел ремень! <br>";
	$Client2 -> cancel();
	echo "<br>";

	echo "Второй клиент: <br>";
	$Client2 -> info();
	echo "<br>";
?>
</body>
</html>