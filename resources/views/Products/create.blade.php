@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- [ breadcrumb ] start -->
 <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10"> Adding Items</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Item</a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Item.</h5>
            </div>
            <div class="card-body">
                
                <form action="{{route('storepro')}}" method="POST" id="myForm" >
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Item </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Item Name">
                                       
                                    </div>
                                </div>
                               
                        </div>
                        
                         <div class="col-md-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Category </label>
                            <div class="col-sm-9">
                                <select name="category_id" class="form-control">
                                    <option selected="">Open this select menu</option>
                                    @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                   @endforeach
                                    </select>
                            </div>
                        </div>
                </div>
                
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                           <div class="col-sm-10">
                               <button type="submit" class="btn  btn-success" >Add Item</button>
                           </div>
                        </div>
                       </div>
                </form>
            </div>
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
                supplier_id: {
                    required : true,
                },
                 category_id: {
                    required : true,
                },
                
            },
            messages :{
                name: {
                    required : 'Please Enter Your Unit',
                },
                supplier_id: {
                    required : 'Please Select One Supplier',
                },
                category_id: {
                    required : 'Please Select One Category',
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


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection
<script src="{{asset('assets/js/pages/todo.js')}}"></script>
