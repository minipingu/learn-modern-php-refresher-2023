<?php
function sum(bool $dumpArr, int|float ...$nums)
{
  if ($dumpArr) {
    var_dump($nums);
    echo '<br>';
  }
  return array_sum($nums);
}

echo sum(true, 1, 2, 3, 4);
