<?php
function calculator($a, $b, $operation){
	$result = 0;
	switch($operation){
		case "+":
			$result = $a + $b;
			echo $result;
			break;
		case "-":
			$result = $a - $b;
			echo $result;
			break;
		case "*":
			$result = $a * $b;
			echo $result;
			break;
		case "/":
			if (($a == 0) or ($b == 0)) {
				echo"Ошибка: Делить на ноль нельзя";
				break;
			} else {
				$result = $a / $b;
				echo $result;
				break;
			}
		case "**":
			$result = $a ** $b;
			echo $result;
			break;
		default:
			echo"Ошибка: Неизевстная операция";
	}
}
echo "+: ";
calculator(4, 2, "+");
echo"
-: ";
calculator(4, 2, "-");
echo"
*: ";
calculator(4, 2, "*");
echo"
/: ";
calculator(4, 2, "/");
echo"
**: ";
calculator(4, 2, "**");
echo"
Деление на ноль: ";
calculator(4, 0, "/");
echo"
Неизвестная операция: ";
calculator(4, 2, "%");