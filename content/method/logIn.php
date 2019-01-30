<?php

    include '../BDD/app.php';


    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $mdp = $_POST["motDePasse"];
    $mdpVerif = $_POST["motDePasseVerif"];

    if($mdp == $mdpVerif)
    {
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
        echo $mdpHash;
        $addMembre = $bdd -> prepare('INSERT INTO membre(pseudo,mail,mdp) VALUE(:pseudo, :mail, :mdp)');
        $addMembre->execute(array(
            'pseudo'=>$pseudo,
            'mail'=>$mail,
            'mdp'=>$mdpHash
        ));
    }
    else
    {
        echo "error";
    };



        header('location: ../../index.php');

?>