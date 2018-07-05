<?php
    class Bicycle {
        var $brand;
        var $model;
        var $year;
        var $description;
        var $weight_kg;

        function name(){
            return $this->brand . ' ' . $this->model . ' ' . $this->year;
        }

        function weight_lbs(){
            return round($this->weight_kg * 2.2046226218);
        }

    }

    $b = new Bicycle;
    $b->brand = "Zep";
    $b->model = "V092";
    $b->year = "1993";
    $b->description = "Cool looking blue bike";
    $b->weight_kg = 25;

    echo $b->name() . "<br/>";
    echo "Weight in lbs: " . $b->weight_lbs();
?>