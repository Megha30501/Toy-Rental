<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:53:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=================== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ===================-->
    <meta name="description" content="Blog Ktoy Responsive HTML Template">
    <meta name="author" content="Blog Ktoy Responsive HTML Template">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />
    <title>Blog Ktoy Responsive HTML Template</title>
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
    <style type="text/css">
        .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
    </style>
    <script>
function myFunction() {
  window.print();
  var id = $(".user_id").val();
    $.ajax({
      type: "GET",
      url: "delete_order.php",
      data: {
        id:id
      },
      cache: false,
      success: function(data){
      }

    });
   // header("location:index.php");

     alert("Thanku For Purchase Toys..");
     document.location.href = "index.php";
}
</script>

</head>
<body>
    <?php require 'header.php';?>

<!--=================== Main Body Content Container ===================-->
<div class="paira-container">
    <!--=================== Header Container ===================-->
     <!--=================== Main Content Container ===================-->
    <main class="blog-page">
        <!--=================== Blog Content Section ===================-->
        <section class="blog-content paira-margin-bottom-1">
            <div class="container">
                <div class="col-md-12 margin-bottom-80 text-center paira-margin-top-1">
                    <img alt="" class="margin-bottom-20" src="assets/images/heading.png">
                    <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2">Toy Rental</h3>
                </div>
                <div class="blogs paira-animation-container">
                    <div class="row">
                      

                         <div class="container">
    <div class="row">
        <?php 
        
        require 'dbconnect.php';
        $u_id=$_SESSION['id'];
        $qry="SELECT * FROM pack_order where user_id='".$u_id."' AND isactive=1";
        $rs=mysqli_query($con,$qry);
        $row=mysqli_fetch_assoc($rs);
        ?>
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice</h2><h3 class="pull-right"></h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <input type="hidden" name="user_id" class="user_id" value="<?php echo $u_id; ?>">
                    <address>

                    <strong>Billed To:</strong><br>
                        <?php echo $row['name'];?><br>
                        <?php echo $row['address'];?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                    <strong>Duration</strong><br>
                        <?php echo $row['duration'];?>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        Cash On Delivery<br>
                        <?php echo $row['phone'];?> 
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        <?php echo $row['DOI'];?>
                    </address>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <?php 
                                $pack_id=$row['package_id'];
                                $qry1="SELECT * FROM packages where id=$pack_id";
                                $rs1=mysqli_query($con,$qry1);
                                $row1=mysqli_fetch_assoc($rs1);
                                ?>
                                <tr>
                                    <td><strong>Package Name</strong></td>
                                    <td class="text-center"><strong></strong></td>
                                    <td class="text-center"><strong></strong></td>
                                    <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td><?php echo $row1['name'];?></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right">Rs.<?php echo $row['price'];?></td>
                                </tr>
                                
                                <tr>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                    <td class="thick-line text-right">Rs.<?php echo $row['price'];?></td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                    <td class="no-line text-right">Rs.15</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Total</strong></td>
                                    <td class="no-line text-right">Rs.<?php echo $row['price']+15;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <form action="deletecart1.php" method="post">
            <div class="row center-block">
                <button class="btn btn-primary center-block" onclick="myFunction()">Print</button>
            </div>
    </div>
</div>
                   
    </form>              
                   
                </div>
                
            </div>
        </section>
        <?php require'footer.php';?>
            </main>
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

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:53:59 GMT -->
</html>
<?php
$qryu="UPDATE pack_order SET isactive=0 where user_id=$u_id";
$rsu=mysqli_query($con,$qryu);
?>