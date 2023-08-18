<?php
require_once 'Account.php';

$minipingu = new Account('minipingu',10000);

print_r($minipingu).'<br>' ;
$minipingu->deposit(20000).'<br>';
print_r($minipingu).'<br>' ;


?>
