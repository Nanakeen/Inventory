@extends('admin.admin_master')
@section('admin')
<!-- [ breadcrumb ] end -->
   
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
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{route('addpro')}}" class="btn btn-primary btn-sm btn-round has-ripple"  data-target="#modal-report"><i class="feather icon-plus"></i>Add Item</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>SRL</th>
                                        <th>Item</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $key=> $item)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td class="align-middle">
                                           {{$item->name}}
                                        </td>
                                       
                                        <td class="align-middle">
                                            {{$item['category']['name']}}
                                        </td>
                                     
                                       
                                        <td class="table-action">
                                            <a href="{{route('editpro',$item->id)}}"class="btn btn-primary btn-sm"><i class="feather icon-edit"> </i></a>
                                            <a href="{{route('deletepro',$item->id)}}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="feather icon-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/ripple.js')}}"></script>
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
	<script src="{{asset('assets/js/menu-setting.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
<!-- Apex Chart -->
<script src="{{asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<script>
    // DataTable start
    $('#report-table').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
    // DataTable end
</script>
<!-- [ Main Content ] end -->



<!-- [ Main Content ] end -->

@endsection

