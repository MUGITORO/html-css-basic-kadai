<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <p>
<?php
    // クラスを定義
    class Food {

    // プロパティを定義(publicは閲覧権限)
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド
    public function showInfo() {
        echo "name:food:private" . $this->name . "<br>";
        echo "price:food:private" . $this->price . "<br>";
    }
    }

    // インスタンスの作成
    $potato = new Food("potato", 250);

    // 出力（メソッドの呼び出し）
    $potato->showInfo();

    // クラスを定義
    class Animal{

    // プロパティを定義(publicは閲覧権限)
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $heigth, $weight) {
        $this->name = $name;
        $this->heigth= $heigth;
        $this->weight= $weight;    }

    // メソッド
    public function showInfo() {
        echo "name:Animal:private" . $this->name . "<br>";
        echo "heigth:Animal:private" . $this->heigth. "<br>";
        echo "weight:Animal:private" . $this->weight. "<br>";
    }
    }

    // インスタンスの作成
    $dog= new Animal("dog", 60, 5000);

    // 出力（メソッドの呼び出し）
    $dog->showInfo();
?>
   </p>

</body>

</html>
