<?php

abstract class SystemUnitComponent 
{
    protected $model;
    
    public function __construct(string $model) 
    {
        $this->model = $model;
    }
    
    abstract public function getDetails(): string;
}