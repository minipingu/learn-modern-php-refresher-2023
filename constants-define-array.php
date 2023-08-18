<?php

declare(strict_types=1);

function colorResistor(int $number)
{
  $colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green',
    4 => 'black',
  ];
  $color = $colors[$number];
  return $color;
};

//magic constant
echo __DIR__;
//

echo '<br>';

//define constant 
if (!defined('FOO')) {
  define('FOO', 'Test');
}

echo FOO;
