<?php
$email = "joybhowmik67@student.nstu.edu.bd";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
  echo "Invalid email format";
}

else 
{
  echo "valid email format";

}

?>