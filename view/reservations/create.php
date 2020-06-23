<div class="container align-self-center mt-4">
    <h3>Make a reservation here</h3>
<div class="container p-3 align-self-center">
    <form method="post" action="<?= URL ?>Location/create">
            <div>
                <label for="customer">Who's making the reservation:</label>
                <select name="customerName" class="custom-select" required>
                    <? $customers = getCustomersName();
                     foreach ($customers as $customer){?>
                    <option name="customerName"><?= $customer["username"]; ?></option>
                    <?}?>
                </select>
            </div><br>

        <div>
            <label for="location">Which location are you planning on visiting:</label>
            <select name="location" class="custom-select">
                    <? $locations = getCitiesName();
                    foreach ($locations as $location){?>
                <option name="location"><?= $location["city_name"]?></option>
                <?}?>
            </select>
        </div>
    </form>
</div>
</div>