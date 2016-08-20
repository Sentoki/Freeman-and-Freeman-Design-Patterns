<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 21:52
 */

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer);
    
    public function removeObserver(ObserverInterface $observer);
    
    public function notifyObserver();
}