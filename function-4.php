<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> function 4</title>
</head>

<body>



<?php

function doubleIt($number){

$number *= 2;

echo 'Dentro la funzione, $number è ' . $number . '<br>';

};

$number = 4;

doubleIt($number);

echo 'Fuori dalla funzione $number è: ' . $number;

?>



</body>

</html>