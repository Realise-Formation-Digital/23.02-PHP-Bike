<?php
   // start or resume a session --------
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Content</title>
</head>
<body>

 <!-- APPEL LE HEADER DE LA PAGE -->
<?php include "header.php"; ?>
<?php
   // test if the session was previously started ---
   if(isset($_SESSION['nickname'])){
      require "reader.php";
?>
<!-- création d'un tableau dynamique avec html qui affiche les données du fichier CSV -->
<div class="container text-center align-self-center w-100 h-100">
   <div class="row">
      <div class="col-sm">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <th>NOM</th>
                  <th>PRÉNOM</th>
                  <th>EMAIL</th>
                  <th>MESSAGE</th>
               </thead>
               <tbody>
               <!-- BOUCLE QUI AFFICHE TOUTES LES INFOS ET CREE UNE NOUVELLE LIGNE
                  POUR CHAQUE UTILISATEUR -->
               <?php
                  for($i = 0; $i < $cntr - 1; $i++ ){
               ?>   
                  <tr>
                     <td><?= $surname[$i] ?></td>
                     <td><?= $name[$i] ?></td>
                     <td><?= $email[$i] ?></td>
                     <td><?= $message[$i] ?></td>
                  </tr>
                  
               <?php
               }
               ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<?php
   }
   // if the session wasn't started it shows the error page
   else{
      include "401.php";
   }
?>
<!-- APPEL LE FOOTER DE LA PAGE -->
<?php include "footer.php"; ?>
</body>
</html>