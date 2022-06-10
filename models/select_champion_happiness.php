<?php

// Fonction permettant de récupérer tous les pays, toutes les années et toutes les valeurs dans la BDD
function get_happiness_champion($conn){
    // Requête SQL pour récupérer les colonnes "country", "year" et "happiness score"
    $req_select_happiness_champion = "SELECT country, `year`, MAX(`value`) FROM countries_has_years INNER JOIN countries ON countries_has_years.countries_id = countries.id INNER JOIN years ON countries_has_years.years_id = years.id INNER JOIN all_values ON countries_has_years.values_happiness_score_id = all_values.id WHERE `year` = :year GROUP BY country ORDER BY `value` DESC LIMIT 1";
    // Préparation de la requête
    $req_happiness_champion = $conn->prepare($req_select_happiness_champion);
    // Execution de la requête
    $req_happiness_champion->execute();
    // Récupération de la liste de tous les pays, toutes les années et toutes les valeurs pour le happiness score
    $happiness_champion = $req_happiness_champion5->fetchAll(PDO::FETCH_ASSOC);

    // Execution de la fonction
    return $happiness_champion;
}