<?php 

class Animal {
    protected $name;
    public $namePublic;
    private $namePrivate;

    function __construct($name = 'stranger') {
        $this->name = $name;
    }

    function run() {
        echo 'running';
    }

    function getName() {
        return $this->name;
    }
}



// $animal = new Animal();

// echo $animal->getName();
// $animal->run();


// inheritence
class Cat extends Animal {
    public $age;
    public $color;
    function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    function showinfor () {
        echo $this->name.' ';
        echo $this->age.' ';
        echo $this->color.' ';
    }

    function sleep() {
        echo 'sleep';
    }
    function eat() {
        echo 'eat';
    }
    function scroll() {
        echo 'scroll';
    }
}


$cat = new Cat("mimi", 1, "white");
$cat2 = new Cat("cachua", 1, "black");
echo $cat2-> getName();


