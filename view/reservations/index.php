<?php $loggedInUser = $_SESSION['username'] ?>
<div class="bg-dark">
    <div class="navbar">
        <ul class="nav navbar-nav text-light">
            <li><a href="<?= URL ?>User/home" class="text-light">Home</a></li>
            <li><a href="<?= URL ?>Location/index" class="text-light">Locations</a></li>
            <li><a href="<?= URL ?>Reservations/index" class="text-light">Reservations</a></li>
            <li><a href="<?= URL ?>User/inlog" class="text-light" id="logout">log out</a></li>
        </ul>
    </div>
</div>
    <h3 class="text-dark float-right mr-5 mt-2">Hello <?= " ". $loggedInUser?></h3>
<h1>reservations index</h1>



<large>Make a Reservation <a href="<?= URL ?>Reservations/viewCreateForm">here!</a></large>


<?php


?>