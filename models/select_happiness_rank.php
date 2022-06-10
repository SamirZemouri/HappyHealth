<?php

// Fonction permettant de récupérer tous les pays, toutes les années et toutes les valeurs dans la BDD
function get_health_score($conn){
    // Requête SQL pour récupérer les colonnes "country", "year" et "happiness rank"
    $req_select_happiness_rank = "SELECT country, `year`, `value` AS happiness_rank FROM countries_has_years INNER JOIN countries ON countries_has_years.countries_id = countries.id INNER JOIN years ON countries_has_years.years_id = years.id INNER JOIN all_values ON countries_has_years.values_happiness_rank_id = all_values.id";
    // Préparation de la requête
    $req_happiness_rank = $conn->prepare($req_select_happiness_rank);
    // Execution de la requête
    $req_happiness_rank->execute();
    // Récupération de la liste de tous les pays, toutes les années et toutes les valeurs pour le happiness rank
    $happiness_rank = $req_happiness_rank->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $happiness_rank;
}