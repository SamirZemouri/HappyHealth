<?php

// Fonction permettant de récupérer tous les pays dans la BDD
function get_years($conn){
    // Requête SQL pour récupérer la colonne "country" dans la table "countries"
    $req_select_years = "SELECT `year` FROM years";
    // Préparation de la requête
    $req_years = $conn->prepare($req_select_years);
    // Execution de la requête
    $req_years->execute();
    // Récupération de la liste de tous les pays
    $years = $req_years->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $years;
}