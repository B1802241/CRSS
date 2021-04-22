<!doctype html>
<html lang="en">
<head>
  <title>CRSS Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    


  <link rel="stylesheet" href="css/bootstrap.min.css">
 
  <link rel="stylesheet" href="css/style.css">

  <style>
    .bannerbg{
        text-transform: uppercase !important;
        font-size:50px !important;
        color:white !important;
        font-weight: 900 !important;
    }
    .bannersm{
        text-transform: none !important;
        font-size:30px !important;
        color:white !important;
        font-weight: 900 !important;
    }
    .dhr{
        width: 8%;
        border-top: 5px solid #47EEF4;
    }
    .img-sm{
        max-height: 80px;
    }
    .img-md{
        max-height: 320px;
        border-radius: 25px;
    }
    .quote{
        padding-top:50px;
        height:300px;
        color:black;
        background-color: #F4F5F9;
        max-width: 100%;
    
    }
    .newsection{
        padding-top:50px;
        height:750px;
        color:black;
        background-color: #F4F5F9;
        max-width: 100%;
        text-transform: uppercase;
    }
    .normaltext{
        text-transform: none;
    }
    .whoarewe{
        padding-top:50px;
        height:1000px;
        color:black;
        background-color: white;
        max-width: 100%;
        text-transform: uppercase;
    }
    .pf-15{
        padding-left:15%;
    }
    .pf-20{
        padding-left:20%;
    }
    .newbtn{
        color:red;
        font-weight: bold;
    }
    .white{
        color:white;
        font-weight: bold;
    }
    .w-20{
      width: 20%;
    }
    .p-custom{
        padding: 0.5rem 7rem;
    }
    .parallax {
      /* The image used */
      background-image: url("parallax.jpg");

      /* Set a specific height */
      min-height: 600px; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      border-bottom-right-radius:0% !important;
    }
    .transparent{
       background:transparent;
    }
  </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<!-- <body data-spy="scroll" data-target=".navbar" data-offset="50">   -->
    <div class="container">
        <nav class="navbar fixed-top navbar-light justify-content-end p-custom">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link white" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white" href="index.php">Login</a>
                </li>
            </ul>
        </nav>  
    </div>
    
    <div class="hero-v1 parallax">
      <div class="container">
          <div class="mt-5 text-center">
            <span class="mt-5 d-block bannersm">Rebuilding Lives For Futures</span>
            <h1 class="mt-5 mb-3 bannerbg">Crisis Relief Services</h1>
          </div>
      </div>
    </div>

    <div class="container quote">
        <div class="row container-fluid text-center pf-15" >
            <div class="col-4">
                <img class="img-sm" src="quote.png" alt="quote-logo">
            </div>
            <div class="col-9 pf-20">
                <p>“The heart of a volunteer is never measured in size, but by the depth of the commitment to make a difference in the lives of others”</p>
                <p>– DeAnn Hollis</p>
            </div>
            
        </div>
    </div>

    <!-- WHO ARE WE -->
    <div class="container whoarewe">
        <div class="row ">
            <div class="col-12 text-center mb-4">
                <h1 class="heading mb-3">Who We Are ?</h1>
                <hr class="dhr">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 mt-4">
                        <h2 class="mt-4 mb-4">Background</h2>
                        <p class="mt-5 normaltext">Crisis Relief Service is an NGO (Non-Government Organization) which aims to help people who are facing crisis from natural disasters such as floods and earthquakes. CRS hold relief effort trips to help disaster affected regions by recruiting volunteers to help out with the relieft efforts</p>
                    </div>
                    <div class="col-6 text-center mt-4">
                        <img class="img-md" src="team.jpg" alt="team">
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-6 mt-4">
                        <img class="img-md" src="objectives.jpg" alt="team">
                    </div>
                    <div class="col-6">
                        <h2 class="mt-4 mb-4">Our Objective</h2>
                        <p class="mt-5 normaltext">CRS proposed an information system in organizing the crisis trips which have serverl objectives such as following:</p>
                        <li class="normaltext">To spread awareness for Crisis Relief Services in order to make more people pay attention to the crisis</li>
                        <li class="normaltext">To improve convenience and accessibility for both CRS and the volunteers</li>
                        <li class="normaltext">Time saving for staffs which they able to track and manage trip applications easily</li>
                    </div>
                </div>
            </div>
            
        </div>
    </div>



    <!-- UPCOMING EVENT -->
    <div class="container newsection">
        <div class="row ">
            <div class="col-12 text-center mb-4">
                <h1 class="heading mb-3">UpComing Events</h1>
                <hr class="dhr">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <img class="img-md" src="event1.jpg" alt="event-1">
                        <h4 class="mt-4">Earthquake in Indonesia</h4>
                        <p class="normaltext mt-4">We need volunteer to assist the earthquake crisis in Indonesia</p>
                        <a href="index.php" class="btn btn-secondary white" >Join Us Now</a>
                    </div>
                    <div class="col-6 text-center">
                        <img class="img-md" src="event2.jpg" alt="event-2">
                        <h4 class="mt-4">WildFire in Australia</h4>
                        <p class="normaltext mt-4">We need volunteer to assist the wildfire crisis in Australia</p>
                        <a href="index.php" class="btn btn-secondary white" >Join Us Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>


</body>
</html>