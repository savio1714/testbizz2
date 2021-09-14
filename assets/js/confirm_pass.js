$(document).ready(function(){

  $("#save").click(function(e){
      var oldPassword = $('#oldPassword').val().trim();
      var newPassword = $('#newPassword').val().trim();
      var confirmPassword = $('#confirmPassword').val().trim();
      var pass = $('#pass').val().trim();
      var uid = $('#uid').val();
      var utid = $('#utid').val();

       var lowerCaseLetters = /[a-z]/g;
       var upperCaseLetters = /[A-Z]/g;
       var number= /[0-9]/g;
       var specialChar = /[!@#$%^&*]/g;

      if(oldPassword ===''){
        alert("Enter Old Password");
      }if(oldPassword != pass ){
        alert("Enter Correct Old Password");
      }else if(newPassword ==''){
           alert("Enter New Password ");
      }else if(oldPassword === newPassword){
           alert("Enter Different Password ");
      }else if (!newPassword.match(lowerCaseLetters)){
        alert("New password should contain atleast one lower character");
      }else if (!newPassword.match(upperCaseLetters)){
       alert("New password should contain atleast one upper character");
      }else if (!newPassword.match(number)){
         alert("New password should contain atleast one number");
      }else if (!newPassword.match(specialChar)){
         alert("New password should contain atleast one special character");
      }else if(newPassword.length <8 ){
           alert("Password should be 8 character long");
      }else if(newPassword  !== confirmPassword){
           alert("Password Not Matching");
      }else{
        let datastring='password='+newPassword+'&uid='+uid+'&utid='+utid;

       $.ajax({
        type: "POST",
        url: "changepass/change_password",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("password change successfully");
          window.location.reload();
        }
        else{
          alert("Failed to change password");
        }
            },
        });

      }

      

    
    
  });


});