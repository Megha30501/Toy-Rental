<?php
require 'dbconnect.php';
session_start();
 //$Bookid=$_GET['id'];
 $Userid=$_SESSION['id'];

 if (!isset($_SESSION['id']))
{
    header("location:login.php");
 }

?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Cart Ktoy Responsive HTML Template">
    <meta name="author" content="Cart Ktoy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Cart Ktoy Responsive HTML Template</title>
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
    <main class="cart-page">
        <!--=================== Cart Content Section ===================-->
        <section class="cart-content paira-margin-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-bottom-80 text-center paira-margin-top-1">
                        <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                        <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Shopping Cart</h3>
                    </div>
                    <!--=================== Cart Product List ===================-->
                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive margin-bottom-20 cart-item-list  paira-animation animated fadeInUp" data-paira-animation="fadeInUp" data-paira-animation-delay="0.5s" tabindex="0" style="overflow: hidden; outline: none;">
                        <div class="pro-detail">
                            <h4 class="text-uppercase rale-light">Package</h4>
                        </div>
                        <table class="table">
                            <tbody>
                            <?php

                                  $qry="SELECT * FROM cart_package WHERE user_id=$Userid";
                                            $rs=mysqli_query($con,$qry);
                                            if(mysqli_num_rows($rs)>0)
                                            {                           
                                                while ($row=mysqli_fetch_assoc($rs)) 
                                                {
                                         ?>

                            <tr class="paira-product">
                                <?php
                                                    $toyid= $row['package_id'];
                                                    
                                            $select_book="SELECT * FROM packages WHERE id=$toyid";

                                            $rs_book=mysqli_query($con,$select_book);
                                            $row_book=mysqli_fetch_assoc($rs_book);
                                    ?>
                                <td>
                                    <a href="product.php">
                                        <img src="ADMIN/Adminpannel/<?php echo $row_book['image'];?>" alt="">
                                    </a>
                                </td>
                                <td class="row-2s">
                                    <a href="product.php" class="font-size-14 rale-light font-bold prod-name text-capitalize margin-bottom-10"><?php echo $row_book['name'];?></a>
                                    
                                </td>
                                <td class="row-3s">
                                    <h4 class="margin-top-5 text-center"><span class="money rale-light font-bold font-size-14"><?php echo "200";?></span></h4>
                                </td>
                                
                                <td>
                                    <div class="pull-right">
                                        <a href="deletcarttoy.php?id=<?php echo $row['id'];?>" class="btn text-uppercase btis margin-left-25"><i class="fa fa-times text-color-1 font-size-18"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                            ?>  
                        </tbody>
                        </table>
                    </div>
                        <div class="col-md-8 col-sm-6 col-xs-12 text-right update-continue">
                            <div class="full-width">

                            <a href="checkout.php" class="btn btn-success btn-lg check-out text-uppercase margin-top-30">Check Out</a>
                              <a href="index.php" class="btn btn-default btn-lg check-out text-uppercase margin-top-30">Continue shipping</a>
                            </div>
                           </div>
                    </div>
                   </div>
            </div>
        </section>
    </main>
    <?php require 'footer1.php';?>
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

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:54:26 GMT -->
</html>