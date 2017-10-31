<?php

namespace abstractFactory;

class Pizza
{
    public $name = null;
    public $ingredientFactory = null;
    
    public function __construct(IngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function prepare()
    {
        $this->ingredientFactory->createDough();
        $this->ingredientFactory->createCheese();
        $this->ingredientFactory->createClam();
        $this->ingredientFactory->createSauce();
        echo "{$this->name}: укладываем всё на основу\n";
    }

    public function bake()
    {
        echo "{$this->name}: выпекаем\n";
    }

    public function cut()
    {
        echo "{$this->name}: нарезаем на куски\n";
    }

    public function box()
    {
        echo "{$this->name}: упаковываем в коробку\n";
    }
}