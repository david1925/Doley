<html>

  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css"        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"        href="/doley/public/css/main.css">
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
            <img src="http://placehold.it/150x50?text=Logo" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('customer') }}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('appoinmentForm') }}">Citas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('productForm') }}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pedidos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('customer')
  @yield('customerDetail')
  @yield('service')
  @yield('appoinmentForm')
  @yield('productForm')


  </body>

</html>