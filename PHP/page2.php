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
        $sql = $cnx->prepare("select nom,prenom,ancienReleve,dernierReleve,idcontroleur from client where idcontroleur ='".$_GET['param3']."'");
        // on l'execute
        $sql->execute();
        echo "Liste des clients du contrôleur ";
        echo $_GET['param'];
        echo " - ";
        echo $_GET['param2'];
        echo "<br>";
        echo "<br>";
        echo '<a href="index.php"> Home </a>';
        echo "<br>";
        echo "<br>";
      
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
         
            echo "<table>";
            echo "<tr>";
            echo "<td>".$ligne['nom']." ".$ligne['prenom']." ".$ligne['ancienReleve']." ".$ligne['dernierReleve']."</td>";
            echo "<td>";
            echo '<a href="page3.php?parama='.$ligne['nom'].'&paramb='.$ligne['prenom'].'&paramc='.$ligne['ancienReleve'].'&paramd='.$ligne['dernierReleve'].'"> Nouveau releve </a>';
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>


