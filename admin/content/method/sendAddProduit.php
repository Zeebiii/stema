<?php

    include '../BDD/appAdmin.php';

    $typeProduit = $_POST['typeProduit'];
    $nomProduit = $_POST['nomProduit'];
    $refProduit = $_POST['refProduit'];
    $prixProduit = $_POST['prixProduit'];
    $metalProduit = $_POST['metalProduit'];
    $matiereProduit = $_POST['matiere'];
    $largeurProduit = $_POST['largeur'];
    $hauteurProduit = $_POST['hauteur'];
    $poidsProduit = $_POST['poids'];
    $poidsCaratsProduit = $_POST['poidsCarats'];

    $rhodiage = $_POST['rhodiage'];
    $pierreCentrale = $_POST['pierreCentrale'];
    $poidsPierreCentrale = $_POST['poidsPierreCentrale'];
    $nbPierreCentrale = $_POST['nbPierreCentrale'];
    $couleurPierreCentrale = $_POST['CouleurPierreCentrale'];
    $typePierre = $_POST['typePierre'];
    $diametrePerle = $_POST['diametrePerle'];
    $nbPerle = $_POST['nbPerle'];
    $typePierrePavage = $_POST['typePierrePavage'];
    $formePierrePavage= $_POST['formePierrePavage'];
    $couleurPierrePavage = $_POST['couleurPierrePavage'];
    $puretePierrePavage = $_POST['puretePierrePavage'];
    $nbPierrePavage = $_POST['nbPierrePavage'];
    $typeSerti = $_POST['typeSerti'];
    $descProduit = $_POST['descProduit'];
    $sexe = $_POST['sexe'];
    $fabriquant = $_POST['fabriquant'];
    $refFabriquant = $_POST['refFabriquant'];
    $imgProduit = $_POST['imgProduit'];

    $add = $bdd->prepare('INSERT INTO produit(genreProduit,
                                              nomProduit,
                                              refProduit,
                                              prixProduit,
                                              metal,
                                              matiere,
                                              largeur,
                                              hauteur,
                                              poids,
                                              poidsCarats,
                                              rhodiage,
                                              pierreCentrale,
                                              poidsPierreCentrale,
                                              nombrePierreCentrale,
                                              couleurPierreCentre,
                                              typePerle,
                                              diametrePerle,
                                              nombrePerle,
                                              typePierrePavage,
                                              formePierrePavage,
                                              couleurPierrePavage,
                                              puretePierrePavage,
                                              nombrePierrePavage,
                                              typeDeSerti,
                                              descriptionProduit,
                                              sexe,
                                              fabriquant,
                                              refFabriquant,
                                              imageProduit) VALUES(:genreProduit,
                                                                  :nomProduit,
                                                                  :refProduit,
                                                                  :prixProduit,
                                                                  :metal,
                                                                  :matiere,
                                                                  :largeur,
                                                                  :hauteur,
                                                                  :poids,
                                                                  :poidsCarats,
                                                                  :rhodiage,
                                                                  :pierreCentrale,
                                                                  :poidsPierreCentrale,
                                                                  :nombrePierreCentrale,
                                                                  :couleurPierreCentre,
                                                                  :typePerle,
                                                                  :diametrePerle,
                                                                  :nombrePerle,
                                                                  :typePierrePavage,
                                                                  :formePierrePavage,
                                                                  :couleurPierrePavage,
                                                                  :puretePierrePavage,
                                                                  :nombrePierrePavage,
                                                                  :typeDeSerti,
                                                                  :descriptionProduit,
                                                                  :sexe,
                                                                  :fabriquant,
                                                                  :refFabriquant,
                                                                  :imageProduit)');

                                                                  
    
       
    $add->execute(array(
        'genreProduit'=>$typeProduit,
        'nomProduit'=>$nomProduit,
        'refProduit'=>$refProduit,
        'prixProduit'=>$prixProduit,
        'metal'=>$metalProduit,
        'matiere'=>$matiereProduit,
        'largeur'=>$largeurProduit,
        'hauteur'=>$hauteurProduit,
        'poids'=>$poidsProduit,
        'poidsCarats'=>$poidsCaratsProduit,
        'rhodiage'=>$rhodiage,
        'pierreCentrale'=>$pierreCentrale,
        'poidsPierreCentrale'=>$poidsPierreCentrale,
        'nombrePierreCentrale'=>$nbPierreCentrale,
        'couleurPierreCentre'=>$couleurPierreCentrale,
        'typePerle'=>$typePierre,
        'diametrePerle'=>$diametrePerle,
        'nombrePerle'=>$nbPerle,
        'typePierrePavage'=>$typePierrePavage,
        'formePierrePavage'=>$formePierrePavage,
        'couleurPierrePavage'=>$couleurPierrePavage,
        'puretePierrePavage'=>$puretePierrePavage,
        'nombrePierrePavage'=>$nbPierrePavage,
        'typeDeSerti'=>$typeSerti,
        'descriptionProduit'=>$descProduit,
        'sexe'=>$sexe,
        'fabriquant'=>$fabriquant,
        'refFabriquant'=>$refFabriquant,
        'imageProduit'=>$imgProduit
    ));

    

    header('location: ../view/addProduit.php');

?>








