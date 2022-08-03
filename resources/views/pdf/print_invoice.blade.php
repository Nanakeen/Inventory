@extends('admin.admin_master')

@section('admin')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Pending Invoice</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Pending</a></li>
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
  <div class="row">
            <!-- [ Invoice ] start -->
            <div class="container" id="printTable">
                <div>
                    <div class="card">
                        <div class="row invoice-contact">
                            <div class="col-md-8">
                                <div class="invoice-box row">
                                    <div class="col-sm-12">
                                        <table class="table table-responsive invoice-table table-borderless p-l-20">
                                            <tbody>
                                                <tr>
                                                    <td><a href="index.html" class="b-brand">
                                                            <img class="img-fluid" src="{{asset('assets/images/index.jpg')}}" alt="GHANA ARMED FORCES">
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>GHANA ARMED FORCES </td>
                                                </tr>
                                                <tr>
                                                    <td>HEAD OFFICE, LA DADETOPON MUNICIPAL DISTRICT,GREATER ACCRA.</td>
                                                </tr>
                                                <tr>
                                                    <td><a class="text-secondary" href="" target="_top">GAFGHQDIT@GMAIL.COM</a></td>
                                                </tr>
                                                <tr>
                                                    <td>+233 24500  2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="card-body">
                            <div class="row invoive-info">
                                <div class="col-md-4 col-xs-12 invoice-client-info">
                                    <h6>Person Information :</h6>
                                    <h6 class="m-0">Name:{{ $payment['customer']['full_name'] }}</h6>
                                    <p class="m-0 m-t-10">Unit:{{ $payment['customer']['arm'] }}</p>
                                    <p class="m-0">{{ $payment['customer']['mobile_no'] }}</p>
                                    <p><a class="text-secondary" href="mailto:gaf@gmail.com" target="_top">{{ $payment['customer']['email']  }}</a></p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                   
                                   
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <h6 class="m-b-20"><strong>Invoice No # {{ $invoice->invoice_no }}</strong></h6>
                                    <h6 class="text-uppercase text-primary">Total Due :{{ $payment->total_amount }}
                                       
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table invoice-detail-table">
                                            <thead>
                                                <tr>
                                                    <td><strong>Sl </strong></td>
                                                    <td class="text-center"><strong>Category</strong></td>
                                                    <td class="text-center"><strong>Product Name</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Current Stock</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Quantity</strong>
                                                    </td>
                                                    <td class="text-center"><strong>Unit Price </strong>
                                                    </td>
                                                    <td class="text-center"><strong>Total Price</strong>
                                                    </td>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $total_sum = '0';
                                                @endphp
                                                @foreach($invoice['invoice_details'] as $key => $details)
                                                <tr>
                                                   <td class="text-center">{{ $key+1 }}</td>
                                                    <td class="text-center">{{ $details['category']['name'] }}</td>
                                                    <td class="text-center">{{ $details['product']['name'] }}</td>
                                                    <td class="text-center">{{ $details['product']['quantity'] }}</td>
                                                    <td class="text-center">{{ $details->selling_qty }}</td>
                                                    <td class="text-center">{{ $details->unit_price }}</td>
                                                    <td class="text-center">{{ $details->selling_price }}</td>
                                                    
                                                </tr>
                                                 @php
                                                $total_sum += $details->selling_price;
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-responsive invoice-table invoice-total">
                                        <tbody>
                                            <tr>
                                                <th>Sub Total :${{ $total_sum }}</th>
                                            </tr>
                                            <tr>
                                                <th>Discount Amount(10%) :${{ $payment->discount_amount }}</th>
                                            </tr>
                                            <tr>
                                                <th>Paid Amount (5%) :{{ $payment->paid_amount }}</th>
                                                
                                            </tr>
                                            <tr>
                                                <th>Due Amount (5%) :${{ $payment->due_amount }}</th>
                                                
                                            </tr>
                                            <tr class="text-info">
                                                <td>
                                                    <hr />
                                                    <h5 class="text-primary m-r-10">Grand Amount :${{ $payment->total_amount }}</h5>
                                                </td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
               
            </div>
            <!-- [ Invoice ] end -->
            <div class="col-sm-12 invoice-btn-group text-center">
                <button type="button" class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10">Print</button>
            </div>
        </div>
<!-- [ Main Content ] end -->
<!-- Modal -->

</div>
</div>
<!-- [ Main Content ] end -->
<script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
 

<script>
    function printData() {
        var divToPrint = document.getElementById("printTable");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
    $('.btn-print-invoice').on('click', function() {
        printData();
    })
</script>
@endsection


