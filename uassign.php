<?php
include('include.php');
include('loginback.php');
$no = $_SESSION['id'];
$name = $_SESSION['name'];
$year = $_SESSION['year'];
$sem = $_SESSION['sem'];
$dept = $_SESSION['dept'];
?>
<?php
$query = "SELECT name  FROM staffprofile";
$result = $con->query($query);
if ($result->num_rows > 0) {
  $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<!-- php -->
<?php
$file_array = array();
if (isset($_POST['submit'])) {
  $fname = $_POST['filename'];
  $descrip = $_POST['descript'];
  $option = $_POST['select'];

  foreach ($_FILES['assignupload']['name'] as $key => $value) {
    $random = rand('11111', '99999');
    $files = $random . '_' . $value;
    move_uploaded_file($_FILES['assignupload']['tmp_name'][$key], 'uploadAssign/' . $files);


    $sql = "INSERT INTO uassign (uploaded_by,file_name,descrip,files,uploaded_to,dept,year,sem ) VALUES('$name','$fname','$descrip','$files','$option','$dept','$year','$sem')";
    $result = mysqli_query($con, $sql);

  }
  if ($result) {
    echo "<script> alert('Data Stored')  </script>";
  } else {
    echo "<script> alert('Data Failed')  </script>";
  }
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
       a {
        color: black !important;
      }
      button{
        background-image: linear-gradient(to right, lightblue, darkblue);
      }
      nav{
         background-image: linear-gradient(to right, lightblue, darkblue);
      }

    </style>
</head>

<body>
  <!-- Navbar goes here -->
  <div class="navbar-fixed">
  </div>
  <!-- Page Layout here -->
  <div class="row">
    <div class="col s12 m4 l3">
      <ul id="slide-out" class="sidenav sidenav-fixed collapsible">
        <li>
          <h3 class="center">COLLEGE NOTES</h3>
        </li>
        <li>
          <div class="collapsible-header"> <a href="front.php">Dashboard</a> </div>
        </li>
        <li>
          <div class="collapsible-header"> <a href="colnotes.php">College Notes</a> </div>
        </li>
        <li>
          <div class="collapsible-header black-text">My Notes</div>
          <div class="collapsible-body">
            <span>
              <div class="collapsible-header"><a href="vnotes.php">View Note</a></div>
              <div class="collapsible-header"><a href="uassign.php">Upload Notes</a></div>
            </span>
          </div>
        </li>
        <li>
          <div class="collapsible-header black-text">My Assignment</div>
          <div class="collapsible-body">
            <span>
              <div class="collapsible-header"><a href="v.assign.php">View assignment</a></div>
            </span>
          </div>
        </li>
        <li>
          <div class="collapsible-header"> <a href="#">My Account</a></div>
        </li>
      </ul>
    </div>

    <div class="col s12 m8 pull-m2 l6 offset-l1">
      <div class="card horizontal center ">
        <div class="card-stacked">
          <div class="card-content">
            <h1>UPLOAD ASSIGNMENT</h1>
            <div class="row">
              <form class="col s12" action='uassign.php' method='post' enctype="multipart/form-data">
                <div class="row">
                  <div class="input-field col s12 l8 offset-l2">
                    <i class="material-icons prefix">save</i>
                    <textarea id="File Name" name="filename" class="materialize-textarea"></textarea>
                    <label for="File Name">File Name</label>
                  </div>
                  <div class="input-field col s12 l8 offset-l2">
                    <i class="material-icons left">assignment_turned_in</i>
                    <select name='select'>
                      <option value="" selected>Choose your option</option>
                      <?php
                      foreach ($options as $option) {
                        ?>
                        <option value="<?php echo $option['name']; ?>">
                          <?php echo $option['name']; ?>
                        </option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="input-field col s12 l8 offset-l2">
                    <i class="material-icons prefix">description</i>
                    <textarea id="Description" name="descript" class="materialize-textarea"></textarea>
                    <label for="Description">Description</label>
                    <div class="file-field input-field">
                      <div class="btn-small"style="background-image: linear-gradient(to right, lightblue, darkblue)">
                        <span>File</span>
                        <input name="assignupload[]" type="file" multiple>
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="No File choosen">
                      </div>
                    </div>
                  </div>
                  <div class="col s12 l8 offset-l2">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Upload
                      <i class="material-icons right">file_upload</i>
                    </button>
                  </div>
              </form>
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