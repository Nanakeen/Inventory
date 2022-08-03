@extends('admin.admin_master')

@section('admin')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Item</h5>
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
                <h5>Details of Item</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6 text-left"><br/>
                        <p>Perform these Actions on Item.</p>
                    </div>
                    <div class="col-sm-6 text-right"><br/>
                        <div class="btn-group mb-2 mr-2" style="display: inline-block;">
                            <a href="" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add  </i></a>

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
                                               
                                                <th>Item No</th> 
                                                <th>Date </th>
                                                <th>Service</th>
                                                <th>Category</th> 
                                                <th>Qty</th> 
                                                <th>Product Name</th> 
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allData as $key => $item)
                                            <tr>
                                                <td> {{ $key+1}} </td>
                                                <td> {{ $item->purchase_no }} </td> 
                                                <td> {{ date('d-m-Y',strtotime($item->date))  }} </td> 
                                                 <td> {{ $item['supplier']['name'] }} </td> 
                                                 <td> {{ $item['category']['name'] }} </td> 
                                                 <td> {{ $item->buying_qty }} </td> 
                                                 <td> {{ $item['product']['name'] }} </td> 
                                
                                                 <td> 
                                                    @if($item->status == '0')
                                                    <span class="btn btn-warning">Pending</span>
                                                    @elseif($item->status == '1')
                                                    <span class="btn btn-success">Approved</span>
                                                    @endif
                                                     </td> 
                                
                                                <td> 
                                @if($item->status == '0')
                                <a href="{{ route('purapprove',$item->id) }} " class="btn btn-danger sm" title="Approved" id="ApproveBtn">  <i class="fas fa-check-circle"></i> </a>
                                @endif
                                                </td>
                                               
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

