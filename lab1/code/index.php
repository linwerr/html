<?php
//task 1
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= " and one fries";

echo "Your order is: $very_bad_unclear_name.<br>";


//task 2
$int = 7;
echo "$int <br>";

$float = 2.5;
echo "$float <br>";

$var = 5;
echo $int + $var;
echo "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
$dif = $last_month - $this_month;
echo "Разница: $dif";
echo "<br>";


//task 11
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "У Мэг ушло $daysPerLanguage дня <br>";


//task 12
echo 8**2;
echo "<br>";


//task 13
$myNum = 73;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "answer: $answer";
echo "<br>";


//task 14
echo "<br> task 14 <br>";
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "Остаток от деления $a на $b равен $remainder";
echo "<br>";

if ($remainder == 0){
    echo "Делится ", $a / $b, "<br>";
}
else echo "Делится с остатком ", $a % $b, "<br>";

$st = pow(2,10);
echo $st;
echo "<br>";

$sqrt = sqrt(245);
echo $sqrt;
echo "<br>";

$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value) {
    $sum += pow($value,2);
}
$sum = sqrt($sum);
echo "Корень из суммы квадратов: $sum";
echo "<br>";

$sqrt1 = round(sqrt(379));
$sqrt2 = round(sqrt(379), 1);
$sqrt3 = round(sqrt(379), 2);
echo "Корень из 379: $sqrt1 или $sqrt2 или $sqrt3";
echo "<br>";

$sqrt2 = sqrt(587);
$arr = ['floor' => floor($sqrt2), 'ceil' => ceil($sqrt2)];
echo "Корень из 587: {$arr['floor']} или {$arr['ceil']}";
echo "<br>";

$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);
echo "мин: $min <br>";
echo "макс: $max <br>";

$rand=rand(1,100);
echo $rand;
echo "<br>";

$arr1 = [];
for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = rand(1,100);
}
echo "Массив рандом <br>";
print_r($arr1); //выводим массив
echo "<br>";

$a1 = 20;
$b1 = 25;
$abs = abs($a1 - $b1);
echo "Модуль разности: $abs"; //работает для различных a и b
echo "<br>";

$arr2 = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($arr2); $i++){
    $arr2[$i] = abs($arr2[$i]);
}
echo "Массив с модулями <br>";
print_r($arr2);
echo "<br>";

$c=30;
$dividers=[];
for ($i = 1; $i < $c; $i++) {
    if ($c % $i == 0) {
        $dividers[] = $i;
    }
}
echo "Массив делителей 30 <br>";
print_r($dividers);
echo "<br>";

$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$sum = 0;
for ($i = 0; $i < count($arr3); $i++){
    $sum += $arr3[$i];
    $count++;
    if ($sum > 10){
        break;
    }
}
echo "Надо сложить $count";
echo "<br>";
