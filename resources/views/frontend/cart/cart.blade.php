@extends('frontend.master')
@section('title','Cart')
@section('content')

<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">Cart</a></li>
            </ul>
        </div>

        <div class=" main-content-area">

            @include('frontend.cart.item')

            @include('frontend.cart.summary')

           @include('frontend.cart.most_view')

        </div>


    </div>
</main>
@endsection