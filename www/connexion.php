<?php

    //Nos variables
        $path = 'user.csv';
        $error = '';
        $success = '';

    //Messsage de confirmation création ouverture de session
    echo '<script>alert("Votre session à été crée avec succès veuillez vous connecter")</script>';
    //on verifie que le formulaire à été remplie
    if(!empty($_POST)){
        //le formulaire à été envoyé
        //vérification que tous les champs soient remplies
        if(isset($_POST["nickname"], $_POST["pass"]) && !empty($_POST["nickname"]) && !empty($_POST["pass"])){
            //le formulaire est complet
        
        

    }
}
    include 'header.php';  
    ?>
    
    <h1>Connexion</h1>

    <form method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="nickname" id="pseudo">
        </div>

        <div>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
        <button type="submit">Connexion</button>
    </form>

    <p class="success"><?php if($success) echo $success; ?></p>

    <?php
   include 'footer.php';
    ?>