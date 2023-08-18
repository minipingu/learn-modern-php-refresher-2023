<?php
$multiplier = 2;
$multiply = fn ($nums) => $num * $multiplier;
function sum ($a,$b,$callback){
  return $callback($a+$b);
}
echo sum(5, 2, fn ($nums) => $num * $multiplier
);
echo '<br>'.$multiplier
?>
