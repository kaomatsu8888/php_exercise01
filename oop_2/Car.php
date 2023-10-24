<?php
class Car
{
    public $name;   // 車名(車種)
    public $number; // 車体番号
    public $color;  // カラー

    public function __construct($name, $number, $color) //コンストラクタdayo
    {
        $this->name = $name;    //nameプロパティに引数の値を代入
        $this->number = $number;    //numberプロパティに引数の値を代入
        $this->color = $color;  //colorプロパティに引数の値を代入
    }

    public function getName()   //nameプロパティのゲッターを作成
    {
        return $this->name; //nameプロパティの値を返す
    }

    public function getNumber()     //numberプロパティのゲッターを作成
    {
        return $this->number;   //numberプロパティの値を返す
    }

    public function getColor()      //colorプロパティのゲッターを作成
    {
        return $this->color;    //colorプロパティの値を返す
    }

    public function setName($name)      //nameプロパティのセッターを作成
    {
        return $this->name = $name; //nameプロパティに引数の値を代入
    }

    public function setNumber($number)  //numberプロパティのセッターを作成
    {
        return $this->number = $number; //numberプロパティに引数の値を代入
    }

    public function setColor($color)        //colorプロパティのセッターを作成
    {
        return $this->color = $color;   //colorプロパティに引数の値を代入
    }

    public function information()   // 車の情報を表示するメソッド
    {
        return '車の車種:' . $this->name . PHP_EOL .
            '車体番号:' . $this->number . PHP_EOL .
            'カラー:' . $this->color . PHP_EOL;
    }
}
