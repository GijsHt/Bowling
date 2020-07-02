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



<form action="updateLocation2" method="post">
    <?php foreach($result as $old_data){ ?>
        <br>
        <label for="city_name">Locatie</label><input type="text" name="city_name" id="city_name" value="<?=$old_data['city_name']?>"><br>
        <label for="zipcode">postcode</label><input type="text" name="zipcode" id="zipcode" value="<?=$old_data['zipcode']?>"><br>
        <label for="phone_number">telefoon nummer</label><input type="telefoon" name="phone_number" id="phone_number" value="<?=$old_data['phone_number']?>"><br>
        <label for="opening_times">openings tijden</label><input type="text" name="opening_times" id="opening_times"  value="<?=$old_data['opening_times']?>"><br>
        <input type="number" name="id" value="<?= $id ?>" hidden>
        

        <button name="submit" type='submit'>Wijzigen!</button>


    <?php } ?>









    