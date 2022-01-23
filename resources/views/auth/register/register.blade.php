@extends('frontend.master')
@section('title','Register')
@section('content')

<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">Home</a></li>
                <li class="item-link">Register</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    
                    <div class="wrap-login-item ">
                    
                        <div class="register-form form-item ">
                        
                            <form class="form-stl" action="{{route('register')}}" method="post">
                                @csrf
                                <fieldset class="wrap-title">
                                    @if(session('stutus'))
                                            <h3 class="form-title" style="color:green">{{session('stutus')}}</h3>
                                    @else
                                        <h3 class="form-title">Create account</h3>
                                    
                                    @endif
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                    <input type="text" id="frm-reg-lname" value="{{ old('name') }}" class="@error('name') is-invalid @enderror"
                                        name="name" placeholder="John Mark*">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input type="email" id="frm-reg-email" value="{{ old('email') }}" name="email" class="@error('email') is-invalid @enderror" placeholder="example@gmail.com">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input type="text" id="frm-reg-pass" name="password" class="@error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <input type="submit" class="btn btn-sign mt-2" value="Register" name="register">
                            </form>
                        </div>
                    </div>
                </div>
                <!--end main products area-->
            </div>
        </div>

    </div>
</main>
@endsection