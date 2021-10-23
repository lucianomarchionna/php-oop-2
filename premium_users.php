<?php
class premium extends users {
    protected $discount;

    function setDiscount($_discount) {
        $this->discount = $_discount;
    }

    function getDiscount(){
        return $this->discount;
    }
}

?>