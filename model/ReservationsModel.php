<?
function getCustomersName(){
    $db = openDatabaseConnection();
    $sql = "SELECT username FROM users";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getCitiesName(){
    $db = openDatabaseConnection();
    $sql = "SELECT city_name FROM locations";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

