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
           this.name = 'potato';
           this.price = 250;
         }
           // プロパティを定義する
           public $potato;
       }

            // メソッドを定義する
            public function set_name(string $potato) {
                $this->name = $potato;
            }
            public function show_potato() {
                echo $this->potato. '<br>';
            }
        }

        // インスタンス化する
        $potato= new Food();

       // クラスを定義する
       class Animal {
         constructor() {
           this.name = 'dog';
           this.hight= 60;
           this.weight= 5000;
         }
           // プロパティを定義する
           public $dog;
       }

            // メソッドを定義する
            public function set_name(string $dog) {
                $this->name = $dog;
            }
            public function show_dog() {
                echo $this->dog. '<br>';
            }
        }

        // インスタンス化する
        $potato= new Animal();

?>

   </p>

</body>

</html>
