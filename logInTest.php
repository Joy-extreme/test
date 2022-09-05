<?php
include('DatabaseConnection.php');
include('fetchAllAssistant.php');
include('fetchAllTeacher.php');
include('fetchallStudents.php');
$userId='joy@mou.com';
//$password=password_hash('joymou',PASSWORD_BCRYPT);
$password='joymou';
$flag=0;

// to match the hashed passwords
/*if (password_verify( 'joymou', $password))
{
    echo "<br> the passwords are simillar";
}
else 
{
    echo 'They are not simillar';
}*/
//password match ends here


while($row= mysqli_fetch_assoc($fetchAssistant))
{
    if( ($row['UserId'] == $userId)  &&  password_verify($password, $row['UserPassword']) )
    {
        header('location: OfficeAssistantPage.html');
    }
    

}

while($row= mysqli_fetch_assoc($fetchTeacher))
{
    if( ($row['UserId'] == $userId)  &&  password_verify($password, $row['UserPassword']) )
    {
        header('location: TeacherPage.html');
    }
    

}

while($row= mysqli_fetch_assoc($fetchStudent))
{
    if( ($row['UserId'] == $userId)  &&  password_verify($password, $row['UserPassword']) )
    {
        header('location: StudentPage.html');
    }
    

}





?>