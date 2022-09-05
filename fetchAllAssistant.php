<?php

include('DatabaseConnection.php');

$sql= "select * from assistant";
$fetchAssistant= mysqli_query($conn,$sql);


?>