// add category

$('#addCategory').click(function(e){
            e.preventDefault();

            var name = $('#name').val();
            var description = $('#description').val();
            var picture = $('#picture').val().trim();
            var invalidimage1 = $('#invalidimage1').val();


            var characterLetters = /^[A-Za-z\s]+$/;
            var specialChar = /[!@#$%^&*]/g;


            var dataString = 'name='+ name+'&description='+description+'&picture='+picture;

          if (name ==='' || !name.match(characterLetters) || name.length <= 2){
              alert("Enter Proper Category Name");
          }else if (description ==='' || specialChar.test(description) || description.length <= 7){
              alert("Enter Proper Description");
          }else if (invalidimage1 =='2'){
              alert("Please Upload Proper Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "add_category_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "manage_categories";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }

        });

// add sub category

$('#addSubCategory').click(function(e){
            e.preventDefault();

            var name = $('#name').val();
            var description = $('#description').val();
            var picture = $('#picture').val().trim();
            var category = $('#category').val();
            var invalidimage1 = $('#invalidimage1').val();


            var characterLetters = /^[A-Za-z\s]+$/;
            var specialChar = /[!@#$%^&*]/g;


            var dataString = 'name='+ name+'&description='+description+'&picture='+picture+'&category='+category;

          if (name ==='' || !name.match(characterLetters) || name.length <= 2){
              alert("Enter Proper Category Name");
          }else if (category ==''){
              alert("Please Select Category");
          }else if (description ==='' || specialChar.test(description) || description.length <= 7){
              alert("Enter Proper Description");
          }else if (invalidimage1 =='2'){
              alert("Please Upload Proper Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "add_sub_category_data",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "manage_categories";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }

        });