<?php


// Username doesnt exists, insert new account
require "kontakt_config.php";

if (isset($_POST['name'])) {
    require "kontakt_config.php";

    if ($stmt = $con->prepare('INSERT INTO gaming.p_info(anrede, nachname, ort, plz, vorname, adresse, mobile) VALUES (?, ?,?,?,?,?,?)')) {
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
        $stmt->bind_param('sssssss', $_POST['name'], $_POST['lname'], $_POST['anrede'], $_POST['ort'], $_POST['plz'], $_POST['email'], $_POST['message']);
        $stmt->execute();
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';

    }
}