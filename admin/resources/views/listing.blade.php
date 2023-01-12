 @extends('index')
@section('title','form')
@section('main')


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>User List
                <small class="text-muted">Welcome </small>
                </h2>
            </div>
           
        </div>
    </div>
    <div class="container-fluid">
   
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
               
              
                    <div class="body">
                        <a href="/form" class="btn btn-app waves-effect ml-3">ADD</a>

                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Id</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>number</th>
                                    <th>DOB</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>number</th>
                                    <th>DOB</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </tfoot>
                            <tbody>
                            
                                  @foreach($userdata as $udata)
                                  <tr>
                                  <td>{{$udata['id']}}</td>
                                  <td>{{$udata['name']}}</td>
                                  <td>{{$udata['email']}}</td>
                                    <td>{{$udata['number']}}</td>
                                    <td>{{$udata['dob']}}</td>
                                    {{-- <td>{{$udata['img']}}</td> --}}
                                    <td> <img src="{{ asset('/resources/images/' . $udata->img)  }}" height="100px" width="100px"/> </td>
                                    <td><a href={{url('userview/'.base64_encode($udata['id']))}} class="btn btn-raised waves-effect waves-float waves-green"><i class="zmdi zmdi-eye"></i></a>
                                        <a href={{url('view/'.base64_encode($udata['id']))}} class="btn btn-raised waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href={{url('delete/'.base64_encode($udata['id']))}} class="btn btn-raised waves-effect waves-float waves-green"><i class="zmdi zmdi-delete "></i></a></td>
                                        </tr>
                                  @endforeach
                                </table>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection