<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form>
      <ul id="saveform_errList"></ul>
      <div id="success_message"></div>

  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name"  placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="number">number</label>
    <input type="text" class="form-control" id="number" placeholder="Enter number">
  </div>
  
  <button type="submit" class="submit_btn btn btn-primary">Submit</button>
</form>
<br>
<table class="table" id="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Information</h5>
        
      </div>
      <div class="modal-body">
        <form action="">
          <ul id="updateform_errList"></ul>

          <input type="hidden" id="edit_form_id">
          <div class="form-group">
            <label for="name" class="col-form-label">name</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="editnumber" class="col-form-label">number</label>
            <input type="text" class="form-control" id="editnumber">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="update_btn btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script>

              $(document).ready(function(){

                $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                fetchdata();

                function fetchdata() {
                    $.ajax({
                    type:'get',
                    url:'/list',
                    dataType: 'json',
                    success:function(response) {
                          //  console.log(response.result)
                          $("tbody").html('');
                          $.each(response.result, function (key, item) {
                            // console.log(item.number);
                            $('tbody').append('<tr><td>'+item.id+'</td><td>'+item.name+'</td><td>'+item.number+'</td><td><button type="button" value='+item.id+' class="edit_btn btn btn-primary mr-2">Edit</button><button value='+item.id+'" type="button" class="delete_btn btn btn-danger">Delete</button></td></tr>');
                        });
                      }
                   });
                }

                $('.submit_btn').on('click', function(e){
                     e.preventDefault();
                    // console.log('hello');
                    var data = {
                      'name' : $('#name').val(),
                      'number' : $('#number').val(),
                    }
         
                    $.ajax({
                    url: "{{route('index1')}}",
                    type: "post",
                    data: data,
                    dataType: 'json',
                    success: function (response) {

                      if(response.status == 400){
                        $("#saveform_errList").html('');
                        $.each(response.errors, function (key, err_value) {
                            $("#saveform_errList").append('<li>' + err_value +'</li>');
                        });
                      }
                      else{

                        $("#saveform_errList").html('');
                        $("#success_message").text(response.message);
                        fetchdata();
                      }
                    }
                });
                   
                })

                $(document).on('click', '.delete_btn', function() {
    
                  var data = $(this).val();
console.log(data)
                  $.ajax({
                    url: "/delete/"+data,
                    type: "post",
                    success: function (response) {
                      $("#success_message").text(response.message);
                      fetchdata();
                    }
                   });
                  });
                }) 


                $(document).on('click','.edit_btn', function(e){
                  e.preventDefault();
                  var data = $(this).val(); //id get
         
                  $.ajax({
                    url: "/show",
                    type: "post",
                    data: {
                      id :data
                    },
                    success: function (response) {
                      // console.log(response)
                      $('#recipient-name').val(response.data.name)
                      $('#editnumber').val(response.data.number)
                      // console.log(response.data.number)
                      // $("#success_message").text(response.message);
                      // fetchdata();
                      $('#edit_form_id').val(data); 
                      $('#exampleModal').modal('show')

                    }
                   });
                  });

                  $(document).on('click','.update_btn', function(e){
                    var redirect_url = 'index'
                    e.preventDefault();
                    var edit_id = $('#edit_form_id').val(); 
                    // console.log(edit_id);
                    var data1 = {
                      'name' : $('#recipient-name').val(),
                      'number' : $('#editnumber').val(),
                      'id' : edit_id,
                    }
                    // console.log(data1);
                    $.ajax({
                    url: "/edit",
                    type: "post",
                    data: data1,
                    dataType: 'json',
                    success: function (response) {
                    // console.log(response);
                      if(response.status == 400){
                        $("#updateform_errList").html('');
                        $.each(response.errors, function (key, err_value) {
                            $("#updateform_errList").append('<li>' + err_value +'</li>');
                        });
                      }
                      else if(response.status == 404){
                        $("#updateform_errList").html('');
                        $("#success_message").text(response.message);
                      }
                      else{

                        $("#updateform_errList").html('');
                        $("#success_message").html('');

                        $("#success_message").text(response.message);
                        $('#exampleModal').modal('hide')

                        window.location = redirect_url                      }
                    }
                });
                  })


               
                
         </script> 