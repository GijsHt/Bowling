<?php $loggedInUser = $_SESSION['username'] ?>
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


<h3 class="text-light float-right mr-5 mt-2 helloUser">Hello <?= " ". $loggedInUser?></h3>

<?php
$result = getALlLocations();
$placement = array("location-left", "location-center", "location-right");
$i = 0;
?>
    <div class="location-index-width">
        <?php
        foreach($result as $location){ 
            $placementing = $placement[$i++ % 3];    
            ?>
        <div class="mt-5">
            <div class="card card-border card-size <?=$placementing?>">
                <img class="card-img-top location-image" src="<?= URL ?>img/<?=$location['image'] ?>"></img>
                <div class="card body">
                    <h3 class="card-text">Locatie: <?=$location['city_name'] ?> </h3>
                    <h3 class="card-text"> <?=$location['phone_number'] ?> </h3>
                    <a href="<?= URL ?>Location/viewDetails?id=<?= $location['location_id']?>" class="btn btn-primary card-text w-100">Meer details</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
