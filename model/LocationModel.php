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

function delete($id){
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("DELETE FROM locations WHERE location_id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    render("location/index");
}

function updateLocationFunction(){
    if (isset($_POST['submit'])) {
        
    $conn = openDatabaseConnection();
    $id = $_POST['id'];
    $city_name = $_POST['city_name'];
    $zipcode = $_POST['zipcode'];
    $phone_number = $_POST['phone_number'];
    $opening_times = $_POST['opening_times'];
    $stmt = $conn->prepare("UPDATE locations SET city_name = :city_name, zipcode = :zipcode, phone_number = :phone_number, opening_times = :opening_times WHERE location_id = '$id'");
    $stmt->bindParam(":city_name", $city_name);
    $stmt->bindParam(":zipcode", $zipcode);
    $stmt->bindParam(":phone_number", $phone_number);
    $stmt->bindParam(":opening_times", $opening_times);
    $stmt->execute();
    }
}

