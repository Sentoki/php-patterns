<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 27.08.16
 * Time: 9:20
 */

namespace abstractFactory;

interface IngredientFactoryInterface
{
    /**
     * Создание основы из теста
     * @return mixed
     */
    public function createDough();

    /**
     * Создание соуса
     * @return mixed
     */
    public function createSauce();

    /**
     * Добавление сыра
     * @return mixed
     */
    public function createCheese();

    /**
     * Добавление морепродуктов
     * @return mixed
     */
    public function createClam();

}