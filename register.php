<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Register Lazy Responsive HTML Template">
    <meta name="author" content="Register Lazy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Register Lazy Responsive HTML Template</title>
    <!--=================== Bootstrap core CSS ===================-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=================== Animate CSS ===================-->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!--=================== Paira Framework Font and Color CSS ===================-->
    <link href="assets/css/paira-typography.css" rel="stylesheet">
    <!--=================== OWL Carousel CSS ===================-->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!--=================== Paira Framework Main CSS ===================-->
    <link href="assets/css/paira.css" rel="stylesheet">
    <!--=================== Paira Framework Main Responsive CSS ===================-->
    <link href="assets/css/paira-responsive.css" rel="stylesheet">
    <!--=================== Font Awesome ===================-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!--=================== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ===================-->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php require 'header.php';?>

<!--=================== Main Body Content Container ===================-->
<div class="paira-container pages-container">
    <!--=================== Header Container ===================-->
    <!--=================== Main Content Container ===================-->
    <main class="register-page">
        <!--=================== Register Content Section ===================-->
        <section class="register-content paira-margin-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80 text-center paira-margin-top-1">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">register</h3>
                    </div>
                    <!--=================== contact Section ===================-->
                    <div class=" col-md-12 col-sm-12 col-xs-12 paira-animation animated fadeInUp" data-paira-animation="fadeInUp" data-paira-animation-delay=".5s">
                        <div class="form-contact">
                            <form accept-charset="UTF-8" action="regprocess.php" class="contact-form" method="post">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="form_type" type="hidden" value="new_comment">
                                    <input name="utf8" type="hidden" value="✓">
                                    <input type="text"  class="form-control margin-bottom-30" placeholder="User name" required="" name="user_name">
                                    <input type="email" class="form-control margin-bottom-30" placeholder="Email" name="user_email" required="">
                                     <input type="password" class="form-control margin-bottom-30" placeholder="Password" name="pwd" required="" minlength="8">
                                   

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                     <textarea  name="address"  class="form-control margin-bottom-30" rows="3" cols="3"  required="" placeholder="Address"></textarea>
                                    <input type="text" pattern="[0-9]{10}" class="form-control margin-bottom-30" placeholder="Phone no" name="phone_no" required="">
                                     <input type="password" class="form-control margin-bottom-30" placeholder="Confirm password" name="cpss" required="">
                                   
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 paira-margin-bottom-2">
                                    <button type="submit" name="btn_sb"class="btn btn-success btn-lg pull-right text-uppercase" class="btn_enter" value="Send">Create account</button>
                                </div>

                                <div class="old-customer text-right padding-right-30">
                                    <a href="login.php" class=" margin-top-10 font-size-14 btn-success  pull-right  forget-password text-uppercase margin-left-25 rale-sbold">Login</a>
                                    <a class=" margin-top-10 font-size-14 btn-success  pull-right  forget-password text-uppercase margin-left-25 rale-sbold">Already Have an Account?</a>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require 'footer.php';?>
    <!--=================== Footer Container ===================-->
   
</div>
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/jquery.mobile.customized.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/sticky.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/jquery.simplr.smoothscroll.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<!--=================== Google Map API ===================-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<?php
    if(isset($_GET['err']))
    {
        ?>

<script src="assets/js/paira.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {   
            alert("Conform Password Doesn't Match");
        });
    </script>
        <?php
    }
?>

</body>

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:19 GMT -->
</html>