<?php
include ('config.php');
$firstName = $_POST['firstname']; 
$lastName = $_POST['lastname']; 
$phoneNumber = $_POST['phonenumber']; 
$emailAddress = $_POST['email']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];
$image = $_POST['image'];

$insertUser = mysqli_query($connection, "INSERT INTO users (firstname, lastname, email, phonenumber, password, Image, gender) VALUES('$firstName', '$lastName', '$emailAddress', '$phoneNumber', '$password', '$image', '$gender')");
if(isset(($insertUser))){
  echo '<script language="javascript">';
  echo 'if(confirm("Registration Successful...")==true){';
  echo 'location.href="login.php";}';
  echo '</script>';
  
}else{
  echo '<script language="javascript">';
  echo 'if(confirm("Something is wrong...")==true){';
//   echo 'location.href="register.php";}';
  echo '</script>';
}
?>