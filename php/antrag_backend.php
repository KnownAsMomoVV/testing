<?php


// Username doesnt exists, insert new account
require "db.php";

if (isset($_POST['anrede'])) {
    if ($stmt = $con->prepare('INSERT INTO gaming.p_info(anrede, nachname, ort, plz, vorname, adresse, mobile) VALUES (?, ?,?,?,?,?,?)')) {
        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
        $stmt->bind_param('sssssss', $_POST['anrede'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['ort']);
        $stmt->execute();
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';

    }
}