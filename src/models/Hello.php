<?php

namespace Hello\models;

class Hello
{
    public static function sayHello($message)
    {
        echo "Hello $message".PHP_EOL;
    }
}