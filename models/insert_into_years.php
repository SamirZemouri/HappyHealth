<?php
// inclure ici le fichier qui relie à la connection de la base de donnée
include 'connect.php';

$row = 1;
// requête permettant d'ajouter les valeurs dans la table, INSERT INTO [nom-de-la-table](colonne-de-la-table) VALUES (:valeur)
$insert_years = "INSERT INTO years(year) VALUES (:year)";
// tableau dans lequel on va stocker les valeurs du .csv
$years = [];

// condition permettant de récupérer les données du fichier .csv
if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        //la variable $data[11] permet de récupérer la colonne des années
        array_push($years, $data[11]);
    }
    fclose($handle);
}
// variable permettant de fusionner les doublons
$years = array_unique($years);
$sth = $conn ->prepare($insert_years);
// boucle permettant d'insérer une par une les données dans la table indiquée
for ($c=0; $c < count($years); $c++) {
    
    $sth->bindParam(':year', $years[$c], PDO::PARAM_STR);
    $sth->execute();        
}