@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="pull-left my-20">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right ">
                <a class="btn btn-primary my-10" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form method="POST" action="{{ route('products.update',$product->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category" value={{$product->category}}>
            <option selected disabled>Select Your Category</option>
            <option value="CDs">CDs</option>
            <option value="Books">Books</option>
            <option value="Games">Games</option>


        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputCategory" class="form-label">Name</label>

        <input type="text" class="form-control" id="exampleInputCategory" name="name" value="{{$product->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputCategory" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputCategory" name="author" value="{{$product->author}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputCategory" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleInputCategory" name="price" value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputCategory" class="form-label">Pages/PlayLength</label>
        <input type="number" class="form-control" id="exampleInputCategory" name="size" value="{{$product->size}}">
    </div>
    <button type="submit" name="update" class="btn btn-primary">Add Product</button>
</form>
</div>
@endsection
