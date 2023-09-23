<?php
include('include.php');
include('loginback.php');
$dept = $_SESSION['dept'];
?>
<?php
$query = "SELECT subject  FROM sunotes";
$result = $con->query($query);
if ($result->num_rows > 0) {
  $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <style>
    .new {
      width: 70%;
      border-radius: 5px;
      background: linear-gradient(145deg, #349abb, #2c829e);
      box-shadow: 12px 12px 14px #b0bec5;
    }  
    a {
        color: black !important;
      }

      button{
        background-image: linear-gradient(to right, lightblue, darkblue);
      }

  </style>
  
</head>

<body>
  <!-- Navbar goes here -->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper" style=" background-image: linear-gradient(to right, lightblue, darkblue)">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo center">Logo</a>
        <ul class="hide">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Page Layout here -->
  <div class="row">
    <div class="col s12 m4 l3">
      <ul id="slide-out" class="sidenav sidenav-fixed collapsible">
        <li>
          <h3 class="center">COLLEGE NOTES</h3>
        </li>
        <li>
          <div class="collapsible-header">
            <a href="front.php">Dashboard</a>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <a href="#">College Notes</a>
          </div>
        </li>

        <li>
          <div class="collapsible-header black-text">My Notes</div>
          <div class="collapsible-body">
            <span>
              <div class="collapsible-header">
                <a href="vnotes.php">View Note</a>
              </div>
              <div class="collapsible-header">
                <a href="unotes.php">Upload Notes</a>
              </div>
            </span>
          </div>
        </li>
        <li>
          <div class="collapsible-header black-text">My Assignment</div>
          <div class="collapsible-body">
            <span>
              <div class="collapsible-header">
                <a href="v.assign.php">View assignment</a>
              </div>
              <div class="collapsible-header">
                <a href="uassign.php"> Upload assignment</a>
              </div>
            </span>
          </div>
        </li>
        <li>
          <div class="collapsible-header"><a href="#">My Account</a></div>
        </li>
      </ul>
    </div>

    <div class="col s12 m10 offset-m1 l9">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <h1>College notes</h1>
            <form id="filter-form" method="post">
              <div class="input-field col s12 m4 l5 ">
                <i class="material-icons prefix">filter_alt</i>
                <select name='filter'>
                  <option value="" disabled selected>Choose Your Subject</option>
                  <?php
                  foreach ($options as $option) {
                    ?>
                    <option value="<?php echo $option['subject']; ?>">
                      <?php echo $option['subject']; ?>
                    </option>
                    <?php
                  }
                  ?>
                </select>
              </div>
              <div class="input-field col s12">
                <button type="submit" name="submit" class="btn waves-effect waves-light">Apply Filter</button>
              </div>
            </form>
            <div class="row">
              <?php
              $sql = "SELECT id,file_name,descrip,uploaded_by,status,files,subject FROM sunotes WHERE dept='$dept' ";
              if (isset($_POST['submit'])) {
                $res = $_POST['filter'];
                $sql = "SELECT id,file_name,descrip,uploaded_by,status,files,subject FROM sunotes WHERE dept='$dept'  AND (subject ='$res')";
              }
              $run_query = mysqli_query($con, $sql) or die(mysqli_error($con));
              if (mysqli_num_rows($run_query) > 0) {
                $cn = 1;
                while ($row = mysqli_fetch_array($run_query)) {
                  $Userid = $row['id'];
                  $file_name = $row['file_name'];
                  $file_description = $row['descrip'];
                  $user = $row['uploaded_by'];
                  $file_status = $row['status'];
                  $files = $row['files'];
                  ?>

                  <div class="col s6 m4 l4">
                    <div class="card  new">
                      <div class="card-content white-text">
                        <span class="card-title">
                          <?php echo $file_name; ?>
                        </span>
                        <div>
                          <?php echo $file_description; ?>
                        </div>
                        <div>
                          <?php echo $user; ?>
                        </div>
                      </div>
                      <div class="card-action">
                        <a href="staffFiles/<?php echo $files; ?>"><i class='material-icons'>visibility</i></a>
                      </div>
                    </div>
                  </div>
                <?php }
              }
              ?>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $(".collapsible").collapsible();
      $(".sidenav").sidenav();
      $('select').formSelect();
    });
  </script>
</body>

</html>