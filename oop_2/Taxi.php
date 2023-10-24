<?php
require_once 'Car.php'; // Car.phpを読み込む

class Taxi extends Car // Carクラスを継承
{
    private $passenger;  // 乗車人数

    // 乗車メソッド
    public function pickUp($number)
    {   // 乗車後の人数が4以下かどうかをチェック
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
    {   // 乗車人数を文字列に変換して返す
        return "乗車人数:" . $this->passenger . "人" . PHP_EOL;
    }

    // 車の情報と乗車人数を表示するメソッド
    public function information()   // 親クラスのinformationメソッドをオーバーライド
    {   // 親クラスのinformationメソッドと乗車人数を結合して返す
        return parent::information() . $this->countPassenger();
    }
}
