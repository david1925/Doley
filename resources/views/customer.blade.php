@extends('main')
@section('customer')
  @if(empty($id))
    <div class="container">
      <table class="table table-striped">
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
    </div>  
  @endif
@endsection


@section('customerDetail')
  @if(!empty($id))
    <br><br>
    <div class="container">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{$customers->name}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lastname">Apellidos:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{$customers->lastname}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Teléfono:</label>
          <div class="col-sm-10">          
            <input type="tel" class="form-control" id="phone" name="phone" value="{{$customers->phone}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" value="{{$customers->email}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="gender">Género:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="gender" name="gender" value="{{$customers->gender}}" disabled> 
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="postalCode">Código postal:</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" id="postalCode" name="postalCode" min="1" max="99999" value="{{$customers->postal_code}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="rightImage">Derechos de imagen:</label>
          <div class="col-sm-10">          
            <label>
              @if($customers->right_image)
              <input type="checkbox" name="rightImage" checked disabled> 
              @else
              <input type="checkbox" name="rightImage" disabled> 
              @endif
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="birthdate">Fecha de nacimiento:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="birthdate" name="birthdate" value="{{$customers->birthdate}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="observations">Obsevaciones:</label>
          <div class="col-sm-10">          
            <textarea class="form-control" rows="5" id="comment" name="comment" disabled> {{$customers->observations}} </textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="creationDate">Fecha de alta:</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control" id="creationDate" name="creationDate" value="{{$customers->created_at}}" disabled>
          </div>
        </div>
      </form>
    </div>

    <br><br>
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#">Ficha color</a></li>
        <li><a href="#">Ficha general</a></li>
      </ul>
    </div>
  @endif  
@endsection


@section('service')
  @if(!empty($id))
    @foreach($servicesCustomer as $service)
      <br><br>
      <div class="container">
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Nombre servicio:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" value="{{$service->serviceName}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="duration">Duración:</label>
            <div class="col-sm-10">          
              <input type="number" class="form-control" id="duration" name="duration" value="{{$service->serviceDuration}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="price">Precio:</label>
            <div class="col-sm-10">          
              <input type="number" class="form-control" id="price" name="price" value="{{$service->servicePrice}}" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="creationDate">Fecha:</label>
            <div class="col-sm-10">          
              <input type="date" class="form-control" id="creationDate" name="creationDate" value="{{$service->day}}" disabled>
            </div>
          </div>
        </form>
      </div>
    @endforeach
  @endif  
@endsection