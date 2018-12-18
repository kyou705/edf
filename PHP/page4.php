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
        $a=$_POST['nouveaureleve'];
        $b=$_POST['nom'];
        $c=$_POST['prenom'];
        
        


       $sql = $cnx->prepare("update client SET dernierReleve='$a' where nom='$b'");
        $sql->execute();
        header('Location: http://localhost/irismaster2/edf/edf/PHP/page2.php?param=$a&param2=$c');
        exit();
        
    ?>

  

</body>
</html>


