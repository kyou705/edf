<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <?php
        include 'cnx.php';
        echo "Liste des contrôleurs";
        echo "<br>"; 
        echo "<br>"; 
        // écrire la requete
        $sql = $cnx->prepare("select nom,prenom,id from controleur");
        // on l'execute
        $sql->execute();
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<table>";
            echo "<tr>";
            echo "<td>".$ligne['nom']."</td>";
            echo "<td>";
            echo "<td>".$ligne['prenom']."</td>";
            echo "<td>";
            echo '<a href="page2.php?param3='.$ligne['id'].'"> Tous les clients</a>';
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>

</body>
</html>