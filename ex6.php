

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST['calculer']) {

            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];
    
            $resultat = $v1 + $v2;
    
            // Affichage du résultat
            echo "Le résultat est : $resultat";

        }
        ?>
<form method="post">
        <label for="valeur1"></label>
        <input type="text" name="v1" id="v1" required>
        
        <label for="valeur2">+</label>
        <input type="text" name="v2" id="v2" required>
        
        <input type="submit" name="calculer" value="Calculer">
    </form>
</body>
</html>