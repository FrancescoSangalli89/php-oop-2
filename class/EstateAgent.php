<?php

    require_once __DIR__ . '/User.php';

    class EstateAgent extends User {

        public function setAccess() {
            
            if ($this->category !== 'agente') {
                echo "<h3>accesso non consentito</h3>";
            } else {
                echo "<h3>Buon lavoro</h3>";
            }
        }

    }