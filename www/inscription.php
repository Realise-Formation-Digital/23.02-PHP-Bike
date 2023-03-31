<?php
    //Création de la session
    session_start();

    //on définis nos variables qui vont amener au dossier csv et qui va receuillir l ensemble des informations de nos utilisateurs
    $path = 'user.csv';
    $error = '';
    //on verifie que le formulaire à été remplie
    if(!empty($_POST)){
        $user_data = array($_POST["username"], $pass);
        //le formulaire à été envoyé
        //vérification que tous les champs soient remplies
        if(isset($_POST["username"], $_POST["pass"]) && !empty($_POST["username"]) && !empty($_POST["pass"])){
            //le formulaire est complet

            //On vérifier si le login ne contient pas de charactres speciaux et le  hasher le mdp pour ne pas récuperer le du mot de passe via l 'algorhytme argon2id si il est correct
            $pass = password_hash($_POST['pass'], PASSWORD_ARGON2ID);
            if (preg_match('/[%$#+"" "-]/', $_POST['username'])) {
                $error = "Les caractères spéciaux sont interdits dans le login.";
            } else {
                //on verifie si le fichier csv existe et on enregistre les données dedans si oui
                if(file_exists($path)){
                    //on ouvre le fichier
                    $csv_file = fopen($path, 'a');
                    //on enregistre le  username passs
                    $user_data = array($_POST["username"], $pass);
                    fputcsv($csv_file, $user_data,';');
                    // Fermeture du csv
                    fclose($csv_file);
                    //Création de la variable session
                    $_SESSION['nickname'] = $user_data;
                    //Redirection vers une autre page après la création de la session
                    header('Location: http://localhost:8302/connexion.php');
                    exit();
                } else {
                    $error = "Erreur ! Le fichier n'existe pas";
                }
            }  
        } else {
            //Message d'erreur si le formulaire est incomplet
            $error = "Le formulaire est incomplet";
        }
    }
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- APPEL LE HEADER DE LA PAGE -->
    <?php include 'header.php'; ?>
    <h1>Inscription</h1>
    <form method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="username" id="pseudo">
        </div>

        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
        <button type="submit">M'inscrire</button>
    </form>

    <p class="error"><?php if($error) echo $error; ?></p>
    <!-- APPEL LE HEADER DE LA PAGE -->
    <?php include 'footer.php';?>


    <!-- Boostrap link for Js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
></script>
    <!-- END JS LINK -->
</body>
</html>
