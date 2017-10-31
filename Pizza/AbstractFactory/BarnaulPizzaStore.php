<?php

namespace abstractFactory;

class BarnaulPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        $ingredientFactory = new BarnaulIngredientFactory();
        $pizza = new Pizza($ingredientFactory);
        $pizza->setName('Барнаульская пицца');
        return $pizza;
    }
}