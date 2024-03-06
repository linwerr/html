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
