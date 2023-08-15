<?php

require_once __DIR__ . '/SystemUnitComponent.php';

class HDD extends SystemUnitComponent 
{
    public function getDetails(): string
    {
        return "Жесткий диск модель: {$this->model}";
    }
}