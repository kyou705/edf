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
        //écrire la requete
        $sql = $cnx->prepare("select NumCoureur,NomCoureur,PrenomCoureur,CodePays,CodeEquipe from coureur WHERE CodeEquipe='".$_GET['param']."' ");
        
         //on l'execute
        $sql->execute();
        echo "Liste des coureurs de l'équipe:";
        echo $_GET['param2'];
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<table>";
            echo "<tr>";
            echo "<td>".$ligne['NomCoureur']." ".$ligne['PrenomCoureur']."</td>";
            echo "<td>";
            echo '<a href="page3.php?parama='.$ligne['CodePays'].'&paramb='.$ligne['NumCoureur'].'"> Statistiques</a>';
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>


