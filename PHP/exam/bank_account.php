<?php

class BankAccount{
  public $bankName;
  public $ownerName;
  public $savings;

  function __construct($bankName, $ownerName, $savings){
    $this->bankName = $bankName;
    $this->ownerName = $ownerName;
    $this->savings = $savings;
  }

  function depositMoney($depositAmount){
    if ($this->savings <= 20000) {
      $this->savings = $this->savings + $depositAmount - 100;
    } else {
      $this->savings = $this->savings + $depositAmount;
    }
    $this->pastime();
    return $this->savings;
  }

  function withdrawMoney($withdrawAmount){
    $percent_twenty = $this->savings * 0.2;
    if ($withdrawAmount <= $percent_twenty) {
      $this->savings = $this->savings - $withdrawAmount;
    } else {
      $this->savings = $this->savings - $percent_twenty;
    }

    return $this->savings;
  }

  function pastime($days = 0){
    return $this->savings + $days * 0.25;
  }
}

$user1 = new BankAccount("Chase", "Claire Simmmons", 30000);
echo $user1->withdrawMoney(2000) . PHP_EOL;
echo $user1->depositMoney(10000) . PHP_EOL;
echo $user1->pastime(93) . PHP_EOL;

$user2 = new BankAccount("Bank Of America", "Remy Clay", 10000);
echo $user2->withdrawMoney(5000) . PHP_EOL;
echo $user2->depositMoney(12000) . PHP_EOL;
echo $user2->pastime(505) . PHP_EOL;