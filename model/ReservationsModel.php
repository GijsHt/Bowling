<?
function getCustomersName(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM users";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getCitiesName(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM locations";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getLocationId($data){
    $db = openDatabaseConnection();
    $sql = "SELECT location_id FROM locations where city_name=:location";
    $query = $db->prepare($sql);
    $query->execute(array(":location"=>$data));
    $db = null;
    return $query->fetchAll();
}

function getReservations($id){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM reservations INNER JOIN users on reservations.user_id = users.user_id where reservations.user_id =:id";
    $query = $db->prepare($sql);
    $query->execute(array(":id"=>$id));
    $db = null;
    return $query->fetchAll();
}

