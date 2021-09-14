<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bizzmirth Holidays</title>
    <!-- Favicon -->
     <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header -->
          <?php include 'header.php';?>
   
    <!-- Header Ends -->

<section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <section>
<div class="container">
    <!-- Preloader Ends -->

    <!-- Header -->
    <!-- <header>
        <div class="upper-head clearfix">
            <div class="container">
                <div class="contact-info">
                    <p><i class="flaticon-phone-call"></i> Phone: (012)-345-6789</p>
                    <p><i class="flaticon-mail"></i> Mail: tourntravel@testmail.com</p>
                </div>
                <div class="login-btn pull-right">
                    <a href="login.html"><i class="fa fa-user-plus"></i> Register</a>
                    <a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a>
                </div>
            </div>
        </div>
    </header> -->
    <!-- Header Ends -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="contact-form" class="contact-form">

                        <div id="contactform-error-msg"></div>

                        <form method="post" action="#" name="contactform" id="contactform">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="full_name" class="form-control" id="Name" placeholder="Enter full name" required>
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX" required>
                                </div>
                                <div class="textarea col-xs-12">
                                    <label>Message:</label>
                                    <textarea name="comments" placeholder="Enter a message" required></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                         <input type="submit" class="btn-blue btn-red" id="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-about footer-margin">
                        <div class="about-logo">
                            <img src="images/Bizzmirth.png" alt="Image">
                        </div>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> 306 Ambrosia Corporate Park
                                    EDC Patto Plaza 
                                Panjim Goa 403001</li>
                                <li><i class="flaticon-phone-call"></i> 0832 2438500 / 8080785714 </li>                                        
                                <li><i class="flaticon-mail"></i> support@bizzmirth.com</li>
                            </ul>
                        </div>
                        <!-- <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>   -->  
                    </div>
                </div>
            </div>
        </div>
    </section>

   </div>
</section>
  <!-- Footer -->
          <?php include 'footer.php';?>
    <!-- Footer Ends -->  

    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/preloader.js"></script>
    <script type="text/javascript" src="logout/logout.js"></script>
</body>
</html>