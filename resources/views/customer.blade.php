@extends('main')
@section('customer')
  @if(empty($id))
    <div class="container">
      <br><br>   
      <div class="row">   
        <div>
          <button type="button" class="btn btn-primary"><a href="{{ route('addCustomerView') }}">Añadir cliente</a></button>
          <br><br>   
        </div>
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
                <th scope="row"><a href="{{ route('customer', [$customer->id,'color' ]) }}">{{$customer->name}}
                {{$customer->lastname}}</a></th>     
                <td>{{$customer->serviceName}}</td>   
                <td>{{$customer->day}}</td>
              </tr>   
            @endforeach    
          </tbody>
        </table>     
      </div>  
    </div>  
@endif
@endsection


@section('customerDetail')
  @if(!empty($id))

    <div class="container col-sm-12">   
      <br><br>   
      <div class="row">   
        <div class="col-sm-offset-4 col-sm-4">
          <h3 class="h3"><strong>Datos cliente</strong></h3>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th scope="row">Nombre</th>
                <td>{{$customers->name}}</td>
                <th>Derechos de imagen</th>
                @if($customers->right_image)
                  <td>Sí</td>
                @else
                  <td>No</td>
                @endif
              </tr>
              <tr>
                <th scope="row">Appellidos</th>
                <td>{{$customers->lastname}}</td>
                <th scope="row">Fecha de nacimiento</th>
                <td>{{$customers->birthdate}}</td>
              </tr>
              <tr>
                <th scope="row">Teléfono</th>
                <td>{{$customers->phone}}</td>
                <th scope="row">Fecha de alta</th>
                <td>{{$customers->created_at}}</td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>{{$customers->email}}</td>
                <th scope="row">Género</th>                  
                @if($customers->right_image == 'M')
                  <td>Mujer</td>
                @else
                  <td>Hombre</td>
                @endif
              </tr>
              <tr>
              </tr>
              <tr>
                <th scope="row">Código postal</th>
                <td>{{$customers->postal_code}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="container col-sm-12">   
      <br>
      <div class="row">   
        <div class="col-sm-offset-4 col-sm-4">
          <div class="form-group">
            <label for="observations">Obsevaciones:</label>
            <textarea readonly class="form-control" rows="3" id="observations">{{$customers->observations}}</textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="container col-sm-12">   
      <br><br>   
      <div class="row">    
          <div class="col-sm-offset-4 col-sm-4">
            <h3 class="h3"><strong>Historial</strong></h3>
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="{{ route('customer', [$customers->id,'color']) }}">Ficha color</a>
              </li>
              <li>
                <a href="{{ route('customer', [$customers->id,'all']) }}">Ficha general</a>                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  @endif  
@endsection


@section('colorServices')
  @if(!empty($id) && $service == 'color')

    <div class="container col-sm-12">   
      <br><br>   
      <div class="row">    
        <div class="col-sm-offset-4 col-sm-4">
          <div class="tab-content">
            <div id="colorServices" class="tab-pane fade in active">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Día</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($servicesCustomer as $service)
                        <tr>
                          <th scope="row">{{$service->appoinmentId}}</th>
                          <td>{{$service->serviceName}}</td>
                          <td>{{$service->serviceDuration}}</td>
                          <td>{{$service->servicePrice}}</td>
                          <td>{{$service->day}}</td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endif  
@endsection


@section('allServices')
  @if(!empty($id) && $service == 'all')

    <div class="container col-sm-12">   
      <br><br>   
      <div class="row">    
        <div class="col-sm-offset-4 col-sm-4">
          <div class="tab-content">
            <div id="allServices" class="tab-pane fade in active">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Día</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($servicesCustomer as $service)
                        <tr>
                          <th scope="row">{{$service->appoinmentId}}</th>
                          <td>{{$service->serviceName}}</td>
                          <td>{{$service->serviceDuration}}</td>
                          <td>{{$service->servicePrice}}</td>
                          <td>{{$service->day}}</td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endif  
@endsection
