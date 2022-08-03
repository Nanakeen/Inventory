@extends('admin.admin_master')

@section('admin')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Approve Invoice</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Invoice</a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

@php
$payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
@endphp 

 <!-- [ Main Content ] start -->
 <div class="row">
    <!-- subscribe start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Invoice No: #{{ $invoice->invoice_no }} - {{ date('d-m-Y',strtotime($invoice->date)) }} </h4>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                   
                </div>
                <div class="table-responsive">
                    <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="report-table_length">
                        <label>Show <select name="report-table_length" aria-controls="report-table" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                        </select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="report-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="report-table"></label></div></div></div><div class="row"><div class="col-sm-12">
                           
                                <table class="table table-dark" width="100%">
                                    <tbody>
                                        <tr>
                                            <td><p>  Info </p></td>
                                            <td><p> Name: <strong> {{ $payment['customer']['full_name']  }} </strong> </p></td>
                                            <td><p> Mobile: <strong> {{ $payment['customer']['mobile_no']  }} </strong> </p></td>
                                           <td><p> Email: <strong> {{ $payment['customer']['email']  }} </strong> </p></td>  
                                           <td colspan="3"><p> Description : <strong> {{ $invoice->description  }} </strong> </p></td>              
                                        </tr>
                            
                                        
                                    </tbody>
                                     
                                 </table>
                                 <form method="post" action="{{route('approstore',$invoice->id)}}">
                                    @csrf         
                                       <table border="1" class="table table-dark" width="100%">
                                          <thead>
                                              <tr>
                                                  <th class="text-center">Sl</th>
                                                  <th class="text-center">Category</th>
                                                  <th class="text-center">Product Name</th>
                                                  <th class="text-center" style="background-color: #8B008B">Current Stock</th>
                                                  <th class="text-center">Quantity</th>
                                                  <th class="text-center">Total Item</th>
                                              </tr>
                                              
                                          </thead>
                                  <tbody>
                                      @php
                                      $total_sum = '0';
                                      @endphp
                                      @foreach($invoice['invoice_details'] as $key => $details)
                                      <tr>
                                          <input type="hidden" name="category_id[]" value="{{ $details->category_id }}">
                                          <input type="hidden" name="product_id[]" value="{{ $details->product_id }}">
                                          <input type="hidden" name="selling_qty[{{$details->id}}]" value="{{ $details->selling_qty }}">
                                          <td class="text-center">{{ $key+1 }}</td>
                                          <td class="text-center">{{ $details['category']['name'] }}</td>
                                          <td class="text-center">{{ $details['product']['name'] }}</td>
                                          <td class="text-center" style="background-color: #3908ac">{{ $details['product']['quantity'] }}</td>
                                          <td class="text-center">{{ $details->selling_qty }}</td>
                                          <td class="text-center">{{ $details->selling_price }}</td>
                                      </tr>
                                      @php
                                      $total_sum += $details->selling_price;
                                      @endphp
                                      @endforeach
                                      <tr>
                                          <td colspan="6">  Total Item </td>
                                           <td > {{ $total_sum }} </td>
                                      </tr>
                                  </tbody>
                                           
                                       </table>
                               
                                       <button type="submit" class="btn btn-info">Invoice Approve </button>
                              
                                   </form>     
                        <tbody>
                       
                    </div></div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
</div>
<!-- [ Main Content ] end -->
<!-- [ Main Content ] end -->


<!-- Modal -->

</div>
</div>



<!-- [ Main Content ] end -->

@endsection

<script>
    function printData() {
        // var divToPrint = document.getElementById("printTable");
        // newWin = window.open("");
        // newWin.document.write("<link rel=\"stylesheet\" href=\"#"/>" );
        // newWin.document.write(divToPrint.outerHTML);
        // newWin.print();
        // newWin.close();
        // return true;
    }
    $('.btn-print-invoice').on('click', function() {
        printData();
    })

    function linkcolored(selected){
        selected.style = 'color: black;';
    }
    function linkuncolored(selected){
        selected.style = '';
    }
</script>

