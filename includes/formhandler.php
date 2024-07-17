<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favourite_pet = htmlspecialchars($_POST["favourite_pet"]);

    if (empty($firstname)) {
        exit();
        header("Location ../index.php");
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo "First name: $firstname";
    echo "<br>";
    echo "Last name: $lastname";
    echo "<br>";
    echo "Favourite pet: $favourite_pet";
} else {
    header("Location: ../index.php");
}