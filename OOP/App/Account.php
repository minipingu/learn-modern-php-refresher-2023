<?php
declare(strict_types=1);
//finally, i understand and create a namespace, it's just a virtual address or directory for class
namespace App;
//use keyword for global class and use alias (as (optional))
use DateTime as DT;
new DT();
class Account {
  //then we create social media property, public = access modifier, SocialMedia = type (yes php can use class as type), $socialMedia = variable 
  public SocialMedia $socialMedia;
  public function __construct(
  //Constructor Property Promotion
  public string $name,
  public float $balance
  ) {
    //then we instantiate the social media and assign to $socialMedia variable
    $this->socialMedia = new SocialMedia();
  }
  public function deposit(float $amount){
    $this->balance += $amount;
    //return for chaining method
    return $this;
  }
}
?>
