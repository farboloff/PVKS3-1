<!DOCTYPE html>
<html>
<head>
	<title>Задача 6</title>
</head>
<body>
<?php 
$firstArray =[1,2,3,4,5,6,7,8,9,10];
echo '<p>Массив из 10 элементов:</p>';
		foreach ($firstArray as $Array1) {
			echo $Array1," ";
		} 
echo '<p>Поменять 3,4,5 на 13,14,15:</p>';		
		$firstArray[2]=13;
		$firstArray[3]=14;
		$firstArray[4]=15;
		foreach ($firstArray as $Array1) {
			echo $Array1, " ";
		}
?>
</body>
</html>