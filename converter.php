<?php


$tempC = " ";
$tempC = $_POST['tempC'];

$tempF = ($tempC * 1.8 + 32);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet converter</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
      
        <div class="header">
            <h1>Projet Converter</h1>
        </div>

      <div class="container">
             <div class="col-md-6" id="form">
                <h2>Converter Page</h2>
                <form action="converter.php" method="post" >
                    <label for="tempC"> valeur en °C</label> <br>
                    <input type="number" name="tempC" placeholder="Entrez la valeur de la temperature en °C"class="form-control"> <br>

                    <input class="btn btn-success" type="submit" value="valider" >
                    <input  id="reset" class="btn btn-dark" type="submit" value="reset" style="margin-bottom: 20px">

                    
                </form>
                <div style="background-color: rgb(7, 160, 150); height:60px; margin-top:30px; color:white; text-align:center">
                     <?php

                    if(!empty($_POST["tempC"]) || ($_POST["tempC"]  )){

                        echo"$tempC °C = $tempF °F" ;
                    }else{
                         echo '<div style= "background-color: #ff3300; height: 60px"> attention a votre saisie, un nombre est attendu </div> ' ;
                    }
                    
                    
                     ?>

                 </div>

             </div>
        </div>


</body>
</html>