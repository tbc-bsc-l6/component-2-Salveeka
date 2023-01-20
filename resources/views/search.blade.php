<div class="container-fluid bg-secondary mb-5">
    
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Search Results</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="/">HOME</a></p>
           
        </div>
    </div>
    
</div>
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-9 col-md-12">
            <div class="row pb-3">
                @foreach($product as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="/detail/{{$item->slug}}"><img class="img-fluid w-100" src="{{asset('/image/'.$item->image)}}" alt="">
                            </a>                            
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$item->name}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>${{$item->price}}</h6><h6 class="text-muted ml-2"><del>${{$item->discount}}</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="/detail/{{$item->slug}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <a href="/cart" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            
</div>
        </div>
    
    </div>
</div>
