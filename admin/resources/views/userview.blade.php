@extends('index')
@section('title','form')
@section('main')
<section class="content">
   
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card member-card">
                        <div class="header">
                            <div class="col-12 text-left">
                                <a href="{{ URL::previous() }}"  class="btn btn-raised waves-effect waves-float waves-red text-left"><i class="zmdi zmdi-arrow-left"></i></a>
                            </div>
                        </div>
                  
                        <div class="member-img" style="margin-top:0px !important;">
                            <!-- margin-right:1000px; -->
                           
                        </div>
                        <div class="body">
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="m-t-0"><b>User Information</b></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-box m-t-20 text-left m-l-10">
                                        <div class="p-20">
                                            <div class="about-info-p">
                                                <strong>Name</strong>
                                                <br>
                                                <p class="text-muted" >{{$user['name']}}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">{{$user['email']}}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Phone Number</strong>
                                                <br>
                                                <p class="text-muted">{{$user['number']}}</p>
                                            </div>
                                           
                                            <div class="about-info-p">
                                                <strong>Date of Birth</strong>
                                                <br>
                                                <p class="text-muted">{{$user->dob}}</p>
                                            </div>
                                            
                                            <div class="about-info-p">
                                                <strong>Image</strong>
                                                <br>
                                                <img src="{{ asset('/resources/images/' . $user->img) }}" height="100px" width="100px"/>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                     
                        </div>
                        <div class="body">
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="m-t-0"><b>Order Information</b></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-box m-t-20 text-left m-l-10">
                                        <div class="p-20">
                            <div class="about-info-p">
                                <strong>Product Name</strong>
                                <br>
                                @foreach($product as $pro)
                                <p  class="text-muted ">{{$pro['p_name']}}</p>
                                @endforeach
                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection