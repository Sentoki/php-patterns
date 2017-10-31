<?php

namespace Pizza\Simplest;

class PizzaAbstract
{
    public $name = null;

    public function prepare()
    {
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