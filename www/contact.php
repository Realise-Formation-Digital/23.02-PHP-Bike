<?php
include 'traitement.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

 <!-- APPEL LE HEADER DE LA PAGE -->
 <?php include "header.php"; ?>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-8 m-4">
            <form method="POST" action="contact.php">
                <div class="form-group">
                    <div class="text-center">
                        <h1>Contactez-nous!</h1>
                    </div>
                    <div class="d-flex">
                        <input type="text" name="prenom" placeholder="Nom" autocomplete="off" class="form-control"/>
                        <input type="text" name="nom" placeholder="Prenom" autocomplete="off" class="form-control"/>
                    </div>
                    <br>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                    <br>
                    <textarea name="message" cols="30" rows="10" placeholder="Votre message" ></textarea>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    <br>
                    <br>
                    <h2><?php
                    if (!empty($confirmation_mail )) {
                        
                        echo $confirmation_mail;
                    }
                    echo $erreur_mail;              ?></h2>

                    <h2><?php
                    if (!empty($confirmation_envoi)) {
                        if (!empty($confirmation_mail)) {
                        echo $confirmation_envoi;
                    }
                }
                    
                    ?></h2>
                </div>


            </form>

        </div>

    </div>
</div>

<!-- APPEL LE FOOTER DE LA PAGE -->
<?php include "footer.php"; ?>

<!-- Boostrap link for Js -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <!-- END JS LINK -->
</body>
</html>