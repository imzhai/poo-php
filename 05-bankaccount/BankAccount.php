<?php

class BankAccount {

    private $id;
    private $owner; 
    protected $balance = 0;



        public function __construct($id, $owner, $balance = 0)
        {
            $this->id = $id;
            $this->owner = $owner;
            $this->balance = $balance;
        }

        public function getBalance()
        {
            return 'Le montant du compte de ' . $this->owner . ' est de ' . $this->balance . ' €' . '<br>';
        }

        public function depositMoney($money)
        {
            if ($money < 0){
                echo 'PAS DE DEPOT NEGATIF <br>';
                return; // On arrête le code
            }
            $this->balance += $money;
        }

        public function withdrawMoney($money)
        {
            if($this->balance < $money){
                echo 'PAS DE RETRAIT <br>';
                return; // On arrête le code
            }
           
            $this->balance -= $money;
        }


      

}