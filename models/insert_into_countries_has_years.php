<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
require_once 'connect.php';

$row = 1;

// requête permettant d'aller chercher les id de la table countries
$select_countries = "SELECT id FROM countries WHERE country = :country";
// requête permettant d'aller chercher les id de la table years
$select_years = "SELECT id FROM years WHERE `year` = :years";
// requête permettant d'aller chercher les id de la table all_values
$select_happiness_rank = "SELECT id FROM all_values WHERE `value` = :values_happiness_rank";
$select_happiness_score = "SELECT id FROM all_values WHERE `value` = :values_happiness_score";
$select_health_score = "SELECT id FROM all_values WHERE `value` = :values_health_score";

// requête permettant de remplir la table countries_has_years avec l'id de chaque tables
$insert = "INSERT INTO countries_has_years (countries_id, years_id, values_happiness_rank_id, values_happiness_score_id, values_health_score_id) VALUES (:countries_id, :years_id, :values_happiness_rank_id, :values_happiness_score_id, :values_health_score_id)";

// préparation de toutes les requêtes select
$req_sel_countries = $conn->prepare($select_countries);
$req_sel_years = $conn->prepare($select_years);
$req_sel_happiness_rank = $conn->prepare($select_happiness_rank);
$req_sel_happiness_score = $conn->prepare($select_happiness_score);
$req_sel_health_score = $conn->prepare($select_health_score);

// préparation de la requête pour insérer les valeurs
$req_ins = $conn->prepare($insert);



if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        // récupération de la colonne des années dans le csv
        $req_sel_years->bindValue(':years', $data[11], PDO::PARAM_STR);
        $req_sel_years->execute();
        $res_years = $req_sel_years->fetch(PDO::FETCH_ASSOC);
        // récupération de la colonne des valeurs happiness rank dans le csv
        $req_sel_happiness_rank->bindValue(':values_happiness_rank', $data[1], PDO::PARAM_STR);
        $req_sel_happiness_rank->execute();
        $res_happy_rank = $req_sel_happiness_rank->fetch(PDO::FETCH_ASSOC);
        // récupération de la colonne des valeurs happiness score dans le csv
        $req_sel_happiness_score->bindValue(':values_happiness_score', $data[4], PDO::PARAM_STR);
        $req_sel_happiness_score->execute();
        $res_happy_score = $req_sel_happiness_score->fetch(PDO::FETCH_ASSOC);
        // récupération de la colonne des valeurs health score dans le csv
        $req_sel_health_score->bindValue(':values_health_score', $data[7], PDO::PARAM_STR);
        $req_sel_health_score->execute();
        
        $res_health_score = $req_sel_health_score->fetch(PDO::FETCH_ASSOC);
        
        // récupération de la colonne des countries dans le csv
        $req_sel_countries->bindValue(':country', $data[2], PDO::PARAM_STR);
        $req_sel_countries->execute();
        $res_countries = $req_sel_countries->fetch(PDO::FETCH_ASSOC);
        // insertion des liaisons des id des tables en fonction de leur valeurs sur le csv
        $req_ins->bindValue(':countries_id', $res_countries['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':years_id', $res_years['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_happiness_rank_id', $res_happy_rank['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_happiness_score_id', $res_happy_score['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_health_score_id', $res_health_score['id'], PDO::PARAM_STR);
        $req_ins->execute();
        
        
    }
    fclose($handle);
}