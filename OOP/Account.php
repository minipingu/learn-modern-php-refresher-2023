<?php
declare(strict_types=1);

class Account {
  public function __construct(
  //Constructor Property Promotion
  public string $name,
  public float $balance
  ) {}

  function deposit($amount){
    $this->balance += $amount;
  }

  
}
?>
