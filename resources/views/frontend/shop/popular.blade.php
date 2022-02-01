<div class="widget mercado-widget widget-product">
    <h2 class="widget-title">Latest Products</h2>
    <div class="widget-content">
        <ul class="products">
            @foreach(DB::table('products')->orderBy('id','desc')->get() as $product)

            @if($product->product_type == 'latest')
            <li class="product-item">
                <div class="product product-widget-style">
                    <div class="thumbnnail">
                        <a href="" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                            <figure><img src="{{asset('images/product/title/'.$product->image)}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                        <div class="wrap-price"><span class="product-price">{{$product->price}}</span><b>TK</b></div>
                    </div>
                </div>
            </li>
            @endif
            @endforeach

        </ul>
    </div>
</div>