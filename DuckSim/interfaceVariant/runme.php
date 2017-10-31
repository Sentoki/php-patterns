<?php

namespace interfaceVariant;

require_once 'autoload.php';

$defaultDuck = new Duck();
$defaultDuck->setFlyBehaviour(new Fly());
$defaultDuck->setQuackBehaviour(new Quack());

$defaultDuck->fly();
$defaultDuck->quack();

echo "=====================================\n";

$jetDuck = new JetDuck();
$jetDuck->setFlyBehaviour(new JetFly());
$jetDuck->setQuackBehaviour(new Quack());

$jetDuck->fly();
$jetDuck->quack();