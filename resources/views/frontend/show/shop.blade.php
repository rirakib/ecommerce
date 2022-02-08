@extends('frontend.master')
@section('title','Show')
@section('content')

<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('shop')}}" class="link">Shop</a></li>
                <li class="item-link"><span>Show</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul class="slides">
                                @php
                                $images = explode('|',$product->multiple_image)

                                @endphp

                                @foreach($images as $image)
                                <li data-thumb="{{asset('images/product/display/'.$image)}}">
                                    <img src="{{asset('images/product/display/'.$image)}}" class="img-fluid display_img"
                                        alt="product thumbnail" />
                                </li>
                                @endforeach



                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="product-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="#" class="count-review">(05 review)</a>
                        </div>
                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">
                            <p>{{$product->short_description}}</p>
                        </div>
                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img
                                    src="{{asset('frontend/assets/images/social-list.png')}}" alt=""></a>
                        </div>
                        <div class="wrap-price"><span class="product-price">{{$product->price}}</span><b>Tk</b></div>
                        <div class="stock-info in-stock">
                            <p class="availability">Availability: <b>In Stock</b></p>
                        </div>
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">

                                <a class="btn btn-reduce" href="#"></a>
                                <a class="btn btn-increase" href="#"></a>
                            </div>
                        </div>
                        <div class="wrap-butons">
                            <a href="#" class="btn add-to-cart">Add to Cart</a>
                            <div class="wrap-btn">
                                <a href="#" class="btn btn-compare">Add Compare</a>
                                <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                            </div>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">description</a>
                            <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                            <a href="#review" class="tab-control-item">Reviews</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <h1>{{$product->short_description}}</h1>
                                {!! $product->description !!}
                            </div>
                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Category</th>
                                            <td>
                                                <p>{{$product->category->name}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Subcategory</th>
                                            <td>
                                                <p>{{$product->subcategory->name}}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Color</th>
                                            <td class="product_weight">{{$product->color->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td class="product_dimensions">{{$product->size->name}} </td>
                                        </tr>
                                        <tr>
                                            <th>Brand</th>
                                            <td>
                                                <p>{{$product->brand->name}}</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">

                                    <div id="comments">
                                        <!-- <h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6
                                                Chainsaw Omnidirectional [Orage]</span></h2> -->
                                        <ol class="commentlist">
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                id="li-comment-20">
                                                @foreach(DB::table('reviews')->where('product_id',$product->id)->get() as $review)
                                                <div id="comment-20" class="comment_container">
                                                    <img alt=""
                                                        src="{{asset('frontend/assets/images/author-avata.jpg')}}"
                                                        height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="ratting">
                                                            <p>Rating <strong style="color:salmon">{{$review->ratting}}</strong></p>
                                                        </div>
                                                        <p class="meta">
                                                            @php
                                                                $user = $review->user_id
                                                            @endphp
                                                            <strong class="woocommerce-review__author">User</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date"
                                                                datetime="2008-02-14 20:00">{{ date('M j, Y', strtotime($review->created_at)) }}</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>{{$review->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </li>
                                        </ol>
                                    </div><!-- #comments -->

                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                <form action="{{route('review.store')}}" method="post" id="commentform" class="comment-form"
                                                    novalidate="">
                                                    @csrf 
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Select your rating <span
                                                            class="required">*</span>
                                                    </p>
                                                    <div class="comment-form-rating">
                                                        <span>Your rating</span>
                                                        <p class="stars">

                                                            <label for="rated-1"></label>
                                                            <input type="radio" id="rated-1" name="ratting" value="1">
                                                            <label for="rated-2"></label>
                                                            <input type="radio" id="rated-2" name="ratting" value="2">
                                                            <label for="rated-3"></label>
                                                            <input type="radio" id="rated-3" name="ratting" value="3">
                                                            <label for="rated-4"></label>
                                                            <input type="radio" id="rated-4" name="ratting" value="4">
                                                            <label for="rated-5"></label>
                                                            <input type="radio" id="rated-5" name="ratting" value="5"
                                                                checked="checked">
                                                        </p>
                                                    </div>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email <span class="required">*</span></label>
                                                        <input id="email" name="email" type="email" value="{{session()->get('email')}}">
                                                    </p>
                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your review <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="description" cols="45"
                                                            rows="8"></textarea>
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                            value="Submit">
                                                    </p>
                                                </form>

                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Free Shipping</b>
                                        <span class="subtitle">On Oder Over $99</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift!</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Return within 7 days</span>
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                @include('frontend.shop.popular')

            </div>
            <!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Features Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{asset('frontend/assets/images/products/digital_04.jpg')}}"
                                                width="214" height="214"
                                                alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        </figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End wrap-products-->
                </div>
            </div>

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>

<style>
    .flex-control-thumbs img {
        height: 50px;
        width: 50px;
        object-fit: cover;
        object-position: center;
        margin: 0px 10px
    }

    .product-gallery {
        height: 500px;
        width: 300px;
    }

    .display_img {
        height: 500px;
        width: 300px;
        object-fit: cover;
        object-position: center;
    }
</style>

@endsection