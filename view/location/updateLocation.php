<?php $loggedInUser = $_SESSION['username'];?>
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
<?php
    $result = getSingleLocation();
    $id = $_GET['id'];
?>

<div class="container align-self-center mt-4 card">
    <h3>Update deze locatie hier</h3>
<div class="container p-3 align-self-center">
<form action="updateLocation2" method="post" class="">
    <?php foreach($result as $old_data){ ?>
        <br>
    <div class="form-group">
        <label for="city_name">Locatie</label>
        <input type="text" class="form-control" name="city_name" id="city_name" value="<?=$old_data['city_name']?>"><br>
    </div>
    <div class="form-group">
        <label for="zipcode">postcode</label>
        <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?=$old_data['zipcode']?>"><br>
    </div>
    <div class="form-group">
        <label for="phone_number">telefoon nummer</label>
        <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?=$old_data['phone_number']?>"><br>
    </div>
    <div class="form-group">
        <label for="opening_times">openings tijden</label>
        <input type="text" class="form-control" name="opening_times" id="opening_times"  value="<?=$old_data['opening_times']?>"><br>
    </div>
        <input type="number" name="id" value="<?= $id ?>" hidden>
        

        <button name="submit" type='submit' class="btn btn-primary">Wijzigen!</button>
</form>
</div>
</div>
    <?php } ?>









    