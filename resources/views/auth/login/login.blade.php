@extends('frontend.master')
@section('title','Login')
@section('content')

<main id="main">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{route('home')}}" class="link">Home</a></li>
                <li class="item-link">Login</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="login-form form-item form-stl">
                            <form action="{{route('login.data')}}" method="post">
                                @csrf
                                <fieldset class="wrap-title">
                                    @if(session('error'))
                                    <h3 class="form-title" style="color:red">{{session('error')}}</h3>
                                    @else
                                    <h3 class="form-title">Log in to your account</h3>
                                    @endif
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Email Address:</label>
                                    <input type="text" id="frm-login-uname" name="email"
                                    value="{{ old('email') }}" class="@error('email') is-invalid @enderror"   placeholder="Type your email address">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-pass">Password:</label>
                                    <input type="password" id="frm-login-pass" class="@error('password') is-invalid @enderror" name="password" placeholder="************">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </fieldset>

                                <fieldset class="wrap-input">
                                    <label class="remember-field">
                                        <input class="frm-input " name="rememberme" id="rememberme" value="forever"
                                            type="checkbox"><span>Remember me</span>
                                    </label>
                                    <a class="link-function left-position" href="#"
                                        title="Forgotten password?">Forgotten password?</a>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="Login" name="submit">
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