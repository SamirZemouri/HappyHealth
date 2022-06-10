<?php

// Fonction permettant de récupérer tous les pays, toutes les années et toutes les valeurs dans la BDD
function get_health_score($conn){
    // Requête SQL pour récupérer les colonnes "country", "year" et "health score"
    $req_select_health_score = "SELECT country, `year`, `value` FROM countries_has_years INNER JOIN countries ON countries_has_years.countries_id = countries.id INNER JOIN years ON countries_has_years.years_id = years.id INNER JOIN all_values ON countries_has_years.values_health_score_id = all_values.id";
    // Préparation de la requête
    $req_health_score = $conn->prepare($req_select_health_score);
    // Execution de la requête
    $req_health_score->execute();
    // Récupération de la liste de tous les pays, toutes les années et toutes les valeurs pour le health score
    $health_score = $req_health_score->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $health_score;
}