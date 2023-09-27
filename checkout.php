<?php session_start();
$u_id=$_SESSION['id'];
?>
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
                    <h3 class="text-uppercase raleway-light margin-clear paira-padding-bottom-2"> Review Your Order & Complete Checkout
</h3>
                </div>
                <div class="blogs paira-animation-container">
                    <div class="row">
                      

                            <div class='container'>
    <div class='row' style='padding-top:25px; padding-bottom:25px;'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <hr/>
                    <a href="#" class="btn btn-info" style="width: 100%;">Add More Products & Services</a>
                    <hr/>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="orderinsert.php" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                           
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td>
                                            <p class=" btn btn-primary center-block"  >Select Duration for your package</p>
                                  <select id="age" name="age" class="form-control margin-bottom-30 " >
                                  <option value="1months">1Months</option>
                                        <option id="1" value="2months">2Months</option>
                                        <option id="2" value="4months">4Months</option>
                                        <option id="3" value="6months">6Months</option>
                                        <option id="4" value="9months">9Months</option>
                                    </select>  
                               </td>
                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Total Order</h3>
                                                        <?php 
                                                        require 'dbconnect.php';
                                                        $id=$_GET['id'];
                                                        $qry="SELECT * FROM packages where id=$id";
                                                        $rs=mysqli_query($con,$qry);
                                                        $row=mysqli_fetch_assoc($rs);
                                                        ?>
                                                        <!--<h3><span style="color:green;">Rs.<?php echo $row['price'];?>
                                                        </span></h3>-->


                                                        <span id="price" style="color:green;">
                                                        
                                                        <input type="text" name="prices" id="prices" value="<?php echo $row['price'];?>" readonly>
                                                        <input type="hidden" name="t_price" id="t_price" value="<?php echo $row['price'];?>"></span>
                                                        <input type="hidden" name="package_id" value="<?php echo $row['id']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;">
                                            <a style="width:100%;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="btn btn-primary center-block"
                        onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue
                                            to Billing Information»</a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br/><br/>
                                        <table class="table table-striped" style="font-weight: bold;">
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_email">Your Email:</label></td>
                                                <td>
                                                    <?php 
                                                    $qry1="SELECT * FROM user where id=$u_id";
                                                    $rs1=mysqli_query($con,$qry1);
                                                    $row1=mysqli_fetch_assoc($rs1);
                                                    ?>

                                                    <p><?php echo $row1['email'];?> </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">Name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_first_name" name="first_name" required="required" value="<?php echo $row1['user_name']?>" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_1">Address:</label></td>
                                                <td>
                                                    <input class="form-control" name="address" id="id_address_line_1" required="required" value="<?php echo $row1['address']?>" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_postalcode">Postalcode:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_postalcode" name="postalcode" 
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_phone" name="phone" pattern="[0-9]{10}" required="required"  value="<?php echo $row1['mobile_no']?>"type="text"/>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                         <!--    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center;"><a data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapseThree"
                                                                            class=" btn btn-primary center-block" id="payInfo"
                                                                            style="width:100%;display: none;" onclick="$(this).fadeOut();  
                   document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information </a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                          -->   <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Payment Information</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <span class='payment-errors'></span>
                                        <fieldset>
                                            <legend>Cash on delivery</legend>
                                            <div class="form-group">
                                               </div>
                                                               
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    </div>
                                                </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary center-block" name="btn_sb" style="width:100%;">
                                            Go-To Invoice
                                        </button>
                                        <br/>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
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
    <script type="text/javascript">
      $(document).ready(function(){
            
            
            $(document).on('change','#age',function(e){
                e.preventDefault();
               
                var qualification = $('#age').val();
                
                var t_price = $("#t_price").val();
                


                // alert(qualification);

                if (qualification == "1months") {
                   var price = parseFloat(t_price);
                   $("#prices").val(price);
                }
                if (qualification == "2months") {
                   var price = parseFloat(t_price) + 500; 
                   
                   $("#prices").val(price);
                   
                   
                }
                if (qualification == "3months") {
                    var price = parseFloat(t_price) + 1000;
                   $("#prices").val(price);
                    
                }
                if (qualification == "4months") {
                    var price = parseFloat(t_price) + 1500;
                   $("#prices").val(price);
                    
                }
                if (qualification == "6months") {
                    var price = parseFloat(t_price) + 2000;
                   $("#prices").val(price);
                   
                }
                if (qualification == "9months") {
                    var price = parseFloat(t_price) + 2500;
                   $("#prices").val(price);
                   
                }
            });
            
        });
    </script>

</body>

<!-- Mirrored from demo.enpek.com/html-templates/ktoy/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 10:53:59 GMT -->
</html>