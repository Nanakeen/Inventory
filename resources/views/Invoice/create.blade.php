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
                <h5>Issue Item Form.</h5>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Item No:</label>
                                <div class="col-sm-9">
                                    <input class="form-control example-date-input" name="invoice_no" type="text" value="{{ $invoice_no }}"  id="invoice_no" readonly style="background-color:#ddd" >
                                </div>
                            </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Quantity in Stock:</label>
                            <div class="col-sm-9">
                                <input class="form-control example-date-input" name="quantity" type="text"  id="quantity" readonly style="background-color:#ddd" >
                               
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
                            <label for="date" class="col-sm-3 col-form-label">Issuing Date:</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="date" type="date"  id="date">
                            </div>
                        </div>   
                </div>
                     <div class="col-md-6">
                        <div class="form-group row">
                            <label for="return_date" class="col-sm-3 col-form-label">Returning Date:</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="return_date" type="date"  id="return_date">
                            </div>
                        </div>  
                </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                           <div class="col-sm-10">
                            <label for="example-text-input" class="form-label" style="margin-top:43px;" >  </label>
                            <i class="btn btn-success btn-rounded waves-effect waves-light fas fa-plus-circle addeventmore"> Add More Item</i>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                 <div class="card-bord">
                    <div class="card-body">
                        <form method="post" action="{{route('invostore')}}">
                            @csrf
                            <table class="table-sm table-bordered" width="100%" style="border-color: #ddd;">
                                <thead>
                                    <tr>
                                        <th >Category</th>
                                        <th >Item Name </th>
                                        <th width="25">Quantity Issuing</th>
                                        <th  width="10">Action</th> 
                                    </tr>
                                </thead>
                                <tbody id="addRow" class="addRow">   
                                </tbody> 
                            </table><br>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <div class="form-group col-md-9">
                                        <label> Item Description  </label>
                                            <select name="remarks" id="remarks" class="form-select">
                                                <option value="">Select Personnel </option>
                                                <option value="Returnable">Returnable</option>
                                                 <option value="Non-Returnable">Non-Returnable</option>
                                            </select>
                                    </div> 
                                </div>
                            <div class="form-group col-md-9">
                                <label> Personnel Name  </label>
                                    <select name="personnel_id" id="personnel_id" class="form-select">
                                        <option value="">Select Personnel </option>
                                        @foreach($costomer as $cust)
                                        <option value="{{ $cust->id }}">{{ $cust->full_name }} - {{ $cust->mobile_no }}</option>
                                        @endforeach
                                        
                                    </select>
                            </div> 
                            </div> <!-- // end row --> <br>
                
                <!-- Hide Add Customer Form -->
                <div class="row new_customer" style="display:none">
                    <div class="form-group col-md-4">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Write Personnel Name">
                    </div>
                
                    <div class="form-group col-md-4">
                        <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Write Personnel Mobile No">
                    </div>
                
                    <div class="form-group col-md-4">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Write Personnel Email">
                    </div>
                </div>
                <!-- End Hide Add Customer Form -->
                
                 <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" id="storeButton"> Item Store</button>  
                            </div>
                        </form>
                        </div> <!-- End card-body -->

                 </div>
            </div>
        </div>
    </div>
</div>
<script id="document-template" type="text/x-handlebars-template">
     
    <tr class="delete_add_more_item" id="delete_add_more_item">
            <input type="hidden" name="date" value="@{{date}}">
            <input type="hidden" name="invoice_no" value="@{{invoice_no}}">
            <input type="hidden" name="return_date" value="@{{return_date}}">
        <td>
            <input type="hidden" name="category_id[]" value="@{{category_id}}">
            @{{ category_name }}
        </td>
         <td>
            <input type="hidden" name="product_id[]" value="@{{product_id}}">
            @{{ product_name }}
        </td>
         <td>
            <input type="number" min="1" class="form-control selling_qty text-right" name="issuing_qty[]" value=""> 
        </td>
         <td>
            <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
        </td>
        </tr>
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("click",".addeventmore", function(){
                var date = $('#date').val();
                var invoice_no = $('#invoice_no').val(); 
                var category_id  = $('#category_id').val();
                var category_name = $('#category_id').find('option:selected').text();
                var product_id = $('#product_id').val();
                var product_name = $('#product_id').find('option:selected').text();
                if(date == ''){
                    $.notify("Date is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
                      if(category_id == ''){
                    $.notify("Category is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
                      if(product_id == ''){
                    $.notify("Item Field is Required" ,  {globalPosition: 'top right', className:'error' });
                    return false;
                     }
                     var source = $("#document-template").html();
                     var tamplate = Handlebars.compile(source);
                     var data = {
                        date:date,
                        date:return_date,
                        invoice_no:invoice_no, 
                        category_id:category_id,
                        category_name:category_name,
                        product_id:product_id,
                        product_name:product_name
                     };
                     var html = tamplate(data);
                     $("#addRow").append(html); 
            });
    
            $(document).on("click",".removeeventmore",function(event){
                $(this).closest(".delete_add_more_item").remove();
                totalAmountPrice();
            }); 
            
            $(document).on('keyup click','.unit_price,.selling_qty', function(){
                var unit_price = $(this).closest("tr").find("input.unit_price").val();
                var qty = $(this).closest("tr").find("input.selling_qty").val();
                var total = unit_price * qty;
                $(this).closest("tr").find("input.selling_price").val(total);
                $('#discount_amount').trigger('keyup');
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
     
     <script type="text/javascript">
        $(function(){
            $(document).on('change','#product_id',function(){
                var product_id = $(this).val();
                $.ajax({
                    url:"{{ route('check-product-stock') }}",
                    type: "GET",
                    data:{product_id:product_id},
                    success:function(data){                   
                        $('#quantity').val(data);
                    }
                });
            });
        });
    
    </script>
    

@endsection

