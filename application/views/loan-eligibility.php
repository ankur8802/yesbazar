<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/borrow/bootstrap-4/loan-eligibility.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2020 09:13:15 GMT -->
<head>


</head>
    <title></title>
    <!-- Bootstrap -->
    <link href="<?=base_url('assests')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assests')?>/css/style.css" rel="stylesheet">
    <link href="<?=base_url('assests')?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url('assests')?>/css/fontello.css" rel="stylesheet">
   
    
    <!-- Google Fonts -->
    <link href="<?=base_url('assests')?>/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
       <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?=base_url('index')?>"><img src="<?=base_url('assests')?>/images/mylogo.jpg" alt="Borrow - Loan Company Website Template"></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                      <div id="navigation" style="padding-right: 7%;">
                        <!-- navigation start-->
                        <ul>
                              <li class="active"><a href="<?= base_url('index')?>" class="animsition-link">Home</a>
                                
                            </li>


                              <li><a href="<?= base_url('aboutus')?>" class="animsition-link">About us</a>  </li>
                          

                            <li><a href="<?= base_url('personal')?>" class="animsition-link">PERSONAL LOANS</a>

                                <li><a href="<?=base_url('home')?>" class="animsition-link">HOME LOANS</a>

                                 <li><a href="<?=base_url('business')?>" class="animsition-link">BUSINESS LOANS</a>

                                <li><a href="<?=base_url('property')?>" class="animsition-link">LOAN AGAINST PROPERTY</a>
                                                              </li>
                                    
                              


                               <li><a href="<?=base_url('eligibility')?>" class="animsition-link">APPLY NOW</a>
                                                              </li> 
                        </ul>
                    </div>
                    <!-- /.navigation start-->
                </div>
              <!--   <div class="col-xl-l col-lg-1 col-md-1 col-sm-1 col-12 d-none d-xl-block d-lg-block">
                
                    <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
                </div> -->
                <!-- /.search start-->
            </div>
        </div>
    </div>
    
    <!-- /.top-bar -->
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Apply For Loan</li>
                        </ol>
                    </div>
                </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  
                  <!--   <div class="sub-nav" id="sub-nav">
                         <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="contact-us.php" class="nav-link">Give me call back</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Emi Caculator</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->


    <section style="padding-bottom: 50px;">
       <div class="container">



        <div class="col-lg-9">

            <br><br>

            <h1 style="text-align: center; color: #f51f91">Enter Your Details</h1>


                              <br>
                                       <form class="" action="<?=base_url('Welcome/insert')?>" method="post" style="margin-left:0px;margin-right:0px;">

       <div class="form-group col-md-12 col-sm-12 col-12 col-name">
          <input type="text" name="name" class="form-control" placeholder="Enter Name" required>       
         </div>
         
         <div class="form-group col-md-12 col-sm-12 col-12 col-email">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
        </div>
     
         
           
        <div class="form-group col-md-12 col-sm-12 col-12 col-enter no">
            <input type="text" name="phone_no" class="form-control" placeholder="Enter Mobile Number" required maxlength="10" minlength="10">
        </div>

   <div class="form-group col-md-12 col-sm-12 col-12 col-enter no">
            <input type="text" name="amount" class="form-control" placeholder="Enter amount" required maxlength="" minlength="">
        </div>
        
              





<div class="form-group col-md-12 col-sm-12 col-12 col-name">
          <input type="text" name="city" class="form-control" placeholder="Enter your city" required>       
         </div>





               <!--  <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
                          <input type="text" class="form-control checkcapcha1" placeholder="Enter Capcha">
                    <span style="color:red;display:none;font-size:14px;" class="capchaspan1">Capcha Code Not Match</span>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-6 col-select state">
                        <input type="text" class="form-control findcapcha1" disabled value="672">
                    </div>  
                 -->
                                                   
  
            <!-- <div class="form-group form-check col-md-12 text-center"style="padding:0px;">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                     <label class="form-check-label" for="defaultCheck1"style="color:white">
                        I agree to receive information
                    </label>
            </div> -->
            
                              <div class="form-group col-md-12 col-sm-12 col-12"style="padding:0px;">
                         
                            </div>
                <div class="form-group col-md-12 col-sm-12 col-12">
           <p class="text-left"style="margin-bottom:10px"> 
            <button class="btn btn-default" type="submit">submit</button>
        </p>
     </div> 
 </form>
                                  
    </div>

</div>
</section>
    <!-- /.content end -->
  <div class="footer section-space100">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="<?=base_url('assests')?>/images/mylogo.jpg" alt="Borrow - Loan Company Website Templates"> </div>
                    <!-- /.Footer Logo -->
                </div>
               
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p >Our goal at yesh loan Company is to provide access to personal loans and education loan, car loan, home loan at insight competitive interest rates lorem ipsums. We are the loan provider, you can use our loan product.All loans are paid through Equal Monthly Instalments (EMIs) via electronic payment. We do charge low processing fees and have no other hidden costs.  </p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>info@yesbazarfinancial.co.in</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>9674299621</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?=base_url('index')?>">Home</a></li>
                          <!--   <li><a href="#">Services</a></li> -->
                            <li><a href="<?=base_url('aboutus')?>">About Us</a></li>
                            <li><a href="<?=base_url('news')?>">Privacy Policy</a></li>
                            <li><a href="<?=base_url('term')?>">Term & Condition</a></li>
                              <li><a href="<?= base_url('disc')?>">Disclaimer</a></li>
                           <!--  <li><a href="#">Faq</a></li> -->
                            <li><a href="<?=base_url('contactus')?>">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <!-- <li><a href="#">Car Loan</a></li> -->
                            <li><a href="<?=base_url('personal')?>">Personal Loan</a></li>
                            <!-- <li><a href="#">Education Loan</a></li> -->
                            <li><a href="<?=base_url('business')?>">Business Loan</a></li>
                            <li><a href="<?=base_url('index')?>">Home Loan</a></li>
                            <!-- <li><a href="#">Debt Consolidation</a></li> -->
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                          <!--   <li><a href="#"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linked In</a></li> -->
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <p>© Copyright 2020 | Yesh Bazar Finance Limited</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <p>Terms of use | Privacy Policy</a></p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny footer -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url('assests')?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url('assests')?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assests')?>/js/menumaker.js"></script>
  
    <!-- sticky header -->
    <script type="text/javascript" src="<?=base_url('assests')?>/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?=base_url('assests')?>/js/sticky-header.js"></script>
    <!-- Back to top script -->
    <script src="<?=base_url('assests')?>/js/back-to-top.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url('assests')?>/js/loan-elgiblity.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/borrow/bootstrap-4/loan-eligibility.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2020 09:13:16 GMT -->
</html>
