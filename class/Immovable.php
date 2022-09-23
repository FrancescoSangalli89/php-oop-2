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
            $this->squareFootage = $squareFootage;
            if ($this->squareFootage <= 10) {
                echo "<h3>La metratura dev'essere di almeno 10 metri</h3>";
            }
        }
    }