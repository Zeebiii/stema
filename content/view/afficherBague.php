<?php

include '../BDD/app.php';

$idBague = $_GET['id'];

// echo $idBague;

$reqBague = $bdd->prepare('SELECT * FROM produit WHERE idProduit = :id');
$reqBague->execute(array(
    'id'=>$idBague
));

while($affBague = $reqBague->fetchObject())
{
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/stema.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <title>Bijouterie STEMA - <?=$affBague->nomProduit?></title>
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
                <a href="contact.php">Contact</a> 
            </li>
        </ul>

    </div>
</div>

<div id="content">


<h1><?=$affBague->nomProduit?></h1>
<h4><?php if(isset($affBague->genreProduit)){
        $typeBague = $affBague->genreProduit;
        switch($typeBague){
            case 1:
                $reqType = $bdd->prepare('SELECT nomGenre FROM genreProduit WHERE id = :id');
                $reqType->execute(array(
                    'id'=>$typeBague
                ));
                while($affType = $reqType->fetchObject())
                {
                    echo $affType->nomGenre;
                    echo "<br/>";
                }
                break;
            case 2:
                $reqType = $bdd->prepare('SELECT nomGenre FROM genreProduit WHERE id = :id');
                $reqType->execute(array(
                    'id'=>$typeBague
                ));
                while($affType = $reqType->fetchObject())
                {
                    echo $affType->nomGenre;
                    echo "<br/>";
                }
                break;
            case 3:
                $reqType = $bdd->prepare('SELECT nomGenre FROM genreProduit WHERE id = :id');
                $reqType->execute(array(
                    'id'=>$typeBague
                ));
                while($affType = $reqType->fetchObject())
                {
                    echo $affType->nomGenre;
                    echo "<br/>";
                }
                break;
            case 4:
                $reqType = $bdd->prepare('SELECT nomGenre FROM genreProduit WHERE id = :id');
                $reqType->execute(array(
                    'id'=>$typeBague
                ));
                while($affType = $reqType->fetchObject())
                {
                    echo $affType->nomGenre;
                    echo "<br/>";
                }
                break;
        }
    }?></h4>

<img src="<?=$affBague->imageProduit?>" alt="<?=$affBague->nomProduit?>">
<br/>
<div class="prix">
<?php
    if(isset($affBague->prixProduit)){
        echo "Prix : ".$affBague->prixProduit." €";
        echo "<br/>";
    }

?>

</div>
<div id="affCarateristiqueBague">
<?php
    
    

    if(isset($affBague->refProduit)){
        echo "Réference : ".$affBague->refProduit;
        echo "<br/>";
    }

    if(isset($affBague->metal)){
        echo "Métal : ".$affBague->metal;
        echo "<br/>";
    }
    if(isset($affBague->matiere)){
        echo "Matiere : ".$affBague->matiere;
        echo "<br/>";
    }
    if(isset($affBague->largeur)){
        echo "Largeur : ".$affBague->largeur;
        echo "<br/>";
    }
    if(isset($affBague->hauteur)){
        echo "Hauteur : ".$affBague->hauteur;
        echo "<br/>";
    }
    if(isset($affBague->poidsMoyen)){
        echo "Poids moyen : ".$affBague->poidsMoyen;
        echo "<br/>";
    }
    if(isset($affBague->poidsCarats)){
        echo "Poids en carats : ".$affBague->poidsCarats;
        echo "<br/>";
    }
    if(isset($affBague->rhodiage)){
        if($affBague->rhodiage = 1){
            echo "Rodhiage : Oui";
        }
        else{
            echo "Rodhiage : Non";
        }
        echo "<br/>";
    }
    if(isset($affBague->pierreCentrale)){
        echo "Pierre centrale : ".$affBague->pierreCentrale;
        echo "<br/>";
    }
    if(isset($affBague->poidsPierreCentrela)){
        echo "Poids pierre centrale : ".$affBague->poidsPierreCentrela;
        echo "<br/>";
    }
    if(isset($affBague->nombrePierreCentrale)){
        echo "Nombre pierres centrale : ".$affBague->nombrePierreCentrale;
        echo "<br/>";
    }
    if(isset($affBague->couleurPierreCentre)){
        echo "Couleur pierre centrale : ".$affBague->couleurPierreCentre;
        echo "<br/>";
    }
    if(isset($affBague->couleur)){
        echo "Couleur : ".$affBague->couleur;
        echo "<br/>";
    }
    if(isset($affBague->typePerle)){
        echo "Type de perle : ".$affBague->typePerle;
        echo "<br/>";
    }
    if(isset($affBague->diametrePerle)){
        echo "Diametre perle : ".$affBague->diametrePerle;
        echo "<br/>";
    }
    if(isset($affBague->nombrePerle)){
        echo "Nombre perles : ".$affBague->nombrePerle;
        echo "<br/>";
    }
    if(isset($affBague->typePierrePavage)){
        echo "Type pierre pavage : ".$affBague->typePierrePavage;
        echo "<br/>";
    }
    if(isset($affBague->formePierrePavage)){
        echo "Forme pierre pavage : ".$affBague->formePierrePavage;
        echo "<br/>";
    }
    if(isset($affBague->couleurPierrePavage)){
        echo "Couleur pierre pavage : ".$affBague->couleurPierrePavage;
        echo "<br/>";
    }
    if(isset($affBague->puretePierrePavage)){
        echo "Purete pierre pavage : ".$affBague->puretePierrePavage;
        echo "<br/>";
    }
    if(isset($affBague->nombrePierrePavage)){
        echo "Nombre pierre pavage : ".$affBague->nombrePierrePavage;
        echo "<br/>";
    }
    if(isset($affBague->typeDeSerti)){
        echo "Type de serti : ".$affBague->typeDeSerti;
        echo "<br/>";
    }
    if(isset($affBague->descriptionProduit)){
        echo "Description du produit : ".$affBague->descriptionProduit;
        echo "<br/>";
    }
    if(isset($affBague->sexe)){
        echo "Sexe : ".$affBague->sexe;
        echo "<br/>";
    }
    if(isset($affBague->fabriquant)){
        echo "Fabriquant : ".$affBague->fabriquant;
        echo "<br/>";
    }
    if(isset($affBague->refFabriquant)){
        echo "Reference fabriquant : ".$affBague->refFabriquant;
        echo "<br/>";
    }

    // parcourir propriete objet
    // echo "<br/>";
    // foreach($affBague as $key => $value) {
    //    if (!is_null($value)) {
    //         echo  "$key : $value\n <br/>";
            
    //    } 
    // }

?>
</div>






</div>





<br>
<br>
<br>
<br>
<br>

<?php

    include 'footer.php';


?>

</div>

</body>
</html>










<?php
}
?>