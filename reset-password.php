<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Reset-Password Lazy Responsive HTML Template">
    <meta name="author" content="Reset-Password Lazy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Reset-Password Lazy Responsive HTML Template</title>
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
    <main class="reset-password-page">
        <!--=================== Password Content Section ===================-->
        <section class="password-content paira-margin-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80 text-center paira-margin-top-1">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Forgot Password</h3>
                    </div>
                    <!--=================== contact Section ===================-->
                    <div class=" col-md-12 col-sm-12 col-xs-12 paira-animation animated fadeInUp" data-paira-animation="fadeInUp" data-paira-animation-delay=".5s">
                        <div class="form-contact">
                            <form accept-charset="UTF-8"  class="contact-form" id="check">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input name="form_type" type="hidden" value="new_comment">
                                    <input name="utf8" type="hidden" value="✓">
                                    <input type="email" class="form-control margin-bottom-30" placeholder="Email" name="txt_mail">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 paira-margin-bottom-2">
                                    <button type="submit" class="btn btn-success btn-lg pull-right text-uppercase" name="submit" value="Send" id="login_check">send</button>
                                </div>
                                <div class="old-customer text-right padding-right-30">
                                   <button type="submit" class=" margin-top-10 font-size-14 btn-success  pull-right  forget-password text-uppercase margin-left-25 rale-sbold">CANCEL</button>
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
<script src="assets/js/paira.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
         $("#login_check").click(function(e)
            {
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url:"mail_contact.php",
                    data:$("#check").serialize(),
                    datatype:"html",
                    success:function(responce){
                        //console.log(responce);
                        //$('#contactresponce').html(responce);
                        alert(responce);
                    },
                    //error:function(a,b,c){
                      //  console.log(c);
                    
                });
            });
    });
</script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:26 GMT -->
</html>