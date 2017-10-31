<?php

namespace FactoryMethod;

class BarnaulPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        return new BarnaulPizza('Барнаульская пицца');
    }
}