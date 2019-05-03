@extends('main')
@section('customer')
  @if(empty($id))
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Servicio</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
      @foreach($customers as $customer)
        <tr>
          <th scope="row"><a href="{{ route('customer', $customer->id ) }}">{{$customer->name}}
          {{$customer->lastname}}</a></th>     
          <td>{{$customer->serviceName}}</td>   
          <td>{{$customer->day}}</td>
        </tr>   
      @endforeach    
  </tbody>
</table>    
  
  @endif
@endsection
@section('customerDetail')
  @if(!empty($id))
   <div>
     <label><?php dd($customers)?></label>
  </div>
  @endif  
@endsection