<?php

require_once('Password.php');

$password = new Password(10);
echo $password->generate();