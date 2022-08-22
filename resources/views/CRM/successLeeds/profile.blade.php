@extends('CRM.layouts_successLeeds.leedsProfile')
@section('leedContent')
<div class="col-md-9">
  <div class="card card-body pt-0">
    <div class="text-bold text-center py-1">PROFILE</div>
    <div class="">
    <table id="datatable" class="table table-bordered dt-responsive nowrap pt-0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Leed Name</th>
                            <td>{{$leed->clientName}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$leed->email}}</td>
                        </tr>
                        <tr>
                            <th>Cell No</th>
                            <td>{{$leed->phoneNo}}</td>
                        </tr>
                        <tr>
                            <th>Priority</th>
                            <td>{{$leed->clientPriority}}</td>
                        </tr>
                        <tr>
                            <th>Value</th>
                            <td>{{$leed->clientValue}}</td>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <td><img src="{{asset($leed->logo)}}" alt="" height="150" width="200"/> </td>
                        </tr>
                    </table>

    </div>
  </div>
</div>
@endsection('leedContent')
