<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>
<form method="post">
		<input type="text" name="inputMas">
		<input type="submit" name="go" value="Отправить">
</form>
<?php
	$firstArray =[1,2,3,4,5,6,7,8,9,10];
	$ArrayB = [1,2,3,4,5,6,7,8,9,10];
	$ArrayC = [1,2,3,4,5,6,7,8,9,10];
	$secondArray=array();

	echo '<p>а)Первый способ:</p>';
		foreach ($firstArray as $Array1) {
			echo $Array1," ";
		}
	$max1=max($firstArray);
	$min1=min($firstArray);

	foreach ($firstArray as $key => $value) {
		 if($min1==$value) $i1=$key;
		 if($max1==$value) $i2=$key;
		 } 
	echo "<br>";

	echo '<br><p>Второй способ:</p>';
		for ($i=0; $i<10; $i++ ) {
			$secondArray[$i]=random_int(1,10);
		}
		foreach ($secondArray as $Array2) {
			echo $Array2," ";
		}
	echo '<br><p>Третий способ:</p>';
		if(isset($_POST["inputMas"]))
				echo $_POST["inputMas"];
		else echo "Вы ничего не ввели";

	echo '<br><br><p>b) Изначальный массив:</p>';
		foreach ($ArrayB as $ArraysB) {
			echo $ArraysB," ";
		}
	echo "<br><br>Минимальный элемент=",$min1,"<br>";
	echo "<br>Максимальный элемент=",$max1,"<br>";
	echo "<br>Массив Swap:<br>";
		foreach ($firstArray as $key => $value) {
			if($key==$i1) $value=$max1;
			if($key==$i2) $value=$min1;
			echo "$value  ";
		}
	echo '<br><br><p>c)Изначальный массив:</p>';	
		foreach ($ArrayC as $ArraysC) {
			echo $ArraysC," ";
		}
		$min2=min($firstArray);
	echo "<br><br>Минимальный элемент=",$min2,"<br>";
		
		for ($i3=0; $i3 < count($ArrayC); $i3++) {
			if($ArrayC[$i3]==$min2) $t=$i3;
		}
		for ($i3=$t; $i3 < count($ArrayC); $i3++) {
			$ArrayC[$i3] = $ArrayC[$i3+1];
		}
	
	echo '<br><p>Массив без минимального значения:</p>'; 
		foreach ($ArrayC as $value) {
			echo $value, " ";
		}
?>
</body>
</html>