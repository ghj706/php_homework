<?php
echo"1. ";
$numbers = [12, 7, 25, -3, 18, 4];
foreach ($numbers as $number){
	if ($number == -3) {
		break;
	}
	echo "$number ";
}

echo "
2. ";

for ($i = 1; $i <= 20; $i++) {
	if (($i % 2) != 0){
		continue;
	}
	
	echo "$i ";
}

echo"
3. ";
$names = ['Анна', 'Олег', 'Мария', 'Игорь', 'Мария'];
$searchName = 'Ваня';
$n = 0;

foreach ($names as $name) {
	if ($name == $searchName){
		echo "Имя найдено";
		$n = 1;
		break;
	}
}

if ($n != 1){
	echo"Имя не найдено";
}

echo"
4. ";
$prices = [100, 0, 250, -50, 400, 0 , 150];
$total = 0;
foreach ($prices as $price){
	if ($price < 0){
		continue;
	}
	
	$total = $total + $price;
}

echo"Общая стоимость: $total";

echo"
5. ";
$values = [10, -5, 20, 0, 15, -1, 100];
$total = 0;
foreach($values as $value){
	if ($value == -1){
		break;
	} elseif ($value<= 0) {
		continue;
	} else {
		$total = $total + $value;
	}
}

echo"Сумма: $total";

echo"
6. ";
$i = 1;

while ($i <= 5) {
	if($i==2) {
		$i++;
		continue;
	}
	echo $i;
	$i++;
}