<?php

require_once __DIR__ . '/SystemUnitComponent.php';

class RAM extends SystemUnitComponent 
{
    public function getDetails(): string 
    {
        return "Оперативаня память: {$this->model}";
    }
}