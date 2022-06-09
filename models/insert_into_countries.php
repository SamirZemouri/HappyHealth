<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
require_once 'connect.php';

$row = 1;
// selection de la colonne id de la table regions
$select_countries = "SELECT id FROM regions WHERE region = :id_regions";
// requête permettant d'ajouter les valeurs dans la table tout en ignorant les entrées déjà existantes
$insert_countries = "INSERT INTO countries(country, id_regions) SELECT * FROM (SELECT :country AS country, :countries_id_regions AS id_regions) AS temp
WHERE NOT EXISTS (SELECT country FROM countries WHERE country = :country)";
// tableau dans lequel on va stocker les valeurs du .csv
$countries = [];

// condition permettant de récupérer les données du fichier .csv
if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        //la variable $data[3] permet de récupérer la colonne des régions
        $select = $conn -> prepare($select_countries);
        //liaison récupérant l'id des régions de la table selon la colonne des régions du csv
        $select->bindParam(':id_regions', $data[3], PDO::PARAM_STR);
        $select->execute();
        $res = $select->fetch(PDO::FETCH_ASSOC);
        //la variable $data[2] permet de récupérer la colonne des villes
        $sth = $conn ->prepare($insert_countries);
        //laison de la colonne des villes selon la colonne du csv
        $sth->bindValue(':country', $data[2], PDO::PARAM_STR);
        //laison des id des regions sur la colonne id_regions de la table
        $sth->bindValue(':countries_id_regions', $res['id'], PDO::PARAM_INT);
        $sth->execute();
        $sth->debugDumpParams();

    }
    fclose($handle);
}