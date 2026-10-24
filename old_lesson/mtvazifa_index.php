<?php

require_once __DIR__ . "/autoload.php";

use Dokon\BankAccount;

$account= new BankAccount('M', 30000.999);

echo $account->owner;

echo '<br>';

echo $account->balance;

$account->balance = 250000;

echo "<br>";

echo $account->balance;


