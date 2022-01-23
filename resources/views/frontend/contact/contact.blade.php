@extends('frontend.master')
@section('title','Contact')
@section('content')

<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">Contact</a></li>
            </ul>
        </div>

        <div class="row">
            <div class=" main-content-area">
                <div class="wrap-contacts ">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-form">
                            <h2 class="box-title">Leave a Message</h2>
                            <form action="#" method="get" name="frm-contact">

                                <label for="name">Name<span>*</span></label>
                                <input type="text" value="" id="name" name="name">

                                <label for="email">Email<span>*</span></label>
                                <input type="text" value="" id="email" name="email">

                                <label for="phone">Number Phone</label>
                                <input type="text" value="" id="phone" name="phone">

                                <label for="comment">Comment</label>
                                <textarea name="comment" id="comment"></textarea>

                                <input type="submit" name="ok" value="Submit">

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="contact-box contact-info">
                            <div class="wrap-map">
                                @include('frontend.contact.location')
                            </div>
                            <h2 class="box-title">Contact Detail</h2>
                            @include('frontend.contact.contact_details')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection