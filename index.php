<?php

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/EstateAgent.php';
require_once __DIR__ . '/class/Rent.php';
require_once __DIR__ . '/class/Sale.php';


$carlo = new User ('carlo', 'bianchi', 'carlo@gmail.com');
$carlo->setCategory('cliente');
$carlo->setAccess();
$carlo->getAddress('Viale Borri', '112', 'Bergamo');
var_dump($carlo);

$mario = new EstateAgent ('mario', 'rossi', 'mario@gmail.com');
$mario->setCategory('agente');
$mario->setAccess();
$mario->getAddress('Via Rossini', '244', 'Roma');
var_dump($mario);


$casaInVendita = new Sale ('b', 'Villetta a schiera');
$casaInVendita->setSquareFootage(300);
$casaInVendita->setSalePrice();
$casaInVendita->getAddress('viale Boccaccio', '12', 'Milano');
var_dump($casaInVendita);

$casaInAffitto = new Rent ('a+', 'Appartamento');
$casaInAffitto->setSquareFootage(200);
$casaInAffitto->setRent();
$casaInAffitto->getAddress('Piazza Fontana', 'Brescia');
var_dump($casaInAffitto);
