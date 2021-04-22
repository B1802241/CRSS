<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['signin']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT username,password,Status,id FROM user WHERE username=:username and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
 foreach ($results as $result) 
 {
    $status=$result->Status;
    $_SESSION['uid']=$result->id;
    $_SESSION['cid']=$result->id;
  } 
if($status==0)
{
$msg="Your account is Inactive. Please contact admin";
}
if($status==1)
{
$_SESSION['userlogin']=$_POST['username'];
echo "<script>alert('Successfully login as Staff');</script>";
echo "<script type='text/javascript'> document.location = 'officer/register-trip.php'; </script>";
}
elseif($status==2)
{
$_SESSION['userlogin']=$_POST['username'];
echo "<script>alert('Successfully login as Volunteer');</script>";
echo "<script type='text/javascript'> document.location = 'volunteer/index.php'; </script>";
}
elseif($status==3)
{
$_SESSION['userlogin']=$_POST['username'];
echo "<script>alert('Successfully login as Manager');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}  
}
else{ 
  echo "<script>alert('Incorrect username or password!');</script>";
}
}
?>
<!doctype html>
<html class="fixed">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../../../CRSS/joinus1.jpg) no-repeat center center;">
            <div class="">
                <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 bg-white" style="min-width: 70%;">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your username and password to login.</p>
                        <form class="mt-4" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Username</label>
                                        <input name="username" type="text" class="form-control input-lg" autocomplete="off" placeholder="enter  your username" />
                                    <span class="input-group-addon">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input name="password" type="password" class="form-control input-lg" placeholder="enter your password" />
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="signin" class="btn btn-block btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    <a href="#" class="text-danger"></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>