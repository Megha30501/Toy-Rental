
<html>
<body>
    <div class="noprint">
 <header>
        <!--=================== Header Top Section ===================-->
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <!--=================== Main Menu ===================-->
                  
                </div>
            </div>
        </section>
        <!--=================== Header Bottom Section ===================-->
        <section class="header-bottom">
            <div class="container-fluid padding-fixed">
                <div class="row">
                    <div class="log-ing">
                        <a href="index.php"><img src="assets/images/logo.png" alt="" class="pull-left margin-top-5"></a>
                    </div>
                    <div class="log-menu">
                        <ul class="list-inline pull-right home-usd-cart">
                            <!--=================== Single Menu ===================-->
                            <li><a href="index.php" class="text-uppercase"><i class="fa fa-home fa-2x"></i><span class="hidden-xs padding-left-5">Home</span></a></li>
                            <li><a href="list-collections.php" class="text-uppercase"><i class="fa fa-envelope fa-2x"></i><span class="hidden-xs padding-left-5">Package</span></a></li>
                            
                            <?php 

                            if(isset($_SESSION['id']))
                                {?>
                                    
                            <li><a href="editpro.php" class="text-uppercase"><i class="fa fa-user fa-2x"></i><span class="hidden-xs padding-left-5">Profile</span></a></li>
                                    <li><a href="logout.php" class="text-uppercase"><i class="fa fa-sign-out fa-2x"></i><span class="hidden-xs padding-left-5">Logout</span></a></li>
                                    <?php 
                                } 
                                else
                                {?> 

                                    <li><a href="login.php" class="text-uppercase"><i class="fa fa-sign-in fa-2x"></i><span class="hidden-xs padding-left-5">Login</span></a></li>
                                    <?php }?>
                                    
                              

                            <!--=================== dropdown Menu ===================-->
                           
                            <!--=================== dropdown Menu ===================-->
                          
                            <!--=================== dropdown Menu ===================-->
                            <!--=================== Single Menu ===================-->
                             
                            <li class="dropdown cart-menu-body">
                                <a href="cart.php" class="cart-menu-body">
                                    <img src="assets/images/shipping-cart.png">
                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>
    </div>
   </body>
   </html>