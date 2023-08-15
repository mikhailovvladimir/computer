<?php

require_once __DIR__ . '/../Interfaces/ComputerComponents.php';

class Keyboard implements ComputerComponent {
    private $layout;

    public function __construct(string $layout) 
    {
        $this->layout = $layout;
    }
    
    public function getName(): string 
    {
        return $this->layout;
    }
}