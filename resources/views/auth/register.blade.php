@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/MyCss/FormStyle.css">
    {{-- <link rel="stylesheet" href="/MyCss/navbar.css"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="/MyCss/AdminCss/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    {{-- ====================================== sign up form ========================================= --}}

    <div class="container-fluid" style="margin-top: 100px">


        <div class="row" id="signupform">
            <div class="col-md-12 col-sm-6">

                <div class="signupparentdiv d-flex justify-content-center">

                    <div class="signup-div " style="margin-left: ;">
                        <div class="title signuptitle-div">Create Your Account Here</div>
                        <div class="signup-in">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-6">
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
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __('Email Address') }}</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="email" type="email"
                                                class="@error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Enter Your E-mail">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="password-confirm" type="password" class=""
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                   
                                </div>


                                <a href="" id="anchor"> <button id="button" type="submit">Register</button></a>


                                {{-- <div class="row text-center">
                                    <div class="col-md-6">
                                        <a href="" id="anchor"> <button id="button" type="submit">Register As
                                                Doctor</button></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" id="anchor"> <button id="button" type="submit">Register As
                                                Patient</button></a>

                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    {{-- ====================================== Register as doctor ========================================= --}}

    {{-- <div class="container-fluid" style="margin-top: 100px">


        <div class="row" id="signupform">
            <div class="col-md-12 col-sm-6">

                <div class="signupparentdiv d-flex justify-content-center">

                    <div class="signup-div " style="margin-left: ;">
                        <div class="title signuptitle-div">Personal Information</div>
                        <div class="signup-in">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="address" placeholder="Enter Your Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="phone" placeholder="Enter Your Phone No">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label>Select City</label>
                                            <select name="city" style="border: none" class="username w-100 p-2">
                                                <option></option>
                                                <option value="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="age" placeholder="Age">
                                        </div>
                                    </div>
                                  
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">

                                        <label>Gender</label> <br>

                                        <select name="gender" style="border: none" class="username w-100 p-2">
                                            <option></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>


                                    </div>
                                    <div class="col-md-6">
                                        <label>Specialization</label> <br>

                                        <select name="specialization" style="border: none"  class="username w-100 p-2">
                                            <option></option>
                                            <option value=1>Cardiologist</option>
                                            <option value=2>Audiologist</option>
                                        </select>
                                    </div>
                                </div>



                           

                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <a href="" id="anchor"> <button id="button" type="submit">Register</button></a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div> --}}
    {{-- ====================================== Register as patient ========================================= --}}

    {{-- <div class="container-fluid" style="margin-top: 100px">


        <div class="row" id="signupform">
            <div class="col-md-12 col-sm-6">

                <div class="signupparentdiv d-flex justify-content-center">

                    <div class="signup-div " style="margin-left: ;">
                        <div class="title signuptitle-div">Personal Information</div>
                        <div class="signup-in">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="address" placeholder="Enter Your Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="phone" placeholder="Enter Your Phone No">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label>Select City</label>
                                            <select name="city" style="border: none" class="username w-100 p-2">
                                                <option></option>
                                                <option value="Karachi">Karachi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Islamabad">Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" name="age" placeholder="Age">
                                        </div>
                                    </div>
                                  
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-12">

                                        <label>Gender</label> <br>

                                        <select name="gender" style="border: none" class="username w-50 p-2">
                                            <option></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>


                                    </div>
                                   
                                </div>



                           

                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <a href="" id="anchor"> <button id="button" type="submit">Register</button></a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div> --}}






    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection



{{-- ============================================================================================================ --}}




