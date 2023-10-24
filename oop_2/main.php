<?php

// ここに処理を1行追記
require_once('Taxi.php');   //Taxiクラスを読み込む

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');  // 車名、車体番号、カラーを引数に指定

// 2人乗車
echo $taxi1->pickUp(2); // 2人乗車
echo $taxi1->information(); // 車の情報を表示
echo PHP_EOL;   // 改行

// 1人乗車
echo $taxi1->pickUp(1); // 1人乗車
echo $taxi1->information(); // 車の情報を表示
echo PHP_EOL;   // 改行

// 2人降車
echo $taxi1->lower(2);  // 2人降車
echo $taxi1->information(); // 車の情報を表示
echo PHP_EOL;  // 改行

// 2人降車
// 1人しか乗っていないので降車できない
echo $taxi1->lower(2);  // 2人降車
