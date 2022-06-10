<?php

// Fonction permettant de récupérer toutes les années dans la BDD
function get_years($conn){
    // Requête SQL pour récupérer la colonne "year" dans la table "years"
    $req_select_years = "SELECT `year` FROM years";
    // Préparation de la requête
    $req_years = $conn->prepare($req_select_years);
    // Execution de la requête
    $req_years->execute();
    // Récupération de la liste de toutes les années
    $years = $req_years->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $years;
}