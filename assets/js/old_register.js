$(document).ready(function(){
  $("#register").click(function(e){
    e.preventDefault();

    let profile_pic = $('#profile_pic').val();
    let fname = $('#fname').val();
    // let mname = $('#mname').val();
    let lname = $('#lname').val();
    let email = $('#email').val();
    let gender = $('.gender:checked').val();
    let phone_no = $('#phone_no').val();
    let age = $('#age').val();
    let bdate = $('#bdate').val();
    let id_proof = $('#id_proof').val();

// alert(gender);


    let datastring='fname='+fname+'&profile_pic='+profile_pic+'&lname='+lname+'&email='+email+'&gender='+gender+'&phone_no='+phone_no+'&age='+age+'&bdate='+bdate+'&id_proof='+id_proof;


    if (fname=='') {
        alert("Please Enter firstname");
    }
    else if(lname==''){
        alert("Please Enter lastname");
    }else{

       $.ajax({
        type: "POST",
        url: "registration/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("success");

          // alert("login ");
          // window.open("index2.php");
          // alert();
          // location.href = "dashboard/index.php";
        }
        else{
          alert("failed");
        }
            },
        });

    }
  });
});