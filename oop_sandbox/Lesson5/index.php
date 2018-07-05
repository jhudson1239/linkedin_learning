<?php
    class User {
        var $first;
        var $last;
        var $username;

        function fullname(){
            return $this->first . ' ' . $this->last . '<br/>';
        }
    }

    class Customer extends User{

    }
    $u = new User;

    $u->first = "Joshua";
    $u->last = "Hudson";
    $u->username = "Jhudson";

    $c = new Customer;
    $c->first = "Jordan";
    $c->last = "Gore";
    $c->username = "Jgore";

    echo $u->fullname();
    echo $c->fullname();

    echo "Parent class for " . $u->first . ': ' .get_parent_class($u). '<br/>';
    echo "Parent class for " . $c->first . ': ' .get_parent_class($c). '<br/>';
  
    if(is_subclass_of($c, 'User')){
        echo "Yeah boii";
    } else {
        echo "Naaa";
    }
?>