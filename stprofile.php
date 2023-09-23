<?php
include('include.php')
?>
                      <!-- php -->
                     <?php
                       $file_array=array();
if(isset($_POST['submit']))
{
  $name=$_POST['username'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $role=$_POST['role'];
  $dept=$_POST['Dept'];
  $year=$_POST['Year'];
  $sem=$_POST['Sem'];

  $sql="INSERT INTO stprofile (name,email,password, role,dept,year,sem) VALUES('$name','$email','$pass','$role','$dept',' $year','$sem')";
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
  </style>
  <body>
<div class="row ">
    <div class="col s12 m6 l6 offset-l4 ">
    <form action="stprofile.php" method="post">
        <div class="input-field col s12 m12 l10">
            <input placeholder="Placeholder" id="first_name" type="text" name="username" class="validate">
            <label for="first_name">User Name</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <input id="email" type="email"  name="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
        </div>
        <div class="input-field col s12 m12 l10">
            <select name="role" >
                <option value="" disabled selected>Role</option>
                <option value="student">student</option>
            </select>
        </div>
        <div class="input-field col s12 m12 l10">
            <select name="Year" >
                <option value="" disabled selected>Current Year</option>
                <option value="1st_yr">I</option>
                <option value="2nd_yr">II</option>
                <option value="3rd_yr">III</option>
                <option value="4th_yr">IV</option>
            </select> 
        </div>
        <div class="input-field col s12 m12 l10">
            <select name="Sem" >
                <option value="" disabled selected>Current Sem</option>
                <option value="1st_sem">I</option>
                <option value="2nd_sem">II</option>
                <option value="3rd_sem">III</option>
                <option value="4th_sem">IV</option>
                <option value="5th_sem">V</option>
                <option value="6th_sem">VI</option>
                <option value="7th_sem">VII</option>
                <option value="8th_sem">VIII</option>
            </select>
        </div>
        <div class="input-field col s12 m12 l10">
            <select name="Dept" >
                <option value="" disabled selected>Select Department</option>
                <option value="CSE">CSE</option>
                <option value="MECH">MECH</option>
                <option value="EEE">EEE</option>
                <option value="BME">BME</option>
                <option value="BME">ECE</option>
                <option value="BME">MBA</option>
            </select>
        </div>
        <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="submit" >Submit
            <i class="material-icons right">send</i>
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