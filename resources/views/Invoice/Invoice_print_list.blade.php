@extends('admin.admin_master')
@section('admin')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Print Invoice List</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Printing List</a></li>
                    <li class="breadcrumb-item"><a href="#!">Dasboard</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->
 <!-- [ Main Content ] start -->

<!-- [ Main Content ] end -->
<!-- [ Main Content ] end -->

<div class="row">
    <!-- subscribe start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Printing All Invoice </h5>
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
                            <table id="report-table" class="table table-bordered table-striped mb-0 dataTable no-footer" role="grid" aria-describedby="report-table_info">
                        <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image: activate to sort column descending" style="width: 102px;">
                                SL</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image: activate to sort column descending" style="width: 102px;">
                                PERSONNEL</th>
                                <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 158.75px;">
                                 INVOICE NO.</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 240.859px;">
                                 DATE</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Subject: activate to sort column ascending" style="width: 135.078px;">
                                 DESCRIPTION</th><th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Options: activate to sort column ascending" style="width: 176.312px;">
                                AMOUNT</th>
                                <th class="sorting" tabindex="0" aria-controls="report-table" rowspan="1" colspan="1" aria-label="Options: activate to sort column ascending" style="width: 176.312px;">
                                ACTION</th></tr>
                        </thead>
                        <tbody>
                        <tr role="row" class="odd">
                            @foreach($allData as $key => $item)
                            <tr>
                                <td> {{ $key+1}} </td>
                                <td>  </td> 
                                <td> #{{ $item->invoice_no }} </td> 
                                <td> {{ date('d-m-Y',strtotime($item->date))  }} </td> 
                                 
                                  
                                 <td>  {{ $item->description }} </td> 
                
                                <td>  ₵  </td>
                
                                <td>
                     <a href="{{route('printinvo',$item->id)}}" class="btn btn-danger sm" title="Print Invoice" >  <i class="fa fa-print"></i> </a>
                                </td>
                            </tr>

                                        @endforeach
                                
                            </tr>
                        </tbody>
                    </table></div></div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
</div>
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


