@extends('CRM.layouts_successLeeds.leedsProfile')
@section('leedContent')

<div class="col-md-9 card">
<div class="card-title">
  <a href="{{route('add-meeting',['id'=>$leed->id])}}" class="btn btn-success float-right">+Add</a>
</div>

<div class="card">
  <div class="row g-0">
  @foreach ($meetings as $meeting)
    <div class="col-md-4">
      <div class="card mt-5 bg-dark" style="max-width: 150px; max-height: 30px;">
        <div class="card-title ml-2">
            <h1 class="text-white text-lg">{!! date('d M y', strtotime($meeting->meetingDateAndTime)) !!}</h1>
        </div>
      </div>
    </div>
    <div class="col-md-8 mb-0">
      <div class="card-body">
        <h5 class="card-title">{{$meeting->meetingDateAndTime}}</h5>
        <p class="card-text">
          Internet call logs
        </p>
        <p class="card-text">
          Created By {{$meeting->meetingDateAndTime}} on {{$meeting->userId}}
        </p>
        <p class="card-text">
          <button class="btn btn-danger btn-sm">Edit</button>
          <button class="btn btn-dark btn-sm">delete</button>
        </p>
        <hr>
      </div>
    </div>
    @endforeach
  </div>
</div>

</div>



@endsection('leedContent')
