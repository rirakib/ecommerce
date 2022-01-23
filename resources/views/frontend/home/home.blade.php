@extends('frontend.master')
@section('title','Home')
@section('content')




<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
            </ul>
        </div>

        <!--MAIN SLIDE-->
        @include('frontend.home.slider')

        <!--BANNER-->
        @include('frontend.home.banner')

        <!--On Sale-->
        @include('frontend.home.onsale')

        <!--Latest Products-->
        @include('frontend.home.latest')

        <!--Product Categories-->
        @include('frontend.home.categories')

    </div>

</main>



@endsection