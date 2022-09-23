<?php

    require_once __DIR__ . '/User.php';

    class Customer extends User {

        public function setPassword() {
            
            if ($this->category == 'cliente') {
                $this->password = 'clienteN1';
            } elseif ($this->category == 'agente') {
                echo "<h3>accesso non consentito</h3>";
            }
        }

    }