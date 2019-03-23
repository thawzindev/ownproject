@extends("layouts.master")
@section("content") 
@section('title', 'Cart')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{ Cart::count() }} item(s) in your cart</h1>
    </div>
</section>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach(Cart::content() as $product)
                       <tr>                                                                         
                        <td><!-- <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/.jpg"/> -->
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right">$ {{ $product->price }}</td>
                        <!-- <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td> -->
                        <td class="text-right">
                            <form action="{{ route('cart.remove', $product->rowId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                            </form>
                        </td>


                        </td>

                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td class="text-right">{{ Cart::subtotal()}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Tax</td>
                        <td class="text-right">{{ Cart::tax() }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>{{ Cart::total() }}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <a class="btn btn-block btn-light" href="{{ route('shop.index') }}">Continue Shopping</a>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <a href="{{ route('checkout.index') }}" class="btn btn-lg btn-block btn-success text-uppercase">CHECKOUT</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection