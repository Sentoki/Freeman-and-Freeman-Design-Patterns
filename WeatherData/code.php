<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 22:22
 */

require_once 'Display.php';
require_once 'WeatherData.php';

$weatherData = new WeatherData();

$display1 = new Display();

$weatherData->addObserver($display1);

$weatherData->dataChanged();