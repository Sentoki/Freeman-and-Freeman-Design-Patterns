<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 21:51
 */
interface ObserverInterface
{
    public function update($temp, $hum, $press);
}