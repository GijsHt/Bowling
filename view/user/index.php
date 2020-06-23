

    <form class='form jumbotron' method="POST" action="<?= URL ?>user/index">
            <div class="form-group col">
                <label>Gebruikersnaam</label>
                <input class="form-control" type="text" name="username" placeholder="Gebruikersnaam" />
            </div>

            <div class="form-group col">
                <label>Gmail</label>
                <input class="form-control" type="email" name="email" placeholder="voorbeeld@email.nl">
            </div>

            <div class="form-group col">
                <label>Wachtwoord</label>
                <input class="form-control" type="password" name="password" placeholder="Wachtwoord" />
            </div>

            <div class="form-group col">
                <label>Telefoonnummer</label>
                <input class="form-control" type="text" name="phone_number" placeholder="Telefoonnummer" />
            </div>

            <div class="form-group col">
                <label>Adres</label>
                <input class="form-control" type="text" name="adres" placeholder="Adres" />
            </div>

            <div class="form-group col">
                <input class="btn btn-primary" type="submit" name="register" value="Registreer" />
                <small class="form-text text-muted">Uw info is altijd prive.</small>
                <p align="center"><a href="<?= URL ?>user/inlog">Login</a></p>
                <?php if(empty($empty)){
                    echo "";
                } else{
                    echo "<p class='text-danger'>$empty</p>";
                } ?>
            </div>
        </form>

<body>

