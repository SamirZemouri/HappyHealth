<?php

// Fonction permettant de récupérer tous les pays dans la BDD
function join_countries($conn){
    // Requête SQL pour récupérer la colonne "country" dans la table "countries"
    $req_join_on_countries = "SELECT country, region FROM countries INNER JOIN regions ON regions.id = countries.id_regions";
    // Préparation de la requête
    $req_join_regions = $conn->prepare($req_join_on_countries);
    // Execution de la requête
    $req_join_regions->execute();
    // Récupération de la liste de tous les pays
    $join_regions = $req_join_regions->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $join_regions;
}