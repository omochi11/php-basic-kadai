<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;

            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
            public function set_price(int $price)
            {
                $this->price = $price;
            }
            public function show_price()
            {
                echo $this->price . '<br>';
            }
        }
        $potato = new Food('potato', 250);
        print_r($potato);

        $potato->set_price(250);
        $potato->show_price();
        ?>
    </P>
    <p>
        <?php
        class Animal
        {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function set_height(int $height)
            {
                $this->height = $height;
            }
            public function show_height()
            {
                echo $this->height . '<br>';
            }
        }
        $animal = new Animal('dog', 60, 5000);
        print_r($animal);

        $animal->set_height(60);
        $animal->show_height();
        ?>
    </p>


</body>

</html>