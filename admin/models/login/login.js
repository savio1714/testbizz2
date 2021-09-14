$(document).ready(function(){
  $("#login").click(function(){
  	let username = $('#username').val();
  	let password = $('#password').val();

  	var datastring='username='+username+'&password='+password;


  	if (username=='') {
        alert("Please Enter Username");
    }
    else if(password==''){
        alert("Please Enter Password");
    }else{

        $.ajax({
        type: "POST",
        url: "models/login/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {
          // alert("login ");
          // window.open("index2.php");
          location.href = "./";
        }
        else{
          alert("username and password not correct");
        }
            },
        });

    }

  

  	// alert(username);
  });
});