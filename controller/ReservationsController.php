<?php

require(ROOT . "model/ReservationsModel.php");

function index(){
	render("reservations/index");
}

function viewCreateForm(){
    render("reservations/create");
}

function saveCreateData(){
    $ids = getLocationId($_POST["location"]);
    foreach ($ids as $id) {
        $_POST["location"] = $id["location_id"];
    }
    $data = array($_POST["username"], $_POST["location"], $_POST["beginTime"], $_POST["endTime"]);
    create($data);
}