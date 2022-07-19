@extends('layouts.app')

@section('content')
    {{-- ====================================== Register as patient ========================================= --}}

    <div class="container-fluid" style="margin-top: 100px">


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
                                        {{-- <button class="signupformBtn">Register As Doctor</button> --}}
                                        <a href="" id="anchor"> <button id="button" type="submit">Register</button></a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

@endsection