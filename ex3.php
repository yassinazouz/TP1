<?php
    $a = 5;
    if(is_integer($a)&&($a<10 && $a>5)&&($a%2==0))
    echo "VRAI";
    else echo "FAUX";
    echo "</br>Dans ce que le programme s'affiche faux car ".$a." %2 =1 ";

    $b = "TRUE";
    $c = "FALSE";
    
    echo "</br>" . ($b AND $c ? 1 : 0);
    echo "</br>" . ($b OR $c ? 1 : 0);
    
    echo "</br> Les deux resulats s'affichent 1 car \$b et \$c sont deux chaines caracteres et ils comparent ses types</br>";
    
    $nom="";
    $sexe="M";
    echo ($nom=="")?"inconnu":$nom;  
    echo "</br> La resultat s'affiche inconnu car \$nom est vide</br>";
    echo (($sexe=="F")?"Madame":"Monsieur");
    echo "</br> la resultat s'affiche Monsieur car \$sexe different de F</br>";
    $nom= "Cherif";
    echo $nom ?? "inconnu";
    echo "</br> La resultat s'affiche Cherif car l'operateur ?? verifie si \$nom existe et l'affiche s'il est vrai</br> ";
    echo "bonjour".($prenom ??"inconnu");
    echo "</br>Le programme s'affiche bonjour et inconnu car \$prenom n'existe pas </br>";
    echo "bonjour".($prenom ?? $nom ?? "inconnu");
    echo "</br> Le programme s'affiche bonjour et le contenu du \$nom car le programme verifie si l'un de ces deux variables existe ou pas";