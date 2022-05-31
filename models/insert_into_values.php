<?php

include 'connect.php';

$row = 1;
$insert_values = "INSERT INTO all_values(value) VALUES (:value)";
$values_happy_rank = [];
$values_happy_score = [];
$values_health = [];

if (($handle = fopen("../world-happiness-report-2015-2022.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if($row == 1){ $row++; continue; }
        $num = count($data);
        $row++;
        array_push($values_happy_rank, $data[1]);
        array_push($values_happy_score, $data[4]);
        array_push($values_health, $data[7]);
    }
    fclose($handle);
}

$values_happy_rank = array_unique($values_happy_rank);
$sth = $conn ->prepare($insert_values);
for ($c=0; $c < count($values_happy_rank); $c++) {
    
    $sth->bindParam(':value', $values_happy_rank[$c], PDO::PARAM_STR);
    $sth->execute();        
}
$values_happy_score = array_unique($values_happy_score);
$sth = $conn ->prepare($insert_values);
for ($c=0; $c < count($values_happy_score); $c++) {
    
    $sth->bindParam(':value', $values_happy_score[$c], PDO::PARAM_STR);
    $sth->execute();        
}
$values_health = array_unique($values_health);
$sth = $conn ->prepare($insert_values);
for ($c=0; $c < count($values_health); $c++) {
    
    $sth->bindParam(':value', $values_health[$c], PDO::PARAM_STR);
    $sth->execute();        
}