<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    <form action="page2.php?param='.$ligne['nom'].'&param2='.$ligne['prenom'].'&param3='.$ligne['id'].'" method="POST">
    <label> Nouveau releve </label>
    
    <p>Nom du client<p><input type="TEXT" name="nom" value="<?php echo $_GET['parama'] ?>" /readonly></p></p>
    <p>Prenom du client<p><input type="TEXT" name="prenom" value="<?php echo $_GET['paramb'] ?>" /readonly></p></p>
    <p>Ancien releve<p><input type="TEXT" name="ancienReleve" value="<?php echo $_GET['paramc'] ?>" /readonly></p></p>
    <p>Dernier releve<p><input type="TEXT" name="dernierReleve" value="<?php echo $_GET['paramd'] ?>" /readonly></p></p>
    <p>Nouveau releve<p><input type="TEXT" name="nouveaureleve"  /></p></p>
    
    <input type="submit" value ="Inserer">
    </form>

<?php
        include 'cnx.php';
        
        
    ?>

  

</body>
</html>


