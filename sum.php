<?php

// 課題１
// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
echo "課題1 = ";
function outputDouble($num){
  $result = $num * 2;
  echo $result;
}
outputDouble(5);
echo "\n";

//課題2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function f($a, $b){
   
  $result = $a + $b;
  echo $result;
  
}
f(4, 5) ;
echo "\n";

//3.$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すと 
//その要素をすべてかけた結果を返す関数を作成してください
function multi($arr){
  $result = 1;
  foreach($arr as $a){
   $result *= $a;
  }
  return $result;
}
echo multi(array(1, 3, 5, 7, 9 )) . "\n";

?>

<?php

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
//という関数を実装しようとしています。
//途中の部分を完成させてください。

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    
    if($max_number<$a){
      $max_number =$a;
    }
  }

  return $max_number;
}
echo max_array(array(45,5,47,1,2 )) . "\n";
?>

<?php
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags HTMLタグの削除
$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;
echo "\n";

//array_push
$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);
echo "\n";

//配列を作成
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//array_mergewoを使い配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
echo "\n";

//time, mktime
//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
 
echo "\n";

 
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo "\n";

//date
// 現在日付をフォーマットする
echo date('Y/m/d');
echo "\n";
 
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";
?>