<?php
echo"1. ";
function getGreeting($a){
  echo"Привет, ". $a;
}
getGreeting("Ваня");

echo" 
2. ";
function calculateRect($l, $w){
  $s = $l * $w;
  echo"Площадь: ". $s;
}
calculateRect(3, 5);

echo" 
3. ";
function Coffee($t, $s = 0){
  echo"Ваш кофе: ". $t .", сахара: ". $s ." ложек";
}
Coffee("Американно");

echo" 
4. ";

function applyDiscount($price, $discount = 50) {
  $finalPrice = $price - $discount;
  return $finalPrice;
}
echo applyDiscount(500);

echo" 
5. ";

function processComment($comment){
  $c2 = trim($comment);
  $c3 = strlen($c2);
  if ($c3 < 5){
    echo"Комментарий слишком короткий";
  } else {
    echo"Комментарий принят";
  }
}
processComment("Комментарий");
