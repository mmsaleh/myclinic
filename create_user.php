<?php

include_once 'includes/connection.php';

// get values from add_user form
$username   =  $_POST['username'];
$password   =  $_POST['password'];
$first_name =  $_POST['fname'];
$last_name  =  $_POST['lname'];


// perform query
$query ="insert into users(username, password, first_name, last_name) values('$username', '$password', '$first_name', '$last_name')";

// perform query by php
mysqli_query($link, $query);

// redirect to add_user page
header("location:users.php");
