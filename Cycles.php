<?php
echo"1. ";
$i=5;
while ($i > 0){
    echo"$i ";
    $i=$i-1;
}
echo"Поехали";

echo"
2. ";
$coffee_cups = 0;
do{
    echo"Выпил чашку кофе";
} while($coffee_cups > 0);

echo"
3.  ";
for($i=1; $i<11; $i++){
    echo"5 * ". $i ." = ". 5*$i . " 
    ";
}

echo"
4.  ";
$prices=[100, 200, 500,1200]; 
foreach($prices as $price){
    echo $price. " руб. 
    ";
}