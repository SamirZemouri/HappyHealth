<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
include 'connect.php';

$row = 1;
// requête permettant d'ajouter les valeurs dans la table, INSERT INTO [nom-de-la-table](colonne-de-la-table) VALUES (:valeur)
$insert_values = "INSERT INTO all_values(value) VALUES (:value)";
// tableaux dans lesquels on va stocker les valeurs du .csv
$values_happy_rank = [];
$values_happy_score = [];
$values_health = [];

// condition permettant de récupérer les données du fichier .csv
if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        //la variable $data[1] [4] et [7] permet de récupérer les colonnes happiness rank, happiness score et health score
        array_push($values_happy_rank, $data[1]);
        array_push($values_happy_score, $data[4]);
        array_push($values_health, $data[7]);
    }
    fclose($handle);
}
// variable permettant de fusionner les doublons
$values_happy_rank = array_unique($values_happy_rank);
$sth = $conn ->prepare($insert_values);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($values_happy_rank); $c++) {
    
    $sth->bindParam(':value', $values_happy_rank[$c], PDO::PARAM_STR);
    $sth->execute();        
}
// variable permettant de fusionner les doublons
$values_happy_score = array_unique($values_happy_score);
$sth = $conn ->prepare($insert_values);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($values_happy_score); $c++) {
    
    $sth->bindParam(':value', $values_happy_score[$c], PDO::PARAM_STR);
    $sth->execute();        
}
// variable permettant de fusionner les doublons
$values_health = array_unique($values_health);
$sth = $conn ->prepare($insert_values);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($values_health); $c++) {
    
    $sth->bindParam(':value', $values_health[$c], PDO::PARAM_STR);
    $sth->execute();        
}