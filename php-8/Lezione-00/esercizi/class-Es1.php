<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>

<body>


<?php

class Car{

    public $make;
    public $model;
    public $year;
    public $speed;

    public function __construct($make, $model, $year, $speed){  //Costruttore inseriamo gli elementi portanti.

        $this->make = $make;    //Il valore della variabile finirà nell'oggetto omonimo.
        $this->model = $model; 
        $this->year = $year;   
        $this->speed = $speed;

    }

    public function start(){

        echo "<br>";
        echo "L'automobile {$this->make} {$this->model} dell'anno {$this->year} è partita.";

    }

    public function accelerate(){

        echo "<br>";
        $this->speed += 10;
        echo "La velocita della {$this->make} dopo aver accelerato è {$this->speed}.";

    }

    public function break(){

        echo "<br>";
        $this->speed -= 5;
        echo "La velocita della {$this->make} dopo aver frenato è {$this->speed}.";


    }


}


$volvo = new Car("Volvo", "sium", 1999, 50);

$maserati = new Car("Maserati", "noob", 2025, 20);

$volvo->start();

$maserati->start();

//Due nuove istanze.
echo "<br>";
echo "<br>";


$bmw = new Car("BMW", "super", 2012, 100);

$ferrari = new Car("Ferrari", "laferrari", 2020, 200);

$bmw->start();

echo "<br>";

$bmw->accelerate();

echo "<br>";

$ferrari->start();

echo "<br>";

$ferrari->accelerate();

echo "<br>";

$bmw->break();

echo "<br>";

$ferrari->break();

?>


</body>

</html>