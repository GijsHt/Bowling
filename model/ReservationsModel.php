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

function getUserId($data){
    $db = openDatabaseConnection();
    $sql = "SELECT user_id FROM users where username =:user";
    $query = $db->prepare($sql);
    $query->execute(array(":user"=>$data));
    $db = null;
    return $query->fetchAll();

}

function getReservations($username){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM reservations where username=:username";
    $query = $db->prepare($sql);
    $query->execute(array(":username"=>$username));
    $db = null;
    return $query->fetchAll();
}

function getReservedCities(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM locations INNER JOIN reservations on locations.location_id = reservations.location_id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function create($data){
$db = openDatabaseConnection();
$query = $db->prepare("INSERT INTO reservations (username, location_id, begin_time, end_time) values (:username, :locationId, :beginTime, :endTime)");
$query->execute(array(":username" => $data[0],":locationId" => $data[1],":beginTime" => $data[2],":endTime" => $data[3]));
$db = null;
render("reservations/index");
}


function sanitize($data){

    return $data;
}
