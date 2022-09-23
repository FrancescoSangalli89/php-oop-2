<?php

    require_once __DIR__ . '/Immovable.php';

    class Sale extends Immovable {
        protected $salePrice;

        public function setSalePrice() {
            if ($this->energyRating == 'c') {
                $this->salePrice = round($this->squareFootage * 1000, 2);
            } elseif ($this->energyRating == 'b') {
                $this->salePrice = round($this->squareFootage * 1500, 2);
            } elseif ($this->energyRating == 'a') {
                $this->salePrice = round($this->squareFootage * 2000, 2);
            } elseif ($this->energyRating == 'a+') {
                $this->salePrice = round($this->squareFootage * 2500, 2);
            }
        }

        public function getSalePrice() {
            return $this->salePrice;
        }
    }