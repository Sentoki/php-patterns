<?php

namespace Pizza\Simplest;

class PizzaFactory
{
    const GOOD = 'good';
    const DJAMSHUT = 'djamshut';

    public static function makePizza($type = null)
    {
        switch ($type){
            case self::GOOD:
                $pizza = new GoodPizza();
                break;
            case self::DJAMSHUT:
                $pizza = new DjamshutPizza();
                break;
            default:
                $pizza = new DjamshutPizza();
                break;
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
