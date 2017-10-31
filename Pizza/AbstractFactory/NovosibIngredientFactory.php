<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 27.08.16
 * Time: 9:32
 */

namespace abstractFactory;

class NovosibIngredientFactory implements IngredientFactoryInterface
{
    public function createCheese()
    {
        echo "добавляем сыр мазарелу\n";
    }

    public function createClam()
    {
        echo "добавляем угря\n";
    }

    public function createDough()
    {
        echo "раскатываем своё тесто\n";
    }

    public function createSauce()
    {
        echo "добавляем соус для пиццы\n";
    }
}