<?php

function get_countries($conn){
    $req_select_countries = "SELECT country FROM countries";
    $req_countries = $conn->prepare($req_select_countries);
    $req_countries->execute();
    $countries = $req_countries->fetchAll(PDO::FETCH_ASSOC);

    return $countries;
}