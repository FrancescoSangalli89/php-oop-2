<?php

    require_once __DIR__ . '/../trait/Address.php';

    class Immovable {

        use Address;

        protected $squareFootage;
        public $energyRating;
        public $category;

        public function __construct($energyRating, $category)
        {
            $this->energyRating = $energyRating;
            $this->category = $category;
        }

        public function setSquareFootage($squareFootage) {
            if (is_numeric($squareFootage) && $squareFootage >= 10) {
                $this->squareFootage = $squareFootage;
            } else {
                throw new Exception("La metratura dev'essere un numero e dev'esesre di almeno 10 metri");
            }
        }
    }