<?php
include('include.php');
include('staffloginback.php');
$name = $_SESSION['name'];
$course = $_SESSION['dept'];
?>
<?php
$query = "SELECT year,sem  FROM uassign";
$result = $con->query($query);
if ($result->num_rows > 0) {
  $options = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($options as $key => $value) {
  $years[$key]=$value['year'];
  $sems[$key]=$value['sem'];
}
$year=array_unique($years);
$sem=array_unique($sems);
}
?>
<?php
if (isset($_POST['approve'])) {
  $id = $_POST['sid'];

  $select = "UPDATE uassign SET status='approved' WHERE id='$id' ";
  $run_query = mysqli_query($con, $select) or die(mysqli_error($con));

  echo "<script> Approved...</script>";
}

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
            <div class="collapsible-body">
              <span>
                <div class="collapsible-header">
                  <a href="svnotes.php">View Note</a>
                </div>
                <div class="collapsible-header">
                  <a href="sunotes.php">Upload Notes</a>
                </div>
              </span>
            </div>
          </li>
          <li><div class="collapsible-header">
                  <a href="stnotes.php">Student Notes</a>
                </div></li>
          <li>
            <div class="collapsible-header black-text"> Student Assignment</div>
            <div class="collapsible-header black-text">
              <a href="#">My Account</a>
            </div>
          </li>
        </ul>
      </div>

      <div class="col s12 m10 offset-m1 l9">
        <h3>Student Assignment</h3>
        <form id="filter-form" method="post">
                    <div class="input-field col s12 m4 l6 ">
                    <i class="material-icons prefix">filter_alt</i>
                    <select name='filter'>
                      <option value=" "  selected>Choose Your Year</option>
                      <?php
                      foreach ($year as $ye) {
                        if ($ye!=null) {
                        ?>
                        <option value="<?php echo $ye; ?>">
                          <?php echo $ye; ?>
                        </option>
                        <?php
                      }
                      # code...
                    }
                      ?>
                    </select>
                  </div>
                  <div class="input-field col s12 m4 l6 ">
                  <i class="material-icons prefix">filter_alt</i>
                  <select name='filter1'>
                      <option value=" "selected>Choose Your Sem</option>
                      <?php
                      foreach ($sem as $se) {
                        if ($se!=null) {
                        ?>
                        <option value="<?php echo $se; ?>">
                          <?php echo $se; ?>
                        </option>
                        <?php
                      }}
                      ?>
                    </select>
                    
                    </div>
                    <div class="input-field col s12">
                        <button type="submit" name="submit" class="btn waves-effect waves-light">Apply Filter</button>
                    </div>
                </form>
        <table class="striped highlight centered">
          <thead class="teal lighten-2">
            <tr>
              <th>sl.no</th>
              <th>File Name</th>
              <th>Description</th>
              <th>uploaded by</th>
              <th>Status</th>
              <th>View</th>
              <!-- <th>approve</th> -->
            </tr>
          </thead>

          <tbody>

            <?php
                  $sql="SELECT id,file_name,descrip,uploaded_by,status,files FROM uassign WHERE uploaded_to='$name' AND (dept = '$course')";
                  if(isset($_POST['submit'])){
                    if(($_POST['filter1']!=" ")&&($_POST['filter']!=" ")){
                      $res1=$_POST['filter1'];
                      $res=$_POST['filter'];
                      $sql = "SELECT id,file_name,descrip,uploaded_by,status,files FROM uassign WHERE uploaded_to='$name' AND (dept = '$course')  AND (year ='$res') AND (sem ='$res1')"; 
                    }
                    else if($_POST['filter']!=" "){
                      $res=$_POST['filter'];
                      $sql = "SELECT id,file_name,descrip,uploaded_by,status,files FROM uassign WHERE uploaded_to='$name' AND (dept = '$course')  AND (year ='$res') "; 
                    }
                    else if($_POST['filter1']!=" "){
                      $res1=$_POST['filter1'];
                      $sql = "SELECT id,file_name,descrip,uploaded_by,status,files FROM uassign WHERE uploaded_to='$name' AND (dept = '$course') AND (sem ='$res1')"; 
          
                    }
                    else{
                      echo "<script> alert('Select Filter Options')  </script>";
                    }
                    
                  }
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
                        <td><a href='uploadAssign/<?php echo $files; ?>'><i class='material-icons'>visibility</i></a><?php ?></td>
                      </tr>
                      
                  <?php $cn++; }
                  }
                   
                  ?>
            
          </tbody>
        </table>
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
