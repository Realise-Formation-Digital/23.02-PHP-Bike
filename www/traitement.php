<?php
    $path = ('messages.csv');
    $erreur_mail = "";
    $confirmation_mail = "";
    $confirmation_envoi;

// si les input existent, prendre les variables et...
    if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {

        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
//verifier que l'email est valide.
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $confirmation_mail = "l'Adresse e-mail: $email, est valide";
        } else {
            $erreur_mail = "l'Adresse e-mail: $email, est invalide";
        }


        if (file_exists ($path) && $erreur == '') {
            //on ouvre le csv
            $csv_file = fopen($path,"a");
            //enregistré dans le CSV les données
            
            $user_data = array($_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["message"]);
            //enregistré vers csv_file dans la ligne user_data
            fputcsv ($csv_file,$user_data, ";") ;
            //fermé
            fclose ($csv_file);

            $confirmation_envoi = "Votre message à bien été envoyé";
        } else {
            echo "fichier pas trouvé";
        }
    }
?>
    

