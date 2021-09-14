<!DOCTYPE html>
<html lang="en">
<head>
    <title>OTP Verification</title>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header -->

    <!-- Header Ends -->


    <!-- Navigation Bar -->

    <!-- Navigation Bar Ends -->

    <!-- Breadcrumb -->
    <!--  <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>OTP</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">OTP</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section> -->

    <section>
        <div class="container">
            <div class="row">
            

              <div class="container height-100 d-flex justify-content-center align-items-center">
              <div class="position-relative">
              <div class="card p-2 text-center">
                <img alt="Image" src="images/bizzmirth.png" class="colorlogo">
                  <h6>Please enter the one time password <br> to verify your account</h6>
                  <div> <span>A code has been sent to</span> <small>*******9897</small> </div>
                  <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                  <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                  <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                  <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                  <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                  <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                  <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> </div>
                  <div class="mt-4"> <button class="btn btn-danger px-4 validate">Validate</button> </div>
              </div>
              <div class="card-2">
                  <div class="content d-flex justify-content-center align-items-center"> 
                  <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">Resend(1/3)</a> 
              </div>
              </div>
    </div>
</div>

            </div>
        </div>
    </section>

     
    

    <!-- Footer -->

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
    <script src="login_data/login.js"></script>
    <script src="assets/js/register.js"></script>
    <script src="assets/js/upload_file.js"></script>

</body>
</html>