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

            <li><a href="<?= URL ?>User/inlog" class="text-light">log out</a></li>

        </ul>
    </div>
</div>
<h3 class="text-dark float-right mr-5 mt-2">Hello <?= " ". $loggedInUser?></h3>
<a href="<?= URL ?>Location/index" class="btn btn-primary float-right mr-5 mt-1">Go back -></a>
<h1>THIS IS LOCATION DETAILS</h1>

<?php
$result = getSingleLocation();



foreach($result as $location){ ?>

    <div class="row container-fluid details-row">
        <div class="col-7">
            <h3 > <?=$location['name'] ?> </h3>
            <h3> <?=$location['city_name'] ?> </h3>
            <h3> <?=$location['phone_number'] ?> </h3>


                <div class="row container-fluid details-row">
                    <div class="col-3">
                        <h3 class="">Maandag: Dinsdag: Woensdag: Donderdag: Vrijdag: <br> Zaterdag: <br> Zondag:</h3>
                    </div>
                    <div class="col-3">
                        <h3 class=""><?=$location['opening_times']?></h3>
                    </div>

                </div>




        </div>
        <img class="col-5 details-image" src="<?= URL ?>img/<?=$location['image'] ?>"></img>
    </div>



<?php } ?>









