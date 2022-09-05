<?php
include('DatabaseConnection.php');
$fileName='tice';
$fileName= '%'.$fileName.'%';

$sql= "delete from file 
where FileName like '$fileName'";


$deleteExecution= mysqli_query($conn,$sql);



?>