<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Return value</title>
</head>

<body>



<?php

function doubleIt($number){

return $number *= 2;

};

$num = 4;

$doubled = doubleIt($num);

echo '$num è: ' . $num . '<br>';

echo '$doubled è: ' . $doubled . '<br>';

// Arrow Function

$creaSomma = fn ($num2) => $num2 + $num2;

echo $creaSomma(11);


?>



</body>

</html>