
    <form class='form jumbotron' method="POST" action="<?= URL ?>user/inlog">
            <div class="form-group col">
                <label>Gebruikersnaam</label>
                <input class="form-control" type="text" name="username" placeholder="Gebruikersnaam" />
            </div>

            <div class="form-group col">
                <label>Wachtwoord</label>
                <input class="form-control" type="password" name="password" placeholder="Wachtwoord" />
            </div>

            <div class="form-group col">
                <input class="btn btn-primary" type="submit" name="inlog" value="login" />
                <p allign="center"><a href="<?= URL ?>user/index">Registreer</a></p>
                <?php if(empty($empty)){
                    echo "";
                } else{
                    echo "<p class='text-danger'>$empty</p>";
                } ?>
            </div>
        </form>

<body>

