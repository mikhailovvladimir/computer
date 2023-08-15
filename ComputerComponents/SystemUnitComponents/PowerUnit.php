<?php

require_once __DIR__ . '/SystemUnitComponent.php';

class PowerUnit extends SystemUnitComponent
{
    public function getDetails(): string
    {
        return "Блок питания: " . $this->model;
    }
}