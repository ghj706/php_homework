<?php
echo"1. 
";
$a = 25;
$b = "25";
$c = 25.5;
$d = true;
$e = null;
$f = [1, 2];
echo"a: ";
echo gettype($a). "; ";
var_dump($a);
echo"b: ";
echo gettype($b). "; ";
var_dump($b);
echo"c: ";
echo gettype($c). "; ";
var_dump($c);
echo"d: ";
echo gettype($d). "; ";
var_dump($d);
echo"e: ";
echo gettype($e). "; ";
var_dump($e);
echo"f: ";
echo gettype($f). "; ";
var_dump($f);

echo"
2. ";
$quantity = "4";
$price="125.5";
function sum($quantity, $price){
	if ((is_numeric($quantity)==true)&(is_numeric($price)==true)){
	$sum=(float)$quantity*(float)$price;
} else {
	$sum="Ошибка: Одна из переменных не явлеятся числом";
}
return $sum;
}
echo sum("4", "125.5")."; ";
echo sum("5", "Дорого");

echo"
3. ";
var_dump((int) 8.9);
var_dump((int) "12abc");
var_dump(is_numeric("12abc"));
var_dump((bool) "false");
var_dump(0 == "0");
var_dump(0 === "0");

echo"
4. ";
$values = ["100", "ошибка", 250, "75.5", null, -10];
$i=0;
foreach($values as $value){
	if(is_numeric($value)==false) {
		continue;
	}
	$i=$i + (float)$value;
}
echo"Сумма: $i";

echo"
5. ";
$i=0;
foreach($values as $value){
	if((is_numeric($value)==false)or((int)$value<0)) {
		continue;
	}
	$i=$i + (float)$value;
}
echo"Сумма: $i";
