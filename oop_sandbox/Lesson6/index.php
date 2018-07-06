<?php
    class Product {
        private $price;

        public function set_price($value){
            $no_format = preg_replace('/[|$,]/', '', $value);
            $float = floatval($no_format);
            if($float <= 0){
                trigger_error('Price must be greater than zero.', E_USER_NOTICE);
                return;
            }
            $this->price = $float;
        }

        public function get_price(){
            return '£' . number_format($this->price, 2);
        }
    }

    $p = new Product;
    $p->set_price(4.99);
    echo $p->get_price();

?>