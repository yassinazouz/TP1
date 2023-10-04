<?php
    $nom ="Yassin";
    $prenom="Azzouz";

    echo $nom ;
    echo $prenom;
    echo $nom ; 
    echo "</br>";
    echo $prenom;
    echo "<table border='1'>
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
            </tr>
            <tr>
                <td>".$nom."</td>
                <td>".$prenom."</td>
            </tr>
        </table>";
    $info = $nom.$prenom;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <script>
            alert('<?php echo $info; ?>');
        </script>
        
    </body>
    </html>

    