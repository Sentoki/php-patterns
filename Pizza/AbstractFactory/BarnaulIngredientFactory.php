<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 27.08.16
 * Time: 9:32
 */

namespace abstractFactory;

class BarnaulIngredientFactory implements IngredientFactoryInterface
{
    public function createCheese()
    {
        echo "добавляем сыр российский\n";
    }

    public function createClam()
    {
        echo "добавляем крабовые палочки\n";
    }

    public function createDough()
    {
        echo "раскатываем тесто из марийки\n";
    }

    public function createSauce()
    {
        echo "добавляем майонез праздничный\n";
    }
}