<?php
include('DatabaseConnection.php');

$sql= "select * from file";
$fetchfile= mysqli_query($conn,$sql);

?>