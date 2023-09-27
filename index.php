<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:26 GMT -->

<!--<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Home Ktoy Responsive HTML Template">
    <meta name="author" content="Home Ktoy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Home Ktoy Responsive HTML Template</title>
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
    <main class="home-page">
        <!--=================== Main Slider Section ===================-->
        <section class="main-slider paira-margin-bottom-1 paira-animation-container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner overflow" role="listbox">
                    <div class="item">
                        <img alt="First slide" src="assets/images/slider/slider-2.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 class="text-uppercase margin-bottom-20 paira-animation"
                                    data-paira-animation="fadeInRight" data-paira-animation-delay="0.2s">Kid
                                </h1>
                                <h1 class="text-uppercase margin-bottom-20 margin-top-0 paira-animation"
                                    data-paira-animation="fadeInRight" data-paira-animation-delay="0.5s"> Love play
                                </h1>
                                <img src="assets/images/slider/slider-hr.png" class="margin-bottom-20">
                                <p class="text-uppercase margin-bottom-20 paira-animation">Every kid buy your own choose toys</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <img alt="Second slide"
                             src="assets/images/slider/slider-1.jpg">

                        <div class="container">
                            <div class="carousel-caption carousel-caption1">
                                <h1 class="text-uppercase margin-bottom-20 paira-animation"
                                    data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">toys
                                </h1>
                                <h1 class="text-uppercase margin-bottom-20 margin-top-0 paira-animation"
                                    data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s"> With kid
                                </h1>
                                <img src="assets/images/slider/slider-hr.png" class="margin-bottom-20">
                                <p class="text-uppercase margin-bottom-20 paira-animation">Every kid buy your own choose toys</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="assets/images/slider/slider-3.jpg">

                        <div class="container">
                            <div class="carousel-caption carousel-caption1">
                                <h1 class="text-uppercase margin-bottom-20 paira-animation"
                                    data-paira-animation="fadeInLeft" data-paira-animation-delay="0.2s">toys
                                </h1>
                                <h1 class="text-uppercase margin-bottom-20 margin-top-0 paira-animation"
                                    data-paira-animation="fadeInLeft" data-paira-animation-delay="0.5s"> Happy kid
                                </h1>
                                <img src="assets/images/slider/slider-hr.png" class="margin-bottom-20">
                                <p class="text-uppercase margin-bottom-20 paira-animation">Every kid buy your own choose toys</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================== Collections Product Section ===================-->
        <section class="collection-content paira-margin-bottom-1">
            <div class="container text-center text-capitalize">
                <div class="col-md-12 margin-bottom-80 margin-top-80">
                    <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                    <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Buy Toys</h3>
                </div>
                <div>
                    <!-- Nav tabs -->
                    <!-- Tab panes -->
                                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active paira-margin-top-2" role="tablist" id="2">
                            <div class="paira-tab-product tab-product">

                                <?php 
                    require "dbconnect.php";
                    $select="SELECT * FROM product WHERE isactive=1";
                    $rs_select=mysqli_query($con,$select);
                    if(mysqli_num_rows($rs_select)>0)
                    {

                            while($row=mysqli_fetch_assoc($rs_select))
                            {
                                ?>
                                <?php     $abc=$row['id'];?>

            
                                <div class="product text-center paira-margin-top-2">
                                    <div class="block-image position-r">
                                        <a href="#">
                                            <div class="background-overlay"></div>
                                            <img src="ADMIN/Adminpannel/<?php echo $row['image'];?>" height=300 width=300 class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="product-hover">
                                        <div class="pro-name text-left">
                                            <p class="font-size-14 margin-clear text-capitalize rale-sbold margin-bottom-10">Name:<?php echo $row['product_name'];?></p>
                                           <span class="money font-size-14 letter-spacing-2 rale-light font-bold">Inr:<?php echo $row['price'];?></span>
                                        </div>
                                        <div class="paira-wish-compare-con wish-compare-view-cart paira-margin-top-4">
                                            <a href="cartprocess.php?id=<?php echo $abc ?>" class="product-cart-con btn"><i class="fa fa-shopping-cart font-size-20"></i></a>
                                          
                                        </div>
                                    </div>
                                </div>
                                
                                                  <?php
                }
            }
                    ?>
          
                                            
                                  
                            
                       </div>
                     <div class="margin-top-30 text-center">
                            <button class="paira-tab-product-left btn-success">Prev</button>
                            <button class="paira-tab-product-right btn-success margin-left-25">Next</button>
                        </div>
                    
                </div>
            </div>
        </section>
        <!--=================== Small Banner Section ===================-->
        <!--=================== Category Selling Product Section ===================-->
        <!--=================== products Section ===================-->
        <!--=================== Newsletter Section ===================-->
        <!--<section class="newsletter text-center paira-margin-bottom-1 paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.8s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Newsletter</h3>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="news-width">
                            <form class="newsletter-2" action="#">
                                <div class="input-group full-width">
                                    <input type="text" class="form-control letter-spacing-2 paira-margin-bottom-3" value="" placeholder="email address" name="EMAIL">
                                    <button class="text-uppercase letter-spacing-2 font-size-12 btn btn-success">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--=================== Blog Parallax Section ===================-->
        <!--=================== Brand Logo Section ===================-->
        <section class="brand paira-margin-bottom-1 paira-margin-top-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80 text-center">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Featured brand</h3>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="paira-brand paira-margin-bottom-3">
                            <img src="assets/images/brand/brand-1.png" alt="" />
                            <img src="assets/images/brand/brand-2.png" alt="" />
                            <img src="assets/images/brand/brand-3.png" alt="" />
                            <img src="assets/images/brand/brand-4.png" alt="" />
                            <img src="assets/images/brand/brand-5.png" alt="" />
                            <img src="assets/images/brand/brand-1.png" alt="" />
                            <img src="assets/images/brand/brand-4.png" alt="" />
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require'footer.php'; ?>
    <!--=================== Footer Container ===================-->
    
<!--=================== Placed at the end of the document, so the pages load faster ===================-->
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.mobile.customized.min.js"></script>
<script src="assets/js/sticky.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/jquery.simplr.smoothscroll.min.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<!--=================== Paira Framework Main Javascript ===================-->
<script src="assets/js/paira.js"></script>
<?php
    //session_start();
    if(isset($_GET['wel']))
    {
        ?>

        <script type="text/javascript">
        $(document).ready(function(){
        
            alert("wellcome ");
        });
    </script>
        <?php
    }
?>
 
</body>

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:31 GMT -->
</html>