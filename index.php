<?php
    include 'content/BDD/app.php';
    $reqSlider = $bdd->query('SELECT * FROM produit');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="content/css/stema.css"/>
    <link rel="stylesheet" href="content/css/lightbox/lightbox.css"/>
    <link rel="stylesheet" href="content/css/owlCarousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="content/css/owlCarousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <script src="content/js/jquery.min.js"></script>
    <script src="content/js/app.js"></script>
    <script src="content/js/lightbox.js"></script>
    <script src="content/js/owl.carousel.min.js"></script>
    <title>Bijouterie Stema</title>
</head>
<body>

    <div id="main">

        <div id="header">

            <div id="logo">
                <img src="content/files/image/logo.png" alt="LogoMarque">
            </div>

            <div id="log">

                <form action="content/method/logOn.php" method="post">

                    <fieldset id="fieldsetLog">

                        <label for="pseudo">Pseudo</label>
                        <!-- <br/> -->
                        <input type="text" name="pseudo" id="pseudo"/>
                        <!-- <br/> -->
                        <label for="password">password</label>
                        <!-- <br/> -->
                        <input type="password" name="pass" id="pass"/>
                        <!-- <br/> -->

                        <input type="submit" value="Log on"/>
                        <br/>
                        <a href="content/view/logIn.php">Log in</a>
                    
                    </fieldset>
                </form>


            </div>

            <div id="menu">

                <ul>
                    <li class="angleGauchce">
                        Acceuil
                    </li>
                    <li class="dropdown">
                        <a href="content/view/catalogue.php">Catalogue <i class="fas fa-arrow-down arrowDown"></i></a>  

                        <ul>
                            <li><a href="content/view/baguePerle.php">Nos bagues perle</a></li>
                            <li><a href="content/view/pierreFine.php">Nos pierres fine</a></li>
                            <li><a href="content/view/bagueCeramique.php">Nos bagues ceramique</a></li>
                            <li><a href="content/view/bagueOr.php" class="basDropdown">Nos bagues en or</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="content/view/boutique.php">Boutique</a>
                    </li>
                    <li>
                        <a href="content/view/chiffre.php">Chiffres</a> 
                    </li>
                    <li class="angleDroit">
                        <a href="content/view/contact.php">Contact</a> 
                    </li>
                </ul>

            </div> 

        </div>        <!--Fin du header-->

        <!-- Contenu de la page -->

        <div id="content">
                <div id="galerie">
                <h3>Un gros titre</h3>
                <div id="sliderProd">
                    <div class="owl-carousel owl-theme">

                        <?php
                            while($affSlider = $reqSlider->fetchObject()) {
                        ?>
                            <div class="item"><a href="content/view/afficherBague?id=<?=$affSlider->idProduit?>"><img src="content/content/<?=$affSlider->imageProduit?>" alt="<?=$affSlider->nomProduit?>"></a></div>
                            
                        <?php
                            } 
                        ?>
                        <!-- <div class="item"><img src="content/files/imgCatalogue/Bague_adorable_jaune_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_Morgana_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_ellipses_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_Hypnos_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_fleur_cognac_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_Xevelite_noire_diamants_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_Only_Tahiti_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_Marae_Grande.png" alt=""></div>
                        <div class="item"><img src="content/files/imgCatalogue/Bague_néon_améthyste_Grande.png" alt=""></div> -->
                    </div>
                </div>
                <div id="presentation">

                    <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae libero sed nulla laoreet egestas. Aenean pellentesque ligula 
                        placerat porttitor 
                        sodales. Pellentesque venenatis viverra mollis. Suspendisse potenti. Ut turpis est, rhoncus nec blandit sit amet, commodo ac urna. Proin 
                        aliquet vitae mi 
                        id aliquet. Ut at mi urna. Maecenas congue velit nulla, non molestie sem viverra sit amet.

                        Fusce at ante feugiat, pulvinar ipsum id, dignissim orci. Suspendisse massa dui, lacinia vitae tincidunt vitae, porttitor eu neque. 
                        In vitae diam in leo ullamcorper convallis sed ut justo. Maecenas congue et sapien eu pharetra. Aliquam magna ligula, semper sit amet 
                        tortor quis, blandit venenatis magna. Ut interdum nisi sed tortor feugiat, eu rutrum felis ultrices. Pellentesque sit amet mauris sagittis, 
                        consequat velit in, suscipit mi. Curabitur vel lorem nec nulla convallis vulputate a ut enim. Curabitur sit amet iaculis leo. Donec posuere 
                        ex lectus, et fringilla nulla blandit vitae. Vestibulum sollicitudin lacus est, quis aliquam turpis dictum vitae.

                        Aliquam eu libero fringilla, semper quam a, sagittis elit. Vestibulum condimentum cursus nisi at aliquet. Ut eros ante, sollicitudin 
                        quis efficitur sit amet, posuere et sapien. Cras scelerisque euismod magna, a mollis eros. Curabitur lacinia arcu dolor, eget pharetra 
                        lacus pellentesque eget. Suspendisse tincidunt consequat nulla. Vestibulum lorem mi, interdum eget massa at, imperdiet scelerisque arcu. 
                        Morbi venenatis lacus vitae libero mollis semper.

                        Mauris eget ante consequat, ultrices purus sed, tempor enim. Nullam in ultricies tellus, et cursus elit. Pellentesque sagittis convallis 
                        ipsum. Cras auctor auctor tellus ac sagittis. Sed eu nisl sit amet lacus rutrum vehicula. Nullam eu ex tortor. Ut ornare augue sit amet 
                        leo tristique, at sagittis neque blandit. Praesent eget molestie lorem, a molestie nisi. Aenean auctor hendrerit mattis. Sed viverra enim eu arcu euismod, rutrum interdum nulla mollis. Nunc sodales condimentum nisi, nec gravida urna. Aenean neque leo, condimentum quis ultricies blandit, egestas vitae metus. Praesent gravida cursus lectus, gravida sagittis justo aliquam sed. Nam eu diam sit amet enim condimentum volutpat.

                        Morbi nunc ex, tempor quis iaculis in, mollis eu ex. Aliquam eleifend neque sit amet purus porta, a consequat mi pulvinar. In tincidunt 
                        lectus vitae mi hendrerit, non cursus odio ultrices. Etiam auctor mattis est in varius. Integer tincidunt dui id quam lacinia, a mollis 
                        nibh iaculis. Nunc orci odio, fermentum at felis tincidunt, malesuada viverra turpis. Aliquam lobortis tincidunt metus et maximus.

                    </p>
                </div>
            </div>     
        </div>



        <!-- Pied-de-page -->


       <div id="footer">
       
            <?php 
                include 'content/view/footer.php';
            ?>

       </div>
        

    </div>




</body>
</html>

