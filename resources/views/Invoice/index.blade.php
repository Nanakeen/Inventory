@extends('admin.admin_master')

@section('admin')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">All Details of Item</h5>
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


 <!-- [ Main Content ] start -->
 <div class="row justify-content-center">
    <!-- liveline-section start -->
    <div class="col-sm-12">

        <div class="card user-profile-list">
            <div class="card-header">
                <h5>Details of Issuing of Item</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6 text-left"><br/>
                        <p>Perform these Actions on Issuing of Item.</p>
                    </div>
                    <div class="col-sm-6 text-right"><br/>
                        <div class="btn-group mb-2 mr-2" style="display: inline-block;">
                            <a href="{{route('invoadd')}}" class="btn btn-primary btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Invoice </i></a>

                        </div>
                       
                </div>
                   
                    <div class="dt-responsive table-responsive">
                                <div class="dt-responsive table-responsive">
                                    <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="select_all" value="1" id="contactstable-select-all">
                                                        <label class="custom-control-label" for="contactstable-select-all"> </label>
                                                    </div>
                                                </th>

                                                <th>Personnel Name</th> 
                                                <th>Item No </th>
                                              
                                                <th>Date Issued </th>
                                                <th>Description</th>  
                                                <th>Date Return</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allData as  $key=> $item)
                                            @php
                                            $full_name = $item->surname. " " .$item->othernames;
                                             @endphp
                                            @endforeach

                                            @foreach($allData as $key => $item)
                                            <tr>
                                                <td> {{ $key+1}} </td>
                                                <td>{{$item['customer']['full_name']}}</td> 
                                                <td>#{{ $item->invoice_no }} </td> 
                                                <td> {{ date('d-m-Y',strtotime($item->date))}} </td> 
                                                 <td>  {{ $item->remarks }} </td> 
                                                <td> {{{ date('d-m-Y',strtotime($item->return_date))}}}</td>
                                               
                                            </tr>
                                                        @endforeach
                        	
                                       </tbody>
                                    </table>
                          </div>
                    </div>
            </div>
            </div>
        </div>
    </div>


    <!-- liveline-section end -->
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

