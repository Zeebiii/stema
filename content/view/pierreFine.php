<?php
    include '../BDD/app.php';
    $reqPerle = $bdd->query('SELECT * FROM produit WHERE genreProduit = (SELECT id FROM genreProduit WHERE nomGenre = "Bague Pierre Fine") ');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/stema.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">  

    <title>Bijouterie Stema</title>
</head>
<body>

    <div id="main">

        <div id="header">

            <div id="logo">
                <h2>Bijouterie STEMA</h2>
            </div>

            <div id="log">
                login
            </div>

            <div id="menu">

                <ul>
                    <li class="angleGauchce">
                        <a href="../../">Acceuil</a> 
                    </li>
                    <li class="dropdown">
                        <a href="catalogue.php">Catalogue <i class="fas fa-arrow-down arrowDown"></i></a>

                        <ul>
                            <li><a href="baguePerle.php">Nos bagues perle</a></li>
                            <li>Nos pierres fine</li>
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
                        <a href="contact.php">Contact</a> 
                    </li>
                </ul>

            </div>

        </div>

        <div id="content">
        <div class="listeBagueType">
        <?php
            while($affPerle = $reqPerle->fetchObject()){
                ?>
                    <a href="afficherBague.php?id=<?=$affPerle->idProduit?>">
                        <img src="<?=$affPerle->imageProduit?>" alt="<?=$affPerle->nomProduit?>">
                    </a>
                    


                <?php
            }
        ?>
        </div>
        </div>

    </div>

</body>
</html>