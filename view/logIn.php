<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="content/css/stema.css"/>
    <link rel="stylesheet" href="content/css/owlCarousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="content/css/owlCarousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <script src="content/js/jquery.min.js" type="application/javascript"></script>
    <script src="content/js/app.js" type="application/javascript"></script>
    <script src="content/js/owl.carousel.min.js" type="application/javascript"></script>
    <title>Bijouterie Stema</title>
</head>
<body>

    <form action="../method/logIn.php" method="post">
        <fieldset>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo"/>

            <label for="mail">E-mail</label>
            <input type="text" name="mail" id="mail"/>

            <label for="motDePasse">Mot de passe</label>
            <input type="password" name="motDePasse" id="motDePasse"/>

            <label for="motDePasseVerif">Verification du mot de passe</label>
            <input type="password" name="motDePasseVerif" id="motDePasseVerif"/>
            
            <input type="submit" value="Inscription"/>
        </fieldset>
    </form>

</body>
</html>