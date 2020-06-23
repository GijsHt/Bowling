<?php 
    

function getAllLocations(){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM locations");
    $stmt->execute();
    return $result = $stmt->fetchAll();
    $conn = null;
}

function getSingleLocation(){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM locations location_id='$id'");
    $stmt->execute();
    return $result = $stmt->fetchAll();
    $conn = null;



}




