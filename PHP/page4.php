<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<form method="post" action="page5.php"> 
Prénom : <input type="text" name="prenom" size="12"> 
<input type="submit" value="OK"> 
</form>

    <?php
     
     include 'cnx.php';
     $prenom = $_POST['nouveaureleve']; 
     print("<center>Bonjour $prenom </center>"); 
    ?>

</body>
</html>