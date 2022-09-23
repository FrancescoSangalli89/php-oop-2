<?php

    trait Address {
        public $street;
        public $number;
        public $city;

        public function getAddress($street, $city, $number = null) {
            $this->street =$street;
            $this->city =$city;
            $this->number =$number;

            return $this->street . ', ' . $this->number . ', ' . $this->city;
        } 
    }