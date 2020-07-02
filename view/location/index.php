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



<?php
$result = getALlLocations();
$placement = array("location-left", "location-center", "location-right");
$i = 0;
?>
    <div class="location-index-width ">
        <div class="row disp">
            <?php
            foreach($result as $location){ 
                $placementing = $placement[$i++ % 3];    
                ?>
            <div class="mt-5" style="width:400px">
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

        <div class="<?= $show_class?>">
                        <a href="<?= URL ?>Location/createLocation?id=<?=$location['location_id']?>" class="btn btn-primary w-100 ">Locatie toevoegen</a>

                        

                    </div>



    </div>
    
