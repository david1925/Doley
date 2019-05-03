@extends('main')
@section('customer')
    @foreach($customers as $customer)
    <div class="container">
  <div class="row">
    <div class="col-sm">
      {{$customer->name}}
      {{$customer->lastname}}
    </div>
    <div class="col-sm">
    {{$customer->serviceName}}
    </div>
    <div class="col-sm">
      {{$customer->day}}
    </div>
  </div>
</div>
    @endforeach
@endsection