<?php
function foo()
{
  static $a = 1;
  return $a++;
}
//if we arent using static, variable value still the same
echo foo()."<br>";
echo foo()."<br>";
echo foo()."<br>";
?>
