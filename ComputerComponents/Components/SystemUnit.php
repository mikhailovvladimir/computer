<?php

require_once __DIR__ . '/../Interfaces/ComputerComponents.php';
require_once __DIR__ . '/../SystemUnitComponents/CPU.php';
require_once __DIR__ . '/../SystemUnitComponents/RAM.php';
require_once __DIR__ . '/../SystemUnitComponents/Motherboard.php';
require_once __DIR__ . '/../SystemUnitComponents/HDD.php';
require_once __DIR__ . '/../SystemUnitComponents/PowerUnit.php';

class SystemUnit implements ComputerComponent{
    private $cpu;
    private $ram;

    private $motherboard;

    private $hdd;

    private $powerUnit;

    protected $model;

    public function __construct(CPU $cpu, RAM $ram, Motherboard $motherboard, HDD $hdd, PowerUnit $powerUnit, string $model) 
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->motherboard = $motherboard;
        $this->hdd = $hdd;
        $this->powerUnit = $powerUnit;
        $this->model = $model;
    }
    
    public function getDetailsFromSystemUnit(): array 
    {
        return [
            $this->cpu->getDetails(),
            $this->ram->getDetails(),
            $this->motherboard->getDetails(),
            $this->powerUnit->getDetails(),
            $this->hdd->getDetails()
        ];
    }

    public function getName(): string 
    {
        return "Системный блок: {$this->model}";
    }
    
}