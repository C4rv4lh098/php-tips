<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Claudia";
$user->last_name = "Santiago";
$user->genre = "F";
$user->save();

$addr = new Address();
$addr->add($user, "Nome da rua", "33b");
$addr->save();


var_dump($user);
