<!DOCTYPE html>
<html>
<head>
	<title>Задача 4</title>
</head>
<body>
<?php
$firstArray =["ivan","Anton","anton","Ivan","Petr"];

echo '<p>Изначальный массив имён:</p>';
		foreach ($firstArray as $Array1) {
			echo $Array1," ";
		}
echo '<p>Сортированный массив имён:</p>';	
	sort($firstArray);
	$input=$firstArray;
	natcasesort($input);
	foreach ($input as $value) {
		echo $value, " ";
	}

?>

</body>
</html>