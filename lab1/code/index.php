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


//task 15
echo "<br> task 15 <br>";
function printStringReturnNumber($str)
{
    echo $str. "<br>";
    return intval($str);
}
$myNum = printStringReturnNumber("5");
echo $myNum;
echo "<br>";


//task 16
echo "<br> task 16 <br>";
function increaseEnthusiasm($str1)
{
    return $str1 . "!";
}
echo increaseEnthusiasm("wow"), "<br>";

function repeatThreeTimes($str2)
{
    return $str2 . $str2 . $str2;
}
echo repeatThreeTimes("cat"), "<br>";
echo increaseEnthusiasm(repeatThreeTimes("yes")), "<br>";

function cut($str3, $k = 10)
{
    $strResult = '';
    for ($i=0; $i<$k; $i++) {
        $strResult[$i] = $str3[$i];
    }
    return $strResult;
}
echo cut("beautiful", 3),"<br>";

function outputElements($array, $index = 0)
{
    echo $array[$index++] . " ";
    if ($index < count($array)) {
        outputElements($array, $index);
    }
}
outputElements([1, 2, 3, 4, 5, 6, 7]);
echo "<br>";

function sumDigits($number)
{
    $sum = 0;
    foreach (str_split("$number") as $digit) {
        $sum += intval($digit);
    }
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}
echo sumDigits(456);
echo "<br>";


//task 17
echo "<br> task 17 <br>";
$arr4 = ['x'];
$n = 7;
for ($i = 1; $i < $n; $i++){
    $arr4[$i] = $arr4[$i - 1].'x';
}
print_r($arr4);
echo "<br>";

function arrayFill($v, $count) {
    $arr5 = [];
    for ($i = 0; $i < $count; $i++) {
        $arr5[] = $v;
    }
    return $arr5;
}
$r = arrayFill('x', 5);
print_r($r);
echo "<br>";

$arr6 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($arr6 as $i) {
    foreach ($i as $j) {
        $sum += $j;
    }
}
echo "Двумер массив: $sum";
echo "<br>";

$arr7 = [];
$k = 1; //счетчик
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr7[$i][$j] = $k;
        $k++;
    }
}
print_r($arr7);
echo "<br>";

$arr8 = [2, 5, 3, 9];
$result = ($arr8[0] * $arr8[1]) + ($arr8[2] * $arr8[3]);
echo $result;
echo "<br>";

$user = ['name' => "Ivan", 'surname' => "Ivanov", 'patronymic' => "Ivanovich"];
echo $user["surname"] . " " . $user['name'] . " " . $user['patronymic'];
echo "<br>";

$date = ['year' => '2024', 'month' => '03', 'day' => '06'];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];
echo "<br>";

$arr9 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr9);
echo "<br>";

echo $arr9[count($arr9) - 1];
echo "<br>";
echo $arr9[count($arr9) - 2];
echo "<br>";


//task 18
echo "<br> task 18 <br>";
function trueFalse($one, $two)
{
    if ($one + $two > 10) {
        return true;
    } else return false;
}
echo trueFalse(2,9);
echo "<br>";

function trueFalse1($one, $two)
{
    if ($one == $two) {
        return true;
    } else return false;
}
echo trueFalse1(2,2);
echo "<br>";

$test = 0;
if ($test == 0) echo 'верно';
echo "<br>";

$age = rand(1, 105);
echo "age = $age <br>";
if ($age < 10 || $age > 99) {
    echo "число меньше 10 или больше 99 <br>";
} else {
    $sum = array_sum(str_split($age)); //сумма элементов массива
    if ($sum <= 9) {
        echo "сумма цифр однозначна <br>";
    } else {
        echo "сумма цифр двузначна <br>";
    }
}

$arr10 = [1, 2, 3];
if (count($arr10) == 3) {
    $sum = array_sum($arr10);
    echo "Сумма элементов массива: $sum";
}
echo "<br>";


//task 19
echo "<br> task 19 <br>";
$l = '';
for ($i = 0; $i < 20; $i++){
    $l .= 'x';
    echo $l, "<br>";
}


//task 20
echo "<br> task 20 <br>";
$arr11 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo array_sum($arr11)/count($arr11), "<br>";

echo array_sum(range(1, 100)), "<br>";

$arr12 = [1, 2, 3, 4, 5];
$res = array_map('sqrt', $arr12); //возвращает массив после применения функции к элементу
print_r($res);
echo "<br>";

$numbers = range(1, 26);
$letters = range('a', 'z');
$res1 = array_combine($letters, $numbers); //возвращает скомбинированный массив
print_r($res1);
echo "<br>";

$string = '1234567890';
$arr13 = str_split($string, 2); //разбивает строку на подстроки с длиной 2
$res2 = array_sum($arr13);
echo $res2;
