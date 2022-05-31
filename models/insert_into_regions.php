<?php

include 'connect.php';

$row = 1;
$insert_regions = "INSERT INTO regions(region) VALUES (:region)";
$regions = [];

if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        array_push($regions, $data[3]);
    }
    fclose($handle);
}

$regions = array_unique($regions);
$sth = $conn ->prepare($insert_regions);
for ($c=0; $c < count($regions); $c++) {
    
    $sth->bindParam(':region', $regions[$c], PDO::PARAM_STR);
    $sth->execute();        
}