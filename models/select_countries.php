<?php

// Fonction permettant de récupérer tous les pays dans la BDD
function get_countries($conn){
    // Requête SQL pour récupérer la colonne "country" dans la table "countries"
    $req_select_countries = "SELECT country FROM countries";
    // Préparation de la requête
    $req_countries = $conn->prepare($req_select_countries);
    // Execution de la requête
    $req_countries->execute();
    // Récupération de la liste de tous les pays
    $countries = $req_countries->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $countries;
}