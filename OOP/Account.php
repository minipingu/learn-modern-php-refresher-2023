<?php
declare(strict_types=1);
//finally, i understand and create a namespace, its just virtual address or directory for class
namespace App\Account;
class Account {
  public function __construct(
  //Constructor Property Promotion
  public string $name,
  public float $balance
  ) {}

  public function deposit(float $amount){
    $this->balance += $amount;
    //return for chaining method
    return $this;
  }

  
}
?>
