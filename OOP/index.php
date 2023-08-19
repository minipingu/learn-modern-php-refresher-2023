<?php
require_once 'Account.php';
use namespace App/Account;
$minipingu = new Account('minipingu', 10000);

print_r($minipingu) . '<br>';
// ? is nullsafe operator
$minipingu?->deposit(20000)->deposit(10000);
print_r($minipingu) . '<br>';
