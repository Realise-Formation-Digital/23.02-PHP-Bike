<?php
   // start or resume a session --------
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
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


<!-- Boostrap link for Js -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <!-- END JS LINK -->
</body>
</html>