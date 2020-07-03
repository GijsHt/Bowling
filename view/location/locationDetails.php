<?php $loggedInUser = $_SESSION['username'];
        $admin = 'admin';
        $show_class = "";

        if($admin == 'admin'){
            $show_class = "admin-visible";
        }
        else{
            $show_class = "admin-invisible";
        }

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



<a href="<?= URL ?>Location/index" class="btn btn-primary float-left mr-5 mt-1">Ga terug -></a>

<?php
$result = getSingleLocation();

foreach($result as $location){ ?>
    <div class="location-details-width">
        <div class="row container-fluid details-row">
            <div class="col-7">
                    <div class="row container-fluid details-row">
                        <div class="col-5">
                            <h3> Locatie:</h3>
                            <h3> Telefoon nummer:</h3>
                            <h3> Postcode:</h3>
                        </div> 
                        <div class="col-4">
                            <h3><?=$location['city_name'] ?> </h3>
                            <h3><?=$location['phone_number'] ?> </h3>
                            <h3><?=$location['zipcode'] ?> </h3>
                        </div> 
                    </div>

                    <div class="row container-fluid details-row">
                        <div class="col-5">
                            <h3> Openingstijden:</h3>
                        </div> 
                        <div class="col-3">
                            <h3 class="">Maandag: Dinsdag: Woensdag: Donderdag: Vrijdag: <br> Zaterdag: <br> Zondag:</h3>
                        </div>
                        <div class="col-3">
                            <h3 class=""><?=$location['opening_times']?></h3>
                        </div>
                    </div>

                    <div class="<?= $show_class?>">
                        <a href="<?= URL ?>Location/deleteLocation?id=<?= $location['location_id']?>" class="btn btn-danger w-50 " onclick="return confirm('Weet u zeker dat u deze locatie wilt verwijderen')">Verwijder</a>
                        <a href="<?= URL ?>Location/updateLocation?id=<?= $location['location_id']?>" class="btn btn-warning w-50">Update</a>
                        

                    </div>



            </div>
            <img class="col-5 details-image" src="<?= URL ?>img/<?=$location['image'] ?>"></img>
        </div>
    </div>


<?php } ?>









