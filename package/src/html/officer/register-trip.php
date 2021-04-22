<?php
session_start();
error_reporting(0);
include('includes/config.php');
{
if(isset($_POST['add']))
{
$testerid=$_SESSION['uid'];
$description=$_POST['description'];  
$tripDate=$_POST['tripDate']; 
$location=$_POST['location'];
$numVolunteers=$_POST['numVolunteers'];
$minDuration=$_POST['minDuration'];
$requirements=$_POST['requirements'];
$sql="INSERT INTO trip(description,tripDate,location,numVolunteers,minDuration,requirements) VALUES(:description,:tripDate,:location,:numVolunteers,:minDuration,:requirements)";
$query = $dbh->prepare($sql);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':tripDate',$tripDate,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->bindParam(':numVolunteers',$numVolunteers,PDO::PARAM_STR);
$query->bindParam(':minDuration',$minDuration,PDO::PARAM_STR);
$query->bindParam(':requirements',$requirements,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Trip Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Create Trip</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

<script>
function checkAvailabilityUsername() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
$("#username-availability").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<script type="text/javascript">
function valid()
{
if(document.adduser.password.value!= document.adduser.confirmpassword.value)
{
alert("Both password must be same!");
document.adduser.confirmpassword.focus();
return false;
}
return true;
}
</script>

</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('includes/header.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('includes/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Create Trip</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Create Trip</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-3">
                    </div>
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Trip</h4>
                                    <form action="#" method="post" name="adduser">
                                        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                        <?php include('errors.php'); ?>
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-2">Description </label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text"  name="description" class="form-control"
                                                                    placeholder="Please enter description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-md-2">Date of Trip </label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" 
                                                                    placeholder="Please enter the date of the trip" name="tripDate">
                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <label class="col-md-2">Location</label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Please enter location" name="location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-md-2">No. of Volunteers </label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Please enter number of volunteers" name="numVolunteers">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-md-2">Minimum Duration </label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                               <input type="text" class="form-control"
                                                                    placeholder="Please enter minimum duration" name="minDuration">
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="col-md-2">Requirement</label>
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Please enter requirements" name="requirements">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                   
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-actions">
                                            <div class="text-right">
                                                <button type="submit"  name="add" class="btn btn-info">Submit</button>
                                                <button type="reset" class="btn btn-dark">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script>
        $(function () {
            $(document).on('keypress', "#textarea1", function (e) {
                if (e.keyCode == 13) {
                    var id = $(this).attr("data-user-id");
                    var msg = $(this).val();
                    msg = msg_sent(msg);
                    $("#someDiv").append(msg);
                    $(this).val("");
                    $(this).focus();
                }
            });
        });
    </script>
</body>

</html>
<?php } ?> 