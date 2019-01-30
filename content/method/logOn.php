<?php 

    include '../BDD/app.php';

    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["pass"];

    $mdpVerif = $bdd->prepare("SELECT mdp FROM membre WHERE pseudo = :pseudo");
    $mdpVerif->execute(array(
        'pseudo'=>$pseudo
    ));

    // password_verify($mdp, $mdpVerif)

    var_dump(password_verify($mdp, $mdpVerif));

    if (password_verify($mdp, $mdpVerif)) {
        echo 'Le mot de passe est valide !';
    } else {
        echo 'Le mot de passe est invalide.';
    }


    // if(password_verify($mdp, $mdpVerif["mdp"]) = true)
    // {
    //     echo "ok";
    // }
    // else
    // {
    //     echo "not";
    // };

?>