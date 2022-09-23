<?php

    require_once __DIR__ . '/Immovable.php';

    class Rent extends Immovable {
        protected $rent;

        public function setRent() {
            if ($this->energyRating == 'c') {
                $this->rent = round(($this->squareFootage * 100) / 12, 2);
            } elseif ($this->energyRating == 'b') {
                $this->rent = round(($this->squareFootage * 150) / 12, 2);
            } elseif ($this->energyRating == 'a') {
                $this->rent = round(($this->squareFootage * 200) / 12, 2);
            } elseif ($this->energyRating == 'a+') {
                $this->rent = round(($this->squareFootage * 250) / 12, 2);
            }
            
        }

        public function getRent() {
            return $this->rent;
        }
    }