<?php 
$con=new mysqli('localhost','project','123','col_notes');

if($con->connect_errno){
    echo $con->connect_error;
    die();
}
?>