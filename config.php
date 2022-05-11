<?php

$_SERVER="localhost";
$db_user= "root";
$db_pass= "tharun@369";
$db_name= "useraccounts";

$connection =mysqli_connect($_SERVER,$db_user,$db_pass,$db_name);
if($connection)
{
    
    // echo "connection successful";
}
else
{
   
    die("Connection failed: " . mysqli_connect_error());
   
}