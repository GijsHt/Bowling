<?php
$ids = getLocationId($_POST["location"]);
foreach ($ids as $id) {
    $_POST["location"] = $id["location_id"];
}
$data = array($_POST["username"], $_POST["location"], $_POST["beginTime"], $_POST["endTime"],$_POST["id"]);
$fields = ["location", "beginTime", "endTime"];
$info = [];
$info["location"] = $info["beginTime"] = $info["endTime"] = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $invalid = 0;
    foreach ($fields as $field) {
        if (isset($_POST[$field]) && empty($_POST[$field])) {
            $invalid = 1;
        }else{
            $info[$field] = $_POST[$field];
        }
    } if($invalid == 0){
        $ids = getLocationId($_POST["location"]);
        foreach ($ids as $id) {
            $_POST["location"] = $id["location_id"];
        }
        update($data);
    }
}
?>
<?php $loggedInUser = $_SESSION['username'];
$Infos = getReservedInfo($_GET["id"])?>


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


<a href="<?= URL ?>Reservations/index" class="pr-5 mr-5 float-right">Go back <- </a>

<div class="container align-self-center mt-4 card">
    <h3>Update jouw reservering hier</h3>

    <div class="container p-3 align-self-center">
        <form method="post" action="<?= URL ?>Reservations/viewUpdateForm?id=<?=$_GET["id"]?>">
            <input type="hidden" value="<?=$_SESSION["username"]?>" name="username">

            <div class="form-group">
                <label for="location">Kies een locatie</label>
                <select name="location" class="custom-select" required>
                    <? $locations = getCitiesName();
                    foreach ($locations as $location){?>
                        <option name="location"><?= $location["city_name"]?></option>
                    <?}?>
                </select>
            </div>

            <div class="form-group">
                <label for="time">Kies de begintijd</label>
                <input type="time" class="form-control" name="beginTime" value="<?= $info["beginTime"]?>">
                <span class="text-danger"><? checkEmptyField("beginTime");?></span><br>
            </div>

            <div class="form-group">
                <label for="endtime">Kies de eindtijd</label>
                <input type="time" class="form-control" name="endTime" value="<?= $info["endTime"]?>">
                <span class="text-danger"><? checkEmptyField("endTime");?></span><br>
            </div>
            <input type="hidden" value="<?= $_GET["id"]?>" name="id">
            <input type="submit" class="btn btn-secondary">
        </form>
    </div>
</div>