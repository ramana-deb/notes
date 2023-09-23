<?php
include('include.php');
?>
<?php
session_start();
if (isset($_POST['login'])) {
  $em = $_POST['emails'];
  $password = $_POST['pass'];
  $query = "SELECT * FROM stprofile ";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $flag = 0;
  foreach ($row as $check) {
    if ($flag == 0) {
      if ($em == $check['email']) {
        if ($password == $check['password']) {
          $flag = 1;

          $_SESSION['id'] = $check['id'];
          $_SESSION['name'] = $check['name'];
          $_SESSION['dept'] = $check['dept'];
          $_SESSION['year'] = $check['year'];
          $_SESSION['sem'] = $check['sem'];

        }
      }
    }
  }
  if ($flag == 1) {
    header('location:front.php');
  } else {
    echo "<script>alert('invalid username/password');
      window.location.href= 'login.php';</script>";
  }

}

?>