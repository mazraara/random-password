<?php

// namespace is used to avoid name collision
namespace RandomPassword; 

require_once 'config.php';

class Password
{
    private $length; 

    public function __construct($length = DEFAULT_PASSWORD_LENGTH)
    {
        $this->length = $length;
    }

    public function generate()
    {
        $password = [];
        $len = strlen(ALPHABET) - 1;

        for ($i = 0; $i < $this->length; $i++)
        {
            $n = rand(0, $len); 
            $password[] = ALPHABET[$n]; 
        }
        
        return implode($password); 
    }
}