<?php
require_once 'Car.php'; // Car.phpを読み込む

class Taxi extends Car // Carクラスを継承
{
    private $passenger;  // 乗車人数

    // コンストラクタ
    public function __construct($name, $number, $color) // コンストラクタの引数は親クラスのコンストラクタと同じ
    {   // 引数は車名、車体番号、カラー
        parent::__construct($name, $number, $color);  // 親クラスのコンストラクタを呼び出す
        $this->passenger = 0;  // 初期乗車人数は0
    }

    // 乗車メソッド
    public function pickUp($number)
    {
        $this->passenger += $number;  // 乗車人数を追加
        return strval($number) . "人乗車しました" . PHP_EOL;  // strval関数で数値を文字列に変換
    }

    // 降車メソッド
    public function lower($number)
    {
        // 降車後の人数が0以上かどうかをチェック
        if ($this->passenger - $number >= 0) {  // 降車人数が乗車人数以下の場合
            $this->passenger -= $number;  // 乗車人数を減らす
            return strval($number) . "人降車しました" . PHP_EOL;  // strval関数で数値を文字列に変換
        } else {    // 降車人数が乗車人数より多い場合
            return strval($number) . "人は降車できません" . PHP_EOL;  // strval関数で数値を文字列に変換
        }
    }

    // 乗車人数を確認するメソッド
    public function countPassenger()    // 乗車人数を返す
    {
        return "乗車人数:" . $this->passenger . "人" . PHP_EOL;
    }

    // 車の情報と乗車人数を表示するメソッド
    public function information()   // 親クラスのinformationメソッドをオーバーライド
    {
        return parent::information() . $this->countPassenger();  // 親クラスのinformationメソッドと乗車人数を結合
    }
}
