@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-5 text-center"><strong>PRODUCTS</strong></h1>
    <div class="row">
       
        @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="product_box">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p style = "font-family: 'Open Sans', sans-serif;">{{ $product->description }}</p>
                    <p style = "font-family: 'Open Sans', sans-serif;"><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{asset('cart_add/' . $product->id)}}"
                        class="btn btn-primary btn-block text-center" role="button">ADD TO CART</a> </p>
                </div>
            </div>
        </div>

      
        @endforeach
        {{-- {{ route('cart_add', $product->id) }} --}}


    </div>
    {{-- @if(method_exists($products, 'links'))
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
    @endif --}}
</div>
@endsection
