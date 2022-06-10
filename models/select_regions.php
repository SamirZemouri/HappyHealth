<?php

// Fonction permettant de récupérer toutes les régions dans la BDD
function get_region($conn){
    // Requête SQL pour récupérer la colonne "region" dans la table "regions"
    $req_select_regions = "SELECT region FROM regions";
    // Préparation de la requête
    $req_region = $conn->prepare($req_select_regions);
    // Execution de la requête
    $req_regions->execute();
    // Récupération de la liste de toutes les régions
    $regions = $req_regions->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $regions;
}