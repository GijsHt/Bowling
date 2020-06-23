<?php 
    

function getAllLocations(){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM locations");
    $stmt->execute();
    return $result = $stmt->fetchAll();
    $conn = null;
}

function getSingleLocation(){
    $id = $_GET['id'];
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT * FROM locations WHERE location_id=:id");
    $stmt->execute(array(':id'=>$id));
    return $result = $stmt->fetchAll();
    $conn = null;
}




