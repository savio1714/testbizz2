<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Bizzmirth Holidays</title>
        <!-- <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png"> -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/carousel.rtl" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <link rel="stylesheet" href="css/font-awesome.min.css" />

      
        <link rel="stylesheet"  href="css/datepicker.css" >

      
        <link rel="stylesheet" href="css/jquery-ui.min.css" />

       
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->

        <link rel="stylesheet" href="css/style1.css" />

        <link rel="stylesheet" href="css/responsive.css" />

</head>
<body class="style-1">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

      <?php include 'header.php';?>
    <!-- Banner -->
    <section id="home_banner" class="banner-style-1 banner-with-form">
        <!-- Paradise Slider -->
        <div id="js_frm_040" class="carousel slide ps_control_hrbrarrow swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="images/slider/slider14.jpg" alt="js_frm_040_01" />
                </div><!-- /item -->
                <!-- End of Slide -->
                <!-- Second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="images/slider/slider1.jpg" alt="js_frm_040_02" />
                </div><!-- /item -->
                <!-- End of Slide -->
                <!-- Third Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="images/slider/slider8.jpg" alt="js_frm_040_03" />
                </div><!-- /item -->
                <!-- End of Slide -->
            </div><!-- End of Wrapper For Slides -->
            <!-- Content -->
            <div class="js_frm_subscribe">
                <div class="kenburns_061_slide slider-content">
                    <h1>Find the perfect vacation</h1>
                    <h2>Plan your trip with Bizzmirth holidays</h2>
                </div>


               <!-- Tabs navs -->

<!-- Tabs navs -->

                 
              <!--    <section id="home" class="about-us">
            
        </section>  -->

        <!--travel-box start-->
        
        
            </div><!-- /Content -->
            <!-- Left Control -->

            <a class="left carousel-control" href="#js_frm_040" role="button" data-slide="prev">
                <span class="fa fa-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Control -->
            <a class="right carousel-control" href="#js_frm_040" role="button" data-slide="next">
                <span class="fa fa-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> <!-- End Paradise Slider -->
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-travel-boxes">
                            <div id="desc-tabs" class="desc-tabs">

                                <ul class="nav nav-tabs" role="tablist">

                                    <li role="presentation" class="active">
                                        <a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
                                            <i class="fa fa-tree"></i>
                                            tours
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
                                            <i class="fa fa-building"></i>
                                            hotels
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
                                            <i class="fa fa-plane"></i>
                                            flights
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane active fade in" id="tours">
                                        <div class="tab-para">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-tab-select-box">

                                                        <h2>destination</h2>

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your destination country</option><!-- /.option-->

                                                                <option value="turkey">turkey</option><!-- /.option-->

                                                                <option value="russia">russia</option><!-- /.option-->
                                                                <option value="egept">egypt</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your destination location</option><!-- /.option-->

                                                                <option value="istambul">istambul</option><!-- /.option-->

                                                                <option value="mosko">mosko</option><!-- /.option-->
                                                                <option value="cairo">cairo</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->

                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>check in</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>check out</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>duration</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">5</option><!-- /.option-->

                                                                <option value="10">10</option><!-- /.option-->

                                                                <option value="15">15</option><!-- /.option-->
                                                                <option value="20">20</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>members</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">1</option><!-- /.option-->

                                                                <option value="2">2</option><!-- /.option-->

                                                                <option value="4">4</option><!-- /.option-->
                                                                <option value="8">8</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                            </div><!--/.row-->

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="travel-budget">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-4">
                                                                <h3>budget : </h3>
                                                            </div><!--/.col-->
                                                            <div class="co-md-9 col-sm-8">
                                                                <div class="travel-filter">
                                                                    <div class="info_widget">
                                                                        <div class="price_filter">
                                                                            
                                                                            <div id="slider-range"></div><!--/.slider-range-->

                                                                            <div class="price_slider_amount">
                                                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                                            </div><!--/.price_slider_amount-->
                                                                        </div><!--/.price-filter-->
                                                                    </div><!--/.info_widget-->
                                                                </div><!--/.travel-filter-->
                                                            </div><!--/.col-->
                                                        </div><!--/.row-->
                                                    </div><!--/.travel-budget-->
                                                </div><!--/.col-->
                                                <div class="clo-sm-7">
                                                    <div class="about-btn travel-mrt-0 pull-right">
                                                        <button  class="about-view travel-btn">
                                                            search  
                                                        </button><!--/.travel-btn-->
                                                    </div><!--/.about-btn-->
                                                </div><!--/.col-->

                                            </div><!--/.row-->

                                        </div><!--/.tab-para-->

                                    </div><!--/.tabpannel-->

                                    <div role="tabpanel" class="tab-pane fade in" id="hotels">
                                        <div class="tab-para">

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-tab-select-box">

                                                        <h2>destination</h2>

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your destination country</option><!-- /.option-->

                                                                <option value="turkey">turkey</option><!-- /.option-->

                                                                <option value="russia">russia</option><!-- /.option-->
                                                                <option value="egept">egypt</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your destination location</option><!-- /.option-->

                                                                <option value="istambul">istambul</option><!-- /.option-->

                                                                <option value="mosko">mosko</option><!-- /.option-->
                                                                <option value="cairo">cairo</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->

                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>check in</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>check out</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>duration</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">5</option><!-- /.option-->

                                                                <option value="10">10</option><!-- /.option-->

                                                                <option value="15">15</option><!-- /.option-->
                                                                <option value="20">20</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>members</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">1</option><!-- /.option-->

                                                                <option value="2">2</option><!-- /.option-->

                                                                <option value="4">4</option><!-- /.option-->
                                                                <option value="8">8</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                            </div><!--/.row-->

                                            <div class="row">
                                                <div class="col-sm-5"></div><!--/.col-->
                                                <div class="clo-sm-7">
                                                    <div class="about-btn travel-mrt-0 pull-right">
                                                        <button  class="about-view travel-btn">
                                                            search  
                                                        </button><!--/.travel-btn-->
                                                    </div><!--/.about-btn-->
                                                </div><!--/.col-->

                                            </div><!--/.row-->

                                        </div><!--/.tab-para-->

                                    </div><!--/.tabpannel-->

                                    <div role="tabpanel" class="tab-pane fade in" id="flights">
                                        <div class="tab-para">
                                            <div class="trip-circle">
                                                <div class="single-trip-circle">
                                                    <input type="radio" id="radio01" name="radio" />
                                                    <label for="radio01">
                                                        <span class="round-boarder">
                                                            <span class="round-boarder1"></span>
                                                        </span>round trip
                                                    </label>
                                                </div><!--/.single-trip-circle-->
                                                <div class="single-trip-circle">
                                                    <input type="radio" id="radio02" name="radio" />
                                                    <label for="radio02">
                                                        <span class="round-boarder">
                                                            <span class="round-boarder1"></span>
                                                        </span>on way
                                                    </label>
                                                </div><!--/.single-trip-circle-->
                                            </div><!--/.trip-circle-->
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-tab-select-box">

                                                        <h2>from</h2>

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your location</option><!-- /.option-->

                                                                <option value="turkey">turkey</option><!-- /.option-->

                                                                <option value="russia">russia</option><!-- /.option-->
                                                                <option value="egept">egypt</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>departure</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="departure" class="form-control" data-toggle="datepicker"
                                                                placeholder="12 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>return</h2>
                                                        <div class="travel-check-icon">
                                                            <form action="#">
                                                                <input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                                            </form>
                                                        </div><!-- /.travel-check-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>adults</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">5</option><!-- /.option-->

                                                                <option value="10">10</option><!-- /.option-->

                                                                <option value="15">15</option><!-- /.option-->
                                                                <option value="20">20</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                                <div class="col-lg-2 col-md-1 col-sm-4">
                                                    <div class="single-tab-select-box">
                                                        <h2>childs</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">1</option><!-- /.option-->

                                                                <option value="2">2</option><!-- /.option-->

                                                                <option value="4">4</option><!-- /.option-->
                                                                <option value="8">8</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->

                                            </div><!--/.row-->

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-tab-select-box">

                                                        <h2>to</h2>

                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter your destination location</option><!-- /.option-->

                                                                <option value="istambul">istambul</option><!-- /.option-->

                                                                <option value="mosko">mosko</option><!-- /.option-->
                                                                <option value="cairo">cairo</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->

                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->
                                                <div class="col-lg-3 col-md-3 col-sm-4">
                                                    <div class="single-tab-select-box">

                                                        <h2>class</h2>
                                                        <div class="travel-select-icon">
                                                            <select class="form-control ">

                                                                <option value="default">enter class</option><!-- /.option-->

                                                                <option value="A">A</option><!-- /.option-->

                                                                <option value="B">B</option><!-- /.option-->
                                                                <option value="C">C</option><!-- /.option-->

                                                            </select><!-- /.select-->
                                                        </div><!-- /.travel-select-icon -->
                                                    </div><!--/.single-tab-select-box-->
                                                </div><!--/.col-->
                                                <div class="clo-sm-5">
                                                    <div class="about-btn pull-right">
                                                        <button  class="about-view travel-btn">
                                                            search  
                                                        </button><!--/.travel-btn-->
                                                    </div><!--/.about-btn-->
                                                </div><!--/.col-->
                                                
                                            </div><!--/.row-->

                                        </div>

                                    </div><!--/.tabpannel-->

                                </div><!--/.tab content-->
                            </div><!--/.desc-tabs-->
                        </div><!--/.single-travel-box-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div>
    </section>
    <section class="travel-box">
            <!--/.container-->

        </section>
    <!-- Banner Ends -->

   <!--  <section class="amazing-tours"> -->
        <!-- <div class="container">
            <div class="section-title text-center">
                <h2>Amazing Tours</h2>
                <p>Coming Soon </p>
            </div> -->
            <!-- <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/goa.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Goa</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/manali.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Manali</a></h3>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/shimla.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Shimla</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/coorg.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Coorg</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/kochi.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Kochi</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/jammu.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Jammu</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div> -->
      <!--   </div>
    </section> -->



    <!-- Amazing Tours -->

    <!-- <section class="amazing-tours">
        <div class="container">
            <div class="section-title text-center">
                <h2>Amazing Tours</h2>
                <p>Bizzmirth holidays offers best deals on India tour packages. Book your perfect holiday packages from a wide range of customised vacation packages.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/goa.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Goa</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/manali.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Manali</a></h3>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/shimla.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Shimla</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/coorg.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Coorg</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/kochi.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Kochi</a></h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="images/amazing/jammu.jpg" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">Jammu</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <!-- Amazing Tours Ends -->

    <!-- Popular Packages --> 

    <section class="popular-packages">
        <div class="container">
            <div class="section-title text-center">
                <h2>Popular Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Our holiday packages cover the most amazing holiday destinations. So pick your favourite package for the best India trip. </p>
            </div>
            <div class="row slider-button">
                <div class="col-sm-6">
                    <div class="package-item box-item">
                        <div class="package-image">
                            <img src="images/amazing/popgoa.jpg" alt="Image">
                            
                        </div>
                        <div class="package-content">
                            <h4>Goa Tour Package </h4>
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>₹20,000</span> / PER </p>
                            </div>
                            <p>Best Place to surf in Goa. Explore water sport activities and many more.</p>
                            <div class="package-info">
                                <a href="detail-tabs.php" class="btn-blue btn-red btn-style-1">View more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="package-item box-item">
                        <div class="package-image">
                            <img src="images/amazing/popcoorg.jpg" alt="Image">
                            
                        </div>
                        <div class="package-content">
                            <h4>Coorg Tour Package</h4>
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>₹20,000</span> / PER </p>
                            </div>
                            <p>Coorg offers a variety of treks for adventure lovers. Pick one as per your comfort and experience.</p>
                            <div class="package-info">
                                <a href="detail-tabs1.php" class="btn-blue btn-red btn-style-1">View more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="package-item box-item">
                        <div class="package-image">
                            <img src="images/amazing/popmanali.jpg" alt="Image">
                            
                        </div>
                        <div class="package-content">
                            <h4>Manali Tour Package</h4>
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>₹20,000</span> / PER </p>
                            </div>
                            <p>Hot air ballooning in Manali is one of the most exotic adventure sports in Manali.</p>
                            <div class="package-info">
                                <a href="detail-tabs2.php" class="btn-blue btn-red btn-style-1">View more details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="package-item box-item">
                        <div class="package-image">
                            <img src="images/amazing/popshimla.jpg" alt="Image">
                            
                        </div>
                        <div class="package-content">
                            <h4>Shimla Tour Package</h4>
                            <div class="package-price">
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                                <p><span>₹20,000</span> / PER </p>
                            </div>
                            <p>Skiing in Shimla is enjoyed by honeymooners, families, and adventurers alike. </p>
                            <div class="package-info">
                                <a href="detail-tabs3.php" class="btn-blue btn-red btn-style-1">View more details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="row" style="margin-top: 3%;
    margin-bottom: 3%;">
      <div class="col-lg-3">
       <center> <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
<!--  <img src="images/ticket.png" alt="Avatar" style="width:100px;height:100px;border-radius: 50%;"> -->
 <span ><i style="font-size: 6em;margin-top: 3%;"  class="fa fa-ticket" aria-hidden="true"></i></span>
        <h3>Experience</h3>
        <p>Explore our best experience</p>
       <!--  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> --></center>
      </div>
      <center>
      <div class="col-lg-3">
        <span ><i style="font-size: 6em;margin-top: 3%;"  class="fa fa-plane" aria-hidden="true"></i></span>
       <!-- <img style="width:100px;height:100px;border-radius: 50%;"><i class="fa fa-ticket" aria-hidden="true"></i></img> -->

        <h3>Plan your next trip</h3>
        <p>Learn About services</p>
       <!--  <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 --></center>
      <center>
      <div class="col-lg-3">
       <!--  <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
<!-- <img src="images/ticket.png" alt="Avatar" style="width:100px;height:100px;border-radius: 50%;"> -->
 <span ><i style="font-size: 6em;margin-top: 3%;"  class="fa fa-credit-card" aria-hidden="true"></i></span>
        <h3>Get more easy</h3>
        <p>How to payment easy</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>
  </center>

     <center>
      <div class="col-lg-3">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
<!-- <img src="images/ticket.png" alt="Avatar" style="width:100px;height:100px;border-radius: 50%;"> --> 
 <span ><i style="font-size: 6em;margin-top: 3%;"  class="fa fa-clock-o" aria-hidden="true"></i></span>

        <h3>24/7 Support</h3>
        <p>Help desk 24 Hr help service</p>
        <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p> -->
      </div>
  </center>
    </div>



<!-- 
<div id="carousel" class="dcCarousel">
    <div class="items">
        <div rel="1" class="item">
            Item 1
        </div>
        <div rel="2" class="item">
            Item 2
        </div>
        etc...
    </div>  
    <div class="carousel-holder">
        <a href="#" class="arrowl">&lt;</a>
        <div class="holder">
            <ul>
                <li class="selected"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                etc...                  
            </ul>
        </div>
        <a href="#" class="arrowr">&gt;</a>
    </div>
    <div class="padder">
        <div class="outer-center">
            <ul class="controls inner-center"></ul>
            <div style="clear: both;"></div>
        </div>
    </div>
</div> -->




























<!-- <section class="popular-packages"> -->
        <section class="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Get Quotation</h2>
                
            </div>
            <div class="row">
                <div class="col-md-12">
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

                                <div class="form-group col-xs-6">
                                    <label>Destination:</label>
                                    <input type="text" name="destination" class="form-control" id="destination" placeholder="Destination" required>
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Date:</label>
                                    <input type="date" name="traveldate" class="form-control" id="traveldate"  required>
                                </div>


                           

                                <div class="textarea col-xs-12">
                                    <label>Package Suggestion</label>
                                    <textarea name="comments" placeholder="Enter a message" required></textarea>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                         <input type="submit" class="btn-blue btn-red" id="submit" value="Get Quote">
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   
    <!-- Popular Packages Ends -->

     <!-- <section class="countdown-section">
        <div class="container">
            <div class="countdown-title">
                <h2>Special Tour in August, Discover <span>Goa</span> with <span>Discount 30%</span></h2>
                <p>It’s limited seating! Hurry up</p>
            </div>
            <div class="countdown countdown-container container">
                <p id="demo"></p>
            </div>
        </div>
        <div class="testimonial-overlay"></div>
    </section> -->
    <!-- ******************* -->

    <!-- Deals -->
    <!-- <section class="deals">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2>Last Minute Deals</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="deals-outer">
                <div class="row slider-button">
                    <div class="col-sm-4">
                        <div class="deals-item  box-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal1.jpg" alt="Image">
                                    <span class="deal-price">$8600</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Paris and Bordeaus</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red btn-style-1">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="deals-item box-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal2.jpg" alt="Image">
                                    <span class="deal-price">$8600</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Paris and Bordeaus</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red btn-style-1">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="deals-item box-item">
                            <div class="deals-item-outer">
                                <div class="deals-image">
                                    <img src="images/deal3.jpg" alt="Image">
                                    <span class="deal-price">$8600</span>
                                </div>
                                <div class="deal-content">
                                    <div class="deal-rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-o"></span>
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <h3>Paris and Bordeaus</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    <a href="tour-detail.html" class="btn-blue btn-red btn-style-1">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section> -->
    <!-- Deals Ends -->

    <!-- Trip Ad -->
    <!-- <section class="trip-ad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    
                    <div class="trip-ad-content">
                        <div class="ad-title">
                            <h2>Explore The <span>Goa Trip</span></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation dolore magna aliquam erat volutpat.</p>
                        <div class="trip-ad-btn">
                            <a href="#" class="btn-blue btn-red">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="ad-price">
                        <div class="ad-price-inner">
                            <span>Starting at <span class="rate">₹2,000</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Trip Ad Ends -->

    <!-- Bucket Lists -->
    <!-- <section class="bucket-list">
        <div class="bucket-icons">
            <div class="container">   
                <div class="section-title text-center">
                    <h2>Top up your Bucket List</h2>
                    <div class="section-icon">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
                </div>
            </div>
        </div>
        <div class="bucket-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">                        
                        <div class="row mix">
                            <div class="col-md-6">
                                <div class="hovereffect-bucket bucket-item">
                                    <div class="bucket-image"><img src="images/bucket1.jpg" alt="image" class="img-responsive" /></div>
                                    <div class="bucket-item-content">
                                        <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                        <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                                    </div>
                                </div>
                                <div class="hovereffect-bucket bucket-item">
                                    <div class="bucket-image"><img src="images/bucket2.jpg" alt="image" class="img-responsive" /></div>
                                    <div class="bucket-item-content">
                                        <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                        <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="hovereffect-bucket bucket-item bucket-right">
                                    <div class="bucket-image"><img src="images/bucket3.jpg" alt="image" class="img-responsive" /></div>
                                    <div class="bucket-item-content">
                                        <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                        <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                                    </div>
                                </div>
                                <div class="hovereffect-bucket bucket-item bucket-right">
                                    <div class="bucket-image"><img src="images/bucket4.jpg" alt="image" class="img-responsive" /></div>
                                    <div class="bucket-item-content">
                                        <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                        <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bucket-content-image">
                            <img src="images/bucket.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ***************************** -->
    <!-- Bucket Lists Ends -->

    <!-- Top Destinations -->

   <!--  <section class="top-destinations-1">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Destinations</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Looking for the best holiday destinations? We've rounded up the top places to visit in India. </p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="destination-item-1 box-item">
                        <div class="destination-image-1">
                            <img src="images/package1.jpg" alt="Image">
                        </div>
                        <div class="destination-content-1">
                            <div class="destination-upper">
                                <h4><a href="#">Goa Package</a></h4>
                                <p class="top-price"><span>₹20,000</span> / PER </p>
                            </div>
                            <div class="destination-lower clearfix">
                                <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="destination-item-1 box-item">
                        <div class="destination-image-1">
                            <img src="images/package3.jpg" alt="Image">
                        </div>
                        <div class="destination-content-1">
                            <div class="destination-upper">
                                <h4><a href="#">Himachal Package</a></h4>
                                <p class="top-price"><span>₹20,000</span> / PER </p>
                            </div>
                            <div class="destination-lower clearfix">
                                <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="destination-item-1 box-item">
                        <div class="destination-image-1">
                            <img src="images/package2.jpg" alt="Image">
                        </div>
                        <div class="destination-content-1">
                            <div class="destination-upper">
                                <h4><a href="#">Coorg Package</a></h4>
                                <p class="top-price"><span>₹20,000</span> / PER </p>
                            </div>
                            <div class="destination-lower clearfix">
                                <p class="package-days"><i class="flaticon-time"></i> 5 days</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <!-- Top Destination Ends -->
<!-- ***************************** -->

    <!-- Deals On Sale -->
    <!-- <section class="deals-on-sale">
        <div class="container">
            <div class="section-title text-center">
                <h2>Deals On Sale</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row sale-slider slider-button">
                <div class="col-md-12">
                    <div class="sale-item box-item">
                        <div class="sale-image">
                            <img src="images/amazing/goad.jpg" alt="Image">
                        </div>
                        <div class="sale-content-1 sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Surfing at Goa</a></h3>
                            <div class="sale-content-inner">
                                <p><i class="flaticon-time"></i> 5 days</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="btn-blue btn-red btn-style-1">View More</a>
                            </div>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price"><del>₹40,000</del></span>
                            <span class="new-price"> ₹20,000</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item box-item">
                        <div class="sale-image">
                            <img src="images/amazing/manalid.png" alt="Image">
                        </div>
                        <div class="sale-content-1 sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Hot Air Balooning, Manali</a></h3>
                            <div class="sale-content-inner">
                                <p><i class="flaticon-time"></i> 5 days</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="btn-blue btn-red btn-style-1">View More</a>
                            </div>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price"><del>₹40,000</del></span>
                            <span class="new-price">₹20,000</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item box-item">
                        <div class="sale-image">
                            <img src="images/amazing/shimlad.jpg" alt="Image">
                        </div>
                        <div class="sale-content-1 sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Skiing in Shimla</a></h3>
                            <div class="sale-content-inner">
                                <p><i class="flaticon-time"></i> 5 days</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="btn-blue btn-red btn-style-1">View More</a>
                            </div>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price"><del>₹40,000</del></span>
                            <span class="new-price">₹20,000</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="sale-item box-item">
                        <div class="sale-image">
                            <img src="images/amazing/coorgd.jpg" alt="Image">
                        </div>
                        <div class="sale-content-1 sale-content">
                            <div class="sale-review">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <h3><a href="#">Coorg Adventure</a></h3>
                            <div class="sale-content-inner">
                                <p><i class="flaticon-time"></i> 5 days</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <a href="#" class="btn-blue btn-red btn-style-1">View More</a>
                            </div>
                        </div>
                        <div class="sale-tag">
                            <span class="old-price"><del>₹40,000</del></span>
                            <span class="new-price"> ₹20,000</span>
                        </div>
                        <div class="sale-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Deals On Sale Ends -->

    <!-- Countdown -->
 <!--    <section class="countdown-section">
        <div class="container">
            <div class="countdown-title">
                <h2>Special Tour in May, Discover <span>Thailand</span> for 50 Customers with <span>Discount 30%</span></h2>
                <p>It’s limited seating! Hurry up</p>
            </div>
            <div class="countdown countdown-container container">
                <p id="demo"></p>
            </div>/.countdown-wrapper
        </div>
        <div class="testimonial-overlay"></div>
    </section> -->
    <!-- Countdown Ends -->

    <!-- Blog -->
    <!-- <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Blog</h2>
                        <div class="section-icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog1.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">What happened during my first trip alone</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog2.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">remembering the road i went through</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog3.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date"><p><i class="fa fa-clock-o"></i> Posted On : 12 May</p></div>
                            <h3><a href="blog-detail.html">planning fot the perfect familytrip outdoor</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Blog Ends -->

    <!-- Trusted Partners -->
   <!--  <section class="trusted-partners">
        <div class="container">
            <ul class="partners-logo partners-slider">

                <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                
            </ul>
        </div>
    </section> -->

    <!-- ***************************** -->
    <!-- Trusted Partners Ends -->

    <!-- Footer -->
      <?php include 'footer.php';?>
    <!-- Footer Ends -->  

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main-1.js"></script>
    <script src="js/custom-countdown.js"></script>
    <script src="js/preloader.js"></script>
    <script type="text/javascript" src="logout/logout.js"></script>

</body>
</html>