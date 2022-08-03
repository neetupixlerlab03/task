$(document).on('submit','#userForm',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"POST",
        url: "php-script.php",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('')

    }});
});
$(document).on('click','#showData',function(e){
      $.ajax({    
        type: "GET",
        url: "backend-script.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
           
        }
    });
});
var editData = function(id){
   $('#table-container').load('update-data.php')

    $.ajax({    
        type: "GET",
        url: "update-data.php", 
        data:{editId:id},            
        dataType: "html",                  
        success: function(data){   

          var userData=JSON.parse(data);  
          $("input[name='id']").val(userData.id);               
          $("input[name='fullName']").val(userData.fullName);
          $("input[name='emailAddress']").val(userData.emailAddress);
          $("input[name='city']").val(userData.city);
          $("input[name='country']").val(userData.country);
           
        }

    });
};



$(document).on('update','#updateForm',function(e){
        e.preventDefault();
         var id= $("input[name='id']").val();               
         var fullName= $("input[name='fullName']").val();
         var emailAddress= $("input[name='emailAddress']").val();
         var city= $("input[name='city']").val();
         var country= $("input[name='country']").val();
        $.ajax({
        method:"POST",
        url: "update-data.php",
        data:{
          updateId:id,
          fullName:fullName,
          emailAddress:emailAddress,
          city:city,
          country:country

        },
        success: function(data){
        $('#table-container').load('backend-script.php');
        $('#msg').html(data);
   
    }});
});