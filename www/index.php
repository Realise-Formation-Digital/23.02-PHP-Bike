
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet-Bike</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    
</head>


<body>
    <!-- partie de yasmina header -->
    <!-- route vers le header.php-->
    <?php include_once 'header.php'; ?>
    
    <!--Container responsive-with : second logo, title, text-->
    <section id="aboutus" class="container-sm text-center">
        <br>
        <br>
        <br>
        <!--second logo-->
        <img src="./pics/2logo.png" alt="second logo" width="60">
        <br>
        <br>
        <br>
        <!--Title-->
        <h2 class="text-center mb-3">A NEW GENERATION OF VINTAGE BIKE</h2>
        <!--Text-->
        <p class="text-secondary fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat pariatur
            hic delectus in placeat temporibus. Minus incidunt porro nemo, nisi autem sunt mollitia unde, temporibus,
            voluptate et alias ducimus impedit!Lorem Lorem ipsum dolor, sit
            amet consectetur adipisicing elit. Commodi distinctio temporibus ipsa. Debitis aut
        </p>
        <br>
        <br>
        <br>
    </section>
    <!-- partie de Daniel Vintage -->
    <section class="container-fluid p-0 m-0" id="vintage">
        <div class="row">
            <div class="col-md-8 p-0">
                <img src="./pics/bike_projet (3).png" class="img-fluid w-100 h-100 " alt="x">
            </div>
            <div class="col-md-4  m-0 p-0 text-center  align-self-end">
                <img src="pics/Screenshot 2023-03-03 at 12-27-53 AOD.png" class="img-fluid d-sm-block d-none mx-auto"
                    alt="">
                <h2 class="py-2 text-uppercase">vintage</h2>
                <p class="mb-5 px-5 pb-3 fw-lighter text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Facilis atque excepturi architecto culpa exercitationem nemo fugiat doloribus accusamus,
                    ratione ipsam possimus porro odio eos quam natus eveniet quidem amet minima.</p>
                <img src="./pics/bike_projet (4).png" class="img-fluid w-100 mt-5" alt="xx">
            </div>
        </div>
    </section>
    <!-- partie borosia Amin -->
    <section id="boriosa">
        <div class="container-fluid text-center p-0">
            <div class="row">
                <div class="col-sm-4 p-0 align-self-end">
                    <img src="pics/1.png" class="img-fluid d-none d-sm-block mx-auto" alt="">
                    <h2 class="h-10 mt-2">LA BORIOSA</h2>
                    <p class="fw-lighter text-secondary mb-5 ms-5">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Reiciendis sequi asperiores ab perferendis repellendus minima possimus velit explicabo
                        doloremque, culpa, laudantium ea saepe tenetur officiis modi dolores facilis cupiditate
                        beatae.
                    </p>
                    <img src="pics/bike-img.png" class="img-fluid w-100">
                </div>
                <div class="col-sm-8 p-0 ">
                    <img src="pics/Handcrafted 79 Vintage Bicycles.png" class="img-fluid w-100 h-100 d-none d-sm-block"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- partie Idris retro  -->
    <section id="retro" class="container-fluid text-center w-100 max-content p-0">
        <div class="row">
            <div class="col-sm-4 p-0">
                <img src="./pics/bicycle_IDRIS.png" class="img-fluid w-100 h-100">
            </div>
            <div class="col-sm-4 position-relative">
                <img src="./pics/bicycle_Theme-0.jpeg" class="img-fluid my-3 sprite1 d-none d-sm-block mx-auto">
                <h1 class="col text-center h-10 mt-2 ">RETRO BIKE - M.HULOT</h1><br>

                <p class="w-100 fw-light text-secondary">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a gallery of type
                    and scrambled it to make a type specimen book. It has
                    survived.
                </p>
                <img src="./pics/bike-3-img.png"
                    class="img-fluid w-100 position-absolute p-0 bottom-0 end-0  d-none d-sm-block">
            </div>
            <div class="col-sm-4 p-0">
                <img src="./pics/bike-3-bg-2.png" class="img-fluid w-100 h-100">
            </div>
        </div>
    </section>
    <!-- partie reseaux sociaux sylvain -->
    <section id="twitter" class="container text-center mt-5 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class="bg-secondary"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class="bg-secondary"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <i class="bi bi-twitter text-info fs-4 mb-4"></i>
                        <h6 class="mb-3 mt-3">Vélo New York @bikenewyork / 5 min</h6>
                        <p class="fst-italic text-secondary mb-5">C'est tellement beau à New York maintenant ! Pourquoi
                            ne pas faire du vélo.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <i class="bi bi-twitter text-info fs-4 mb-4"></i>
                        <h6 class="mb-3 mt-3">AOD New York @aod / 35 min</h6>
                        <p class="fst-italic text-secondary mb-5">Le cyclisme est une décision intelligente si vous
                            voulez continuer à prendre des décisions intelligentes.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <i class="bi bi-twitter text-info fs-4 mb-4"></i>
                        <h6 class="mb-3 mt-3">Vélos Vintage RI @vintagebike / 13 min</h6>
                        <p class="fst-italic text-secondary mb-5">Nous rendons les rues de New York plus sûres pour
                            leurs collègues cyclistes
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- partie grid sylvain -->
    <section id="shop">
        <div class="grid-photo-shop">
            <img src="./pics/img-block-own-1.png" class="img-fluid un-shop overflow-auto">
            <img src="./pics/img-block-own-2.png" class="img-fluid deux-shop overflow-auto">
            <img src="./pics/img-block-two-1.png" class="img-fluid trois-shop overflow-auto">
            <img src="./pics/img-block-two-2.png" class="img-fluid quatre-shop overflow-auto">
            <img src="./pics/img-block-three-1.png" class="img-fluid cinq-shop overflow-auto">
            <img src="./pics/img-block-own-3.png" class="img-fluid six-shop overflow-auto">
            <img src="./pics/img-block-three-2.png" class="img-fluid sept-shop overflow-auto">
            <img src="./pics/img-block-three-3.png" class="img-fluid huit-shop overflow-auto">
        </div>
    </section>
    <!-- partie bouton shop sylvain -->
    <section id="discover" class="w-100 bg-dark text-center">
        <button class="text-uppercase m-5 p-3 btn-shop">discover the shop</button>
    </section>
    <!-- Formulaire Commande Daniel et Mirco -->
    <section id="commande" class="mt-1">
        <div class="container-fluid text-center m-0">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <img id="imgid" src="pics/vélo-exemple.png" class="img-fluid w-50 p-0 rounded-5" alt="velo vintage">
                </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <select class="form-select form-select-lg my-2" aria-label="Default select example" id="bike">
                                <option selected>Sélectionner votre modèle</option>
                                <option value="1">UH-3 ce modèle vous offrira les sensations du tour de france.</option>
                                <option value="2">BH-9 ce modèle vous offrira compfort et le respect des autres become
                                    the king of the road</option>
                                <option value="3">KU-2 ce modèle fera de vous un dieu parmis les cyclistes become GOD !
                                </option>
                                <option value="4">VP-0 ce modèle polyvalent vous servira pour chaque occasion</option>
                                <option value="5">XY-5 ce modèle inspirer de la plus pur tradition vous plongera dans
                                    les années 50</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-success" type="submit" onclick="change()">Valider votre vélo</button>
                        </div>
                    </div>
                </div>
                <div class="container text-center mt-3">
                    <div class="row">
                        <div class="col-sm-8">
                            <p id="message" class="fs-3 text-primary-emphasis"></p>
                        </div>
                        <div class="col-sm-4">
                            <p id="prix" class="fs-2 text-success"></p>
                        </div>

                    </div>
                </div>
    </section>
    <!-- Commande kelian et yasmina -->
    <div class="container-fluid bg-light py-3">
        <h2 class="text-center mb-5 fs-2 fw-light">Choix des accesoires</h2>
        <div class="row">
            <div class="col-sm-4 offset-sm-3">
                <ul>
                    <li class="mx-1">
                        <img src="pics/kelian/selle.jpg" alt="" class="mx-1 img_acc"> <input type="checkbox"
                            class="mx-1" name="accessories" value="Selle" data-price="50"> <label for=""> Selle 50
                            CHF</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/guidon.jpg" alt="" class="mx-1 img_acc"> <input type="checkbox"
                            class="mx-1" name="accessories" value="Guidon" data-price="130"> <label for=""> Guidon
                            130CHF</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/freinage-velo.avif" alt="" class="mx-1 img_acc"> <input type="checkbox"
                            class="mx-1" name="accessories" value="Freins" data-price="30"> <label for=""> Freins
                            30CHF</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/jantes-de-trekking.jpg" alt="" class="mx-1 img_acc"> <input
                            type="checkbox" class="mx-1" name="accessories" value="Pneu" data-price="45"> <label for="">
                            Pneu 45CHF</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/lumiere_.jpg" alt="" class="mx-1 img_acc"> <input type="checkbox"
                            class="mx-1" name="accessories" value="Lumières" data-price="20"> <label for=""> Lumières
                            20CHF</label>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li class="mx-1">
                        <img src="pics/kelian/casque.jpeg" alt="" class="mx-1 img_acc"> <input class="mx-1"
                            type="checkbox" value="Casque" data-price="100" id="accessoire_1" name="accessories"><label
                            for="casque">casque
                            100 chf</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/chaines.jpeg" alt="" class="mx-1 img_acc"> <input class="mx-1"
                            type="checkbox" value="chaine-velo" data-price="20" id="accessoire_2"
                            name="accessories"><label for="chaîne">Chaîne à
                            pédaler 20 chf</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/pedale.jpeg" alt="" class="mx-1 img_acc"> <input class="mx-1"
                            type="checkbox" value="pédale" data-price="12" id="accessoire_3"
                            name="accessories"><label for="pédale">Pédale 12 chf</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/gardeboue.jpeg" alt="" class="mx-1 img_acc"> <input class="mx-1"
                            type="checkbox" value="garde-boue" data-price="32" id="accessoire_4"
                            name="accessories"><label for="garde boue">Garde
                            boue 32 chf</label>
                    </li>
                    <li class="mx-1">
                        <img src="pics/kelian/cadena.jpeg" alt="" class="mx-1 img_acc"> <input class="mx-1"
                            type="checkbox" value="cadena" data-price="55" id="accessoire_5" name="accessories"><label
                            for="cadena">Cadena
                            55 chf</label>
                    </li>
                </ul>
            </div>
            <!--Submit button-when clicked do the function checkeveryitems -->
            <div class="d-flex justify-content-center align-items-center mx-auto my-2">    
                <button class="btn btn-success mt-3"onclick="checkEverything();">Valider vos accessoires</button>
            </div>
                <!--Partie résultat de la commande-->
            <section id="result">
                <div class="container-fluid text-center">
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <img src="./pics/vélo-exemple.png" class="img-fluid w-100 rounded-5" id="imgChooseBike">
                            <h5 id="bikeDesc"></h5>
                        </div>
                        <div class="col-sm-4">
                            <ul id="listToShow" class="text-primary fst-italic">

                            </ul>
                        </div>
                        <div class="col-sm-4 fs-3 text-success">
                            <h3>Montant Total: <span id="sum"></span></h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- partie news letter sylvain -->
            <section id="news" class="text-center w-100">
                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <img src="./pics/header-logo.png" alt="" class="img-fluid mb-5">
                            <h6 class="fst-italic text-secondary mb-3">Stay on the saddle!</h6>
                            <form action="#">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="news"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-success" type="button" id="button-addon2">Go</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- route vers le footer.php-->
            <?php include_once 'footer.php'; ?>


    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>



</html>