<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         class Food {
            private $name;
            private $price;
             
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price;
            }
         }

         class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height;
            }
         }
 
         $apple = new Food('りんご',300);
         

         $dog = new Animal('犬',100,10);
         
         print_r($apple);
         echo '<br>';
         print_r($dog);
         echo '<br>';
         $apple->show_price();
         echo '<br>';
         $dog->show_height();
         ?>
     </p>
 </body>
 
 </html>
