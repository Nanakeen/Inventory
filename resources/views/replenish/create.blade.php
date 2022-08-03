@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- [ breadcrumb ] start -->
 <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Item </h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Items</a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Item Quantity.</h5>
            </div>
            <div class="card-body">
                <form action="{{route('replenish.store')}}" method="POST" id="myForm" >
                    @csrf
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="replenish_date" type="date"  id="date"> 
                                </div>
                            </div>
                           
                    </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Category Name:</label>
                                <div class="col-sm-9">
                                    <select name="category_id" id="category_id" class="form-control select2" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                          @foreach($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                       @endforeach
                                        </select>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">Item Name:</label>
                              <div class="col-sm-9">
                             <select name="product_id" id="product_id" class="form-control form-select select2" aria-label="Default select example">
                                 <option selected="">Open this select menu</option>
             
                                 </select>
                             </div>
                              </div>    
                      </div>
                     
                      <div class="col-md-6">
                         <div class="form-group row">
                             <label for="name" class="col-sm-3 col-form-label">Item Quantity</label>
                             <div class="col-sm-9">
                                 <input class="form-control" name="quantity" type="text"  placeholder="Enter Item Quantity"> 
                             </div>
                         </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Item Description</label>
                                <div class="col-sm-9">
                                    <select name="remarks" id="remarks" class="form-control">
                                        <option value="">Select Description</option>
                                        <option value="Returnable">Returnable</option>
                                         <option value="Non-Returnable">Non-Returnable</option>
                                    </select> 
                                </div>
                            </div>   
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                           <div class="col-sm-10">
                               <button type="submit" class="btn  btn-success addeventmore" >Add </button>
                           </div>
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
                replenish_date: {
                    required : true,
                }, 
                quantity: {
                    required : true,
                },
                remarks: {
                    required : true,
                },      
            },
            messages :{
                replenish_date: {
                    required : 'Please choose date',
                },
                quantity: {
                    required : 'Please Enter Your Item Quantity',
                },
                remarks: {
                    required : 'Please select Description',
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
            $(document).on("click",".addeventmore", function(){
                var replenish_date = $('#replenish_date').val();
                var category_id  = $('#category_id').val();
                var category_name = $('#category_id').find('option:selected').text();
                var product_id = $('#product_id').val();
                var product_name = $('#product_id').find('option:selected').text();
                var quantity = $('#quantity').find('option:selected').text();
                var remarks = $('#remarks').find('option:selected').text();
                if(product_id == ''){
                    $.notify("Product Field is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
    
                if( replenish_date== ''){
                    $.notify("Date is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
                      
    
                      if(category_id == ''){
                    $.notify("Category is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
                      
                     var source = $("#document-template").html();
                     var tamplate = Handlebars.compile(source);
                     var data = {
                        replenish_date:replenish_date,
                        category_id:category_id,
                        category_name:category_name,
                        product_id:product_id,
                        product_name:product_name,
                        quantity:quantity,
                        remarks:remarks
                     };
                     var html = tamplate(data);
                     $("#addRow").append(html); 
            });
    
            $(document).on("click",".removeeventmore",function(event){
                $(this).closest(".delete_add_more_item").remove();
                totalAmountPrice();
            });
    
            
    
            
    
        });
    
    
    </script>
    
<script type="text/javascript">
    $(function(){
        $(document).on('change','#supplier_id',function(){
            var supplier_id = $(this).val();
            $.ajax({
                url:"{{ route('get-category') }}",
                type: "GET",
                data:{supplier_id:supplier_id},
                success:function(data){
                    var html = '<option value="">Select Category</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.category_id+' "> '+v.category.name+'</option>';
                    });
                    $('#category_id').html(html);
                }
            })
        });
    });
</script>
<script type="text/javascript">
    $(function(){
        $(document).on('change','#category_id',function(){
            var category_id = $(this).val();
            $.ajax({
                url:"{{ route('get-product') }}",
                type: "GET",
                data:{category_id:category_id},
                success:function(data){
                    var html = '<option value="">Select Category</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.id+' "> '+v.name+'</option>';
                    });
                    $('#product_id').html(html);
                }
            })
        });
    });

</script>

    
    

@endsection

