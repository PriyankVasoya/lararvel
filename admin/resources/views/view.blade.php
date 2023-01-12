@extends('index')
@section('title','view')
@section('main')

    
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Edit User
                <small class="text-muted">Welcome </small>
                </h2>
            </div>
        
        </div>
    </div>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
              
                    <div class="body">
                        <h2 class="card-inside-title">Edit data Form</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                    
                                <form action="/view" method="post" enctype='multipart/form-data'>
                                    @csrf
                                    <input type="hidden" id="id" name="id" value="{{$data['id']}}" ><br>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$data['name']}}" name="name" placeholder="name" data-parsley-required-message="Please enter your name" data-parsley-required
                                        required />
                                        <span style="color: red">@error('name'){{$message}}@enderror</span><br>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" class="form-control" value="{{$data['email']}}" name="email" placeholder="email"  data-parsley-required-message="Please enter valid email" data-parsley-required
                                        required/>
                                        <span style="color: red">@error('email'){{$message}}@enderror</span><br>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input data-parsley-type="number" value="{{$data['number']}}" class="form-control"  name="number" placeholder="Phone number" data-parsley-required-message="Please enter valid number" 	data-parsley-required required/>
                                        <span style="color: red">@error('number'){{$message}}@enderror</span><br>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" value="{{$data['dob']}}" name="dob" data-parsley-required-message="Please enter your birth date" placeholder="Date of Birth" data-parsley-required required/>
                                        <span style="color: red">@error('dob'){{$message}}@enderror</span><br>

                                    </div>
                                </div>
                                 {{-- <div class="form-group"> --}}
                                        {{-- <div class="form-line"> --}}
                                            <input type="file" class="form-control"  name="image" value="{{$data['image']}}" placeholder="upload image" data-parsley-required required multiple/>
                                            {{-- <span style="color: red">@error('image'){{$message}}@enderror</span><br> --}}

                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                <div class="form-group">
                                    <div class="form-line">
                                        <button  type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Jquery Core Js --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script> 
<script>
    // $('form').parsley()
</script>
</body>
@endsection
