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
    

    ?>


<form action='page2.php?param3=<?php echo $_GET['id']; ?>' method="POST">
    <label> Nouveau releve </label>
    
    <p>Nom du client<p><input type="TEXT" name="nom" value="<?php echo $_GET['nom'] ?>" /readonly></p></p>
    <p>Prenom du client<p><input type="TEXT" name="prenom" value="<?php echo $_GET['prenom'] ?>" /readonly></p></p>
    <p>Ancien releve<p><input type="TEXT" name="ancienReleve" value="<?php echo $_GET['ancienreleve'] ?>" /readonly></p></p>
    <p>Dernier releve<p><input type="TEXT" name="dernierReleve" value="<?php echo $_GET['dernierreleve'] ?>" /readonly></p></p>
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
    <input type="hidden" value="<?php echo $_GET['identifiant'] ?>" name="identifiant">
    <p>Nouveau releve<p><input type="TEXT" name="nouveaureleve" value="" /></p></p>
    
    <input type="submit" value ="Inserer">
    </form>

   
  

</body>
</html>


