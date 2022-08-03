@extends('admin.admin_master')

@section('admin')
 
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Records</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#!">View Users</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->


 <!-- [ Main Content ] start -->
 <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title float-left">Users List</h4>
                <p class="float-right mb-2">
                    @if (Auth::guard('web')->user()->can('role.create'))
                    <a class="btn btn-primary text-white" href="{{ route('users.create') }}">Create New User</a>
                    @endif
                </p>
                <div class="clearfix"></div>
                <div class="data-tables">
                    @include('users.part.message')
                    <table id="dataTable" class="text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th width="5%">Sl</th>
                                <th width="10%">Name</th>
                                <th width="10%">Email</th>
                                <th width="40%">Roles</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($users as $user)
                           <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-info mr-1">
                                            {{ $role->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    @if (Auth::guard('web')->user()->can('role.edit'))
                                    <a class="btn btn-success text-white" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                 @endif
                              @if (Auth::guard('web')->user()->can('role.delete'))
                                    <a class="btn btn-danger text-white" href="{{ route('users.destroy', $user->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                        Delete
                                    </a>

                                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
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
</div>

<!-- [ Main Content ] end -->
<!-- [ Main Content ] end -->



</div>
</div>



<!-- [ Main Content ] end -->
 <!-- Start datatable js -->
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
 
 <script>
     /*================================
    datatable active
    ==================================*/
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true
        });
    }

 </script>
@endsection



