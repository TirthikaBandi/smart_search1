<?php
  include("./config.php");
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    // username and password sent from form
    $email = mysqli_real_escape_string($db,$_GET['email']);
    $username = mysqli_real_escape_string($db,$_GET['username']);
    $name = mysqli_real_escape_string($db,$_GET['name']);
    $password = mysqli_real_escape_string($db,$_GET['password']);


    $insertQuery = "INSERT INTO `users`( `user_name`, `user_full_name`, `user_email`, `user_pass`) VALUES ('{$username}', '{$name}', '{$email}' ,'{$password}')";
    if ($db->query($insertQuery) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT user_id FROM users order by user_id desc limit 1";
      $result = $db->query($sql);

      $user_id = 0;
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["user_id"];
          $user_id = $row["user_id"];
          $_SESSION['user_id'] = $row["user_id"];
        }
        header('location: ./home.php');
      }

    echo "<script>".$email."</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--css-->
    <style>
        .form-container{
            width: 500px; 
            background-color: white;
            padding: 20px;

            position: fixed;
            top: 35%;
            left: 50%;
            margin-top: -100px;
            margin-left: -200px;
        }
    </style>
    <title>Smart Search - signup</title>
  </head>
  <body style="background-color: gray;">
      <div class="form-container">
          <img src="images\logo.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
        <form class="needs-validation" method="GET" action="./signin.php" novalidate>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Username</label>
                <input type="text" class="form-control" id="validationCustom01" name="username" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="name" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Email</label>
                <input type="email" class="form-control" id="validationCustom03" name="email" required>
                <div class="invalid-feedback">
                  Please provide a valid email.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom05">Password</label>
                <input type="password" class="form-control" id="validationCustom05" name="password" required>
                <div class="invalid-feedback">
                  Please provide a valid password.
                </div>
              </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Signup</button><br>
                <label>Already have an account?<a href="login.php">login</a></label>
            </div>
          </form>
      </div>
   
      
      <!-- <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');

              /*var email = document.getElementById('validationCustom01');
              var theUrl = "./signin?email=";
              theUrl = theUrl.concat(email);
              console.log(theUrl);
              var xmlHttp = new XMLHttpRequest();
              xmlHttp.open("GET", theUrl, true); // true for asynchronous 
              xmlHttp.send(null);*/
            }, false);
          });
        }, false);
      })();
      </script> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>