<?php
    include '../BDD/appAdmin.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/stemaAdmin.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous"/>  
    <title>Bijouterie Stema</title>
</head>
<body>

    <H1>FUTURE MENU</H1>

    <form action="../method/sendAddProduit.php" method="post">
        <fieldset>
            <select name="typeProduit" id="typeProduit">
                <?php
                    for ($i = 1; $i <= $nbTypeProduit['nbType']; $i++){
                        $req = $bdd->prepare('SELECT nomGenre FROM genreProduit WHERE id = :id');
                        $req->execute(array(
                            'id'=>$i
                        ));
                        $aff = $req->fetch();
                        $nomGenre = $aff['nomGenre'];

                        $req = $bdd->prepare('SELECT id FROM genreProduit WHERE nomGenre = :nom');
                        $req->execute(array(
                            'nom'=>$nomGenre
                        ));
                        $aff = $req->fetch();
                        $idGenre = $aff['id'];
                        echo "<option value=\"$idGenre\">".$nomGenre;
                    }
                ?>
            </select>
            <br/>
            <label for="nomProduit">Nom du produit</label>
                <input type="text" name="nomProduit" id="nomProduit">
            <br/>
            <label for="refProduit">Réference du produit</label>
                <input type="text" name="refProduit" id="refProduit">
            <br/>
            <label for="prixProduit">Prix du produit</label>
                <input type="number" name="prixProduit" id="prixProduit" min=0 step=0.01>
            <br/>
            <label for="metalProduit">Métal du produit</label>
                <input type="text" name="metalProduit" id="metalProduit">
            <br/>
            <label for="matiere">matière du produit</label>
                <input type="text" name="matiere" id="matiere">
            <br/>
            <label for="largeur">largeur du produit</label>
                <input type="number" name="largeur" id="largeur" min=0 step=0.01>
            <br/>
            <label for="hauteur">hauteur du produit</label>
                <input type="number" name="hauteur" id="hauteur" min=0 step=0.01>
            <br/>
            <label for="poids">poids du produit</label>
                <input type="number" name="poids" id="poids" min=0 step=0.01>
            <br/>
            <label for="poidsCarats">poids en carats du produit</label>
                <input type="number" name="poidsCarats" id="poidsCarats" min=0 step=0.01>
            <br/>
            <label for="rhodiage">Rhodiage</label>
            <select name="rhodiage" id="rhodiage">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
            <br/>
            <label for="pierreCentrale">pierreCentrale</label>
                <input type="text" name="pierreCentrale" id="pierreCentrale">
            <br/>
            <label for="poidsPierreCentrale">poidsPierreCentrale</label>
                <input type="number" name="poidsPierreCentrale" id="poidsPierreCentrale" min=0 step=0.01>
            <br/>
            <label for="nbPierreCentrale">nbPierreCentrale</label>
                <input type="number" name="nbPierreCentrale" id="nbPierreCentrale" min=0 step=0.01>
            <br/>
            <label for="CouleurPierreCentrale">CouleurPierreCentrale</label>
                <input type="text" name="CouleurPierreCentrale" id="CouleurPierreCentrale">
            <br/>
            <label for="diametrePerle">diametrePerle</label>
                <input type="text" name="diametrePerle" id="diametrePerle">
            <br/>
            <label for="typePierre">typePierre</label>
                <input type="text" name="typePierre" id="typePierre">
            <br/>
            <label for="nbPerle">nbPerle</label>
                <input type="number" name="nbPerle" id="nbPerle" min=0 step=0.01>
            <br/>
            <label for="typePierrePavage">typePierrePavage</label>
                <input type="text" name="typePierrePavage" id="typePierrePavage">
            <br/>
            <label for="formePierrePavage">formePierrePavage</label>
                <input type="text" name="formePierrePavage" id="formePierrePavage">
            <br/>
            <label for="couleurPierrePavage">couleurPierrePavage</label>
                <input type="text" name="couleurPierrePavage" id="couleurPierrePavage">
            <br/>
            <label for="puretePierrePavage">puretePierrePavage</label>
                <input type="text" name="puretePierrePavage" id="puretePierrePavage">
            <br/>
            <label for="nbPierrePavage">nbPierrePavage</label>
                <input type="text" name="nbPierrePavage" id="nbPierrePavage">
            <br/>
            <label for="typeSerti">typeSerti</label>
                <input type="text" name="typeSerti" id="typeSerti">
            <br/>
            <label for="descProduit">descProduit</label>
                <input type="text" name="descProduit" id="descProduit">
            <br/>
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe">
                <option value="femme">Femme</option>
                <option value="homme">homme</option>
                <option value="mixte">mixte</option>
            </select>
            <br/>
            <label for="fabriquant">fabriquant</label>
                <input type="text" name="fabriquant" id="fabriquant">
            <br/>
            <label for="refFabriquant">refFabriquant</label>
                <input type="text" name="refFabriquant" id="refFabriquant">
            <br/>
            <label for="imgProduit">imgProduit</label>
                <input type="text" name="imgProduit" id="imgProduit">
            <br/>
            <input type="submit" value="Envoyer">
        </fieldset>
        
    </form>

    
</body>
</html>