<?php

define('db_host', 'mysql:host=localhost;dbname=stema');

define('db_login', 'root');

define('db_pass', '');

try
{
    $bdd = new PDO(db_host, db_login, db_pass);
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="content/css/owlCarousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="content/css/owlCarousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <script src="content/js/jquery.min.js"></script>
    <script src="content/js/owl.carousel.min.js"></script>
    <script src="content/js/app.js"></script>

    <title>Document</title>
</head>
<body>

    <?php




        

    ?>




    <div class="owl-carousel owl-theme">
        
    </div>
</body>
</html>