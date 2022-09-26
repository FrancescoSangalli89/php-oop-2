<?php

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/EstateAgent.php';
require_once __DIR__ . '/class/Rent.php';
require_once __DIR__ . '/class/Sale.php';


$carlo = new User ('carlo', 'bianchi', 'carlo@gmail.com');
try {
    $carlo->setCategory(23);
} catch (Exception $e) {
    echo "ERRORE: " . $e->getMessage();
}
$carlo->setAccess();
$carlo->setAddress('Viale Borri', '112', 'Bergamo');
var_dump($carlo);

$mario = new EstateAgent ('mario', 'rossi', 'mario@gmail.com');
try {
    $mario->setCategory('agente');
} catch (Exception $e) {
    echo "ERRORE: " . $e->getMessage();
}

$mario->setAccess();
$mario->setAddress('Via Rossini', '244', 'Roma');
var_dump($mario);


$casaInVendita = new Sale ('b', 'Villetta a schiera');
try {
    $casaInVendita->setSquareFootage('abc');
} catch (Exception $e) {
    echo "ERRORE: " . $e->getMessage();
}
$casaInVendita->setSalePrice();
$casaInVendita->setAddress('viale Boccaccio', '12', 'Milano');
var_dump($casaInVendita);

$casaInAffitto = new Rent ('a+', 'Appartamento');
try {
    $casaInAffitto->setSquareFootage(200);
} catch (Exception $e) {
    echo "ERRORE: " . $e->getMessage();
}

$casaInAffitto->setRent();
$casaInAffitto->setAddress('Piazza Fontana', 'Brescia');
var_dump($casaInAffitto);
