<?php
   require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>RegistrationForm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="registration.css">
    <script src="check.js" defer></script>
    
     <style>
        body {
            background-color: powderblue;
            width: 100%;
            position: relative;
        }
        section{
            width: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
        }
</style> 
     
</head>
<body>
    <section class="vh-100 gradient-custom">
    <div>
        
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Registration</h1>
                    <p>fill up the form with correct values.</p>
                    <hr class="mb-3">
                    <form onsubmit="return validate();" action="registration.php" method="POST" autocomplete="off">
                    <p class="errorMessage hidden" id="errorMessage">jhgfgjhf</p>
                        
                        <label for="firstname"><b>First Name</label>
                        <input class="form-control form-control-lg" type="text" id="firstname" name="firstname" required/> 

                        <label for="lastname"><b>Last Name</label>
                        <input  class="form-control form-control-lg" type="text" id="lastname" name="lastname" required/> 

                        <label for="email"><b>Email</label>
                        <input  class="form-control form-control-lg " id="email" type="email" name="email" required/> 

                        <label for="phonenumber"><b>Phone Number</label>
                        <input  class="form-control form-control-lg" type="text" id="phonenumber" name="phonenumber" required/>  

                        <label for="password"><b>Password</label>
                        <input  class="form-control form-control-lg"  type="password" id="password" name="password" required/> 

                        <div class="col-md-6 mb-4" >
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type="file" accept="Image/*" name="image" required/>
                            <label class="form-label" for="UploadImage">Upload Image</label>
                        </div>
                    </div>
                    <label for="gender" name="gender"><b>Gender</label>
                    <input type="radio" id="gender" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" id ="gender" value="female"> Female
                        <hr class="mb-3">
                        <input type="submit" class="btn btn-primary btn-lg"  value="Register" id="register" name="register">
                    </form>
                    </div>
                    
                </div>
            </div>
    </div>
    </section>



    <script>
        // <?php include("check.js") ?>
    </script>
</body>
</html>