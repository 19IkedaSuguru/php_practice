<?php

// 課題1
$name = "Ikeda_Suguru";

if ($name = "Ikeda_Suguru") {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}
echo PHP_EOL;

// 課題2
$total = 0;
for ($i = 0; $i <=10000; $i++) {
  $total += $i;
}
echo $total;
echo PHP_EOL;

// 課題3 
$fruits = array("apple","watermelon","pineapple","orange","strawerry");

foreach($fruits as $fruits){
  echo "要素は" , $fruits;
  echo "\n";
}
echo PHP_EOL;

// 課題4
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 1; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
