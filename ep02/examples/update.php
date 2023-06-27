<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(5);
$user->first_name = "Abigail";
$user->last_name = "Santiago";
$user->genre = "Feminino";
$user->save();

var_dump($user);
