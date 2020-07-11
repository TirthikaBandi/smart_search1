<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
    </style>
  </head>
  <body>
    <!--navbar-->

        <div class="container-fluid" >
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
                     </div>
              </li>
             </ul>
            </div>
        </div>      
    

    <!--search function-->
    <div class="row bg-dark py-3 ">
        <div class="col-md-3 col-sm-12 "></div>
        <div class="col-md-6 col-sm-12">
            <nav class="navbar navbar-dark bg-dark">

            <form class="form-inline  text-center">
                <label style="color: #ffffff;" class="ml-5 pl-5">What are you looking for? </label>
                <input class="form-control mr-sm-2 ml-5" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>    
        </div>
        <div class="col-md-3 col-sm-12"></div>
    </div>
</div>
    <!--if video found using javascript-->

        <!-- Carousel row -->
        <div class="row mx-5" >
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <!-- Carousel -->
                <div id="carousel-example" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- End carousel -->
            </div>
        </div>
        <!-- End carousel row -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>