<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
include 'connect.php';

$row = 1;

$select_countries = "SELECT id FROM countries WHERE country = :country";
$select_regions = "SELECT id FROM regions WHERE region = :region";
$select_years = "SELECT id FROM years WHERE year = :years";
$select_happiness_rank = "SELECT id FROM all_values WHERE `value` = :values_happiness_rank";
$select_happiness_score = "SELECT id FROM all_values WHERE value = :values_happiness_score";
$select_health_score = "SELECT id FROM all_values WHERE value = :values_health_score";

$insert = "INSERT INTO countries_has_years (countries_id, countries_regions_id, years_id, values_happiness_rank_id, values_happiness_score_id, values_health_score_id) VALUES (:countries_id, :countries_regions_id, :years_id, :values_happiness_rank_id, :values_happiness_score_id, :values_health_score_id)";

$req_sel_countries = $conn->prepare($select_countries);
$req_sel_regions = $conn->prepare($select_regions);
$req_sel_years = $conn->prepare($select_years);
$req_sel_happiness_rank = $conn->prepare($select_happiness_rank);
$req_sel_happiness_score = $conn->prepare($select_happiness_score);
$req_sel_health_score = $conn->prepare($select_health_score);

$req_ins = $conn->prepare($insert);



if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;

        $req_sel_years->bindValue(':years', $data[11], PDO::PARAM_INT);
        $req_sel_years->execute();
        $res_years = $req_sel_years->fetch(PDO::FETCH_ASSOC);

        $req_sel_happiness_rank->bindValue(':values_happiness_rank', $data[1], PDO::PARAM_STR);
        $req_sel_happiness_rank->execute();
        $res_happy_rank = $req_sel_happiness_rank->fetch(PDO::FETCH_ASSOC);

        $req_sel_happiness_score->bindValue(':values_happiness_score', $data[4], PDO::PARAM_STR);
        $req_sel_happiness_score->execute();
        $res_happy_score = $req_sel_happiness_score->fetch(PDO::FETCH_ASSOC);

        $req_sel_health_score->bindValue(':values_health_score', $data[7], PDO::PARAM_STR);
        $req_sel_health_score->execute();
        $res_health_score = $req_sel_health_score->fetch(PDO::FETCH_ASSOC);

        $req_sel_countries->bindValue(':country', $data[2], PDO::PARAM_STR);
        $req_sel_countries->execute();
        $res_countries = $req_sel_countries->fetch(PDO::FETCH_ASSOC);

        $req_sel_regions->bindValue(':region', $data[3], PDO::PARAM_STR);
        $req_sel_regions->execute();
        $res_regions = $req_sel_regions->fetch(PDO::FETCH_ASSOC);

        $req_ins->bindValue(':countries_id', $res_countries['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':countries_regions_id', $res_regions['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':years_id', $res_years['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_happiness_rank_id', $res_happy_rank['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_happiness_score_id', $res_happy_score['id'], PDO::PARAM_STR);
        $req_ins->bindValue(':values_health_score_id', $res_health_score['id'], PDO::PARAM_STR);
        $req_ins->execute();
        
    }
    fclose($handle);
}