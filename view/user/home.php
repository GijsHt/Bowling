<?php $loggedInUser = $_SESSION['username'] ?>
<div class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-danger ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="<?= URL ?>User/home" class="text-light nav-item nav-link">Home</a>
                <a href="<?= URL ?>Location/index" class="text-light nav-item nav-link">Locations</a>
                <a href="<?= URL ?>Reservations/index" class="text-light nav-item nav-link">Reservations</a>
                <a href="<?= URL ?>User/inlog" class="text-light nav-item nav-link float-right" id="logout nav-item nav-link">log out</a>
            </div>
        </div>
    </nav>
</div>
<a class="text-light float-right mr-5 mt-2 helloUser" >Hello <?= " ". $loggedInUser?></a>


<div class="mb-5 mt-2">

<img src="<?= URL ?>img/header.jpg" id="header" height="400px" width="100%" alt="#">
        <h1 id="title">BGR Bowling</h1>
</div>

<div class="container card col-lg-3 ml-5 mb-5">
    <b>bowlen met Sterren!</b><br>
    ‘t Bowlingcentrum biedt alle plezier op het gebied van bowlen. Naast bowlen voor de lol worden er ook diverse competities georganiseerd
    op de verschillende bowlingbanen. Al onze bowlingbanen zijn geschikt voor ieder niveau, van beginners tot de doorgewinterde recreant.
</div>





   



