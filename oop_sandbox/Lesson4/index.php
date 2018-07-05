<?php

class Student{
    var $first_name;
    var $last_name;
    var $country = 'None';
    
    function say_hello(){
        return "Hello World";
    }

    function fullname(){
        return $this->first_name . " " . $this->last_name;
    }
}

$student1 = new Student;
$student1->first_name = "Joshua";
$student1->last_name = "Hudson";

$student2 = new Student;
$student2->first_name = "Jordan";
$student2->last_name = "Gore";

echo $student1->first_name . " " . $student1->last_name . '<br/>';
echo $student2->first_name . " " . $student2->last_name . '<br/>';

echo $student1->say_hello() . "<br/>";
echo $student2->say_hello() . "<br/>";
echo $student1->fullname() . "<br/>";
echo $student2->fullname() . "<br/>";

?>