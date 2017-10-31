<?php

namespace FactoryMethod;

require_once 'autoload.php';

$brnStore = new BarnaulPizzaStore();

/** @var PizzaAbstract $pizza */
$pizza = $brnStore->orderPizza();
echo $pizza->name;

echo "\n\n";

$nskStore = new NovosibPizzaStore();

/** @var PizzaAbstract $pizza */
$pizza = $nskStore->orderPizza();
echo $pizza->name;
