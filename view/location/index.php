<<<<<<< HEAD

<?php $loggedInUser = $_SESSION['username'] ?>

=======
<?php $loggedInUser = $_SESSION['username'] ?>
>>>>>>> master
<div class="bg-dark">
    <div class="navbar">
        <ul class="nav navbar-nav text-light">
            <li><a href="<?= URL ?>User/home" class="text-light">Home</a></li>
            <li><a href="<?= URL ?>Location/index" class="text-light">Locations</a></li>
            <li><a href="<?= URL ?>Reservations/index" class="text-light">Reservations</a></li>
<<<<<<< HEAD
            <li><a href="<?= URL ?>User/inlog" class="text-light" id="logout">log out</a></li>
        </ul>
    </div>
</div>

=======
>>>>>>> master
            <li><a href="<?= URL ?>User/inlog" class="text-light">log out</a></li>

        </ul>
    </div>
</div>
<h3 class="text-dark float-right mr-5 mt-2">Hello <?= " ". $loggedInUser?></h3>
<?php
$result = getALlLocations();



foreach($result as $location){ ?>

    <h3> <?=$location['name'] ?> </h3>
    <h3> <?=$location['city_name'] ?> </h3>
    <h3> <?=$location['phone_number'] ?> </h3>
    <img src="<?=$location['image'] ?>"></img>


    <a href="<?= URL ?>Location/viewDetails?id=<?= $location['location_id']?>" class="btn btn-primary">Meer details</a>

<?php } ?>



