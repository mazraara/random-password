# random-password
Generate random password of a given length

## Installation
This project using composer.
```
$ composer require mazraara/random-password
```

## Usage
Generate random password.
```php
<?php

use RandomPassword\Password;

$password = new Password(10);
echo $password->generate();
```