<?php

require_once __DIR__ . '/SystemUnitComponent.php';

class Motherboard extends SystemUnitComponent 
{
    public function getDetails(): string 
    {
        return "Материнская плата: {$this->model}";
    }
}