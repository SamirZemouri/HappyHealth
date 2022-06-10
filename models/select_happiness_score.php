<?php

// Fonction permettant de récupérer tous les pays, toutes les années et toutes les valeurs dans la BDD
function get_happiness_score($conn){
    // Requête SQL pour récupérer les colonnes "country", "year" et "happiness score"
    $req_select_happiness_score = "SELECT country, `year`, `value` FROM countries_has_years INNER JOIN countries ON countries_has_years.countries_id = countries.id INNER JOIN years ON countries_has_years.years_id = years.id INNER JOIN all_values ON countries_has_years.values_happiness_score_id = all_values.id";
    // Préparation de la requête
    $req_happiness_score = $conn->prepare($req_select_happiness_score);
    // Execution de la requête
    $req_happiness_score->execute();
    // Récupération de la liste de tous les pays, toutes les années et toutes les valeurs pour le happiness score
    $happiness_score = $req_happiness_score->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $happiness_score;
}