
<?php $loggedInUser = $_SESSION['username'] ?>

<?php $loggedInUser = $_SESSION['username'] ?>
<div class="bg-dark">
    <div class="navbar">
        <ul class="nav navbar-nav text-light">
            <li><a href="<?= URL ?>User/home" class="text-light">Home</a></li>
            <li><a href="<?= URL ?>Location/index" class="text-light">Locations</a></li>
            <li><a href="<?= URL ?>Reservations/index" class="text-light">Reservations</a></li>
            <li><a href="<?= URL ?>User/inlog" class="text-light" id="logout">log out</a></li>
            
<h3 class="text-dark float-right mr-5 mt-2">Hello <?= " ". $loggedInUser?></h3>
        </ul>
    </div>
</div>

            <li><a href="<?= URL ?>User/inlog" class="text-light">log out</a></li>

        </ul>
    </div>
</div>
<?php
$result = getALlLocations();
?>

        <?php
        foreach($result as $location){ ?>
        <div class="location-index-width">
            <div class="card card-border">
                <img class="card-img-top" style="height:400px; width:100%" src="<?= URL ?>img/<?=$location['image'] ?>"></img>
                <div class="card body">
                    <h3 class="card-title"> <?=$location['name'] ?> </h3>
                    <h3 class="card-text"> <?=$location['city_name'] ?> </h3>
                    <h3 class="card-text"> <?=$location['phone_number'] ?> </h3>
                    <a href="<?= URL ?>Location/viewDetails?id=<?= $location['location_id']?>" class="btn btn-primary card-text w-25">Meer details</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
