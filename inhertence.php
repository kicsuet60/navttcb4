<?php
class Car{
    public $brand = "Future 23";
    public $color = "Red";
    protected $model;
    public function hasRoof(){
         echo "Comes from Parent > $this->brand Car color $this->color and model $this->model has option Top Glass Roof! <br/>";
    }    
}
class Audi extends Car{
    public function color(){
        $this->model = "teslla";
        echo "<br/> Child > $this->brand super Car has $this->color Color and model: $this->model";
    }
    
}

$car1 = new Car();
echo $car1->brand = "CAR1";
echo " <br> ";
echo $car1->color = "YELLOW";
echo " <br> ";
// $car1->brand = "Faster";
// $car1->color = "Red";
 $car1->hasRoof();
// $car1->color();
$car1->model = "2023";

// Child
echo "///////// Child Class <br> ";
$audi2 = new Audi();
$audi2->brand="Audi2";
$audi2->color();
echo " <br> ";
$audi2->hasRoof();
// $audi2->model="2023";



?>