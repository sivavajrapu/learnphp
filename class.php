<?php
class Car {
    public $color;
    public $model;

    public function __construct($color , $model){
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message(){
        return "My Car is" . $this->color . " " .$this->model. "!";
    }

}
    $myCar = new Car("black","7 seater");
    echo $myCar -> message();
?>