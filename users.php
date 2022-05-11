<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2c20e78cef.js" crossorigin="anonymous"></script>
   
    <title>Users</title>
    <link rel="stylesheet" href="users.css">
    <style>

    <?php 
     
     include("users.css");

    ?>

    </style>
    
</head>
<body>
    <h1>User details</details></h1>
    <button class="addUser" name="addUser">ADD</button>
    <div class="search-box">
    <input type="text" class="search-txt" id="searchInput"  placeholder="Search by name">
    <a class="search-btn" href="#">
    <i class="fa-solid fa-magnifying-glass"></i>
    </a>
   
    <!-- <i class="fa-solid fa-telescope"></i> -->
    <!-- <i class="fa-solid fa-nfc-magnifying-glass"></i> -->
    </div> 

    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Password</th>
        <!-- <th>Image</th> -->
        <th>EDIT</th>
        <th>DELETE</th>

      </tr>

      <?php 
                include ("config.php");

                $query = mysqli_query($connection, "select * from users");

                while($rows = mysqli_fetch_assoc($query)){
            ?>

                <tr>
                  <td><?php echo $rows['firstname'] ?></td>
                  <td><?php echo $rows['lastname'] ?></td>
                  <td><?php echo $rows['phonenumber'] ?></td>
                  <td><?php echo $rows['email'] ?></td>
                  <td><?php echo $rows['gender'] ?></td>
                  <td><?php echo $rows['password'] ?></td>
                  <!-- <td><?php echo $rows['image'] ?></td> -->
              
                  <td><button class="edtbtn" id="edtbtn" name="edtbn"><a href="edito.php">EDIT</a></button></a></td>
                  <td><button class="delbtn" id="delbtn" name="delbtn">DELETE</button></a></td>
                  
                  
                    
                    <!-- <td><a href="profile.php?user=<?php echo $rows['name'] ?>"><button class="button">Profile</button></a></td> -->
                </tr>

            <?php
                }
            ?>


      
      
    </table>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>