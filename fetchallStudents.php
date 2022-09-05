<?php

include('DatabaseConnection.php');

$sql= "select * from student";
$fetchStudent= mysqli_query($conn,$sql);


?>