<?php
include('include.php');
session_start();
if (isset($_POST['login'])) {
  $email = $_POST['emailid'];
  $pass = $_POST['passwo'];
  $query = "SELECT * FROM staffprofile ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $flag = 0;
  foreach ($row as $check) {
    if ($flag == 0) {
      if ($email == $check['email']) {
        if ($pass == $check['password']) {
          $flag = 1;
          echo $check['id'];
          $_SESSION['id'] = $check['id'];
          $_SESSION['name'] = $check['name'];
          echo $_SESSION['id'];
        }
      }
    }
  }
  if ($flag == 1) {
    header('location:sdept.php');
  } else {
    echo "<script>alert('invalid username/password');
      window.location.href= 'stafflogin.php';</script>";
  }

}
// session_write_close();
// session_start();

// if (isset($_POST['CSE'])) {

//   $_SESSION["dept"] = "CSE";
//   header('location:staff.php');
// }
// if (isset($_POST['MECH'])) {
//   $_SESSION["dept"] = "MECH";
//   header('location:staff.php');
// }
// if (isset($_POST['ECE'])) {
//   $_SESSION["dept"] = "ECE";
//   header('location:staff.php');
// }
// if (isset($_POST['BME'])) {
//   $_SESSION["dept"] = "BME";
//   header('location:staff.php');
// }
// if (isset($_POST['EEE'])) {
//   $_SESSION["dept"] = "EEE";
//   header('location:staff.php');
// }
// if (isset($_POST['MBA'])) {
//   $_SESSION["dept"] = "MBA";
//   header('location:staff.php');
// }

// ?>