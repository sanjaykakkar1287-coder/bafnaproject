<?php

include "../db/config.php";

if(isset($_POST['action']) && $_POST['action']=="enquiry"){

    $name        = mysqli_real_escape_string($conn,$_POST['name']);
    $company     = mysqli_real_escape_string($conn,$_POST['company']);
    $email       = mysqli_real_escape_string($conn,$_POST['email']);
    $phone       = mysqli_real_escape_string($conn,$_POST['phone']);
    $country     = mysqli_real_escape_string($conn,$_POST['country']);
    $requirement = mysqli_real_escape_string($conn,$_POST['requirement']);
    $message     = mysqli_real_escape_string($conn,$_POST['message']);

    $sql="INSERT INTO enquiries
    (
        name,
        company,
        email,
        phone,
        country,
        requirement,
        message
    )
    VALUES
    (
        '$name',
        '$company',
        '$email',
        '$phone',
        '$country',
        '$requirement',
        '$message'
    )";

    if(mysqli_query($conn,$sql)){

        echo "success";

    }else{

        echo "error";

    }

}