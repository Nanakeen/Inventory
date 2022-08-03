@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Daily Invoice Report</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">DailyReport</a></li>
                    <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
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
                            <h3 class="font-size-16"><strong>Daily Invoice Report 
                                <span class="btn btn-info"> {{ date('d-m-Y',strtotime($start_date)) }} </span> -
                                 <span class="btn btn-success"> {{ date('d-m-Y',strtotime($end_date)) }} </span>
                                                </strong></h3>
                        </div>
                        <div class="col-md-4 col-sm-6">
                           
                           
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table invoice-detail-table">
                                    <thead>
                                        <tr>
                                            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>Customer Name </strong></td>
            <td class="text-center"><strong>Invoice No  </strong>
            </td>
            <td class="text-center"><strong>Date</strong>
            </td>
            <td class="text-center"><strong>Description</strong>
            </td>
            <td class="text-center"><strong>Amount  </strong>
            </td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total_sum = '0';
                                        @endphp
                                        @foreach($allData as $key => $item)
                                        <tr>
                                           <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center"></td>
                                            <td class="text-center">#{{ $item->invoice_no }}</td>
                                            <td class="text-center">{{ date('d-m-Y',strtotime($item->date)) }}</td>
                                            <td class="text-center">{{ $item->description }}</td>
                                            <td class="text-center"> </td>
                                            
                                            
                                        </tr>
                                         @php
                                        
                                        @endphp
                                        @endforeach 
                                            <tr>
                                                
                                                <td class="no-line text-center">
                                                    <strong>Grand Amount</strong></td>
                                                <td class="no-line text-end"><h4 class="m-0">${{ $total_sum}}</h4></td>
                                            </tr>
                                                 
                                    </tbody>
                                </table>
                            </div>
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


