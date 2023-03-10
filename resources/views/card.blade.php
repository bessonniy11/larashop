
<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <!-- <h1 class="h2 pb-4">Категории{{$product->category->code}}</h1> -->
            <img class="card-img rounded-0 img-fluid" src="../../img/shop_01.jpg">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                    <li>
                        <a 
                        class="btn btn-success text-white mt-2" 
                        href="{{last(request()->segments()) == 'products' ? 'products/' . $product->category->code. '/' . $product->code :  $product->category->code. '/' . $product->code}}">
                            <i class="far fa-eye"></i>
                        </a>
                    </li>
                    <form action="{{ route('basket-add', $product)}}" method="POST">
                        <li>
                            <button class="btn btn-success text-white mt-2" type="submit">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </li>
                        @csrf
                    </form>
                    
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="products/womens/item1" class="h3 text-decoration-none fw-bold">{{ $product->name }}</a>
            <ul class="w-100 list-unstyled d-block justify-content-between mb-0">
                <!-- <li>M/L/X/XL</li> -->
                <!-- <li>{{ $product->category->name}}</li> -->
                <li>{{ $product->description }}</li>
                <!-- <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li> -->
            </ul>
            <!-- <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                </li>
            </ul> -->
            <p class="text-center mb-0 fw-bold">{{ $product->price }} руб.</p>
        </div>
    </div>
</div>
<!-- <div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="../../img/shop_04.jpg">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                    <li><a class="btn btn-success text-white mt-2" href="products/mens/item2"><i class="far fa-eye"></i></a></li>
                    <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a href="products/mens/item2" class="h3 text-decoration-none">Item2</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-warning fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                    <i class="text-muted fa fa-star"></i>
                </li>
            </ul>
            <p class="text-center mb-0">$250.00</p>
        </div>
    </div>
</div> -->