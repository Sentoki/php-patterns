<?php

namespace abstractFactory;

class NovosibPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        $ingredientFactory = new NovosibIngredientFactory();
        $pizza = new Pizza($ingredientFactory);
        $pizza->setName('Новосибирская пицца');
        return $pizza;
    }
}