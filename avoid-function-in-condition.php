<?php
function getUsers()
{
  sleep(2);
  return ['John', 'Jane'];
}

$userCount = count(getUsers());

for ($i = 0; $i < $userCount; $i++) {
  echo $i;
  echo '<br>';
}
