<?php
echo"1. ";
$languages = ["PHP", "JavaScript", "Python", "Java"];
echo"Количество элементов в массиве: ". count($languages);
unset($languages[1]);
echo"
Количество элементов в массиве после удаления элемента с ключом 1: ". count($languages)."";
echo"
Массив: ";
foreach($languages as $name => $language){
	echo "
	$name: $language";
}

echo"
2. ";
$prices = [450, 100, 700, 250, 50];
$prices1 = $prices;
$prices2 = $prices;
echo"Массив по возрастанию: ";
asort($prices1);
print_r($prices1);
echo"Массив по убыванию: ";
arsort($prices1);
print_r($prices1);
echo"Исходный массив: ";
print_r($prices);

echo"
3. ";
$products = ["Хлеб" => 50, "Сок" => 120, "Молоко" => 90];
arsort($products);
print_r($products);

echo"
4. ";
$scores = ["Tom" => 4, "Alice" => 5, "Bob" => 3];
$scores1 = $scores;
$scores2 = $scores;
echo"Исходный массив: ";
print_r($scores);
echo"По имени: ";
ksort($scores1, SORT_STRING);
print_r($scores1);
echo"По оценкам: ";
arsort($scores2);
print_r($scores2);

echo"
5. ";


echo"
6. ";
$prices = ["Хлеб" => "50", "Сок" => "ошибка", "Молоко" => "90.5", "Чай" => 120];
$prices1 = $prices;
asort($prices1);
$i=0;
foreach ($prices1 as $name => $price){
	if (is_numeric($price)==true){
		echo"$name - $price; ";
	}
}
