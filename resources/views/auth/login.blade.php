@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/MyCss/FormStyle.css">
    <link rel="stylesheet" href="/MyCss/AdminCss/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/custom.css">
    {{-- ====================================== Login up form ========================================= --}}

    <div class="container-fluid" style="margin-top: 100px">


        <div class="row" id="signupform">
            <div class="col-md-12 col-sm-6">

                <div class="signupparentdiv d-flex justify-content-center">

                    <div class="signup-div " style="margin-left: ;">
                        <div class="title signuptitle-div">Sign In</div>
                        <div class="signup-in">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row ">
                                    {{-- <div class="col-md-6">
                                        <label>{{ __('Name') }}</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" id="name" class="@error('name') is-invalid @enderror"
                                                placeholder="Enter Your Name" name="name" value="{{ old('name') }}"
                                                required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <label>{{ __('Email Address') }}</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="email" type="email"
                                                class="@error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"autofocus
                                                placeholder="Enter Your E-mail">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="password" type="password"
                                                class="@error('password') is-invalid @enderror" name="password" required
                                                autocomplete="new-password" placeholder="Enter Your Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6 justify-content-center">
                                        <div class="form-check">

                                            <div class="row">
                                                <div class="col-md-2">

                                                    <input type="checkbox"  style="font-size: 20px">
                                                </div>
                                                <div class="col-md-10">
                                             
                                                    <label class="form-check-label mr-2" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>

                                                </div>
                                               
                                            </div>

                                            {{-- <input class="form-check-input ml-2" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label> --}}

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>
                                    {{-- <div class="col-md-4"></div> --}}
                                </div>


                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <a href="" id="anchor"> <button id="button" type="submit">Sign
                                                In</button></a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>



    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
