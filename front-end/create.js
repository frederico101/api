$(document).ready(function(){


 
    $.ajax({
        url: "http://127.0.0.1:8000/api/users/",
        type: "GET",

        success: function(response){
            $('#card').append('<strong>Name ' + response.first_name + ' </strong> <br>' +
             
              'id ' + response.id + '<br>' +

              'email ' + response.email + '<br>'
            
            );
            
            console.log(response)
        }
    });








 
    $('#new_user').on('click', function(){

        $.ajax({
            url: "https://reqres.in/api/users",
            type: "POST",
            data: {
                name: "paul rudd",
                movies: ["I Love You Man", "Role Models"]
            },
            success: function(response){
                $('#card').append('<strong>Name ' + response.name + ' </strong> <br>' +
                 
                  'id ' + response.id + '<br>' +

                  'createdAt ' + response.createdAt + '<br>'  
                                  
                );
               // $("#card").src = "data:image/jpeg;base64," + response.avatar;
                
                console.log(response)
            }
        });
       



    });



});