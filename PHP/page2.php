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
        $sql = $cnx->prepare("select client.nom,client.prenom,ancienReleve,dernierReleve,idcontroleur,identifiant,id from client,controleur where client.idcontroleur=controleur.id and idcontroleur ='".$_GET['param3']."'");
        // on l'execute
        $sql->execute();

        
        
        echo "Liste des clients du contrôleur "; 
        echo "<br>";
        echo '<a href="index.php"> Home </a>';
        echo "<br>";
        echo "<br>";
        $id=$_GET['param3'];
        echo $id;
        

        if(isset($_POST['nouveaureleve']))
            { 
            $id=$_POST['id'];
            $releve=$_POST['nouveaureleve'];
            $identifiant=$_POST['identifiant'];
            $sql1 = $cnx->prepare("update client SET dernierReleve='$releve' where identifiant='$identifiant'");
            $sql1->execute();
            

            
           // header('Location: http://localhost/irismaster2/edf/edf/PHP/page2.php?param3='.$ligne['id'].'');
           // exit();
            }
        

        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<table>";
            echo "<tr>";
            echo "<td>".$ligne['nom']."</td>";
            echo "<td>";
            echo "<td>".$ligne['prenom']."</td>";
            echo "<td>";
            echo "<td>".$ligne['ancienReleve']."</td>";
            echo "<td>";
            echo "<td>".$ligne['dernierReleve']."</td>";
            echo "<td>";
            echo '<a href="page3.php?nom='.$ligne['nom'].'&prenom='.$ligne['prenom'].'&ancienreleve='.$ligne['ancienReleve'].'&dernierreleve='.$ligne['dernierReleve'].'&identifiant='.$ligne['identifiant'].'&id='.$ligne['id'].'"> Nouveau releve </a>';
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>


