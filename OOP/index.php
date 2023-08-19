<?php
require_once 'App/Account.php';
require_once 'App/SocialMedia.php';

use App\{Account, SocialMedia};

$minipingu = new Account('minipingu', 10000);
print_r($minipingu) . '<br>';

// ? is nullsafe operator
$minipingu?->deposit(20000)->deposit(10000);
print_r($minipingu) . '<br>';
