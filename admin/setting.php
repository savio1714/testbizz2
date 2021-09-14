<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "index.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:16 GMT -->
<head>
    <title>Bizzmirth Holidays</title>
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
        <!--== MAIN CONTRAINER ==-->
<?php include 'header.php';?>
   

    <!--== BODY CONTNAINER ==-->
<?php include 'sidebar.php';?>
   
  
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Setting</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Setting</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="website" type="text" value="www.websitename.com" class="validate">
                                                <label for="website">Website</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="blog_name" type="text" value="www.websitename.com/blog" class="validate">
                                                <label for="blog_name">Blog</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="text" value="+01 1234 4654" class="validate">
                                                <label for="phone">Mobile</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="cphone" type="text" value="+01 6541 32145" class="validate">
                                                <label for="cphone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="aksdjfhasdf" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="asdfaefrerfg" class="validate">
                                                <label for="password1">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="f_name" type="text" value="www.websitename.com/facebook" class="validate">
                                                <label for="f_name">Facebook</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="g_name" type="text" value="www.websitename.com/google plus" class="validate">
                                                <label for="g_name">Google plus</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="email1" type="email" value="marshahi@mail.com" class="validate">
                                                <label for="email1">Alternate Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:17 GMT -->
</html>