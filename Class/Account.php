<?php

class Account
{
    private $name;
    private $balance;

    private $accountNumber;

    private static $accountNumberGenerator = 1;


    public function __construct($name, $balance)
    {
       $this->name = $name;
       $this->balance = $balance;
       $this->accountNumber= self::$accountNumberGenerator++;

    }

    function __toString()
    {
        return "le compte numero".$this->accountNumber." appartient à". $this->name.",".
                "il presente un solde de". $this->balance. "£". 
                "<br>";
    }
    
    public function getName() 
    {
        return $this->name;
    }

    function getAccountNumber()
    {
        return $this->accountNumber;
    }

    function getBalance()
    {
        return $this->balance;
    }
}