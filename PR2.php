<!DOCTYPE html>
<html>
<head>
	<title>Задача 2</title>
</head>
<body>
	<form method="post">
		<input type="text" name="id">
		<input type="submit" name="go" value="Отправить">
	</form>	
<?php
	$Array = [1,2,3,4,55,6,7,56,5,9,10];
	$Array3 = $Array;
	echo '<p>Массив:</p>';
		foreach ($Array as $Array1) {
			echo $Array1," ";
		}
	
	echo '<br><p>Вставка числа после цифры 5:</p>'; 
	if (isset($_POST["go"]))
	{
		echo $_POST["id"];
		$a=$_POST["id"];
	}	
		for ($i1=0; $i1 < count($Array3); $i1++){
			if(preg_match('/5/', $Array3[$i1]))
				array_splice($Array3, $i1+1,0,$a);
		}
		foreach ($Array3 as $value){
			echo $value," ";
		}
?>
</body>
</html>