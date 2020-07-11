<?php session_start();
include("./config.php");
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
  $user_name = $_GET['user_name'];
  $email = $_GET['email'];
  $pass = $_GET['password'];
  $confirm = $_GET['confirm'];
  $name = $_GET['name'];

  if($pass == $confirm) {
    $sql = "UPDATE `users` SET  user_email='{$email}', user_full_name='{$name}', user_pass='{$pass}', user_name='{$user_name}' where user_id={$_SESSION['user_id']}";
    if ($db->query($sql) === TRUE) {
      //echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $_SESSION['user_name'] = $user_name;
    $_SESSION['user_email'] = $email;
    $_SESSION['name'] = $name;
  }else{
    header('location: ./profile.php?error=Password Missmatch');
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

    <title>Smart Search</title>
    <!--CSS-->
    <style>
      #navbarSupportedContent{
      font-size: 12px;
      }
      /*not working*/
      #content{
          top: 200%;
      }
      a{
        text-decoration: none;
        color: black;
      }

      a:hover{
        color: black;
      }

      .nav-link{
        font-size: 18px;
      }

      .form-container{
        width: 320px; 
        background-color:#D3D3D3;
        padding: 20px;

        position: fixed;
        top: 35%;
        left: 50%;
        margin-top: -100px;
        margin-left: -200px;
      }
    </style>
    <link rel="stylesheet" src="home.css">
  </head>
  <body>
    <!--navbar-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12 pr-5 py-4">
              <a class="navbar-brand" href="#"><label class="display-4">Smart Search</label></a>
            </div>


        <div class="col-md-4 col-sm-12  py-4">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                  <ul class="nav">
                    <li class="nav-item mx-2 py-4 active">
                      <a class="nav-link " href="home.php">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-2 py-4">
                      <a class="nav-link " href="search.php">SEARCH</a>
                    </li>
                    <li class="nav-item mx-2 py-4">
                      <a class="nav-link" href="upload.php">UPLOAD</a>
                    </li>
                    <li class="nav-item mx-2 py-4">
                      <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                  </ul>
                </div>
            </nav>

            </div>
            <div class="col-md-4 col-sm-12 py-5 ">
              <ul class="nav ml-5 pl-5 py-2">
              <li class="nav-item dropdown ml-5 pl-5" class="nav justify-content-end">
                      <a class="nav-link dropdown-toggle pl-5 ml-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SIGN IN AS
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><?php echo $_SESSION['user_name'] ?></a>
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Sign out</a>
                    </li>
                </div>
              </li>
            </div>
        </div>      
    </div>

    <!--edit profile-->

    <div class="form-container">
      <form class="needs-validation" method="GET" action="./profile.php" novalidate>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom01">Username</label>
            <input type="text" class="form-control" id="validationCustom01" name="user_name" value=<?php echo $_SESSION['user_name'] ?> required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustom02">Name</label>
            <input type="text" class="form-control" id="validationCustom02" name="name" value=<?php echo $_SESSION['name'] ?> required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom03">Email</label>
            <input type="email" class="form-control" id="validationCustom03" name="email" value=<?php echo $_SESSION['user_email'] ?> required>
            <div class="invalid-feedback">
              Please provide a valid email.
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustom05">Password</label>
            <input type="password" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
              Please provide a valid password.
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustom06"> Confirm Password</label>
            <input type="password" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
              Please provide a valid password.
            </div>
          </div>
        </div>
        <div>
            <div class="container h-100"> 
                <div class="d-flex h-100"> 
                    <div class="align-self-center mx-auto" style="padding: 10px;">
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
          <p style="color: red;"> <?php 
              if(isset($_GET['error']))echo $_GET['error'];
              ?> 
          </p>
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