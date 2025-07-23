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
    constructor() {
    [name:food:private] => 'potato';
    [price:food:private] => '250';

      // メソッドを定義する
      public function Food (string $name) {
        $this->name = $name;
      }
    }
  }
  // インスタンス化する
  const potato = new Food();

  // クラスを定義する
  class Animal {
    constructor() {
    [name:Animal:private] => 'dog';
    [heigth:Animal:private] => '60';
    [Weight:Animal:private] => '5000';

        // メソッドを定義する
        public function Animal (string $name) {
        $this->name = $name;
        }
    }
  }
  // インスタンス化する
  const potato = new Animal();

?>

   </p>
</body>

</html>