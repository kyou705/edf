<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form  method="get">
    <p>Nom du client<p><input type="TEXT" name="nom" value="<?php echo $_GET['parama'] ?>" /></p></p>
    <p>Prenom du client<p><input type="TEXT" name="prenom" value="<?php echo $_GET['paramb'] ?>" /></p></p>
    <p>Ancien releve<p><input type="TEXT" name="ancienReleve" value="<?php echo $_GET['paramc'] ?>" /></p></p>
    <p>Dernier releve<p><input type="TEXT" name="dernierReleve" value="<?php echo $_GET['paramd'] ?>" /></p></p>
    </form>

    <form action="page4.php" method="post">
    <label> Nouveau releve </label>
    <br>
    <input name="nouveaureleve" type="text">
    <br>
    <input type="submit" value ="Inserer">
    </form>

<?php
        include 'cnx.php';
        
        
        // on l'execute
        
        
       
    ?>

  

</body>
</html>


