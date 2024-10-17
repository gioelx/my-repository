<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> virgolette </title>
</head>

<body>


<?php

//Produce un errore.
//$descrizione = 'David's house';

//Una soluzione al problema un escape caracter, uno è il backslash, che segnala al codice che l'apice nel mezzo non è la fine della stringa.
//$descrizione = 'David\'s house';

//Un'altra soluzione è invecce di inziare e finire una stringa con l'apice di inziarla con le virgolette e cosi l'apice nel mezzo non da problemi.
$descrizione = "David's house";

echo $descrizione;

//Produce un errore
//$descrizione2 = "La mia casa è "favolosa!"";

//Soluzione è il backslash alle prime e ultime virgolette che danno problemi.
$descrizione2 = "La mia casa è \"favolosa!\"";

echo $descrizione2;


?>


</body>

</html>