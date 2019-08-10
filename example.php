<?php

require_once('src/Password.php');

$password = new Password(10);
echo $password->generate();