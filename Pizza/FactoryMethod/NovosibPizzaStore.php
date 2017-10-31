<?php

namespace FactoryMethod;

class NovosibPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        return new NovosibPizza('Новосибирская пицца');
    }
}