$(document).ready(function(){

//define varants at particular location

  var fname = $('#fname');
  var lname = $('#lname');
  var email = $('#email');
  var phone_no = $('#phone_no');
  // var age = $('#age');
  var address = $('#address');




  // var profile_pic = $('#profile_pic');
  var fnameValue = '';
  var lnameValue = '';
  var emailValue = '';
  // var genderValue = '';
  var phone_noValue = '';
  // var ageValue = '';
  var addressValue = '';
  // var bdateValue = '';
  // var id_proof = $('#id_proof');

  
  $("#register").click(function(e){
    // alert(firstnameValue)
     // alert(gender);
    e.preventDefault();

    checkInput();
    
  });

  $("#registerCustomer").click(function(e){
    // alert(firstnameValue)
     // alert(gender);
    e.preventDefault();

    register_customer();
    
  });

  $("#saveChange").click(function(e){
    // alert(firstnameValue)
     // alert(gender);
    e.preventDefault();

    checkInputValues();
    
  });

  $("#edit_customer").click(function(e){
    // alert(firstnameValue)
     // alert(gender);
    e.preventDefault();

    edit_customer();
    
  });

// Register travel agent

  $("#registerTravelAgent").click(function(e){

    e.preventDefault();

    registerTravelAgent();
    
  });

//edit travel agent

  $("#edit_travel_agent").click(function(e){

    e.preventDefault();

    edit_travel_agent();
    
  });

  // Register Franchisee

  $("#registerFranchisee").click(function(e){

    e.preventDefault();

    registerFranchisee();
    
  });


//edit franchisee
  $("#edit_franchisee").click(function(e){

    e.preventDefault();

    edit_franchisee();
    
  });


  // Register Sales Manager

  $("#registerSalesManager").click(function(e){

    e.preventDefault();

    registerSalesManager();
    
  });


//edit Sales Manager
  $("#edit_sales_manager").click(function(e){

    e.preventDefault();

    edit_sales_manager();
    
  });


   // Register Branch Manager

  $("#registerBranchManager").click(function(e){

    e.preventDefault();

    registerBranchManager();
    
  });


//edit Branch Manager
  $("#edit_branch_manager").click(function(e){

    e.preventDefault();

    edit_branch_manager();
    
  });


  $(fname).keyup(function () { 
    fnameValue =fname.val().trim();

    if(fnameValue ===''){
      setError(fname,"*Firstname cannot be blank");
    }
    else if(!validateOnlyCharacter(fnameValue)){
      setError(fname,"*Only Alphabets allowed.");
    }else if(fnameValue.length <= 2){
      setError(fname,"*Min 3 Characters");
    }else{
      // validateInput(fnameValue,fname,"*fname cannot be blank"); 
      setSuccess(fname);
    }

  });

   $(lname).keyup(function () { 
    lnameValue =lname.val().trim();

    if(lnameValue ===''){
      setError(lname,"*Lastname cannot be blank");
    }
    else if(!validateOnlyCharacter(lnameValue)){
      setError(lname,"*Only Alphabets allowed.");
    }else if(lnameValue.length <= 2){
      setError(lname,"*Min 3 Characters");
    }else{
      setSuccess(lname);
    }

  });


 $(email).keyup(function () { 
   emailValue = email.val().trim();
        
        if(!validateEmail(emailValue)){
          setError(email,"*Please enter correct email id");
        }else if(emailValue ==='')
        {
          setError(email,"*Email cannot be blank");
        }else{
          emailtest(emailValue);
          // validateInput(emailValue,email,"*Email cannot be blank");
        }
        
 });

  $(phone_no).keyup(function () { 
   phone_noValue = phone_no.val().trim();
  var code = $('#countrycode').val();
        
        if(code ==='')
        {
          setError(phone_no,"*Select Country code ");
        }else{
          if(!validatePhone(phone_noValue)){
          setError(phone_no,"*Please enter correct phone number");
        }else if(validateOnlyZero(phone_noValue)){
          setError(phone_no,"*Enter proper phone number.");
        }else if(phone_noValue ==='')
        {
          setError(phone_no,"*phone number cannot be blank");
        }else{        
          phonetest(phone_noValue,code);
        }
        }
        
 });


   $(address).keyup(function () { 
    addressValue =address.val().trim();

    if(addressValue ===''){
      setError(address,"*Address cannot be blank");
    }else if(validateOnlyNumber(addressValue)){
      setError(address,"*Enter proper address.");
    }else if(addressValue.length <= 7){
          setError(address,"*Enter proper address");
        }else if(validateAddress(addressValue)){
      setError(address,"*Address cannot have special characters");
    }
    else{
      // validateInput(addressValue,address,"*address cannot be blank"); 
      setSuccess(address);
    }

  });


  var validateInput = (inputValue,idOfInput,message) =>{
  if(inputValue ==='')
    {
      setError(idOfInput,message);
    }else{
      setSuccess(idOfInput);
    }
   }

   var validateGender = (inputValue,idOfInput,message) =>{
  if(idOfInput.checked == true){
      setError(idOfInput,message);
    }else{
      setSuccess(idOfInput);
    }
}
 

var validateOnlyCharacter = (input) =>{

  var characterLetters = /^[A-Za-z\s]+$/;
  if(!input.match(characterLetters )){
    return false
   }else{
    return true
   }

}

var setError = (input,message) =>{
  $(input).parent().addClass('error');
  $(input).parent().removeClass('success');
   $(input).siblings('small').html(message);
}

var setSuccess = (input) =>{  
$(input).parent().addClass('success');
$(input).parent().removeClass('error');

}
 var validateEmail= (email) => {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

var validatePhone= (phone) => {
  var phoneReg =/^[0-9]{10}$/;
  return phoneReg.test(phone);
}

var validateAddress= (address) => {
   var specialChar = /[!@#$%^&*]/g;
  return specialChar.test(address);
}

var validateOnlyNumber = (input) =>{

  var characterLetters = /^[0-9\s]+$/;
  if(input.match(characterLetters )){
    return true;
   }else{
    return false;
   }

}

var validateOnlyZero = (input) =>{

  var characterLetters = /^[0\s]+$/;
  if(input.match(characterLetters )){
    return true;
   }else{
    return false;
   }

}



  var checkInput =  () =>{

    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var agevalue = $('#age').val();
    var country = $('#mycountry').val();
    var state = $('#state').val();
    var city = $('#mycity').val();
    var pin = $('#pin').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var fnameHas = classHas(fname);
    var lnameHas = classHas(lname);
    var emailHas = classHas(email);
    var phone_noHas = classHas(phone_no);
    // var ageHas = classHas(age);
    var addressHas = classHas(address);

    var countrycode = $('#countrycode').val();

    var agree = $('#agree').prop( "checked" );

    var phone= countrycode+""+phone_noValue;



      if(profile_pic == ''){
      errorMessage($('#profileError'),"*Select your profile.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#stateError'),$('#cityError'),$('#idProofError'));

    }else if(countrycode == ''){
      errorMessage($('#countryCodeError'),"*Select Country Code.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#stateError'),$('#cityError'),$('#idProofError'));

    }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
      errorMessage($('#errorMessage'),"*Select Gender.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#ageError'),$('#countryError'),$('#stateError'),$('#cityError'),$('#idProofError'));
      validateInput(bdate,$('#bdate'),"");
    }
    else if(bdate ===''){

      validateInput(bdate,$('#bdate'),"*Please Select date");
      $('#errorMessageText').text("*All fields are required");
    }else if(agevalue<18 ||  agevalue>=90 ){
      errorMessage($('#ageError'),"*You are not eligible.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#countryError'),$('#stateError'),$('#cityError'),$('#idProofError'));

      // validateInput(bdate,$('#bdate'),"");
    }else if(country == ''){
      errorMessage($('#countryError'),"*Select Country.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#stateError'),$('#cityError'),$('#idProofError'));
      validateInput(bdate,$('#bdate'),"");
    }else if(state == ''){
      errorMessage($('#stateError'),"*Select State.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#cityError'),$('#idProofError'));
      validateInput(bdate,$('#bdate'),"");
    }else if(city == ''){
      errorMessage($('#cityError'),"*Select City.",$('#errorMessageText'),"*All fields are required",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#stateError'),$('#idProofError'));
      validateInput(bdate,$('#bdate'),"");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
        errorMessage($('#errorMessageText'),"*Please Upload Proper Proof",$('#errorMessageText'),"*Please Upload Proper Proof",$('#agreeError'),$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#stateError'),$('#cityError'));
       phonetest(phone_noValue,countrycode);
      validateInput(bdate,$('#bdate'),"");
      // $('#errorMessageText').text("*Please Upload Proper Proof"); 
    }else if(fnameHas === true && lnameHas === true && emailHas === true && phone_noHas === true && addressHas === true){
      phonetest(phone_noValue,countrycode);
      validateInput(bdate,$('#bdate'),"");
      $('#errorMessageText').text("*All fields are required");

    var datastring='fname='+fnameValue+'&profile_pic='+profile_pic+'&lname='+lnameValue+'&email='+emailValue+'&gender='+gender+'&country_code='+countrycode+'&phone_no='+phone_noValue+'&age='+agevalue+'&bdate='+bdate+'&kyc='+kyc+'&address='+addressValue+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook;
    
    if(agree == false){
      errorMessage($('#agreeError'),"*Please Agree Terms and Conditions",$('#errorMessageText'),"*All fields are required",$('#profileError'),$('#countryCodeError'),$('#errorMessage'),$('#ageError'),$('#countryError'),$('#stateError'),$('#cityError'),$('#idProofError'));

    }else{

      $.ajax({
        type: "POST",
        url: "registration/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Register Successfully ,You will receive username and password via sms");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });
          $('#agreeError').addClass('hideDiv');
          $('#errorMessageText').addClass('hideDiv');


    }
       
    } else{
       $('#errorMessageText').text("*All fields are required");
    }


  }


var classHas = (input) =>{
  if ($(input).parent().hasClass("success")){
    return true;
  }else{
    return false;
  }
}



// $('#country').on('change', function(){
//         var countryID = $(this).val();
//         if(countryID){
//             $.ajax({
//                 type:'POST',
//                 url:'registration/countrydata',
//                 data:'country_id='+countryID,
//                 success:function(html){
//                     $('#state').html(html);
//                     $('#city').html('<option value="">Select state first</option>'); 
//                 }
//             }); 
//         }else{
//             $('#state').html('<option value="">Select country first</option>');
//             $('#city').html('<option value="">Select state first</option>'); 
//         }
//     });
    
    // $('#state').on('change', function(){
    //     var stateID = $(this).val();
    //     if(stateID){
    //         $.ajax({
    //             type:'POST',
    //             url:'registration/countrydata',
    //             data:'state_id='+stateID,
    //             success:function(html){
    //                 $('#city').html(html);
                   
    //             }
    //         }); 
    //     }else{
    //         $('#city').html('<option value="">Select state first</option>'); 
    //     }
    // });

//     $('#city').on('change', function(){
//         var cityID = $(this).val();
//         if(cityID){
//              $.ajax({
//                       type:'POST',
//                       url:'registration/pincode',
//                       data:'city_id='+cityID,
//                       success:function(response){
//                          $('#pin').val(response); 
//                       }
//                   }); 
//         }else{
//         }
//     });


      $('#customer_level').on('change', function(){

        var custID = $(this).val();
        if(custID){
            $.ajax({
                type:'POST',
                url:'../registration/find_level',
                data:'custID='+custID,
                success:function(res){
                    if (res != 0 ){
                      $('#level').val('Level '+res);
                      $('#level_cust').val(res);

                    }else{
                        $('#level').val('Already Cross His/Her Limit');
                        $('#level_cust').val('');
                        $('#registerCustomer').attr("disabled",true);
                        getAllMessage('#regist',"* Cross His/Her Limit ");
                    }
                    
                }
            }); 
        }else{
            // $('#customer_level').html('<option value="">Select Customer</option>');
            $('#level').val('');
            $('#level_cust').val('');
            $('#registerCustomer').attr("disabled",false);  
        }
        });

    $('#country').on('change', function(){

        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'../registration/countrydata',
                data:'country_id='+countryID,
                success:function(htmll){


                    $('#mystate').html(htmll); 
                      $('#city').html('<option value="">Select state first</option>');
                      $('#pin').val(''); 



                    
                }
            }); 
        }else{
            $('#mystate').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>');
            $('#pin').val('');  
        }
        });
        
        $('#mystate').on('change', function(){
            // alert();
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'../registration/countrydata',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#city').html(html);
                        $('#pin').val(''); 
                       
                    }
                }); 
            }else{
                $('#city').html('<option value="">Select state first</option>');
                $('#pin').val('');  
            }
        });

        $('#city').on('change', function(){
            var cityID = $(this).val();
            if(cityID){
                 $.ajax({
                          type:'POST',
                          url:'../registration/pincode',
                          data:'city_id='+cityID,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#pin').val(response); 
                          }
                      }); 
            }else{
                $('#pin').val(''); 
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });

    $('#bdate').on('change', function(){
      // alert("ok");
    var bdate = $('#bdate').val();

    var age =getdob(bdate);
    if(age <=0){
      $('#age').val(0); 
    }else{
      $('#age').val(age); 
    }
    

        
    });


    var phonetest = (phone_noValue,code) =>{
      $.ajax({

        type:'POST',
         url:'registration/phonetest',
        data:'phone='+phone_noValue+'&countrycode='+code,
          success:function(response){
            if(response == 1){
              setError(phone_no,"*phone number already taken");
            }else{
              setSuccess(phone_no);
            }
          
          }
        }); 
    }

    var emailtest = (emailtest) =>{
      $.ajax({

        type:'POST',
         url:'registration/emailtest',
        data:'email='+emailtest,
          success:function(response){
            if(response == 1){
              setError(email,"*Email already Exists ");
            }else{
              setSuccess(email);
            }
          
          }
        }); 
    }


    var errorMessage = (idname,message,idname2,message2,idname3,idname4,idname5,idname6,idname7,idname8,idname9,idname10) =>{
      idname.removeClass('hideDiv');
      idname.text(message);
      idname2.text(message2);
      idname3.addClass('hideDiv');
      idname4.addClass('hideDiv');
      idname5.addClass('hideDiv');
      idname6.addClass('hideDiv');
      idname7.addClass('hideDiv');
      idname8.addClass('hideDiv');
      idname9.addClass('hideDiv');
      idname10.addClass('hideDiv');
      // idname11.addClass('hideDiv');

    }







});


//register customer by travel agent

var register_customer =  () =>{

  var ta_name = $('#ta_name').val().trim();
  var customer_level = $('#customer_level').val().trim();  
  var level = $('#level_cust').val().trim();    
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val().trim();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    
     var testp= $('#testphone').val();
  var testE= $('#testemail').val();


    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&register_by='+utss+'&ref_id='+uiss+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&registrant='+ta_name+'&customer_level='+customer_level+'&level='+level;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
        getAllMessage('#regist',"* Enter Proper First Name ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
      getAllMessage('#regist',"* Enter Proper Last Name ");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
      getAllMessage('#regist',"* Enter Proper Phone Number ");
    }else if (testp == '1'){
      getAllMessage('#phoneMessage',"* Phone number already exists");
      getAllMessage('#regist',"* Phone number already exists ");
    }else if (email ==''){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (!emailReg.test(email)){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (testE == '1'){
      getAllMessage('#emailMessage',"* Email already exists");
      getAllMessage('#regist',"* Email already exists ");
    }else if (bdate ==''){
      getAllMessage('#dobMessage',"* Select Date of Birth");
      getAllMessage('#regist',"* Select Date of Birth ");
    }else if (age<18 ||  age>=90){
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
      getAllMessage('#regist',"* Sorry you are not eligible ");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#genderMessage',"* Select Gender");
      getAllMessage('#regist',"* Select Gender ");
    }else if (country ===''){
      getAllMessage('#countryMessage',"* Select Country");
      getAllMessage('#regist',"* Select Country ");
    }else if (state ===''){
      getAllMessage('#stateMessage',"* Select State");
      getAllMessage('#regist',"* Select State ");
    }else if (city ===''){
      getAllMessage('#cityMessage',"* Select City");
      getAllMessage('#regist',"* Select City ");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#addressMessage',"* Enter Proper Address");
      getAllMessage('#regist',"* Enter Proper Address ");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#regist',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "customer/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Added Successfully");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });

  }

};


//Edit customer Details by travel agent

var edit_customer =  () =>{

    var ta_id = $('#ta_id').val().trim();
 
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var cust_id = $('#custid').val().trim();
    // var uiss = $('#uiss').val().trim();
    
    // alert(gender);


    var testp= $('#testphone').val();
    var testE= $('#testemail').val();
 
    var phoneN =$('#phoneN').val();
    var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&cust_id='+cust_id+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&ta_id='+ta_id;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Upload Profile Picture");
        getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#regist',"* Enter Proper Last Name ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#regist',"* Enter Proper Phone Number ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#regist',"* Phone number already exists ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (email ==''){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (!emailReg.test(email)){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#regist',"* Email already exists ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (bdate ==''){
      getAllMessage('#regist',"* Select Date of Birth ");
      getAllMessage('#dobMessage',"* Select Date of Birth");
    }else if (age<18 ||  age>=90){
      getAllMessage('#regist',"* Sorry you are not eligible ");
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#regist',"* Select Gender ");
      getAllMessage('#genderMessage',"* Select Gender");
    }else if (country ===''){
      getAllMessage('#regist',"* Select Country ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#regist',"* Select State ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#regist',"* Select City ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#regist',"* Enter Proper Address ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#regist',"* Please Upload Proper Proof ");
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
    }else{


    $.ajax({
        type: "POST",
        url: "customer/edit_customer_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Save Changes Successfully");
          window.location.reload();
        }
        else{
          alert("Failed To Save Changes");
        }
            },
        });

  }

};

//edit profile 

  var checkInputValues =  () =>{

    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#contact_no').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var profile_pic = $('#profile_pic').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();
    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    // var country_code = $('#country_code').val();
    // alert(gender);


     var testp= $('#testphone').val();
  var testE= $('#testemail').val();
 
 var phoneN =$('#phoneN').val();
  var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&user_type='+utss+'&user_id='+uiss+'&profile_pic='+profile_pic+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin;

    if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#savemessage',"* Enter Proper First Name  ");
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#savemessage',"* Enter Proper Last Name  ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#savemessage',"* Enter Proper Phone Number  ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#savemessage',"* Phone number already exists  ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (!emailReg.test(email)){
      getAllMessage('#savemessage',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#savemessage',"* Email already exists  ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (age<18 ||  age>=90){
      getAllMessage('#savemessage',"* Select Proper Date of Birth  ");
      getAllMessage('#dobMessage',"* Select Proper Date of Birth");
    }else if (country ===''){
      getAllMessage('#savemessage',"* Select Country  ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#savemessage',"* Select State  ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#savemessage',"* Select City  ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#savemessage',"* Enter Proper Address  ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#savemessage',"* Upload Profile Picture  ");
    }else if (invalidimage1 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#savemessage',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "updatedata/edit_profile_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Update Successfully");
          window.location.reload();
        }
        else{
          alert("Update Failed");
        }
            },
        });

  }

};


//Travel Agent

//register travel agent by Franchisee

var registerTravelAgent =  () =>{

  var f_name = $('#f_name').val().trim();   
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    
     var testp= $('#testphone').val();
  var testE= $('#testemail').val();


    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&register_by='+utss+'&ref_id='+uiss+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&registrant='+f_name;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
        getAllMessage('#regist',"* Enter Proper First Name ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
      getAllMessage('#regist',"* Enter Proper Last Name ");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
      getAllMessage('#regist',"* Enter Proper Phone Number ");
    }else if (testp == '1'){
      getAllMessage('#phoneMessage',"* Phone number already exists");
      getAllMessage('#regist',"* Phone number already exists ");
    }else if (email ==''){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (!emailReg.test(email)){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (testE == '1'){
      getAllMessage('#emailMessage',"* Email already exists");
      getAllMessage('#regist',"* Email already exists ");
    }else if (bdate ==''){
      getAllMessage('#dobMessage',"* Select Date of Birth");
      getAllMessage('#regist',"* Select Date of Birth ");
    }else if (age<18 ||  age>=90){
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
      getAllMessage('#regist',"* Sorry you are not eligible ");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#genderMessage',"* Select Gender");
      getAllMessage('#regist',"* Select Gender ");
    }else if (country ===''){
      getAllMessage('#countryMessage',"* Select Country");
      getAllMessage('#regist',"* Select Country ");
    }else if (state ===''){
      getAllMessage('#stateMessage',"* Select State");
      getAllMessage('#regist',"* Select State ");
    }else if (city ===''){
      getAllMessage('#cityMessage',"* Select City");
      getAllMessage('#regist',"* Select City ");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#addressMessage',"* Enter Proper Address");
      getAllMessage('#regist',"* Enter Proper Address ");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#regist',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "travel_agent/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Added Successfully");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });

  }

};


//Edit Travel Agent Details by Franchisee

var edit_travel_agent =  () =>{

    var f_id = $('#f_id').val().trim();

    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var travel_agent_id = $('#ta_id').val().trim();
    // var uiss = $('#uiss').val().trim();
    
    // alert(gender);


    var testp= $('#testphone').val();
    var testE= $('#testemail').val();
 
    var phoneN =$('#phoneN').val();
    var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&travel_agent_id='+travel_agent_id+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&f_id='+f_id;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Upload Profile Picture");
        getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#regist',"* Enter Proper Last Name ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#regist',"* Enter Proper Phone Number ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#regist',"* Phone number already exists ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (email ==''){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (!emailReg.test(email)){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#regist',"* Email already exists ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (bdate ==''){
      getAllMessage('#regist',"* Select Date of Birth ");
      getAllMessage('#dobMessage',"* Select Date of Birth");
    }else if (age<18 ||  age>=90){
      getAllMessage('#regist',"* Sorry you are not eligible ");
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#regist',"* Select Gender ");
      getAllMessage('#genderMessage',"* Select Gender");
    }else if (country ===''){
      getAllMessage('#regist',"* Select Country ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#regist',"* Select State ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#regist',"* Select City ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#regist',"* Enter Proper Address ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#regist',"* Please Upload Proper Proof ");
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
    }else{


    $.ajax({
        type: "POST",
        url: "travel_agent/edit_travel_agent_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Save Changes Successfully");
          // window.location.reload();
          location.href = "view_travel_agent";
        }
        else{
          alert("Failed To Save Changes");
        }
            },
        });

  }

};




//Franchisee

//register Franchisee by Sales Manager

var registerFranchisee =  () =>{

  var sm_name = $('#sm_name').val().trim();   
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    
    var testp= $('#testphone').val();
    var testE= $('#testemail').val();


    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&register_by='+utss+'&ref_id='+uiss+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&registrant='+sm_name;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
        getAllMessage('#regist',"* Enter Proper First Name ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
      getAllMessage('#regist',"* Enter Proper Last Name ");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
      getAllMessage('#regist',"* Enter Proper Phone Number ");
    }else if (testp == '1'){
      getAllMessage('#phoneMessage',"* Phone number already exists");
      getAllMessage('#regist',"* Phone number already exists ");
    }else if (email ==''){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (!emailReg.test(email)){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (testE == '1'){
      getAllMessage('#emailMessage',"* Email already exists");
      getAllMessage('#regist',"* Email already exists ");
    }else if (bdate ==''){
      getAllMessage('#dobMessage',"* Select Date of Birth");
      getAllMessage('#regist',"* Select Date of Birth ");
    }else if (age<18 ||  age>=90){
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
      getAllMessage('#regist',"* Sorry you are not eligible ");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#genderMessage',"* Select Gender");
      getAllMessage('#regist',"* Select Gender ");
    }else if (country ===''){
      getAllMessage('#countryMessage',"* Select Country");
      getAllMessage('#regist',"* Select Country ");
    }else if (state ===''){
      getAllMessage('#stateMessage',"* Select State");
      getAllMessage('#regist',"* Select State ");
    }else if (city ===''){
      getAllMessage('#cityMessage',"* Select City");
      getAllMessage('#regist',"* Select City ");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#addressMessage',"* Enter Proper Address");
      getAllMessage('#regist',"* Enter Proper Address ");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#regist',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "franchisee/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Added Successfully");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });

  }

};


//Edit Franchisee Details by Sales Manager

var edit_franchisee =  () =>{

    var sm_id = $('#sm_id').val().trim();

    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var franchisee_id = $('#f_id').val().trim();
    // var uiss = $('#uiss').val().trim();
    
    // alert(gender);


    var testp= $('#testphone').val();
    var testE= $('#testemail').val();
 
    var phoneN =$('#phoneN').val();
    var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&franchisee_id='+franchisee_id+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&sm_id='+sm_id;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Upload Profile Picture");
        getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#regist',"* Enter Proper Last Name ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#regist',"* Enter Proper Phone Number ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#regist',"* Phone number already exists ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (email ==''){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (!emailReg.test(email)){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#regist',"* Email already exists ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (bdate ==''){
      getAllMessage('#regist',"* Select Date of Birth ");
      getAllMessage('#dobMessage',"* Select Date of Birth");
    }else if (age<18 ||  age>=90){
      getAllMessage('#regist',"* Sorry you are not eligible ");
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#regist',"* Select Gender ");
      getAllMessage('#genderMessage',"* Select Gender");
    }else if (country ===''){
      getAllMessage('#regist',"* Select Country ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#regist',"* Select State ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#regist',"* Select City ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#regist',"* Enter Proper Address ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#regist',"* Please Upload Proper Proof ");
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
    }else{


    $.ajax({
        type: "POST",
        url: "franchisee/edit_franchisee_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Save Changes Successfully");
          // window.location.reload();
          location.href = "view_franchisee";
        }
        else{
          alert("Failed To Save Changes");
        }
            },
        });

  }

};


//Sales Manager

//register Sales Manager by Branch Manager

var registerSalesManager =  () =>{
 
  var bm_name = $('#bm_name').val().trim();   
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var branch_name = $('#branch_name').val();
    var zone_name = $('#zone_name').val();
    var region_name = $('#region_name').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    
    var testp= $('#testphone').val();
    var testE= $('#testemail').val();


    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&register_by='+utss+'&ref_id='+uiss+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&registrant='+bm_name+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
        getAllMessage('#regist',"* Enter Proper First Name ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
      getAllMessage('#regist',"* Enter Proper Last Name ");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
      getAllMessage('#regist',"* Enter Proper Phone Number ");
    }else if (testp == '1'){
      getAllMessage('#phoneMessage',"* Phone number already exists");
      getAllMessage('#regist',"* Phone number already exists ");
    }else if (email ==''){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (!emailReg.test(email)){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (testE == '1'){
      getAllMessage('#emailMessage',"* Email already exists");
      getAllMessage('#regist',"* Email already exists ");
    }else if (bdate ==''){
      getAllMessage('#dobMessage',"* Select Date of Birth");
      getAllMessage('#regist',"* Select Date of Birth ");
    }else if (age<18 ||  age>=90){
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
      getAllMessage('#regist',"* Sorry you are not eligible ");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#genderMessage',"* Select Gender");
      getAllMessage('#regist',"* Select Gender ");
    }else if (country ===''){
      getAllMessage('#countryMessage',"* Select Country");
      getAllMessage('#regist',"* Select Country ");
    }else if (state ===''){
      getAllMessage('#stateMessage',"* Select State");
      getAllMessage('#regist',"* Select State ");
    }else if (city ===''){
      getAllMessage('#cityMessage',"* Select City");
      getAllMessage('#regist',"* Select City ");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#addressMessage',"* Enter Proper Address");
      getAllMessage('#regist',"* Enter Proper Address ");
    }else if (zone_name ===''){
      getAllMessage('#zoneMessage',"* Select Zone");
      getAllMessage('#regist',"* Select Zone");
    }else if (region_name ===''){
      getAllMessage('#regionMessage',"* Select Region");
      getAllMessage('#regist',"* Select Region");
    }else if (branch_name ===''){
      getAllMessage('#branchMessage',"* Select Branch");
      getAllMessage('#regist',"* Select Branch");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#regist',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "floor_manager/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Added Successfully");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });

  }

};


//Edit Sales Manager Details by Branch Manager

var edit_sales_manager =  () =>{

 var bm_id = $('#bm_id').val().trim();
  var branch_name = $('#branch_name').val().trim();
  var zone_name = $('#zone_name').val().trim();
  var region_name = $('#region_name').val().trim();
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var sales_manager_id = $('#s_id').val().trim();


    var testp= $('#testphone').val();
    var testE= $('#testemail').val();
 
    var phoneN =$('#phoneN').val();
    var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&sales_manager_id='+sales_manager_id+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name+'&bm_id='+bm_id;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Upload Profile Picture");
        getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#regist',"* Enter Proper Last Name ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#regist',"* Enter Proper Phone Number ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#regist',"* Phone number already exists ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (email ==''){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (!emailReg.test(email)){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#regist',"* Email already exists ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (bdate ==''){
      getAllMessage('#regist',"* Select Date of Birth ");
      getAllMessage('#dobMessage',"* Select Date of Birth");
    }else if (age<18 ||  age>=90){
      getAllMessage('#regist',"* Sorry you are not eligible ");
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#regist',"* Select Gender ");
      getAllMessage('#genderMessage',"* Select Gender");
    }else if (country ===''){
      getAllMessage('#regist',"* Select Country ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#regist',"* Select State ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#regist',"* Select City ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#regist',"* Enter Proper Address ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (zone_name ===''){
      getAllMessage('#zoneMessage',"* Select Zone");
      getAllMessage('#regist',"* Select Zone");
    }else if (region_name ===''){
      getAllMessage('#regionMessage',"* Select Region");
      getAllMessage('#regist',"* Select Region");
    }else if (branch_name ===''){
      getAllMessage('#branchMessage',"* Select Branch");
      getAllMessage('#regist',"* Select Branch");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#regist',"* Please Upload Proper Proof ");
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
    }else{


    $.ajax({
        type: "POST",
        url: "floor_manager/edit_floor_manager_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Save Changes Successfully");
          location.href = "view_floor_manager";
          // window.location.reload();
        }
        else{
          alert("Failed To Save Changes");
        }
            },
        });

  }

};



//Branch Manager

//register Branch Manager by Regional Manager

var registerBranchManager =  () =>{

  var rm_name = $('#rm_name').val().trim();   
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var branch_name = $('#branch_name').val();
    var zone_name = $('#zone_name').val();
    var region_name = $('#region_name').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var utss = $('#utss').val().trim();
    var uiss = $('#uiss').val().trim();
    
    var testp= $('#testphone').val();
    var testE= $('#testemail').val();


    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&register_by='+utss+'&ref_id='+uiss+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&registrant='+rm_name+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Enter Proper First Name");
        getAllMessage('#regist',"* Enter Proper First Name ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
      getAllMessage('#regist',"* Enter Proper Last Name ");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
      getAllMessage('#regist',"* Enter Proper Phone Number ");
    }else if (testp == '1'){
      getAllMessage('#phoneMessage',"* Phone number already exists");
      getAllMessage('#regist',"* Phone number already exists ");
    }else if (email ==''){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (!emailReg.test(email)){
      getAllMessage('#emailMessage',"* Enter Proper Email");
      getAllMessage('#regist',"* Enter Proper Email ");
    }else if (testE == '1'){
      getAllMessage('#emailMessage',"* Email already exists");
      getAllMessage('#regist',"* Email already exists ");
    }else if (bdate ==''){
      getAllMessage('#dobMessage',"* Select Date of Birth");
      getAllMessage('#regist',"* Select Date of Birth ");
    }else if (age<18 ||  age>=90){
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
      getAllMessage('#regist',"* Sorry you are not eligible ");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#genderMessage',"* Select Gender");
      getAllMessage('#regist',"* Select Gender ");
    }else if (country ===''){
      getAllMessage('#countryMessage',"* Select Country");
      getAllMessage('#regist',"* Select Country ");
    }else if (state ===''){
      getAllMessage('#stateMessage',"* Select State");
      getAllMessage('#regist',"* Select State ");
    }else if (city ===''){
      getAllMessage('#cityMessage',"* Select City");
      getAllMessage('#regist',"* Select City ");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#addressMessage',"* Enter Proper Address");
      getAllMessage('#regist',"* Enter Proper Address ");
    }else if (zone_name ===''){
      getAllMessage('#zoneMessage',"* Select Zone");
      getAllMessage('#regist',"* Select Zone");
    }else if (region_name ===''){
      getAllMessage('#regionMessage',"* Select Region");
      getAllMessage('#regist',"* Select Region");
    }else if (branch_name ===''){
      getAllMessage('#branchMessage',"* Select Branch");
      getAllMessage('#regist',"* Select Branch");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
      getAllMessage('#regist',"* Please Upload Proper Proof  ");
    }else{


    $.ajax({
        type: "POST",
        url: "franchisee_manager/submit_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Added Successfully");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });

  }

};


//Edit Branch Manager Details by Regional Manager

var edit_branch_manager =  () =>{

  var rmid = $('#rm_id').val().trim();//log
  var branch_name = $('#branch_name').val().trim();
  var zone_name = $('#zone_name').val().trim();
  var region_name = $('#region_name').val().trim();
    var firstname = $('#firstname').val().trim();
    var lastname = $('#lastname').val().trim();
    var contact_no = $('#phone').val().trim();
    var email = $('#emailvalue').val().trim();
    var gender = $('.gender:checked').val();
    var bdate = $('#bdate').val();
    var country_code = $('#countrycode').val();
    var country = $('#country').val();
    var state = $('#mystate').val();
    var city = $('#city').val();
    var pin = $('#pin').val();
    var address = $('#address').val();

    var profile_pic = $('#profile_pic').val();
    var kyc = $('#kyc').val();
    var pan_card = $('#pan_card').val();
    var aadhar_card = $('#aadhar_card').val();
    var voting_card = $('#voting_card').val();
    var passbook = $('#passbook').val();
    var invalidimage1 = $('#invalidimage1').val();
    var invalidimage2 = $('#invalidimage2').val();
    var invalidimage3 = $('#invalidimage3').val();
    var invalidimage4 = $('#invalidimage4').val();
    var invalidimage5 = $('#invalidimage5').val();
    var invalidimage6 = $('#invalidimage6').val();

    var branch_manager_id = $('#bm_id').val().trim();


    var testp= $('#testphone').val();
    var testE= $('#testemail').val();
 
    var phoneN =$('#phoneN').val();
    var emailV =$('#emailV').val();

    var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

      var age =getdob(bdate);
   



    var datastring='firstname='+firstname+'&branch_manager_id='+branch_manager_id+'&lastname='+lastname+'&email='+email+'&gender='+gender+'&country_code='+country_code+'&phone='+contact_no+'&bdate='+bdate+'&address='+address+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&age='+age+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name+'&rmid='+rmid;

     if (profile_pic ===''){
      getAllMessage('#profileMessage',"* Upload Profile Picture");
      getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        getAllMessage('#fnameMessage',"* Upload Profile Picture");
        getAllMessage('#regist',"* Upload Profile Picture ");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
      getAllMessage('#regist',"* Enter Proper Last Name ");
      getAllMessage('#lnameMessage',"* Enter Proper Last Name");
    }else if (!phoneReg.test(contact_no)){
      getAllMessage('#regist',"* Enter Proper Phone Number ");
      getAllMessage('#phoneMessage',"* Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
      getAllMessage('#regist',"* Phone number already exists ");
      getAllMessage('#phoneMessage',"* Phone number already exists");
    }else if (email ==''){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (!emailReg.test(email)){
      getAllMessage('#regist',"* Enter Proper Email ");
      getAllMessage('#emailMessage',"* Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
      getAllMessage('#regist',"* Email already exists ");
      getAllMessage('#emailMessage',"* Email already exists");
    }else if (bdate ==''){
      getAllMessage('#regist',"* Select Date of Birth ");
      getAllMessage('#dobMessage',"* Select Date of Birth");
    }else if (age<18 ||  age>=90){
      getAllMessage('#regist',"* Sorry you are not eligible ");
      getAllMessage('#dobMessage',"* Sorry you are not eligible");
    }else if (gender !== 'male' && gender !== 'female' && gender !== 'others'){
      getAllMessage('#regist',"* Select Gender ");
      getAllMessage('#genderMessage',"* Select Gender");
    }else if (country ===''){
      getAllMessage('#regist',"* Select Country ");
      getAllMessage('#countryMessage',"* Select Country");
    }else if (state ===''){
      getAllMessage('#regist',"* Select State ");
      getAllMessage('#stateMessage',"* Select State");
    }else if (city ===''){
      getAllMessage('#regist',"* Select City ");
      getAllMessage('#cityMessage',"* Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
      getAllMessage('#regist',"* Enter Proper Address ");
      getAllMessage('#addressMessage',"* Enter Proper Address");
    }else if (zone_name ===''){
      getAllMessage('#zoneMessage',"* Select Zone");
      getAllMessage('#regist',"* Select Zone");
    }else if (region_name ===''){
      getAllMessage('#regionMessage',"* Select Region");
      getAllMessage('#regist',"* Select Region");
    }else if (branch_name ===''){
      getAllMessage('#branchMessage',"* Select Branch");
      getAllMessage('#regist',"* Select Branch");
    }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
      getAllMessage('#regist',"* Please Upload Proper Proof ");
      getAllMessage('#invalidImageMessage',"* Please Upload Proper Proof");
    }else{


    $.ajax({
        type: "POST",
        url: "franchisee_manager/edit_franchisee_manager_data",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Save Changes Successfully");
          location.href = "view_franchisee_manager";
          // window.location.reload();
        }
        else{
          alert("Failed To Save Changes");
        }
            },
        });

  }

};



$('#phone').keyup(function () { 
    var country_code = $('#countrycode').val();
    var phone = $('#phone').val().trim();
    var testValue = $('#testValue').val().trim();
    // alert(testValue);
      phonetest2(phone,country_code,testValue);
        
    });


$('#emailvalue').keyup(function () { 
    var email = $('#emailvalue').val().trim();
    var testValue = $('#testValue').val().trim();
     emailtest2(email,testValue);
        
    });


var phonetest2 = (phone_noValue,code,testValue) =>{
      // alert(testValue);
      $.ajax({

        type:'POST',
         url:'test_data/phone_test',
        data:'phone='+phone_noValue+'&countrycode='+code+'&tablename='+testValue,
          success:function(response){
            if(response == 1){
              $('#testpho').html('<input type="hidden"  id="testphone" value="1" >');
            }else{
               $('#testpho').html('<input  type="hidden" id="testphone" value="0" >');
             // return false;
            }
          
          }
        }); 
    }


    var emailtest2 = (emailtest,testValue) =>{
      $.ajax({

        type:'POST',
         url:'test_data/emailtest',
        data:'email='+emailtest+'&tablename='+testValue,
          success:function(response){
            if(response == 1){
              $('#testemails').html('<input type="hidden"  id="testemail" value="1" >');
            }else{
               $('#testemails').html('<input  type="hidden" id="testemail" value="0" >');
             // return false;
            }
          
          }
        }); 
    }


    var getdob =(bdate)=>{
   var birthday =Date.parse(bdate);

     var todaysDate = Date.now();

     var age= todaysDate - birthday ;



     // var millsecond= toage;
    var second = 1000;
    var minute = second*60;
    var hour = minute *60;
    var day = hour*24;
    var year = day*365;

    // alert(bdate.getMonth());

    var dob= Math.floor(age/year);


// $('#age').val(dob);


return dob;
}


var getAllMessage =(id,message)=>{
   $(id).html(message);
        $(id).fadeIn('slow', function(){
        $(id).delay(7000).fadeOut(); 
    });
}


