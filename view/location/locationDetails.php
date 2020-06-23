<?php
$result = getALlLocations();



foreach($result as $location){ ?>

    <h3> <?=$location['name'] ?> </h3>
    <h3> <?=$location['city_name'] ?> </h3>
    <h3> <?=$location['phone_number'] ?> </h3>
    <img src="<?=$location['image'] ?>"></img>


    <a href="locationDetails.php?id=<?= $location['location_id']?>" class="btn btn-primary">Meer details</a>

<?php } ?>



