<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../login";</script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bizzmirth Holidays</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="../images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mob.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/materialize2.css" />
    <link rel="stylesheet" href="../css/styles2.css">
        <link rel="stylesheet" type="text/css" href="../js/chosen.min.css">

</head>

<body>
    <div id="testpho"></div>
    <div id="testemails"></div>


    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    
        <?php include '../sidebar2.php';?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li><li class="active-bre"><a href="manage_categories">Categories </a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New Sub Category  </a>
                        </li>
                        <li class="page-back"><a href="manage_categories"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Sub Category</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>

                                        <div class="form-group col-md-12 col-sm-12">
                                                <label>Name</label>
                                                <input type="text"  id="name" placeholder="Name" >
                                                
                                            </div>

                                            <div class="form-group col-md-6 col-sm-12">
                                                <label>Parent Category</label>

                                                <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM category WHERE status = 1 ORDER BY category_name ASC");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="category" class="selectdesign">
                                                    <option value="">--Select Category--</option>
                                                    <?php 
                                                    if($stmt->rowCount()>0){
                                                         foreach (($stmt->fetchAll()) as $key => $row) {  
                                                            echo '<option value="'.$row['id'].'">'.$row['category_name'].'</option>'; 
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">No Category Available </option>'; 
                                                    } 
                                                    ?>
                                                    
                                                </select>
                                            </div>

                                         <div class="input-field col-md-col-md-12 col-sm-12">
                                                <input id="description" type="text" >
                                                <label for="description">Description</label>
                                            </div>
                                         <div class="input-field col-md-6 col-sm-12">
                                              <label style="margin-top: -34px;font-size: 0.8rem;">Picture</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file" name="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="picture" id="picture" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="preview1" id="preview1">
                                                    <img alt="picture" class="imgsize" id="img">
                                                    </div>
                                                
                                            </div>
                                        
                                            
                                             
<div>
                                            <input type="hidden" id="invalidimage1" name="invalidimage1" >
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                               <!--  <a href="registered_customer" class="waves-effect waves-light btn-large">Back</a> -->

                                                 <a href="#" class="waves-effect waves-light btn-large" id="addSubCategory" >SAVE</a>
                                                
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
  <!--   <section>
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
    </section> -->

    <!--======== SCRIPT FILES =========-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="../js/chosen.jquery.js"></script>
<!--     <script src="../js/chosen.min.js"></script> -->
<script type="text/javascript" src="../assets/js/product.js"></script>


    <!-- <script src="../../assets/js/upload_file.js"></script> -->

</body>


</html>
<script type="text/javascript">
     $('#file').change(function(){

        uploadfun('#file','../../uploading/upload','#img','#picture','Please Upload Picture','.preview1','subcategory','#invalidimage1');
    });



//upload function
   function uploadfun(typeid,urlpart,imgid,valid,messages,previewclass,foldername,invalidvalue){

    var fd = new FormData();
      var files = $(typeid)[0].files[0];
      fd.append('file',files);
      fd.append('getname',foldername);


//getting filesize of that image 
    var file_size = $(typeid)[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: urlpart,
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $(imgid).attr("src","../../uploading/"+response); 
            $(valid).val(response);
                    $(previewclass+' img').show(); // Display image element
                    $(invalidvalue).val('');
                  }else{
                    $(valid).val('');
                    $(invalidvalue).val('2');
                    alert(messages);
                  }
                },
              });
      }
      else{
        alert('File size is greater than 2MB');
        $(invalidvalue).val('2');
      }
   }

</script>

