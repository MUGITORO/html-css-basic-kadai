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
       public $potato;

       // メソッドを定義する
       public function __construct(string $potato) {
            }
        }

        // インスタンス化する
        $potato = new Food('potato', 250); print_r($potato);

        // メソッドの呼び出し
        $potato->show_name(potato)
        $potato->show_price(250);

       // クラスを定義する
       class Animal {

       // プロパティを定義する(publicは閲覧権限)
       public $dog;

       // メソッドを定義する
       public function __construct(string $dog) {
            }
        }

        // インスタンス化する
        $potato = new Food('dog', 250); print_r($dog);

        // メソッドの呼び出し
        $potato->show_name(dog)
        $potato->show_price(250);
?>
   </p>

</body>

</html>
