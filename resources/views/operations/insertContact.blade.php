<script>
    $(document).on('click','.add_message', function(e){
              e.preventDefault();
              $('.add_message').text("Sending..");
              //console.log("hey");
              var data = { 
                  'name' : $('#name').val(),
                  'message' : $('#message').val(),
                  'email' : $('#email').val(),
                  'phone' : $('#phone').val(),
              }
              //console.log(data);
              $.ajaxSetup({
                  headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  type:"POST",
                  url:"/contact",
                  data:data,
                  dataType:"json",
                  success: function(response){
                      //console.log(response.message);
                      $("#success_messages").addClass('alert alert-success');
                      $("#success_messages").text(response.message);
                      $("#contactUs").find('input').val("");
                      $("#success_messages").fadeIn(1000);
                      $("#success_messages").fadeOut(1000);
                      $('.add_message').text("SEND NOW");
                  }
              });
          });
  
  </script>