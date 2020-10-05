<?php 
echo 'hello php!';

// 1.引数に数値を指定して実行すると、数値を２倍にして返す関数を作成する。カンニング済
function sum($max) {
    $result= $max *2;
    echo $result;
}

echo sum(50);
echo "\n";


// 2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成。
function f($a, $b) {
 $result = f($a + $b);
 }


 // 3. $arr という配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)
 //を渡すとその要素をすべてかけた結果を返す関数を作成する。カンニング済
 $arr = array("1","3","5","7","9");
  foreach ($arr as $count) {
      echo $count .'<br>';
 }
  
  
 // 4.【応用】次のプログラムは、配列の中で１番大きい値を返すmax_rryと言う関数を実装しようとしてます。　途中の部分を完成させる。
function $max_array ($arr) {
//とりあえず配列の最初の要素を一番大きい値とする。
$max_number = $arr [0];
foreach ($arr as $a) {
}
return $max_number; 
 }


// 5. 次のビルトイン関数の用途、使い方を調べて実際に使用してみる。

// strip_tags
//<? php
$str ="<h> strip_tags関数</h>"
    . "<P> タグを取り除きます！</P>";
echo strip_tags ($str) ."\n";

//array_push
//<? php
$array= ["apple", "orange"];
//配列に要素を追加
$arrayLength = array_push($array, "melon", "banana");
//配列の要素数を出力
echo $arrayLength . "\n"
//要素追加後の配列を出力
print_r ($array);
