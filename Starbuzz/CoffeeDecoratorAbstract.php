<?php

namespace Starbuzz;

abstract class CoffeeDecoratorAbstract
{
    /** @var CoffeeDecoratorAbstract */
    protected $decorated = null;
    protected $description = null;
    protected $cost = null;

    public function __construct(CoffeeDecoratorAbstract $decorated = null)
    {
        $this->decorated = $decorated;
    }

    public function getCost()
    {
        if(isset($this->decorated)){
            return $this->cost + $this->decorated->getCost();
        }else{
            return $this->cost;
        }
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getDescription()
    {
        if(isset($this->decorated)){
            return $this->description . ', ' . $this->decorated->getDescription();
        }else{
            return $this->description;
        }
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}