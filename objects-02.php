<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>

<body>


<?php

class Fruit{

    public $name;
    public $color;

    public function __construct($name, $color){  //Costruttore inseriamo gli elementi portanti.

        $this->name = $name;    //Il valore della variabile finirà nell'oggetto omonimo.
        $this->color = $color;    
        
    }

    public function intro(){

        echo "Il frutto è {$this->name} e il colore è {$this->color}.";

    }

}



class Strawberry extends Fruit{     //SubClass di Fruit, eredita dalla classe Fruit, 
                                    //Siccome non abbiamo inserito un construct, la subClass lo erediterà dalla classe madre Fruit, insieme alla altre funzioni di Fruit.

    public function message(){

        echo "Sono perfetta sulle torte!";

    }

}


class Banana extends Fruit{

    public function testo(){

        echo "Prima di mangiarmi mi devi sbucciare uWu.";

    }

}



$strawberry  = new Strawberry("Fragola", "rossa");

$strawberry->message();

$strawberry->intro();   //$strawberry è in grado di ereditare il metodo intro poiché ereditato dalla classe Fruit

echo "<br>";

$banana = new Banana("Banana", "gialla");

$banana->testo();   

$banana->intro();






?>


</body>

</html>