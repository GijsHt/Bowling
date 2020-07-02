<?php

require(ROOT . "model/LocationModel.php");

function index(){
	render("location/index");
}

function viewDetails(){
	render("location/locationDetails");
}
function delete(){
	render("location/deleteLocation");
}

function updateLocation(){
	render("location/updateLocation");
}

function updateLocation2(){
	render("location/updateLocation2");
}