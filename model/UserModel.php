<?php 
 
 function registerUser($username, $password, $email, $telefoonnummer, $adres, $admin){
    $db = openDatabaseConnection();
    $stm = $db->prepare("INSERT INTO users (username, email, password, telefoonnummer, adres, admin) VALUES (:username, :email, :password, :telefoonnummer, :adres, :admmin)"); 
    $stm->bindParam(':username', $username);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':password', $password);
    $stm->bindParam(':telefoonnummer', $telefoonnummer);
    $stm->bindParam(':adres', $adres);
    $stm->bindParam(':admin', $admin);
    if ($stm->execute()) {
        echo '<script>alert("Geregistreerd met succes!")</script>';
    } else {
        echo '<script>alert("Er is iets mis gegaan tijdens het aanmaken van uw account!")</script>';
    }

    $db = null;
}

function loginUser($username, $password){
    $db = openDatabaseConnection();
    $stm = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stm->bindParam(':username', $username);
    $stm->bindParam(':password', $password);
    $stm->execute();

    if(count($stm->fetchAll())) {
        $_SESSION['username'] = $username;
        echo '<script>alert("Ingelogd met succes!")</script>';
        header('Location: ' . URL . 'user/home');
    } else {
        echo '<script>
                  alert("Gebruikersnaam of wachtwoord is niet correct!");
                  history.go(-1);
              </script>';
    }

    $db = null;
}