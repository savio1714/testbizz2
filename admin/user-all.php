<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:19 GMT -->
<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
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
<?php include 'sidebar.php';?>
    
    <!--== BODY CONTNAINER ==-->
<!--       <div class="container-fluid sb2">
        <div class="row"> -->
      <?php include 'header.php';?>

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>User Details</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="user-add.html">Add New</a>
                                        </li>
                                        <li><a href="user-edit.html">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="user-view.html"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Listings</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/6.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/3.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>
                                                        <span class="label label-primary">02</span>
                                                    </td>
                                                    <td>
                                                        <a href="user-view.html"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:20 GMT -->
</html>