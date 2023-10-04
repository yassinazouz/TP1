<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


    <?php
    if($_POST['nombre']) {
        $nombre = $_POST['nombre'];
        if($nombre % 2 == 0) {
            echo "$nombre est un nombre pair.";
        } else {
            echo "$nombre est un nombre impair.";
        }
    }
    ?>

    <form method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <input type="submit" value="Vérifier">
    </form>
</body>
</html>