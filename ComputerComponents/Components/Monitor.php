<?php

require_once __DIR__ . '/../Interfaces/ComputerComponents.php';

class Monitor implements ComputerComponent {
    private $size;

    public function __construct(int $size) 
    {
        $this->size = $size;
    }

    public function getName(): string 
    {
        return $this->size;
    }
}