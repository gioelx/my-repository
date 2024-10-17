<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Una pagina web </title>
</head>

<body>

<footer>

<p>Sito sviluppato nel 

<?php

$startYear = 2021;

$thisYear = date('Y');

if($startYear == $thisYear){


echo $startYear;


}else{

echo"$startYear&ndash;$thisYear";


}




?>




</p>

</footer>


</body>

</html>