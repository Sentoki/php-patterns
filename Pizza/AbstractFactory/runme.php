<?php

namespace abstractFactory;

require_once 'autoload.php';

$brnStore = new BarnaulPizzaStore();

/** @var Pizza $pizza */
$pizza = $brnStore->orderPizza();
echo $pizza->name;

echo "\n\n";

$nskStore = new NovosibPizzaStore();

/** @var Pizza $pizza */
$pizza = $nskStore->orderPizza();
echo $pizza->name;
