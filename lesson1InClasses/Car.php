<?php

class Car
{
    private $petrol = 0;

    public function addPetrol($litr): void
    {
        $this->petrol += $litr;//benzin qo'shadi
    }

    public function drive($km): void
    {
        $sum = $this->petrol * 10;
        if ($sum < $km) {
            print "benzin yetmaydi \n";
        } else {
            $this->petrol--;
            print "mashina " . $sum . " yurdi \n";
            $sum -= $km;
        }
    }

    public function showPetrol(): void
    {
        print $this->petrol . "\n";
    }
}

$car = new Car();
$car->addPetrol(1);
$car->showPetrol();//1
$car->drive(20);//benzin yetmaydi
$car->showPetrol();//1
$car->drive(10);//mashina 10km yurdi
$car->showPetrol();//0