<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/list-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:53:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="List-Collection Ktoy Responsive HTML Template">
    <meta name="author" content="List-Collection Ktoy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>List-Collection Ktoy Responsive HTML Template</title>
    <!--=================== Bootstrap core CSS ===================-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=================== Animate CSS ===================-->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!--=================== OWL Carousel CSS ===================-->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!--=================== Paira Framework Main CSS ===================-->
    <link href="assets/css/paira.css" rel="stylesheet">
    <!--=================== Paira Framework Font and Color CSS ===================-->
    <link href="assets/css/paira-typography.css" rel="stylesheet">
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
<div class="paira-container">
    <!--=================== Header Container ===================-->
    <!--=================== Main Content Container ===================-->
    <main class="list-collection-page">
        <!--=================== Category Product Section ===================-->
        <section class="category text-center paira-margin-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80 paira-margin-top-1">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Packages</h3>
                    </div>
                    <div class="product-widget paira-animation-container">
                        <?php
                        require 'dbconnect.php';
                        $qry="SELECT * FROM packages";
                        $rs=mysqli_query($con,$qry);
                        if(mysqli_num_rows($rs)>0)
                        {
                            while($row=mysqli_fetch_assoc($rs))
                            { 
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-6 margin-top-10 paira-margin-bottom-2">
                            <div class="" data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s">
                                <div class="product-image">
                                    <a href="#">
                                        <img src="ADMIN/Adminpannel/<?php echo $row['image'];?>" alt="" class="paira-product-image img-responsive">
                                    </a>
                                    <div class="product-inner">
                                        <a href="collection-1.php?id=<?php echo $row['id'];?>" class="font-size-18 text-uppercase"><?php echo $row['name'];?></a>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <?php }}?>
                    <div class="col-md-12">
                        <ul class="pagination list-inline">
                            <li class="text-center">
                                <ul class="list-inline">
                                   
                                </ul>
                            </li>
                        </ul>
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
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/sticky.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/jquery.simplr.smoothscroll.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js"></script>
</body>

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/list-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:53:49 GMT -->
</html>