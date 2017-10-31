<?php

namespace abstractVariant\WeatherData;

require_once 'autoload.php';

$weatherData = new WeatherData();

$display1 = new Display('first display');
$display2 = new Display('second display');
$display3 = new Display('third display');

$weatherData->addObserver($display1);
$weatherData->addObserver($display2);
$weatherData->addObserver($display3);

$weatherData->dataChanged();

$weatherData->removeObserver($display2);

$weatherData->dataChanged();