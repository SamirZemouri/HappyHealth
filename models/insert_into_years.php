<?php

include 'connect.php';

$row = 1;
$insert_years = "INSERT INTO years(year) VALUES (:year)";
$years = [];

if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        array_push($years, $data[11]);
    }
    fclose($handle);
}

$years = array_unique($years);
$sth = $conn ->prepare($insert_years);
for ($c=0; $c < count($years); $c++) {
    
    $sth->bindParam(':year', $years[$c], PDO::PARAM_STR);
    $sth->execute();        
}