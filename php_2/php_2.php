<?php
//課題1

// 変数 $a に 3を代入
$a = 3;

// 変数 $b に 7を代入
$b = 7;

echo $a + $b;
echo PHP_EOL;

//課題2

// 変数 $array に 配列 [1月,2月,3月,4月,5月,6月,7月,8月,9月,10月,11月,12月]を代入
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

// 変数 $array_month の 8月 を取り出す
echo $array_month[7];
echo PHP_EOL;

// 課題3

$hello = "Hello,";
$name = "Ikeda_Suguru";
$world = "'s World!";

echo $hello ;
echo $name ; 
echo $world ;
echo PHP_EOL;

// 課題4

$tech_boost = "tech";

$tech_boost .= " boost";

echo $tech_boost;
echo PHP_EOL;

// 課題5

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];
echo PHP_EOL;
?>
