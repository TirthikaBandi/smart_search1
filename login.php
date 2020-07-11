<?php 
  include("./config.php");
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
      $email = $_GET['email'];
      $pass = $_GET['password'];

      $sql = "SELECT * FROM users where user_email = '{$email}' and user_pass='{$pass}' order by user_id";
      $result = $db->query($sql);
      echo $sql;
      $user_id = 0;
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["user_id"];
          $user_id = $row["user_id"];
          $_SESSION['user_id'] = $row["user_id"];
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['user_email'] = $row['user_email'];
          $_SESSION['name'] = $row['user_full_name'];
        }
        header('location: ./home.php');
      }else{
        header('location: ./login.php?error="Invalid credentials"');
          echo "<script>Invalid Credentials</script>";
      }


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
            width: 320px; 
            background-color: white;
            padding: 20px;

            position: fixed;
            top: 35%;
            left: 50%;
            margin-top: -100px;
            margin-left: -200px;
        }
    </style>
    <title>Smart Search - login</title>
  </head>
  <body style="background-color: gray;">
      <div class="form-container">
          <img src="images\logo.jpg" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
        <form class="needs-validation" method="GET" action="./login.php" novalidate>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom03">Email</label>
                <input type="email" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                  Please provide a valid email.
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationCustom05">Password</label>
                <input type="password" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid password.
                </div>
              </div>
            </div>
            <div class="form-row">
              <p style="color: red;"> <?php 
                  if(isset($_GET['error']))echo $_GET['error'];
                  ?> </p>
            </div>
            <div>
                <div class="container h-100"> 
                    <div class="d-flex h-100"> 
                        <div class="align-self-center mx-auto" style="padding: 10px;">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </div>
                </div>
                <div class="container h-100"> 
                    <div class="d-flex h-100"> 
                        <div class="align-self-center mx-auto" style="padding: 10px;">
                            <label>Don't have an account? <a href="signin.php"><b>Sign up</b></a></label>
                        </div>
                    </div>
                </div>
            </div>
          </form>
      </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>