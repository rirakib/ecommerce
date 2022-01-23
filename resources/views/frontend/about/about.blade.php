@extends('frontend.master')
@section('title','About us')
@section('content')

<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">About us</a></li>
            </ul>
        </div>

        <div class="container">
            <!-- <div class="main-content-area"> -->
            <div class="aboutus-info style-center">
                <b class="box-title">Interesting Facts</b>
                <p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type
                </p>
            </div>

            <div class="row equal-container">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">10000</b>
                        <span class="sub-title">Items in Store</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">90%</b>
                        <span class="sub-title">Our Customers comeback</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-box-score equal-elem ">
                        <b class="box-score-title">2 million</b>
                        <span class="sub-title">User of the site</span>
                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">What we really do?</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">History of the Company</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Our Vision</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                    <div class="aboutus-info style-small-left">
                        <b class="box-title">Cooperate with Us!</b>
                        <p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock,</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    @include('frontend.about.cooparate')
                </div>
            </div>

            @include('frontend.about.team')

        </div>
</main>

@endsection