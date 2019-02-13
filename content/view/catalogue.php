<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/stema.css"/>
    <link rel="stylesheet" href="../css/owlCarousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../css/owlCarousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="../css/lightbox/lightbox.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/appCatalogue.js"></script>
    <script src="../js/lightbox.js"></script>
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
                        <a href="../../">Acceuil</a> 
                    </li>
                    <li class="dropdown">
                        Catalogue <i class="fas fa-arrow-down arrowDown"></i>

                        <ul>
                            <li><a href="baguePerle.php">Nos bagues perle</a></li>
                            <li><a href="pierreFine.php">Nos pierres fine</a></li>
                            <li><a href="bagueCeramique.php">Nos bagues ceramique</a></li>
                            <li><a href="bagueOr.php" class="basDropdown">Nos bagues en or</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="boutique.php">Boutique</a>
                    </li>
                    <li>
                        <a href="chiffre.php">Chiffres</a> 
                    </li>
                    <li class="angleDroit">
                        <a href="contact.php">Contact</a> 
                    </li>
                </ul>

            </div> 

        </div>

        <div id="content">
    
            <h3 id="NosBagues">Nos bagues</h3>

            <div id="catalogueBague">

                <div id="catalogueBaguePerle">
                    
                    <div class="titreSliderBague">Bague perle</div>

                    <div id="SliderBaguePerle">

                        <div class="descCatalogue">
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus mauris, vulputate in ex nec, 
                            interdum efficitur quam. Donec accumsan ut mi in dictum. Curabitur lorem turpis, efficitur vel egestas ut, 
                            vulputate eget nisi.
                            <br/>
                            <a href="#">Voir plus</a>

                        </div>
                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><a href="../files/imgCatalogue/Bague_Marae_Grande.png" data-lightbox="Marae"><img src="../files/imgCatalogue/Bague_Marae_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Only_Tahiti_Grande.png" data-lightbox="Only_Tahiti"><img src="../files/imgCatalogue/Bague_Only_Tahiti_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Paea_Grande.png" data-lightbox="Paza"><img src="../files/imgCatalogue/Bague_Paea_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Morgana_Grande.png" data-lightbox="Morgana"><img src="../files/imgCatalogue/Bague_Morgana_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Griffon_Perle_Grande.png" data-lightbox="Griffon_Perle"><img src="../files/imgCatalogue/Bague_Griffon_Perle_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Electre_Or_Blanc_Grande.png" data-lightbox="Electre_Or_Blanc"><img src="../files/imgCatalogue/Bague_Electre_Or_Blanc_Grande.png" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBaguePierreFine">
                    
                    <div class="titreSliderBague">Bague pierre fine</div>

                    <div id="SliderBaguePierreFine">
                    <div class="descCatalogue">
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus mauris, vulputate in ex nec, 
                            interdum efficitur quam. Donec accumsan ut mi in dictum. Curabitur lorem turpis, efficitur vel egestas ut, 
                            vulputate eget nisi.
                            <br/>
                            <a href="#">Voir plus</a>

                        </div>

                        <div class="owl-carousel sliderBox sliderCatalogue">
                            <div class="item"><a href="../files/imgCatalogue/Bague_lune_violette_Grande.png" data-lightbox="lune_violette"><img src="../files/imgCatalogue/Bague_lune_violette_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_fleur_cognac_Grande.png" data-lightbox="fleur_cognac"><img src="../files/imgCatalogue/Bague_fleur_cognac_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_neon_amethyste_Grande.png" data-lightbox="neon_amethyste"><img src="../files/imgCatalogue/Bague_neon_amethyste_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_bora_palme_Grande.png" data-lightbox="bora_palme"><img src="../files/imgCatalogue/Bague_bora_palme_Grande.png" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBagueCeramique">
                    
                    <div class="titreSliderBague">Bague ceramique</div>

                    <div id="SliderBagueCeremique">
                    <div class="descCatalogue">
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus mauris, vulputate in ex nec, 
                            interdum efficitur quam. Donec accumsan ut mi in dictum. Curabitur lorem turpis, efficitur vel egestas ut, 
                            vulputate eget nisi.
                            <br/>
                            <a href="#">Voir plus</a>

                        </div>

                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><a href="../files/imgCatalogue/Bague_black_sparkle_Grande.png" data-lightbox="black_sparkle"><img src="../files/imgCatalogue/Bague_black_sparkle_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Xevelite_noire_diamants_Grande.png" data-lightbox="Xevelite_noire"><img src="../files/imgCatalogue/Bague_Xevelite_noire_diamants_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Nyx_Grande.png" data-lightbox="Nyx"><img src="../files/imgCatalogue/Bague_Nyx_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Hypnos_Grande.png" data-lightbox="Hypnos"><img src="../files/imgCatalogue/Bague_Hypnos_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_White_dawn_Grande.png" data-lightbox="White_dawn"><img src="../files/imgCatalogue/Bague_White_dawn_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Gourmette_Grande.png" data-lightbox="Gourmette"><img src="../files/imgCatalogue/Bague_Gourmette_Grande.png" alt=""></a></div>
                        </div>
                    </div>
                </div>

                <div id="catalogueBagueOr">
                    
                    <div class="titreSliderBague">Bague or</div>
                    

                    <div id="SliderBagueOr">
                    <div class="descCatalogue">
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus mauris, vulputate in ex nec, 
                            interdum efficitur quam. Donec accumsan ut mi in dictum. Curabitur lorem turpis, efficitur vel egestas ut, 
                            vulputate eget nisi.

                            <br/>
                            <a href="#">Voir plus</a>

                        </div>

                        <div class="owl-carousel owl-theme sliderCatalogue">
                            <div class="item"><a href="../files/imgCatalogue/Bague_Angel_Or_Jaune_Grande.png" data-lightbox="Angel_Or_Jaune"><img src="../files/imgCatalogue/Bague_Angel_Or_Jaune_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_Angel_Or_Blanc_Grande.png" data-lightbox="Angel_Or_Blanc"><img src="../files/imgCatalogue/Bague_Angel_Or_Blanc_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_adorable_jaune_Grande.png" data-lightbox="adorable_jaune"><img src="../files/imgCatalogue/Bague_adorable_jaune_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_ellipses_Grande.png" data-lightbox="ellipses"><img src="../files/imgCatalogue/Bague_ellipses_Grande.png" alt=""></a></div>
                            <div class="item"><a href="../files/imgCatalogue/Bague_brindille_or_blanc_Grande.png" data-lightbox="brindille_or"><img src="../files/imgCatalogue/Bague_brindille_or_blanc_Grande.png" alt=""></a></div>
                        </div>
                    </div>
                    
                </div>

            </div>
                

            
        </div>

        <div id="footer">
            <?php
                include 'footer.php';
            ?>
        </div>

    </div>

</body>
</html>