<?php
include("config.php");
error_reporting(0);

$firstname = $_GET['rn'];
$query = "DELETE FROM project WHERE FIRSTNAME= '$firstname'";

$data=mysqli_query($conn,$query);
if($data)
{
    echo "<font color='green'>Record Deleted From Database";
}
else{
    echo "<font color='red'>Failed To Delete Record From Database";
}