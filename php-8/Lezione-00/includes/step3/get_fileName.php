<?php

//echo $_SERVER['SCRIPT_FILENAME'];  Risulta nelllo stampare in console dell'indirizzo assoluto del file, con tutto il percorso.


echo basename($_SERVER['SCRIPT_FILENAME']); // Risulta solo nello stampare del nome del file in cui stiamo lavorando.

    