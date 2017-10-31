<?php

namespace Singletion;

require_once 'autoload.php';

$instance = Singleton::getInstance();
$instance->doSomething();

