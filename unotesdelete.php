<?php
include('include.php');

if(isset($_GET['id']))
{
    echo $_GET['id'];
    $id=$_GET['id'];
    $delete=mysqli_query($con,"DELETE  FROM unotes WHERE id='$id'");
    if ($delete) 
      {
    echo"<script> alert('Data Deleted')  </script>";
    header("Location:vnotes.php");
    
  }
  else{
    echo"<script> alert('Data Failed')  </script>";
  }
}

$select="SELECT * FROM unotes";
$query=mysqli_query($con,$select);

?>