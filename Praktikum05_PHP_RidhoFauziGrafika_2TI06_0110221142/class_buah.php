<?php 

class Fruit {
    public $name;
    protected $color;
    private $weight;

    // membuat method 
    public function set_color($c){
        return $this->color=$c;
    }

    public function set_weight($b){
        return $this->weight=$b;
    }
}

$mango = new Fruit();
echo $mango -> name = 'mango'; // ok
echo "<br/>";
echo $mango -> set_color('hijau'); // error
echo "<br/>";
echo $mango -> set_weight ('300'); // error
?>