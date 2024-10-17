<?php

$age = 8;

if($age >= 16){

    $fareType = 'adulto';



}else{

    $fareType = 'bambino';



};

echo $fareType;

//TERNARY OPERATOR ||||| Come un if ma su una riga.

// condition ? value if true : value if false

$age = 17;

$fareType = $age >= 16 ? "Adulto" : "Bambino";

echo "<br>";    

echo $fareType;

?>