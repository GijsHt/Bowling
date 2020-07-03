<?php $loggedInUser = $_SESSION['username'];

$cities = getReservedCities($loggedInUser);
?>

    <div class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-danger ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="<?= URL ?>User/home" class="text-light nav-item nav-link">Home</a>
                <a href="<?= URL ?>Location/index" class="text-light nav-item nav-link">Locations</a>
                <a href="<?= URL ?>Reservations/index" class="text-light nav-item nav-link">Reservations</a>
             <a href="<?= URL ?>User/inlog" class="text-light nav-item nav-link float-right" id="logout nav-item nav-link">log out</a>
            </div>
        </div>
    </nav>
</div>
    <a class="text-light float-right mr-5 mt-2 helloUser" >Hello <?= " ". $loggedInUser?></a>
<h3 class="mt-3 ml-5">Reserveringen die u heeft gemaakt</h3>

<div class="container mt-5">
    <table border="1" class="table table-striped table-dark">
        <tr>
            <th>Locaties</th>
            <th>Begintijd</th>
            <th>Eindtijd</th>
            <th>Prijs</th>
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
                <td><a href="<?= URL ?>Reservations/viewUpdateForm?id=<?=$city["reservation_id"]?>">Wijzigen</a> &nbsp;&nbsp; <a href="<?= URL ?>Reservations/initiateDeleteForm?id=<?=$city["reservation_id"]?>" onclick="return confirm('Are you sure you want to delete this reservation?')">Verwijderen</a></td>
            </tr>
        <?}?>
    </table>
    <h6 class="float-right">Maak een nieuwe reservering <a href="<?= URL ?>Reservations/viewCreateForm">hier!</a></h6>
</div>



<?php
