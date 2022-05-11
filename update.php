<?php
include ('config.php');

$firstname   =  $_POST['firstname'];
$lastname    =  $_POST['lastname'];
$email =  $_POST['email'];
$phonenumber =  $_POST['phonenumber'];
$password    =  $_POST['password'];
            // $image       =  $_POST['image'];
$gender      =  $_POST['gender'];
echo $firstname;

$UpdateUser = mysqli_query($connection, "update users set firstname='$firstname', lastname='$lastname' ,phonenumber='$phonenumber' , password='$password',gender='$gender' where email='$email'");

if(isset($UpdateUser))
{
    header("Location:users.php");
    echo '<script language="javascript">';
    echo 'alert'("successfully updated");
    echo '</script>';
}
else{
    echo $UpdateUser->error;
    
}
            