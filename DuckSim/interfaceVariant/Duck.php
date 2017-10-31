<?php

namespace interfaceVariant;

/**
 * Default Duck class
 * Class Duck
 * @package abstractVariant
 */
class Duck
{
    /** @var  FlyInterface */
    protected $flyBehaviour;
    /** @var  QuackInterface */
    protected $quackBehaviour;

    /**
     * @param FlyInterface $fly
     */
    public function setFlyBehaviour(FlyInterface $fly){
        $this->flyBehaviour = $fly;
    }

    /**
     * @param QuackInterface $quack
     */
    public function setQuackBehaviour(QuackInterface $quack){
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