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
    <script src="../js/maps.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/appCatalogue.js"></script>
    <script src="../js/lightbox.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvhtV87sG_z55g8t2I_m4T_K-PE9-Dz8g&callback=initMap"></script>
    <title>Bijouterie Stema</title>
</head>
<body>

    <div id="main">

    <div id="header">

        <div id="logo">
            <img src="../files/image/logo.png" alt="LogoMarque">
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
                        <a href="../../">Acceuil</a> 
                    </li>
                    <li class="dropdown">
                        <a href="catalogue.php">Catalogue <i class="fas fa-arrow-down arrowDown"></i></a>

                        <ul>
                            <li><a href="baguePerle.php"></a>Nos bagues perle</li>
                            <li><a href="pierreFine.php">Nos pierres fine</a></li>
                            <li><a href="bagueCeramique.php">¨Nos bagues ceramique</a></li>
                            <li><a href="bagueOr.php">Nos bagues en or</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="boutique.php">Boutique</a>
                    </li>
                    <li>
                        <a href="chiffre.php">Chiffres</a> 
                    </li>
                    <li class="angleDroit">
                        Contact 
                    </li>
                </ul>

            </div>

        </div>



        <div id="map"></div>
    <div id="coords"></div>


























        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <div id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.9258165518763!2d5.704227015759545!3d45.16835206115592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af4a775986fa3%3A0x174a149a7e06a1a8!2sLyc%C3%A9e+des+M%C3%A9tiers+Louise+Michel!5e0!3m2!1sfr!2sfr!4v1552473420763" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>



    </div>

</body>
</html>