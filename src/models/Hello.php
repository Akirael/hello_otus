<?php

namespace Hello\models;

class Hello
{
    public static function sayHelloUserName($message)
    {
        echo "Hello $message".PHP_EOL;
    }
}