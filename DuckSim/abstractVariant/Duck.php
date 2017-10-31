<?php

namespace abstractVariant;

/**
 * Default Duck class
 * Class Duck
 * @package abstractVariant
 */
class Duck
{
    /** @var  AbstractFly */
    protected $flyBehaviour;
    /** @var  AbstractQuack */
    protected $quackBehaviour;

    /**
     * @param AbstractFly $fly
     */
    public function setFlyBehaviour(AbstractFly $fly){
        $this->flyBehaviour = $fly;
    }

    /**
     * @param AbstractQuack $quack
     */
    public function setQuackBehaviour(AbstractQuack $quack){
        $this->quackBehaviour = $quack;
    }

    /**
     * Execute fly behaviour
     */
    public function fly()
    {
        $this->flyBehaviour->fly();
    }

    /**
     * Execute quack behaviour
     */
    public function quack()
    {
        $this->quackBehaviour->quack();
    }
}