<?php $loggedInUser = $_SESSION['username'] ?>
<div class="bg-dark">
    <div class="navbar">
        <ul class="nav navbar-nav text-light">
            <li><a href="<?= URL ?>User/home" class="text-light">Home</a></li>
            <li><a href="<?= URL ?>Location/index" class="text-light">Locations</a></li>
            <li><a href="<?= URL ?>Reservations/index" class="text-light">Reservations</a></li>
            <li><a href="<?= URL ?>User/inlog" class="text-light" id="logout"> <- log in/log out</a></li>
        </ul>
    </div>
</div>



<h3 class="text-light float-right mr-5 mt-2 helloUser">Hello <?= " ". $loggedInUser?></h3>
<div class="mb-5 mt-2">

<img src="<?= URL ?>img/header.jpg" id="header" height="400px" width="100%" alt="#">
        <h1 id="title">BGR Bowling</h1>
</div>

<div class="container card col-lg-3 ml-5 mb-5">
    <b>bowlen met Sterren!</b><br>
    ‘t Bowlingcentrum biedt alle plezier op het gebied van bowlen. Naast bowlen voor de lol worden er ook diverse competities georganiseerd
    op de verschillende bowlingbanen. Al onze bowlingbanen zijn geschikt voor ieder niveau, van beginners tot de doorgewinterde recreant.
</div>




<div class="row text-center ml-5">
    <div class="col-lg-5 text-center my-auto">
        <div class="card card-block">
            <div class="card-body align-items-center  justify-content-center">
                <b>Openingstijden<br>
                Maandag: 15.00 - 23.00 uur<br>
                Dinsdag: 15.00 - 23.00 uur<br>
                Woensdag: 13.00 - 23.00 uur<br>
                Donderdag: 15.00 - 23.00 uur<br>
                Vrijdag: 15.00 - 01.00 uur<br>
                Zaterdag: 13.00 - 01.00 uur<br>
                    Zondag: 13.00 - 23.00 uur</b><br><br>

                Tijdens de carnavalsvakantie, 24/02-28/02, zijn wij iedere dag vanaf 13.00 geopend en hanteren wij het vakantietarief.<br>

                *Let op: openingstijden kunnen afwijken in rustigere periodes. Om teleurstelling te voorkomen kunt U telefonisch contact met ons opnemen.
            </div>
        </div>
    </div>
</div>

   



