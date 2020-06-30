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
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM locations WHERE location_id=:id");
    $stmt->execute(array(':id'=>$id));
    return $result = $stmt->fetchAll();
    $conn = null;
}

function deleteById(){
    $conn = openDatabaseConnection();
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM locations WHERE location_id=:id");
    $stmt->bindParam(":id", $id);

    $stmt->execute(array(':id'=>$id));
    $conn = null;
}


