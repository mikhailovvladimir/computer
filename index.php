<?php

require_once __DIR__ . '/ComputerComponents/Components/SystemUnit.php';
require_once __DIR__ . '/ComputerComponents/Components/Monitor.php';
require_once __DIR__ . '/ComputerComponents/Components/Keyboard.php';
require_once __DIR__ . '/ComputerComponents/Components/Mouse.php';

class Computer {
    private $monitor;
    private $systemUnit;
    private $keyboard;
    private $mouse;
    
    public function __construct(
        Monitor $monitor,
        SystemUnit $systemUnit,
        Keyboard $keyboard,
        Mouse $mouse
    ) {
        $this->monitor = $monitor;
        $this->systemUnit = $systemUnit;
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
    }

    public function getParametrs(): array
    {
        return [
            'monitor' => $this->monitor->getName(),
            'keyboard' => $this->keyboard->getName(),
            'mouse' => $this->mouse->getName(),
            'systemUnit' => $this->systemUnit->getName(),
            'insideSystemUnit' => $this->systemUnit->getDetailsFromSystemUnit()
        ];
    }
}

$cpu = new CPU('Intel i7');
$ram = new RAM('16GB DDR4');
$motherboard = new Motherboard('ASUS TUF Gaming B760M-E D4, LGA1700');
$hdd = new HDD('HDD 4000 GB Seagate SkyHawk (ST4000VX015-520), 3.5", 256 Mb, SATA III');
$powerUnit = new PowerUnit('Старая модель уебская');

$systemUnit = new SystemUnit($cpu, $ram, $motherboard, $hdd, $powerUnit, 'X-GAME');

$monitor = new Monitor(27);
$keyboard = new Keyboard('Игровая');
$mouse = new Mouse('Оптическая');

$computer = new Computer($monitor, $systemUnit, $keyboard, $mouse);
$computerParams = $computer->getParametrs();

echo '<ul>';
    foreach($computerParams as $param) {
        if (is_array($param)) {
            foreach($param as $name) {
                echo "<li>" . $name . '</li>';
            }
        }

        if (is_string($param)) {
            echo "<li>" . $param . '</li>';
        }
    }
echo '</ul>';
