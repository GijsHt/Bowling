
<?php $loggedInUser = $_SESSION['username'] ?>

<?php $loggedInUser = $_SESSION['username'] ?>
>>>>>>> master
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

<div class="container align-self-center mt-4">
    <h3>Make a reservation here</h3>
<div class="container p-3 align-self-center">
    <form method="post" action="<?= URL ?>Location/create">
        <input type="hidden" value="<?= $loggedInUser ?>" name="username">

        <div class="form-group">
            <label for="location">Which location are you planning on visiting?</label>
            <select name="location" class="custom-select" required>
                    <? $locations = getCitiesName();
                    foreach ($locations as $location){?>
                <option name="location" value="<?= getLocationId($_GET["location"]) ?>"><?= $location["city_name"]?></option>
                <?}?>
            </select>
        </div>

        <div class="form-group">
            <label for="time">When do you wish to start?</label>
            <input type="time" class="form-control" name="beginTime" required>
        </div>

        <div class="form-group">
            <label for="endtime">When do you wish to stop?</label>
            <input type="time" class="form-control" name="endTime">
        </div>
        <input type="submit" class="btn btn-secondary">
    </form>
</div>
</div>