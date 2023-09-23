<?php
include('include.php');
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['CSE'])) {

    $_SESSION['dept'] = "CSE";
    echo $_SESSION['dept'];
    header('location:staff.php');
}
if (isset($_POST['MECH'])) {
    $_SESSION['dept'] = "MECH";
    header('location:staff.php');
}
if (isset($_POST['ECE'])) {
    $_SESSION['dept'] = "ECE";
    header('location:staff.php');
}
if (isset($_POST['BME'])) {
    $_SESSION['dept'] = "BME";
    header('location:staff.php');
}
if (isset($_POST['EEE'])) {
    $_SESSION['dept'] = "EEE";
    header('location:staff.php');
}
if (isset($_POST['MBA'])) {
    $_SESSION['dept'] = "MBA";
    header('location:staff.php');
}
?>