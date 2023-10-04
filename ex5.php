<?php
echo "<h1>Calcul sur les variables</h1>";
$TVA=0.2;
$PRIX=150;
$Nombre=10;
echo "Le prix HT (hors taxe) = ". $PRIX * $Nombre ."</br>";
echo "Le prix TTC (Tout Taxe Comprise) = ". ($PRIX * $Nombre) * (1 + $TVA);