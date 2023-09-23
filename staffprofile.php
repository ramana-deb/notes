<?php
include('include.php')
?>
                      <!-- php -->
<?php
 $file_array=array();
if(isset($_POST['submit']))
{
  $sname=$_POST['username'];
  $semail=$_POST['email'];
  $spass=$_POST['password'];
  $srole=$_POST['role'];
  $sql="INSERT INTO staffprofile (name,email,password, role) VALUES('$sname','$semail','$spass','$srole')";
  $data = mysqli_query($con,$sql);
  if($data)
  {
    echo"<script> alert('Data Stored')  </script>";
  }
  else{
    echo"<script> alert('Data Failed')  </script>";
  }
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
    
  </head>
  <style>
    .row>.col{
        margin-top: 190px;
        border: 1px solid black;
        padding: 20px;
    }
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
  <body>
<div class="row ">
    <div class="col s12 m6 l6 offset-l4 ">
      <form action="staffprofile.php" method="post">
        <div class="input-field col s12 m12 l10">
            <input placeholder="Placeholder" id="first_name" type="text" name="username" class="validate">
            <label for="first_name">UserName</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <input id="password" type="password"  name="password" class="validate">
            <label for="password">Password</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <input placeholder="Placeholder" id="first_name" type="text" name="role" class="validate">
            <label for="first_name">role</label>
        </div>
        <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
            <i class="material-icons right">Submit</i>
          </button>
        </div>
      </form>
    </div>
</div>   

    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
       $(document).ready(function(){
    $('select').formSelect();
  });
    </script>
  </body>
    </html>