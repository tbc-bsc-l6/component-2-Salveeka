@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-30">
                <h2 class="text-center">CRUD</h2>
            </div>
            <div class="pull-right my-5 text-center"> 
                <h5 class="text-center"><strong class="text-center">To create new product: <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a></strong></h5>
                
            </div>
        </div>
    </div>
  
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>Name</th>
            <th>Author</th>
            <th>Price</th>
            <th>Size</th>
            <th width="280px">Action</th>
        </tr>
        {{-- {{dd($products)}} --}}
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->author }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->size }}</td>
            
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    <div class="d-flex justify-content-center">
    {{ $products->links() }}
</div>


</div>
@endsection

