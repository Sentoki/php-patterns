<?php

namespace Singletion;

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance() : Singleton
    {
        if (!isset(Singleton::$instance)) {
            Singleton::$instance = new static();
        }
        echo "Самоиниализация\n";
        return Singleton::$instance;
    }

    public function doSomething()
    {
        echo "doSomething\n";
    }
}
