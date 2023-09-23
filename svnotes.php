<?php
include('include.php');
include('sunotesdelete.php');
include('staffloginback.php');
$name = $_SESSION['name'];
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
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
      <nav>
        <div class="nav-wrapper">
          <a href="#" data-target="slide-out" class="sidenav-trigger"
            ><i class="material-icons">menu</i></a
          >
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
              <a href="staff.php">Dashboard</a>
            </div>
          </li>
          <li>
            <div class="collapsible-header black-text">My Notes</div>
          </li>
          <li>
            <div class="collapsible-header black-text">
              <a href="stnotes.php"> Student Notes</a>
            </div>
          <li>
            <div class="collapsible-header black-text">
              <a href="stassign.php"> Student Assignment</a>
            </div>
            <div class="collapsible-header black-text">
              <a href="#">My Account</a>
            </div>
          </li>
        </ul>
      </div>

      <div class="col s12 m10 offset-m1 l9">
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <h3>MY NOTES</h3>
              <a href="sunotes.php" class="waves-effect waves-light btn"
                ><i class="material-icons left">add</i>Notes</a
              >
              <br /><br />
              <table class="striped highlight centered">
                <thead class="teal lighten-2">
                  <tr>
                   <th>sl. no.</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>uploaded by</th>
                    <th>Status</th>
                    <th>view</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <!-- php -->
<?php
                  $sql="SELECT id,file_name,descrip,uploaded_by,status,files FROM sunotes where uploaded_by ='$name'";
                  $run_query = mysqli_query($con, $sql) or die(mysqli_error($con));
                  if (mysqli_num_rows($run_query) > 0) {
                     $cn=1;
                    while ($row = mysqli_fetch_array($run_query))
                    {
                      $Userid=$row['id'];
                      $file_name = $row['file_name'];
                      $file_description = $row['descrip'];
                      $user = $row['uploaded_by'];
                      $file_status = $row['status'];
                      $files = $row['files'];
                     

?>                    
                      
                      <tr>
                        <td><?php echo $cn; ?></td>
                        <td><?php echo $file_name; ?></td>
                        <td><?php echo $file_description; ?></td>
                        <td><?php echo $user; ?></td>
                        <td><?php echo $file_status; ?></td>
                        <td><a href='staffFiles/<?php echo $files; ?>'><i class='material-icons'>visibility</i></a><?php ?></td>
                        <td><form action="sunotesdelete.php" method="get"></form><a href='sunotesdelete.php?id=<?php echo $Userid; ?>'><i class='material-icons'>delete</i></a></td>
                      </tr>
                      
                  <?php $cn++; }
                  }
                   
                  ?>
                
                </tbody>
              </table>
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
      });
    </script>
  </body>
    </html>
