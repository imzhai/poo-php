<?php

/**
 * NOus allons créer un ssyteme de compte en banque en POO
 * 
 * Nous aurons d'abord le compte en banque classique représenté par la classe BankAccount.
 * il possèdera :
 *          Un identidiant (in)
 *          un propriétaire (string)
 *          un montant (float)
 * 
 * -> définir l'identifiant et le propriétaire dans le constructeur.
 * Le monstant pourra être défini dans le constructeur de manière optionnelle.
 */

require_once 'BankAccount.php';
require_once 'SavingAccount.php';


$bankAccount01 = new BankAccount(123456, 'Matthieu'); // MAtthieu a 0 sur son compte.
var_dump($bankAccount01);
echo $bankAccount01->getBalance(); // Renvoie 0
$bankAccount01->depositMoney(1000); // Matthieu a 1000 sur son compte

var_dump($bankAccount01);


echo $bankAccount01->getBalance(); // Renvoie 1000
$bankAccount01->withdrawMoney(1000); // Matthieu a 0 sur son compte

echo $bankAccount01->getBalance();
var_dump($bankAccount01);

// // On renvoie un erreur si le montant du compte tombe en dessous de 0
$bankAccount01->withdrawMoney(1000);

$bankAccount01->depositMoney(-2000);

/**
 * On va ajouter un système de livret qui va hériter d'un compte standard.
 */

 $savingAccount01 = new SavingAccount(123457, 'Matthieu'); // Matthieu a 0 sur son livret
 $savingAccount01->depositMoney(1000); // Matthieu a 1000 sur son livret
 $savingAccount01->applyInterest(0.75); // Augmente le montant du livret de 0.75 %
 $savingAccount01->withdrawMoney(1000); // Matthieu a 7.5 sur son livret
 echo $savingAccount01->getBalance(); // renvoie 7.5