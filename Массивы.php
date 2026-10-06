<?php
echo('1. ');
$languages=['PHP', 'JavaScript',
'Python'];
echo($languages[1]);

echo('
2. ');
$animals=['Кот', 'Собака', 'Попугай'];
$animals[1]='Свинка';
$animals[]='Хомяк';
print_r($animals);

echo('
3. ');
$months=['Январь', 'Февраль', 'Март', 'Апрель'];
unset($months[2]);
print_r($months);

echo('
4. ');
$books=[
 'title' => 'Евгений Онегин',
 'author' => 'Александр Пушкин',
 'pages' => '250'
 ];
print_r($books);

echo('
5. ');
$car=[
 'brand'=>'toyota',
 'model'=>'camry'
 ];
print_r($car);