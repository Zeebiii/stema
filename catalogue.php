<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/stema.css"/>
    <link rel="stylesheet" href="../css/owlCarousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../css/owlCarousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/sliderCatalogue.js"></script>
    <title>Bijouterie Stema</title>
</head>
<body>

    <div id="main">

        <div id="header">

            <div id="logo">
                <img src="../files/image/logo.png" alt="LogoMarque">
            </div>

            <div id="log">

                <form action="../method/logOn.php" method="post">

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
                        <a href="logIn.php">Log in</a>
                    
                    </fieldset>
                </form>


            </div>

            <div id="menu">

                <ul>
                    <li class="angleGauchce">
                        Acceuil
                    </li>
                    <li class="dropdown">
                        <a href="catalogue.php">Catalogue <i class="fas fa-arrow-down arrowDown"></i></a>  

                        <ul>
                            <li><a href="view/baguePerle.php">Nos bagues perle</a></li>
                            <li><a href="view/pierreFine.php">Nos pierres fine</a></li>
                            <li><a href="view/bagueCeramique.php">Nos bagues ceramique</a></li>
                            <li><a href="view/bagueOr.php" class="basDropdown">Nos bagues en or</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="view/boutique.php">Boutique</a>
                    </li>
                    <li>
                        <a href="view/chiffre.php">Chiffres</a> 
                    </li>
                    <li class="angleDroit">
                        <a href="view/contact.php">Contact</a> 
                    </li>
                </ul>

            </div> 

        </div>

        <div id="content">
    
            <h3>Nos bagues</h3>

            <div id="catalogueBague">

                <div id="catalogueBaguePerle">
                    bague perle

                    <div id="SliderBaguePerle">

                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><img src="../files/imgCatalogue/Bague_Marae_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Only_Tahiti_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Paea_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Morgana_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Griffon_Perle_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Electre_Or_Blanc_Grande.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBaguePierreFine">
                    bague pierre fine

                    <div id="SliderBaguePierreFine">

                        <div class="owl-carousel sliderBox sliderCatalogue">
                            <div class="item"><img src="../files/imgCatalogue/Bague_lune_violette_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_fleur_cognac_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_néon_améthyste_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_bora_palme_Grande.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBagueCeramique">
                    bague perle

                    <div id="SliderBagueCeremique">

                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><img src="../files/imgCatalogue/Bague_Marae_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Only_Tahiti_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Paea_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Morgana_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Griffon_Perle_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Electre_Or_Blanc_Grande.png" alt=""></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBagueOr">
                    bague perle

                    <div id="SliderBagueOr">

                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><img src="../files/imgCatalogue/Bague_Marae_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Only_Tahiti_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Paea_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Morgana_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Griffon_Perle_Grande.png" alt=""></div>
                            <div class="item"><img src="../files/imgCatalogue/Bague_Electre_Or_Blanc_Grande.png" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
                

            
        </div>

    </div>

</body>
</html>