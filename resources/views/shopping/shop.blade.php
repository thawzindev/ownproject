@extends("layouts.master")
@section("content")	
@section('title', 'Shop')
<main>
    <div class="container">

      @if(session('message_success'))
  <div class="alert alert-success" id="id">
    {{session('message_success')}}
  </div>
  @endif
  @if(session('danger'))
  <div class="alert alert-danger" id="id">
    {{session('danger')}}
  </div>
  @endif
  <hr>

<h3>{{ Cart::count() }} item(s) in your cart.</h3>
<hr>

    <a href="{{ route('cart.index') }}">My Cart</a>
  
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shirts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sport wears</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Outwears</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
@foreach($products as $product)
            <!--Card-->
            <div class="card">
              <!--Card image-->

              
              <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/{{$product->slug}}.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
    
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <form action="{{ route('shop.store') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">              
              <input type="hidden" name="price"value="{{ $product->slug }}">
              <input type="hidden" name="price"value="{{ $product->price }}">
              <button type="submit" name="button" class="btn btn-primary">Add to card</button>
            </form><br>
                </a>
                <h5>
                  <strong>
                    <h3>{{ $product->name }}</h3>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong> $ {{ $product->price }} <span> (ID -{{ $product->id }})</span></strong>
                </h4>

              </div>
              <!--Card content-->
   
            </div>
            <!--Card-->
      
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
  
            <!--Card-->
             @endforeach
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

@endsection