<?php

require(ROOT . "model/LocationModel.php");

function index(){
	render("location/index");
}

function viewDetails(){
	render("location/locationDetails");
}
function deleteLocation(){
    $id = $_GET["id"];
    delete($id);
}

function updateLocation(){
	render("location/updatelocation");
}

function updateLocation2(){
	render("location/updateLocation2");
}