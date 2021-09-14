$(document).ready(function(){
  $("#login").click(function(e){
    e.preventDefault();

  	let username = $('#username').val();
  	let password = $('#password').val();
    let remember_me = $('#remember_me').prop( "checked" );
    


    


 

    // alert(remember_me);

    // if($('#remember_me') == true){
    //   alert('checked');
    // }
    // else{
    //   alert('unchecked');
    // }
  	let datastring='username='+username+'&password='+password+'&remember_me='+remember_me;


  	if (username=='') {
        alert("Please Enter Username");
    }
    else if(password==''){
        alert("Please Enter Password");
    }else{

       $.ajax({
        type: "POST",
        url: "login_data/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {

          // alert("login ");
          // window.open("index2.php");
          // alert();
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