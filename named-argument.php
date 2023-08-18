<?php
function sum($a, $b)

{
  var_dump($a, $b);
  return $a + $b;
}
//b: and a: is named argument as same as variable name in parameter
echo sum(b:5,a:2)
?>
