<?php   
    $now = date('d.m.Y'); //сейчас
    $nowArr = explode('.', $now);

    $monthNow = date('t', mktime(0, 0, 0, $nowArr[1], $nowArr[0], $nowArr[2])); //текущий месяц

$birthday= $_POST["dr"];

$bd = explode('.', $birthday);
$bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
$days_until = ceil(($bd - time()) / 86400);

echo "Ваш день рождения через :\n $days_until \n";
if ($days_until==365)
header("Location:jpg/sdr.html");
?>