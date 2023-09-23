<?php
include('include.php');

if(isset($_GET['id']))
{
    echo $_GET['id'];
    $id=$_GET['id'];
    $delete=mysqli_query($con,"DELETE  FROM uassign WHERE id='$id'");
    if ($delete) 
      {
    echo"<script> alert('Data Deleted')  </script>";
    header("Location:v.assign.php");
  }
  else{
    echo"<script> alert('Data Failed')  </script>";
  }
}

$select="SELECT * FROM uassign";
$query=mysqli_query($con,$select);

?>