$('#file2').change(function(){

      var fd = new FormData();
      var files = $('#file2')[0].files[0];
      fd.append('file',files);

       var file_size = $('#file2')[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: 'upload/upload_profile',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img2").attr("src",response); 
            $('#profile_pic').val(response);
                    $("#preview img").show(); // Display image element
                  }else{
                    $('#profile_pic').val('');
                    alert('Please upload proper Profile');
                  }
                },
              });
      }else{
        $('#profile_pic').val('');
        alert('File size is greater than 2MB');

      }

    });

$('#file').change(function(){

      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

      var file_size = $('#file2')[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: 'upload/upload',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            // $("#img").attr("src",response); 
            $('#id_proof').val(response);
                    // $(".preview img").show(); // Display image element
                  }else{
                    $('#id_proof').val('');
                    alert('Please upload proper Id Proof');
                  }
                },
              });
      }else{
        $('#id_proof').val('');
        alert('File size is greater than 2MB');
      }

    });