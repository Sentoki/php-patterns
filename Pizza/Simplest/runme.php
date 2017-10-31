<?php

namespace Pizza\Simplest;

require_once 'autoload.php';

$djamshut = PizzaFactory::makePizza(PizzaFactory::DJAMSHUT);
echo "У нас есть {$djamshut->name}\n";

echo "\n";

$good = PizzaFactory::makePizza(PizzaFactory::GOOD);
echo "У нас есть {$good->name}\n";