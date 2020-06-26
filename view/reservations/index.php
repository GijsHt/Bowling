<?php $loggedInUser = $_SESSION['username'];
$reservations = getReservations($loggedInUser);
$cities = getReservedCities($loggedInUser);
?>
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
    <h3 class="text-light float-right mr-5 mt-2 helloUser" >Hello <?= " ". $loggedInUser?></h3>

<h1>Reservations you made</h1>

<div class="container mt-5">
    <table border="1" class="table table-striped table-dark">
        <tr>
            <th>Location</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Price</th>
        </tr>
        <? foreach ($cities as $city){
            $eindtijd = $city["end_time"];
            $begintijd = $city["begin_time"];
            $totaaltijd = $eindtijd-$begintijd;
            $totaalkosten = 10 * $totaaltijd;  ?>

            <tr>
                <td><?= $city["city_name"]; ?></td>
                <td><?= $city["begin_time"] ?></td>
                <td><?= $city["end_time"] ?></td>
                <td><?= $totaalkosten  ?></td>
                <td><a href="<?= URL ?>Reservations/viewUpdateForm?id=<?=$city["reservation_id"]?>">Edit</a> &nbsp;&nbsp; <a href="<?= URL ?>Reservations/initiateDeleteForm?id=<?=$city["reservation_id"]?>" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</a></td>
            </tr>
        <?}?>
    </table>
    <small class="float-right">Make a new reservation <a href="<?= URL ?>Reservations/viewCreateForm">here!</a></small>
</div>



<?php
