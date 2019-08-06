<?php

require_once 'Cat.php';

$bianca = new Cat();


$bianca
    ->setName('Bianca')
    ->setType('Chat de gouttière')
;

echo $bianca->getName();