<?php

require_once('src/RandomPassword/Password.php');

use RandomPassword\Password;

$password = new Password(10);
echo $password->generate();