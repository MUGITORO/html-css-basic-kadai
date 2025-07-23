<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
  <p>
<?php
       // クラスを定義する
       class Food {

       // プロパティを定義する(publicは閲覧権限)
       public $name;
       public $price;

            // メソッドを定義する
            public function __construct(string $name) {
                $this->name = $name;
            public function __construct(string $price) {
                $this->name = $price;
            }
        }

        // インスタンス化する
        print_r(name: 'potato', price: 250);

       // クラスを定義する
       class Animal {

       // プロパティを定義する(publicは閲覧権限)
       public $name;
       public $hight;
       public $weight;

            // メソッドを定義する
            public function __construct(string $name) {
                $this->name = $name;
            public function __construct(string $hight) {
                $this->name = $hight;
            public function __construct(string $hight) {
                $this->name = $weight;
            }
        }

        // インスタンス化する
        print_r(name: 'potato', hight: 60, weight: 5000);

?>
   </p>

</body>

</html>
