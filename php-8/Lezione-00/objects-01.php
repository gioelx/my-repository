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

    function __construct($name){  //Costruttore prendere il nome che inseriamo.

        $this->name = $name;    
        
    }

    function __destruct(){  // __destruct, contrario di __construct

        echo "Addio da {$this->name}.";

    }

}

$apple = new Fruit("Apple");



?>


</body>

</html>