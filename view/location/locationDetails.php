<?php $loggedInUser = $_SESSION['username'] ?>
<div class="bg-dark">
    <div class="navbar">
        <ul class="nav navbar-nav text-light">
            <li><a href="<?= URL ?>User/home" class="text-light">Home</a></li>
            <li><a href="<?= URL ?>Location/index" class="text-light">Locations</a></li>
            <li><a href="<?= URL ?>Reservations/index" class="text-light">Reservations</a></li>
            <li><a href="<?= URL ?>User/inlog" class="text-light">log out</a></li>

        </ul>
    </div>
</div>
<h3 class="text-dark float-right mr-5 mt-2">Hello <?= " ". $loggedInUser?></h3>
<a href="<?= URL ?>Location/index" class="btn btn-primary float-right mr-5 mt-1">Go back -></a>
<h1>THIS IS LOCATION DETAILS</h1>

<?php
$result = getALlLocations();



foreach($result as $location){ ?>

    <h3> <?=$location['name'] ?> </h3>
    <h3> <?=$location['city_name'] ?> </h3>
    <h3> <?=$location['phone_number'] ?> </h3>
    <img src="<?=$location['image'] ?>"></img>




<?php } ?>



