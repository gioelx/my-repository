<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
</head>

<body>


<?php

class Fruit{    //creazione di una classe Fruit, una classe definisce i metodi e proprietà di un oggetto.
                // La classe contiene regole generali per definire oggetti.

    public $name;   // rendo le variabili publiche.
    public $color;
    public $price;

    function __construct($name, $color, $price){  // Costruttore prendere le varibili che gli diamo in pasto.
                                                  // Sempre una funzione __construct definisce metodi e proprietaà per degli oggetti.

        $this->name =  $name;   //Assegno le varibili ai valori di construct.
        $this->color = $color;
        $this->price = $price;

    }

    function get_name(){

        echo "<br>";    //Spaziatura.
        return $this->name; //Restituisce il nome.

    }

    function get_color(){
        
        echo "<br>";    //Spaziatura.
        return $this->color;    //Restituisce il colore.

    }

    function get_price(){

        echo "<br>";    //Spaziatura.
        return $this->price;    //Restituisce il prezzo.

    }

}

$apple = new Fruit("Apple", "Red", 5);  //Nuova istanza(oggetto) apple di Fruit  con valori apple, red, 5.

echo $apple->get_name();    //Chiedo di stampare il nome dell'istanza apple.
echo $apple->get_color();   //Chiedo di stampare il colore dell'istanza apple.
echo $apple->get_price();   //Chiedo di stampare il colore dell'istanza apple.

$ciliegia = new Fruit("Ciliegia", "rosso scuro", 10);

echo $ciliegia->get_name();
echo $ciliegia->get_color();   
echo $ciliegia->get_price();

?>


</body>

</html>