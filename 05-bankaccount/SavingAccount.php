<?php

    class SavingAccount extends BankAccount
    {
        public function applyInterest($rate)
        {
            $this->balance *= 1 + $rate / 100;
            $this->balance = round($this->balance, 2);
        }
    }