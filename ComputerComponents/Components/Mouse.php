<?php

require_once __DIR__ . '/../Interfaces/ComputerComponents.php';

class Mouse implements ComputerComponent {
    private $type;

    public function __construct(string $type) 
    {
        $this->type = $type;
    }
    
    public function getName(): string 
    {
        return $this->type;
    }
}