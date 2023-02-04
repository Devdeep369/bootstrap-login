<?php
$showAlert = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){

    include 'partials/_db.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exits==false;

    if(($password == $cpassword) && $exits==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
    }
}   
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
      <?php require 'partials/_nav.php' ?>
       <?php
       if($showAlert){
                  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You Account is created and you can login.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> ';
       }
?>
     <div class="container my-4">
        <h1 class="text-center">Sign Up to Our Website</h1>
  <form action="/loginboot/signup.php" method="post">
  <div class="form-group ">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username">
    </div>
  </div>

  <div class="form-group ">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>

  <div class="form-group ">
    <label for="cpassword" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="cpassword" name="cpassword">
    </div>
  </div>

  <button type="submit" class="btn btn-primary my-4">Sign Up</button>
</form>
     </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>