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
                <h2>Login Form</h2>
                <form action="" method="" >
                    <label for="identifiant"> identifiant</label> <br>
                    <input type="text" name="identifiant" placeholder="Entrez votre identifiant"class="form-control" > <br>

                    <label for="motDePasse"> Mot de passe</label> <br>
                    <input type="text" name="motDePasse" placeholder="Entrez votre mot de passe"class="form-control" style="margin-bottom: 20px" >

                    <button type="submit" class="btn btn-success" > <a href="converter.php">valider</a></button>
                    <input id="reset" class="btn btn-dark" type="submit" value="reset">

                   

                </form>
             </div>
        </div>


</body>
</html>