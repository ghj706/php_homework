 <?php
echo"1. ";
$age = 5;
if ($age>=18) {
    echo"Доступ разрешен";
} else {
    echo"Доступ запрещён";
}

echo"
2. ";
$a = 1;
$b = 2;
if ($a>$b){
    echo"a больше b";
} else if ($a>$b) {
    echo"b больше a";
} else {
    echo"a равно b";
}

echo"
3. ";
$temperature = 6;
if($temperature<0){
    echo"Мороз";
} else if (($temperature>=0) and ($temperature<20)) {
    echo"Прохладно";
} else {
    echo"Тепло";
}

echo"
4. ";
$day = 3;
switch($day){
    case 1:
        echo"Понедельник";
        break;
    case 2:
        echo"Вторник";
        break;
    case 3:
        echo"Среда";
        break;
    case 4:
        echo"Четверг";
        break;
    case 5:
        echo"Пятница";
        break;
    case 6:
        echo"Суббота";
        break;
    case 7:
        echo"Воскресение";
    default:
        echo"Ошибка: Число не входит в диапозон от 1 до 7";
        break;
}

echo"
5. ";
$age = 20;
$result = ($age>=18) ? "Доступ разрешен" : "Доступ запрещён";
echo $result;