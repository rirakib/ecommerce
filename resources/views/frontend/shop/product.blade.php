<div class="row">

    <ul class="product-list grid-products equal-container">
        @foreach(DB::table('products')->orderBy('id','desc')->get() as $product)
        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail shop_product_thumbnail">
                    <a href="{{route('home.product.show',$product->id)}}" title="{{$product->name}}">
                        <figure><img src="{{asset('images/product/title/'.$product->image)}}"
                                alt="{{$product->name}}"></figure>
                    </a>
                </div>
                <div class="product-info">
                    <a href="{{route('home.product.show',$product->id)}}" class="product-name"><span>{{$product->name}}</span></a>
                    <div class="wrap-price"><span class="product-price">{{$product->price}}<b>Tk</b></span></div>
                    <a href="#" class="btn add-to-cart">Add To Cart</a>
                </div>
            </div>
        </li>
        @endforeach
        

    </ul>

</div>
<style>
   .shop_product_thumbnail img{
        height: 200px;
        width: 300px;
        object-fit: cover;
        object-position: center;
    }
</style>