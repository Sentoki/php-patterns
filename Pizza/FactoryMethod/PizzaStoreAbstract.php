<?php

namespace FactoryMethod;

abstract class PizzaStoreAbstract
{
    abstract public function createPizza();

    public function orderPizza() : PizzaAbstract
    {
        /** @var PizzaAbstract $pizza */
        $pizza = $this->createPizza();
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
