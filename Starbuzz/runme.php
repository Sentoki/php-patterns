<?php

namespace Starbuzz;

require_once 'autoload.php';

$coffee = new Coffee();
$coffee->setDescription('Само кофе');
$coffee->setCost(50);

$milk = new Decorator($coffee);
$milk->setDescription('Молоко');
$milk->setCost(5);

$sugar = new Decorator($milk);
$sugar->setDescription('Сахар');
$sugar->setCost(2);

echo $sugar->getDescription();
echo "\n";
echo $sugar->getCost();