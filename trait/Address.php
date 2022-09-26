<?php

    trait Address {
        public $street;
        public $number;
        public $city;

        public function setAddress($street, $city, $number = null) {
            $this->street =$street;
            $this->city =$city;
            $this->number =$number;
        } 
        public function getAddress($street, $city, $number = null) {

            return $this->street . ', ' . $this->number . ', ' . $this->city;
        } 
    }