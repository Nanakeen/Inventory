@extends('admin.admin_master')
@section('admin')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Summary Report</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">report</a></li>
                    <li class="breadcrumb-item"><a href="{{url('dashbaord')}}">Dashboard</a></li>
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
        <div class="card">
        <div class="card-body">
        <form method="get" action="#">
        <div class="row">
        <div class="col-md-6 col-lg-3">
        <div class="form-group fill">
        <label class="label" for="sender">Sender Identifier</label>
        <select id="sender" class="form-control js-example-basic-multiple" style="width: 100%;" name="sender">
        <option value="">Select Identifier</option>
        <option value="Naprosoft">Naprosoft</option>
        <option value="Apply GAF">Apply GAF</option>
        <option value="Taifa Choir">Taifa Choir</option>
        <option value="CYBER LAB">CYBER LAB</option>
        </select>
        </div>
        </div>
        <div class="col-md-6 col-lg-2">
        <div class="form-group fill">
        <label class="label" for="batchno">Batch Number</label>
        <input type="text" class="form-control" id="batchno" name="batchno" value="">
        </div>
        </div>
        <div class="col-md-6 col-lg-3">
        <div class="form-group fill">
        <label class="label" for="recipient">Recipient</label>
        <input type="text" class="form-control" id="recipient" name="recipient" value="233247859005">
        </div>
        </div>
        <div class="col-md-6 col-lg-2">
        <div class="form-group fill">
        <label class="label" for="datefrom">Scheduled From</label>
        <input type="text" class="form-control" id="datefrom" name="datefrom" value="">
        </div>
        </div>
        <div class="col-md-6 col-lg-2">
        <div class="form-group fill">
        <label class="label" for="dateto">Scheduled To</label>
        <input type="text" class="form-control" id="dateto" name="dateto" value="2022-05-21">
        </div>
        </div>
        <div class="col-md-6 col-lg-3">
        <div class="form-group fill">
        <label class="label" for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" value="">
        </div>
        </div>
        <div class="col-md-6 col-lg-3">
        <div class="form-group">
        <label class="label" for="service">Service</label>
        <select class="form-control" name="service" id="service" required>
        <option value="ALL">All Services</option>
        <option value="1" >SMS Messaging</option>
        <option value="2" >Email Messaging</option>
        <option value="3" >Voice Messaging</option>
        <option value="4" >USSD Service</option>
        </select>
        </div>
        </div>
        <div class="col-md-6 col-lg-4">
        <div class="form-group">
        <label class="label" for="status">Message Status</label>
        <select id="status" class="form-control js-example-basic-multiple" style="width: 100%;" name="status[]" multiple>
        <option value="WAITING" >WAITING</option>
        <option value="FAILED" >FAILED</option>
        <option value="REJECTD" >REJECTED</option>
        <option value="UNDELIV" >UNDELIVERED</option>
        <option value="APPROVED" >APPROVED</option>
        <option value="ACCEPTD" >ACCEPTED</option>
        <option value="DELIVRD" >DELIVERD</option>
        <option value="BUSY" >BUSY</option>
        </select>
        </div>
        </div>
        <div class="col-md-6 col-lg-2">
        <label class="label" for="datefrom">&nbsp;&nbsp;</label>
        <button class="btn btn-info has-ripple btn-block" type="submit">&nbsp;Filter <span class="ripple ripple-animate"></span></button>
        </div>
        </div>
        </form>
        </div>
        </div>
<!-- [ Main Content ] end -->


<form id="retry-senttable" method="POST" action="https://frog.wigal.com.gh/bulk-messaging/messages/sent/retry"> <input type="hidden" name="_token" value="gSb71vahiyC9gytdGeLcrqOloyWd59atjxETrqTw">
    <div class="card">
    <div class="card-header">
    <h5>Sent</h5>
    <a href="#" class="btn btn-primary btn-sm float-right"><i class="feather icon-download-cloud"></i>&nbsp;Export Data </a> </div>
    <div class="card-body">
    <div class="col-sm-6" id="checkbox_actions" style="display:none;">
    <div class="btn-group mb-2 mr-2">
    <button class="btn btn-primary btn-sm"></i>Retry Failed Messages</button>
    </div>
    </div>
    <div class="dt-responsive table-responsive">
    <table id="senttable" class="table table-striped table-bordered nowrap dataTable nowrap">
    <thead>
    <tr>
    <th><input type="checkbox" name="select_all" value="1" id="senttable-select-all"></th>
    <th>Sender ID</th>
    <th>Batch</th>
    <th>Reciepient</th>
    <th>Service</th>
    <th>Status</th>
    <th>Message</th>
    <th>Reason</th>
    <th>Date Scheduled</th>
    <th>Status Date</th>
    <th>Message Count</th>
    <th>Character Count</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tr>
    <td><input type="checkbox" name="id[]" onclick="showActions(this)" value="34088898"></td>
    <td>Apply GAF</td>
    <td>248318369</td>
    <td>233247859005</td>
    <td>SMS Messaging</td>
    <td>DELIVRD</td>
    <td><a href="#" onclick="showMessage(34088898)">Click To View Message</a></td>
    <td>Message Successfully Delivered</td>
    <td>21st May, 2022 8:48 am</td>
    <td>21st May, 2022 8:50 am</td>
    <td>2</td>
    <td>290</td>
    <td></td>
    </tr>
    <tfoot>
    <tr>
    <th><input type="checkbox" name="select_all" value="1" id="senttable-select-all-lower"></th>
    <th>Sender ID</th>
    <th>Batch</th>
    <th>Reciepient</th>
    <th>Service</th>
    <th>Status</th>
    <th>Message</th>
    <th>Reason</th>
    <th>Date Scheduled</th>
    <th>Status Date</th>
    <th>Message Count</th>
    <th>Character Count</th>
    <th>Actions</th>
    </tr>
    </tfoot>
    </table>
    </div>
    </div>
    </div>
    </form>
    </div>
    
    <!-- liveline-section end -->
    </div>
    

        </div>
        </div>
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

