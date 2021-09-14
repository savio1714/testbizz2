$('#addTravelAgent').click(function(e){
            e.preventDefault();
            // alert("ok ok");
            var franchisee_id = $('#franchisee_id').val();
            var franchisee_name = $('#franchisee_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'franchisee_id='+ franchisee_id+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&franchisee_name='+franchisee_name;

          if (franchisee_id ==''){
              alert("Select Franchisee Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "add_travel_agent_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "travel_agent";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });



  //Edit Travel Agent

  $('#editTravelAgent').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var fid = $('#f_id').val();
            // var franchisee_id = $('#franchisee_id').val();
            var testiod = $('#testiod').val();
            var franchisee_name = $('#franchisee_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&fid='+fid;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "edit_travel_agent_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "travel_agent";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Add Franchisee

$('#addFranchisee').click(function(e){
            e.preventDefault();
            // alert("ok ok");

            var sales_manager_id = $('#sales_manager_id').val();
            var sales_manager_name = $('#sales_manager_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'sales_manager_id='+ sales_manager_id+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&sales_manager_name='+sales_manager_name;

          if (sales_manager_id ==''){
              alert("Select Sales Manager Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "add_franchisee_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "franchisee";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


  //Edit Travel Agent

  $('#editFranchisee').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var smid = $('#sm_id').val(); //edit log
            // var sales_manager_id = $('#sales_manager_id').val();
            var testiod = $('#testiod').val();
            var sales_manager_name = $('#sales_manager_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&smid='+smid;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter proper phone number");
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "edit_franchisee_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "franchisee";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });



//Add Customer

$('#addCustomer').click(function(e){
            e.preventDefault();
            // alert("ok ok");
            var travel_agent_id = $('#travel_agent_id').val();
            var travel_agent_name = $('#travel_agent_name').val();
            var customer_level = $('#customer_level').val();
            var level = $('#level_cust').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'travel_agent_id='+ travel_agent_id+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&travel_agent_name='+travel_agent_name+'&customer_level='+customer_level+'&level='+level;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'||  invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "add_customer_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){

                      if(travel_agent_id==''){
                        alert("Register Successfuly");
                        location.href = "b2c";
                        }
                      else{
                        alert("Register Successfuly");
                        location.href = "travel_agent_customer";


                         }
                      }
                        
                  else{

                  alert("Registeration Failed");
                }
              }
              });
       
          }
            



        });



  //Edit Customer

  $('#editCustomer').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var ta_id = $('#ta_id').val();
            var travel_agent_id = $('#travel_agent_id').val();
            var reference_no = $('#reference_no').val();
            var testiod = $('#testiod').val();
            var travel_agent_name = $('#travel_agent_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&ta_id='+ta_id;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter proper phone number");
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "edit_customer_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){

                      if(travel_agent_id ==''){
                        alert("Edited Successfuly");
                        location.href = "b2c";
                        }
                      else{
                        alert("Edited Successfuly");
                        location.href = "travel_agent_customer";


                         }
                      
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });



//Add Reginal Manager

$('#addReginalManager').click(function(e){
            e.preventDefault();
            // alert("ok ok");

            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'branch_name='+ branch_name+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&zone_name='+zone_name+'&region_name='+region_name;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "rm/add_regional_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "regional_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Edit Regional Manager

  $('#editRegionalManager').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            // var rmid = $('#rmid').val();
            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var testiod = $('#testiod').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "rm/edit_regional_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "regional_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Add Branch Manager

$('#addBranchManager').click(function(e){
            e.preventDefault();
            // alert("ok ok");

            var rm_id = $('#regional_manager_id').val();
            var rm_name = $('#regional_manager_name').val();
            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'branch_name='+ branch_name+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&zone_name='+zone_name+'&region_name='+region_name+'&rm_id='+rm_id+'&rm_name='+rm_name;

           if (rm_id==''){
              alert("Select Regional Manager Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "fm/add_franchisee_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "franchisee_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });



//Add Sales Manager

$('#addSalesManager').click(function(e){
            e.preventDefault();
            // alert("ok ok");

            var bm_id = $('#branch_manager_id').val();
            var bm_name = $('#branch_manager_name').val();
            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'branch_name='+ branch_name+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&zone_name='+zone_name+'&region_name='+region_name+'&bm_id='+bm_id+'&bm_name='+bm_name;

           if (bm_id==''){
              alert("Select Regional Manager Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "flm/add_floor_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "floor_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Edit Branch Manager

  $('#editBranchManager').click(function(e){
            e.preventDefault();
             
            var editfor = $('#editfor').val();
            var rmid = $('#rm_id').val();
            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var testiod = $('#testiod').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name+'&rmid='+rmid;;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "fm/edit_franchisee_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "franchisee_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Edit Sales Manager

  $('#editSalesManager').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var bmid = $('#bm_id').val(); //edit log
            var branch_name = $('#branch_name').val();
            var zone_name = $('#zone_name').val();
            var region_name = $('#region_name').val();
            var testiod = $('#testiod').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
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
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&branch_name='+branch_name+'&zone_name='+zone_name+'&region_name='+region_name+'&bmid='+bmid;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (zone_name ===''){
              alert("Select Zone");
          }else if (region_name ===''){
              alert("Select Region");
          }else if (branch_name ===''){
              alert("Select Branch ");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else if (invalidimage1 =='2' || invalidimage2 =='2' || invalidimage3 =='2' || invalidimage4 =='2'|| invalidimage5 =='2'  || invalidimage6 =='2'){
              alert("Please Upload Proper Proof");
          }else{
              $.ajax({
                type: "POST",
                url: "flm/edit_floor_manager_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "floor_manager";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });





//Add Employee

$('#addEmployee').click(function(e){
            e.preventDefault();
            // alert("ok ok");
            var location = $('#location').val();
            var designation = $('#designation').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
            var pass = $('#pass').val().trim();
            var cpass = $('#cpass').val().trim();
            // var profile_pic = $('#profile_pic').val();
            // var kyc = $('#kyc').val();
            // var pan_card = $('#pan_card').val();
            // var aadhar_card = $('#aadhar_card').val();
            // var voting_card = $('#voting_card').val();
            // var passbook = $('#passbook').val();
            // var invalidimage1 = $('#invalidimage1').val();
            // var invalidimage2 = $('#invalidimage2').val();
            // var invalidimage3 = $('#invalidimage3').val();
            // var invalidimage4 = $('#invalidimage4').val();
            // var invalidimage5 = $('#invalidimage5').val();
            // var invalidimage6 = $('#invalidimage6').val();
            // alert(invalidimage);


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;

            //for password
            var lowerCaseLetters = /[a-z]/g;
             var upperCaseLetters = /[A-Z]/g;
             var number= /[0-9]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'location='+ location+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&designation='+designation+'&pass='+pass;

          if (location ==='' ){
              alert("Select Location");
          }else if (designation ==='' ){
              alert("Select Designation");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if(validateOnlyZero(phone)){
            alert("Enter Proper Phone number")
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (!pass.match(lowerCaseLetters)){
            alert("password should contain atleast one lower character");
          }else if (!pass.match(upperCaseLetters)){
           alert("password should contain atleast one upper character");
          }else if (!pass.match(number)){
             alert("password should contain atleast one number");
          }else if (!pass.match(specialChar)){
             alert("password should contain atleast one special character");
          }else if(pass.length <8 ){
               alert("Password should be 8 character long");
          }else if (pass !== cpass){
              alert("Password Not Matching");
          }else{
              $.ajax({
                type: "POST",
                url: "add_employee_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){

                       alert("Register Successfuly");
                        location.href = "add_employee";
                      }
                        
                  else{

                  alert("Registeration Failed");
                }
              }
              });
       
          }
            



        });







$('#phone').keyup(function () { 
    var country_code = $('#country_cd').val();
    var phone = $('#phone').val().trim();
    var testValue = $('#testValue').val().trim();
    // alert(testValue);
      phonetest(phone,country_code,testValue);
        
    });


$('#email').keyup(function () { 
    var email = $('#email').val().trim();
    var testValue = $('#testValue').val().trim();
     emailtest(email,testValue);
        
    });


var phonetest = (phone_noValue,code,testValue) =>{
      // alert(testValue);
      $.ajax({

        type:'POST',
         url:'../test_data/phone_test',
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


    var emailtest = (emailtest,testValue) =>{
      $.ajax({

        type:'POST',
         url:'../test_data/emailtest',
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


var validateOnlyZero = (input) =>{

  let characterLetters = /^[0\s]+$/;
  if(input.match(characterLetters )){
    return true;
   }else{
    return false;
   }

}


$('#customer_level').on('change', function(){

        var custID = $(this).val();
        if(custID){
            $.ajax({
                type:'POST',
                url:'../../registration/find_level',
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


  $('#travel_agent_id').on('change', function(){
            var travel_agent_id = $(this).val();
            var tagent_id='';
            if(travel_agent_id == ''){
                tagent_id='-1'
            }else{
                tagent_id=travel_agent_id;
            }

            if(tagent_id){
                 $.ajax({
                          type:'POST',
                          url:'../agents/travel_agent_name',
                          data:'travel_agent_id='+tagent_id,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#travel_agent_name').val(response); 
                          }
                      }); 
            }else{
                
            }
        });

