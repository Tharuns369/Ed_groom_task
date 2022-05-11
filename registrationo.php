<?php
   require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>RegistrationForm</title>
    <link rel="stylesheet" type="text/css" href="styleso.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
</head>
<body>
    <section class="vh-100 gradient-custom">
    <div>
        <?php
        if(isset($_POST['Register']))
        {
            $firstname   =  $_POST['firstname'];
            $lastname    =  $_POST['lastname'];
            $email       =  $_POST['email'];
            $phonenumber =  $_POST['phonenumber'];
            $password    =  $_POST['password'];
            $gender      =  $_POST['gender'];

            $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password, gender ) VALUES(?,?,?,?,?,?)";
            $stmtinsert = $connection->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password,$gender]);
            if($result)
            {
              //  echo "successfully saved.";

            }
            else
            {
                echo 'there were some errors';
            }
            

        }
        ?>
    </div>
    <section class="bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-1">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="registration.php" method="post" >

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg"
                  name="firstname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">First Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" 
                  name="lastname" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Last Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="phonenumber" id="form3Example3cg" name="phonenumber" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Phone Number</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

<h6 class="mb-0 me-4" name="gender">Gender: </h6>

<div class="form-check form-check-inline mb-0 me-4">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="femaleGender"
    value="option1"
  />
  <label class="form-check-label" for="femaleGender">Female</label>
</div>

<div class="form-check form-check-inline mb-0 me-4">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="maleGender"
    value="option2"
  />
  <label class="form-check-label" for="maleGender">Male</label>
</div>

<div class="form-check form-check-inline mb-0">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="otherGender"
    value="option3"
  />
  <label class="form-check-label" for="otherGender">Other</label>
</div>

</div>


                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg"
                  name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="file" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="uploadImage">Upload Profile</label>
                </div>
            

            
                <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="Register">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="validate.js"></script>
</body>
</html>