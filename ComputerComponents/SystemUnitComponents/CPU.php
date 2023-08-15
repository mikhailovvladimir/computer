<?php

require_once __DIR__ . '/SystemUnitComponent.php';

class CPU extends SystemUnitComponent 
{
    public function getDetails(): string 
    {
        return "Модель процессора: {$this->model}";
    }
}