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
  
  
 //4.【応用】次のプログラムは、配列の中で１番大きい値を返すmax_rryと言う関数を実装しようとしてます。　途中の部分を完成させる。
function max_array ($arr) {
//とりあえず配列の最初の要素を一番大きい値とする。
$max_number = $arr [0];
foreach ($arr as $a) {
  $max_number<[0];
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
$stack =array("orange","banana");
array_push($stack,"apple","raspberry");
print_r ($stack); 

//array_merge
//<? php
$array1= array('a','b','c');
$array2= array('d','e','f');
print_r(array_merge($array1, $array2));

//time,mktime
//<?php
$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒',$time));
print('<br/>');

$time =mktime(10,10,10);
var_dump(date('Y年m月d日h時i分s秒',$time));
print('<br/>');

$time =mktime(0,0,0,1,1,2020);
var_dump(date('Y年m月d日h時i分s秒',$time));
print('<br/>');

//date
//<? php
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');
//UNIXタイムスタンプ（現在時刻）
echo time()."\n";
//現在日時をフォーマットする
echo date('Y-m-d H:i:s'). "n";
echo date('Y年m月d日 H時i分s秒')."\n";

//時刻を指定してフォーマットする方法
//<?php
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');
//指定日時をフォーマットする
echo date('Y年m月d日 H時i分s秒',strtotime('2020/1/1 10:20:30') )."\n";

