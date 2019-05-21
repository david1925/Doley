@extends('main')
@section('customerDetail')
    <br><br>
    <div class="container col-sm-12">   
      <form class="form-horizontal" method="POST" action="{{route('addCustomer')}}">
         @csrf
        <div class="row">      
          <div class="col-sm-offset-1 col-sm-10">
            <h4 class="h2">Datos cliente</h4>
          </div>
        </div>
        <br><br>        
        <div class="row">      
          <div class="col-sm-offset-1 col-sm-5">
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Nombre:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="lastname">Apellidos:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Teléfono:</label>
              <div class="col-sm-10">          
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="gender">Género:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="gender" name="gender">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="postal_code">Código postal:</label>
              <div class="col-sm-10">          
                <input type="number" class="form-control" id="postal_code" name="postal_code" min="1" max="99999">
              </div>
            </div>
          </div>

          <div class="c col-sm-5">
            <div class="form-group">
              <label class="control-label col-sm-3" for="right_Image">Derechos de imagen:</label>
              <div class="col-sm-9">          
                <label>                  
                  <input type="checkbox" name="right_image">                  
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="birthdate">Fecha de nacimiento:</label>
              <div class="col-sm-9">          
                <input type="date" class="form-control" id="birthdate" name="birthdate">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="observations">Obsevaciones:</label>
              <div class="col-sm-9">          
                <textarea class="form-control" rows="5" id="observations" name="observations"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="discharge_date">Fecha de alta:</label>
              <div class="col-sm-9">          
                <input type="date" class="form-control" id="discharge_date" name="discharge_date">
              </div>
              <br/><br/><br/>
              <div class="form-group">              
              <div class="col-sm-9">          
              <input type="submit" value="Submit">
              </div>              
            </div>
          </div>
        </div>
      </form>
    </div>    
@endsection
