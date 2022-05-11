<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>
<?php
      include("config.php");


      $email = $_POST['email'];  
      $password = $_POST['password'];
    //   echo($password);
    //   echo($emailAddress);

      $query = mysqli_query($connection, "select * from users where email='$email'");
      if($query)
      {
        //   echo "successfull";
          $user_data = mysqli_fetch_array($query);
          if($user_data==null){
            echo "no user found with given mail.";
          }else if($user_data['password']!=$password){
            echo "invalid password.";
          }
          else
          {

          

       
        ?>
          <h1>Profile</h1>
  <div class="profileBox">
    <img src="pro.jpg" alt="Profile Pic">      
        <h2>Hello,&nbsp; <?php echo($user_data['firstname']);?><?php echo($user_data['lastname']);?></h2>
        <button class="adminLogin" id="adminButton"><a href="login.php">Logout</a></button></a>
        <!--  -->
         <?php
          }
        }
         ?>   

  </div>
</body>
</html>