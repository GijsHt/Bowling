<?php

require(ROOT . "model/ReservationsModel.php");

function index(){
	render("reservations/index");
}

function viewCreateForm(){
    render("reservations/create");
}