<?php

require(ROOT . "model/HorsesModel.php");

function index()
{
	render("user/home", array(
		'horses' => getAllHorses()
	));
}


