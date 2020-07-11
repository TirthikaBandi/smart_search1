<?php session_start(); ?>
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

      .content{
        text-align: justify;
        margin-left: 10px;
    
        padding: 10px;
      }

    </style>
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

    <!--about us-->
    <div>
        <div style="text-align: center;">
            <h2 class="mx-5 pt-5">About us</h2>
        </div>
        <div class="row mx-5" >
            <div class="col-md-6 col-sm-12 px-5 py-5">
              <img src="images/about_us.png" style="height: 100%; width: 100%;">
            </div>
            <div class="col-md-6 col-sm-12 px-5 py-5">
              <p class="mx-5" class="content">
                <h6>
                  SMART SEARCH is an application that simplifies your searches of content in videos. In case you are looking for a particular topic inside a lecture video you don't have to waste time navigating through the whole video looking for that specific part SMART SEARCH will do it for you. You can just type in the topic and get to the part of the video where the topic has been talked about by clicking on the timestamp thus generated. So storing the user data and the lectures and deploying an application will be a good option. For deploying this application I will use AWS platform.
                </h6>
              </p>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>