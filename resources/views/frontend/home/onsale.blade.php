<div class="wrap-show-advance-info-box style-1 has-countdown">
    <h3 class="title-box">Offer Price</h3>
    <div class="wrap-countdown mercado-countdown"></div>
    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container ">

        @foreach(DB::table('products')->orderBy('id','desc')->get() as $product)
        @if($product->product_type == "offer")
            <div class="product product-style-2 equal-elem ">
            <div class="product-thumnail">
                <a href="detail.html" title="{{$product->name}}">
                    <figure><img src="{{asset('images/product/title/'.$product->image)}}" style="height:300px; width:350px; object-fit:cover; object-position:center" alt="{{$product->name}}">
                    </figure>
                </a>
                <div class="group-flash">
                    <span class="flash-item sale-label">Offer</span>
                </div>
                <div class="wrap-btn">
                    <a href="#" class="function-link">quick view</a>
                </div>
            </div>
            <div class="product-info">
                <a href="#" class="product-name"><span>
                    {{$product->name}}
                        </span></a>
                <div class="wrap-price"><span class="product-price">{{$product->price}}</span>Tk<b></b></div>
                <div class="wrap-date">
                   Start <span>{{$product->offer_start_date}}</span>
                </div>
            </div>
            </div>
        @endif
        @endforeach



    </div>
</div>