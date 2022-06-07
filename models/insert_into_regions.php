<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
include 'connect.php';


$row = 1;
// requête permettant d'ajouter les valeurs dans la table, INSERT INTO [nom-de-la-table](colonne-de-la-table) VALUES (:valeur)
$select_countries = "SELECT id FROM regions WHERE region = :region";
$insert_regions = "INSERT INTO regions(region) VALUES (:region)";
$insert_countries = "INSERT INTO countries(country, id_regions) VALUES (:country, :countries_id_regions)";
// tableau dans lequel on va stocker les valeurs du .csv
$regions = [];
$countries = [];
// condition permettant de récupérer les données du fichier .csv
if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        //la variable $data[3] permet de récupérer la colonne des régions
        array_push($regions, $data[3]);
        array_push($countries, $data[2]);
    }
    fclose($handle);
}
// variable permettant de fusionner les doublons
$regions = array_unique($regions);
$countries = array_unique($countries);
$sth = $conn ->prepare($insert_regions);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($regions); $c++) {
    
    $sth->bindParam(':region', $regions[$c], PDO::PARAM_STR);
    $sth->execute();        
}
var_dump($regions);
for($i=0; $i< count($countries); $i++){
    if(isset($region[$i])){
        $reg = $regions[$i];
    }
    var_dump($reg);
    $select = $conn -> prepare($select_countries);
    $select->bindValue(':region', $reg, PDO::PARAM_STR);
    $select->execute();
    $res = $select->fetch(PDO::FETCH_ASSOC);
    var_dump($res);
    /* $sth = $conn ->prepare($insert_countries);
    $sth->bindValue(':country', $countries[$i], PDO::PARAM_STR);
    $sth->bindValue(':countries_id_regions', $res['id_regions'], PDO::PARAM_INT);
    $sth->execute(); */
}
