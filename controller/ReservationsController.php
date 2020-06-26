<?php

require(ROOT . "model/ReservationsModel.php");

function index(){
	render("reservations/index");
}

function viewCreateForm(){
    render("reservations/create");
}
function viewUpdateForm(){
    render("reservations/update");
}
function saveCreateData(){
    $ids = getLocationId($_POST["location"]);
    foreach ($ids as $id) {
        $_POST["location"] = $id["location_id"];
    }
    $data = array($_POST["username"], $_POST["location"], $_POST["beginTime"], $_POST["endTime"]);
    create($data);
}
function saveUpdateForm(){
    $ids = getLocationId($_POST["location"]);
    foreach ($ids as $id) {
        $_POST["location"] = $id["location_id"];
    }
    $data = array($_POST["username"], $_POST["location"], $_POST["beginTime"], $_POST["endTime"],$_POST["id"]);
    update($data);
}

function initiateDeleteForm(){
    $id = $_GET["id"];
    delete($id);
}