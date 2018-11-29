<!DOCTYPE html>
<html>
<head>
	<title>Задача 3</title>
</head>
<body>
<?php	
$firstArray =[1,1,2,2,3,4,5,6,7,8,9,10,111,2,3,4];
$input=$firstArray;
	echo '<p>Массив из 10 элементов:</p>';
		foreach ($firstArray as $Array1) {
			echo $Array1," ";
		}
	echo '<p>Добавим 3 новых элемента в начало и в конец:</p>';	
		array_push($firstArray, 3,2,3);
		array_unshift($firstArray, 3,2,3);
		foreach ($firstArray as $value){
			echo $value, " ";
		}
	echo '<p>Теперь удалим их:</p>';
		array_pop($firstArray);
		array_pop($firstArray);
		array_pop($firstArray);
		array_shift($firstArray);
		array_shift($firstArray);
		array_shift($firstArray);
		foreach ($firstArray as $value) {
			echo $value, " ";
		}
	echo '<p>Выводим все различные элементы массива:</p>';	
		$result=array_unique($input);
		foreach ($result as $value) {
			echo $value, " ";
		}
	echo '<p>Выводим реверсированный массив:</p>';
	$reversed = array_reverse($result);
	foreach ($reversed as $value) {
			echo $value, " ";
		}	

?>		
</body>
</html>