<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
require_once 'connect.php';


$row = 1;
// requête permettant d'ajouter les valeurs dans la table, INSERT INTO [nom-de-la-table](colonne-de-la-table) VALUES (:valeur)
$select_countries = "SELECT id FROM regions WHERE region = :region";
$insert_regions = "INSERT INTO regions(region) VALUES (:region)";
// tableau dans lequel on va stocker les valeurs du .csv
$regions = [];
// condition permettant de récupérer les données du fichier .csv
if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        //la variable $data[3] permet de récupérer la colonne des régions
        array_push($regions, $data[3]);
    }
    fclose($handle);
}
// variable permettant de fusionner les doublons
$regions = array_unique($regions);
$sth = $conn ->prepare($insert_regions);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($regions); $c++) {
    
    $sth->bindParam(':region', $regions[$c], PDO::PARAM_STR);
    $sth->execute();        
}