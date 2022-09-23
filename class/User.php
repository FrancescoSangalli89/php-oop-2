<?php

    require_once __DIR__ . '/../trait/Address.php';

    class User {

        use Address;

        public $name;
        public $lastname;
        public $email;
        protected $category;

        public function __construct($name, $lastname, $email)
        {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
        }

        public function setCategory($category) {
            $this->category = $category;

            if ($category !== 'cliente' && $category !== 'agente') {
                echo '<h3>La categoria inserita non è valida</h3>';
            }
        }

        public function setAccess() {
            
            if ($this->category == 'cliente') {
                echo "<h3>Buona ricerca</h3>";
            } elseif ($this->category == 'agente') {
                echo "<h3>Non sei autorizzato ad entrare in quest'area</h3>";
            }
        }

        public function getCategory() {
            return $this->category;
        }

    }