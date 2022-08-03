@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Service</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Add Service</a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->


<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title"> Service </h4><br><br>
            <form method="post" action="{{route('supstore')}}" id="myForm" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Name </label>
                <div class="form-group col-sm-10">
                    <input name="name" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Mobile </label>
                <div class="form-group col-sm-10">
                    <input name="mobile_no" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Email </label>
                <div class="form-group col-sm-10">
                    <input name="email" class="form-control" type="email"  >
                </div>
            </div>
            <!-- end row -->
  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Service Address </label>
                <div class="form-group col-sm-10">
                    <input name="address" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-success waves-effect waves-light" value="Add Service">
            </form>
        </div>
    </div>
</div> <!-- end col -->
</div>
 
</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 mobile_no: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                 address: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                mobile_no: {
                    required : 'Please Enter Your Mobile Number',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                address: {
                    required : 'Please Enter Your Address',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
@endsection