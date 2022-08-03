@extends('admin.admin_master')
@section('admin')

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Main</a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

        <div class="row">
            <!-- page statustic card start -->
            <a href="{{route('viewindex')}}">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">{{$total_category}}</h4>
                                <h6 class="text-muted m-b-0">Categories</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-credit-card f-28"></i>
                                
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('viewindex')}}">
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0" >Manage Categories</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <a href="{{route('viewpro')}}">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">{{$total_product}}</h4>
                                <h6 class="text-muted m-b-0">Total Items</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-file-text f-28"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('viewpro')}}">
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Items Instocks</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">145</h4>
                                <h6 class="text-muted m-b-0">Total Item Onloan</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-calendar f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Item Onloans</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">50</h4>
                                <h6 class="text-muted m-b-0">Returned</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-chevrons-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Manage History</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">50</h4>
                                <h6 class="text-muted m-b-0">Returned</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-thumbs-down f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Manage History</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{route('users.index')}}">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">{{$total_users}}</h4>
                                <h6 class="text-muted m-b-0">Total Users</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-users f-28"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('users.index')}}">
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Manage Users</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('roles.index')}}">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">{{ $total_roles }}</h4>
                                <h6 class="text-muted m-b-0">Roles</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-user f-28"></i>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <a href="{{route('roles.index')}}">
                        <div class="row align-items-center">
                           
                            <div class="col-9">
                                <p class="text-white m-b-0">Manage Roles</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                   
                    </div>
                </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-c-blue">{{$total_permissions}}</h4>
                                <h6 class="text-muted m-b-0">Permissions</h6>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-user f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Manage Permission</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->
            <!-- Complex-header table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Issued Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="complex-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th rowspan="2">SRL</th>
                                        <th rowspan="2">Personnel</th>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th> 
                                        <th>Service No</th> 
                                        <th>Item </th>
                                        <th>Issued Qnty</th>
                                        <th>Date Issued </th>
                                        <th>Description</th>  
                                        <th>Date Return</th>
                                    </tr>
                                </thead>
                                @foreach ($allDat as  $key=> $item)
                                @php
                                $full_name = $item->surname. " " .$item->othernames;
                                 @endphp
                                @endforeach
                                @foreach($allDat as $key => $item)
                                <tr>
                                    <td> {{ $key+1}} </td>
                                    <td>{{$item['customer']['full_name']}}</td> 
                                    <td>{{$item['customer']['email']}}</td> 
                                    <td>{{$item['customer']['svcnumber']}}</td> 
                                    <td>{{$item['product']['name'] }} </td> 
                                    <td>{{$item->issuing_qty}}</td>
                                    <td> {{ date('d-m-Y',strtotime($item->date))}} </td> 
                                     <td>  {{ $item->remarks }} </td> 
                                    <td> {{{ date('d-m-Y',strtotime($item->return_date))}}}</td>
                                </tr>
                                            @endforeach
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Complex-header table end -->
        <!-- [ Main Content ] end -->
            
        </div>
        <!-- [ Main Content ] end -->

   @endsection
