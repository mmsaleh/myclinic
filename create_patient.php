<?php
// get values from add_patient form
$patientname   =  $_POST['patient_name'];
$mobile        =  $_POST['mobile'];
$age           =  $_POST['age'];
$address       =  $_POST['address'];
$gender        =  $_POST['gender'];
$bloodtype     =  $_POST['bloodtype'];

// open connection to mysql server
include_once 'includes/connection.php';

// perform query
$query ="insert into patients(patient_name, mobile, age, address, gender, bloodtype) values('$patientname', '$mobile', '$age', '$address', '$gender', '$bloodtype')";

// perform query by php
mysqli_query($link, $query);

// redirect to add_user page
header("location:patients.php");
