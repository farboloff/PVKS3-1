<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>
  <h1>Цветочный магазин</h1>
<?php
abstract class Plant
{ 
  public function getPlant1() {
    return "Ландыши";
  }
  public function getPlant2(){
    return "Ромашки";
  }  
  public function getPlant3(){
    return "Розы";
  }
  public function getPlant4(){
    return "Фиалки";
  }
}
class Pot1 extends Plant 
{
  public function getPot1(){
    return "Первый";
 }
}
class Pot2 extends Plant
{
  public function getPot2(){
    return "Второй";
  }
}
function printNumPot1(Pot1 $v) {
  echo "Горшок: " . $v->getPot1();
  echo " , Растения: " . $v->getPlant1() .", ". $v->getPlant2() .". " ;
  echo "<br>";
}
function printNumPot2(Pot2 $v) {
  echo "Горшок: " . $v->getPot2();
  echo " , Растения: " . $v->getPlant3() .", ". $v->getPlant4() .".";
  echo "<br>";
}
$Pot3 = new Pot1();
$Pot4 = new Pot2();
printNumPot1($Pot3);
printNumPot2($Pot4);
?>

</body>
</html>