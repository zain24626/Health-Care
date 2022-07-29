@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="/MyCss/FormStyle.css">
    {{-- <link rel="stylesheet" href="/MyCss/AdminCss/css/bootstrap.min.css"> --}}
    <!----css3---->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/custom.css">


 {{-- ====================================== Register as doctor ========================================= --}}

 <div class="container-fluid" style="margin-top: 100px">


    <div class="row" id="signupform">
        <div class="col-md-12 col-sm-6">

            <div class="signupparentdiv d-flex justify-content-center">

                <div class="signup-div " style="margin-left: ;">
                    <div class="title signuptitle-div">Personal Information</div>
                    <div class="signup-in">
                        <form action="{{route('doctorregistered')}}" method="POST">
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
                                            @foreach ($CITIES as $cities )                                                
                                            <option value="{{$cities->id}}">{{$cities->name}}</option>
                                            @endforeach
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
                                        @foreach ($SPECIALIZATION as $specialization )
                                        <option value="{{$specialization->id}}">{{$specialization->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                {{-- <div class="col-md-6">
                                    <label>Qualification</label> <br>

                                    <select name="qualification" style="border: none"  class="username w-100 p-2">
                                        <option></option>
                                        @foreach ($QUALIFICATION as $qualification )
                                        <option value="{{$qualification->id}}">{{$qualification->name}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}


                                <div class="col-md-6">
                                    <label>Upload Your Image</label> <br>

                                    <input type="file" name="img">
                                    
                                </div>

                            </div>
                            
                            {{-- <div class="row">
                                
                                <div class="col-md-6">


                                    
                                </div>


                                <div class="col-md-6">
                                    <label>Upload Your Image</label> <br>

                                    <input type="file" name="img">
                                    
                                </div>

                            </div> --}}




                       

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