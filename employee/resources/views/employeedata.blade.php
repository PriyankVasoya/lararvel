<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>


</head>
<body>
    <!-- Button trigger modal -->
<button style="margin: 20px 20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   Click here to add your employee data
  </button>

   {{-- @if(session('success'))
  <h3>Data Saved For {{session('success')}}</h3>
  @endif --}}
  @if (session('success'))
  <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
      <div class="alert alert-success">
        <h3>Data Saved For {{session('success')}}</h3>
      </div>
  </div>
@endif

{{--  
  @if(session('update'))
  <h3>Data updated For {{session('update')}}</h3>
  @endif --}}

  @if (session('update'))
  <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
      <div class="alert alert-success">
        <h3>Data updated For {{session('update')}}</h3>
      </div>
  </div>
@endif
  <div id="save_message"></div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>


        <div class="modal-body">
            <form action="">
                <ul id="errList"></ul>
      
                {{-- <input type="hidden" id="edit_form_id"> --}}
                {{-- @if (count($errors) > 0)
                <div class = "errList alert alert-danger">
                   <ul>
                      @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                      @endforeach
                   </ul>
                </div>
             @endif --}}


                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">name</label>
                  <input type="text" class="form-control" id="recipient-name">
                  <span style="color: red" id="err_name"></span>

                </div>
                <div class="form-group">
                    <label for="recipient-email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" id="recipient-email">
                  <span style="color: red" id="err_email"></span>

                  </div>
                  <div class="form-group">
                    <label for="recipient-date" class="col-form-label">DOB</label>
                    <input type="date" class="form-control" id="recipient-date">
                  <span style="color: red" id="err_date"></span>

                  </div>
                <div class="form-group">
                  <label for="lang" class="col-form-label">Experience Language</label>
                  <input type="text" class="form-control" id="lang">
                  <span style="color: red" id="err_exp_lang"></span>

                </div>
                <div class="form-group">
                    <label for="salary" class="col-form-label">Salary</label>
                    <input type="text" class="form-control" id="salary">
                  <span style="color: red" id="err_salary"></span>
                  </div>                  
              </form>
        </div>
        

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="submit_btn btn btn-primary">Add Data</button>
        </div>
      </div>
    </div>
  </div>
  <table class="table" id="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">DOB</th>
        <th scope="col">Experience</th>
        <th scope="col">salary</th>
        <th scope="col">Aciton</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <div class="modal fade" id="eexampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <label for="edit_recipient-name" class="col-form-label">name</label>
              <input type="text" class="form-control" id="edit_recipient-name">
              <span style="color: red" id="e_name"></span>

            </div>
            <div class="form-group">
              <label for="edit_email" class="col-form-label">email</label>
              <input type="text" class="form-control" id="edit_email">
              <span style="color: red" id="e_email"></span>

            </div>
            <div class="form-group">
                <label for="edit_date" class="col-form-label">DOB</label>
                <input type="text" class="form-control" id="edit_date">
                <span style="color: red" id="e_date"></span>

              </div>
              <div class="form-group">
                <label for="edit_lang" class="col-form-label">Language</label>
                <input type="text" class="form-control" id="edit_lang">
                <span style="color: red" id="e_exp_lang"></span>

              </div>
              <div class="form-group">
                <label for="edit_salary" class="col-form-label">salary</label>
                <input type="text" class="form-control" id="edit_salary">
                <span style="color: red" id="e_salary"></span>

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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.js" integrity="sha512-HSX6+785OA1Th/CvDy4O2giA2Bvr0Ex6M5yeh+PMomOnpDKBeEnTurP5sSO+jlHShGXku8UmG93POKvXYf3zEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
    
                $.ajaxSetup({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

    $('.submit_btn').on('click', function(e){
        var redirect_url = 'employee'

        e.preventDefault();

        var data = {
            'name' : $('#recipient-name').val(),
            'email' : $('#recipient-email').val(),
            'date' : $('#recipient-date').val(),
            'exp_lang' : $('#lang').val(),
            'salary' : $('#salary').val(),
        }
        $.ajax({
                      url : "/add",
                      type : "post",
                      data : data,
                      datatype : "json",
                      success: function(response){
                          // console.log(response)
                          if(response.status == 400){
                              // $("#errList").html('');
                              $("#errList").html('');
                                // console.log(response.errors)
                                
                              $.each(response.errors, function(key, err_values){
                                // console.log('key'+key)
                                // console.log('value'+err_values)
                                  $("#err_"+key).html(err_values);
                              });
                          }else{
                              $("#errList").html('');
                              $("#save_message").html(response.message);
                              $(".model-body").html('');
                              $("#exampleModal .close").click()
                              window.location = redirect_url             
                      } 
                  }
                  })
    })



fetchdata();

function fetchdata() {

    $.ajax({
    type:'get',
    url:'/getdata',
    dataType: 'json',
    success:function(response) {
          //  console.log(response.result)
          $("tbody").html('');
          $.each(response.result, function (key, item) {
            // console.log(item);
            $('tbody').append('<tr><td>'+item.id+'</td><td>'+item.name+'</td><td>'+item.email+'</td><td>'+item.date_of_birth+'</td><td>'+item.exper_lang+'</td><td>'+item.salary+'</td><td><button type="button" value='+item.id+' class="edit_btn btn btn-primary mr-2">Edit</button><button value='+item.id+'" type="button" class="delete_btn btn btn-danger">Delete</button></td></tr>');
        });

      }
   });
}

$(document).on('click','.delete_btn', function(){
    var data = $(this).val();
    // console.log(data)
    $.ajax({
        type:'delete',
        url: "/delete/"+data,
        success: function(response){
            $("#save_message").html(response.message);
            fetchdata();
        }
    })
})

$(document).on('click','.edit_btn',function(e){
    e.preventDefault();

    var data = $(this).val();
    // console.log(data)
    $.ajax({
        type:'post',
        url:'/show',
        data: {
            id :data
        },
        success:function(response){
            // console.log(response)
            $('#edit_form_id').val(data); 
            $('#edit_recipient-name').val(response.data.name)
            $('#edit_email').val(response.data.email)
            $('#edit_date').val(response.data.date_of_birth)
            $('#edit_lang').val(response.data.exper_lang)
            $('#edit_salary').val(response.data.salary)
            $('#eexampleModal').modal('show')


        }
    })
})

$(document).on('click','.update_btn', function(e){
  var redirect_url = 'employee'

  e.preventDefault();
  var emp_id = $('#edit_form_id').val();
// console.log(emp_id)
  var data = {
            'id' : emp_id,
            'name' : $('#edit_recipient-name').val(),
            'email' : $('#edit_email').val(),
            'date' : $('#edit_date').val(),
            'exp_lang' : $('#edit_lang').val(),
            'salary' : $('#edit_salary').val(),
  }  
  $.ajax({
    url : '/update',
    type : 'post',
    data : data,
    dataType : 'json',
    success : function(response){
      // console.log(response)
      if(response.status==400){
        $("#updateform_errList").html('');
        $.each(response.errors, function(key,e_value){
          $('#e_'+key).html(e_value);
          // $("#err_"+key).html(err_values);

        })

      }else if(response.status==404){
        $("#updateform_errList").html('');
        $("#success_message").text(response.message);

      }else{
         
        $("#updateform_errList").html('');
        $("#success_message").html('');
        $("#success_message").text(response.message);
        $('#exampleModal').modal('hide')
        window.location = redirect_url        

      }
    }
  })

})

})

</script>    