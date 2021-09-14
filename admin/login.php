<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bizzmirth</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form>
                <img src="images/logo1.png" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="username" type="text" class="validate" >
                        <label for="username">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <!--   <a class="waves-effect waves-light btn-large btn-log-in" href="index2.php">Login</a> -->
                        <button type="button" class="waves-effect waves-light btn-large btn-log-in" id="login" name="login">Login</button>
                    </div>
                </div>
                <!-- <a href="forgot.html" class="for-pass">Forgot Password?</a> -->
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="models/login/login.js"></script>

</body>

</html>