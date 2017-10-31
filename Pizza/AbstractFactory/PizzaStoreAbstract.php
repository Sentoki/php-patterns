<?php

namespace abstractFactory;

abstract class PizzaStoreAbstract
{
    abstract public function createPizza();

    public function orderPizza() : Pizza
    {
        /** @var Pizza $pizza */
        $pizza = $this->createPizza();
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
