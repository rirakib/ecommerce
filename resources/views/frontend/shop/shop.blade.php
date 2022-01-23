@extends('frontend.master')
@section('title','Shop')
@section('content')



<!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">Shop</a></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="{{asset('frontend/assets/images/shop-banner.jpg')}}" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Digital & Electronics</h1>

                    <div class="wrap-right">

                        @include('frontend.shop.short_item')

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen">
                                <option value="12" selected="selected">12 per page</option>
                                <option value="16">16 per page</option>
                                <option value="18">18 per page</option>
                                <option value="21">21 per page</option>
                                <option value="24">24 per page</option>
                                <option value="30">30 per page</option>
                                <option value="32">32 per page</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div>
                <!--end wrap shop control-->

                @include('frontend.shop.product')

				<!-- Product Pagination  -->
                @include('frontend.shop.paginate')
            </div>
            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <!-- Categories widget-->
				@include('frontend.shop.product_category')

                <!-- brand widget-->
				@include('frontend.shop.product_brand')

                <!-- Price-->
				@include('frontend.shop.product_price')

                <!-- Color -->
				@include('frontend.shop.product_color')


                <!-- Size -->
				@include('frontend.shop.product_size')

                
				<!-- brand widget-->
				@include('frontend.shop.popular')

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
<!--main area-->



@endsection