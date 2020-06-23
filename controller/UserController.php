<?php 
require(ROOT . "model/UserModel.php");


function index(){
    $empty = '';

    if (isset($_POST['register'])) {
        if (empty($_POST['username']) && empty($_POST['password']) && empty($_POST['email']) && empty($_POST['phone_number']) && empty($_POST['adres'])) {
            $empty = 'Geen veld ingevuld!';
        } elseif (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['phone_number']) || empty($_POST['adres'])){
            $empty = 'Niet alles is ingevuld!';


        } else {
            $username = $_POST['username'];
            $password = hash('sha512', pw . $_POST['password']);
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $adres = $_POST['adres'];
            registerUser($username, $password, $email, $phone_number, $adres);
        }
    }

    render("user/index", array(
        'empty' => $empty,
    ));
}

function inlog(){
    if (isset($_POST['inlog'])) {
        if (empty($_POST['username']) && empty($_POST['password'])){
            echo '<script>
                      alert("Gebruikersnaam en wachtwoord zijn niet ingevuld!");
                      // User is also automatically send back to the previous page
                      history.go(-1);
                  </script>';
        } elseif (empty($_POST['username']) || empty($_POST['password'])) {
            echo '<script>
                      alert("Gebruikersnaam of wachtwoord is niet ingevuld!");
                      history.go(-1);
                  </script>';
        } else {
            $username = $_POST['username'];
            $password = hash('sha512', pw . $_POST['password']);
            loginUser($username, $password);

        }
    }
    render("user/inlog");
}

function home(){
    render("user/home");
}

    
    
