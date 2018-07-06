<?php
    class Bicycle {
        public $brand;
        public $model;
        public $year;
        public $description = "Used Bike";
        private $weight_kg = 0.0;
        protected $wheels = 2;

        public function name(){
            return $this->brand . ' ' . $this->model . ' ' . $this->year;
        }

        public function wheels_details(){
            $wheels_string = $this->wheels == 1 ? "1 Wheel" : "$this->wheels wheels";
            return "It has $wheels_string.";
        }

        public function weight_kg(){
            return $this->weight_kg . ' kg';
        }

        public function set_weight_kg($value){
            $this->weight_kg = floatval($value);
        }

        public function weight_lbs(){
            $weight_lbs = round($this->weight_kg * 2.2046226218);
            return $weight_lbs . ' lbs';
        }
        
        public function set_weight_lbs($value){ 
            $this->weight_kg = floatval($value) / 2.2046226218;
        }

    }

    class Unicycle extends Bicycle{
        protected $wheels = 1;
        public $description = "Used Unicycle";
    }

    $b = new Bicycle;
    $b->brand = "Zep";
    $b->model = "V092";
    $b->year = "1993";
    $b->description = "Cool looking blue bike";

    $u = new Unicycle;
    $u->brand = "Maniac";
    $u->model = "V02";
    $u->year = "2010";
    

    echo "Bike: " . $b->wheels_details() . "<br/>";
    echo "Unicycle: " . $u->wheels_details() . "<br/>";
    echo "<hr>";

    echo "Set weight in kg.". "<br/>";
    $b->set_weight_kg(22). "<br/>";
    echo $b->weight_kg(). "<br/>";

    echo "Set weight in lbs.". "<br/>";
    $b->set_weight_lbs(48.5). "<br/>";
    echo $b->weight_lbs(). "<br/>";


?>