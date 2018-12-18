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
      
        $sql = $cnx->prepare("SELECT NomPays from pays WHERE CodePays='".$_GET['parama']."' ");
        $sql3 = $cnx->prepare("SELECT SUM(NbKm) NbKm,temps.NumEtape,NumCoureur FROM etape,temps WHERE temps.NumEtape=etape.NumEtape AND NumCoureur ='".$_GET['paramb']."' ");
        $sql4 = $cnx->prepare("SELECT COUNT(NumEtape)  NumEtape,NumCoureur from temps where NumCoureur='".$_GET['paramb']."'");
        $sql5 = $cnx->prepare("SELECT COUNT(*) Classement from temps WHERE Classement=1 and NumCoureur='".$_GET['paramb']."'");

         //on l'execute
        $sql4->execute();
        $sql->execute();
        $sql3->execute();
        $sql5->execute();

        //Affichage du nombre de victoire
        echo "Nombres de victoires : ";
        $Victoire = $sql5->fetchColumn();
        echo $Victoire;
        echo "<br>";

         //Affichage du pourcentage de victoire
        $nbParticipation = $sql4->fetchColumn();
        $res = ($Victoire/$nbParticipation)*100;
        echo "Pourcentage du nombre de victoire: ";
        echo round($res,2);
        echo "%";
        echo "<br>";

        //Affichage de la nationalité
        echo "Pays:";
        $Pays = $sql->fetchColumn();
        echo $Pays;
        echo "<br>";
      
         //Affichage du nombre de km parcouru
        $Km = $sql3->fetchColumn();
        echo $Km;
        echo ": KM";
        echo "<br>";

       
    ?>
</body>
</html>


