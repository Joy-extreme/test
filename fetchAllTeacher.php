<?php

include('DatabaseConnection.php');

$sql= "select * from teacher";
$fetchTeacher= mysqli_query($conn,$sql);


?>