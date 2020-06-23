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



