@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">

        <div class="row divshadow p-3 w-100" style="background-color: #ecf0f3 ">
            <div class="col-md-5">
                <div class="row">


                    <div class="col-md-2 d-flex align-items-center">


                    </div>
                    <div class="col-md-10 d-flex align-items-center">

                        <img src="/img.jpg" style="border-radius:50%" width="120" height="120" alt="" />

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6 ">
                        <div>
                            @foreach ($result as $row)
                                <h3 style="font-family: serif; color: #f44718">{{ $row->username }}</h3>
                            @endforeach

                          
                                <div class="d-flex" id="doctorinfohide" style="display: none">
                                    <h6 id="cardText"> Qualification's </h6>
                                    <span id="cardDetails" class="ml-1"> | MBBS | MCPS </span>
                                </div>



                                <div class="d-flex ">
                                    <h6 class="" id="cardText"> Specialist In : </h6>
                                    @foreach ($result as $row)
                                        <p id="cardDetails" class="ml-1">{{ $row->docspecialization }}</p>
                                    @endforeach


                                </div>

                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">

                        <a href="/Appointment"> <button class="button ">Book Appointment</button></a>


                    </div>
                </div>
            </div>
        </div>




        <div>
            <div class="row mt-5 pt-3 justify-content-center">

                {{-- @*============= Personal Info ==========*@ --}}

                <div class="col-md-4">
                    <div class="shadow p-3 text-center " style=" border-radius:15px">
                        <h4 style="font-family: serif; " id="cardText"> Personal Information </h4>
                    </div>
                    <div style="background: #ecf0f3 ; padding:15px; margin-top:20px">

                        <div class="d-flex mt-3 ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> Address: </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->docaddress }}</p>
                                @endforeach

                            </div>
                        </div>
                        <div class="d-flex ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> E-Mail : </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->useremail }}</p>
                                @endforeach

                            </div>
                        </div>

                        <div class="d-flex ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> Phone : </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->docphone }}</p>
                                @endforeach

                            </div>
                        </div>
                        <div class="d-flex ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> Age : </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->docage }}</p>
                                @endforeach

                            </div>
                        </div>
                        <div class="d-flex ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> City : </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->cityname }}</p>
                                @endforeach

                            </div>
                        </div>


                        <div class="d-flex ml-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <h6 class="ml-2"> Gender : </h6>
                            <div>
                                @foreach ($result as $row)
                                    <p style="margin-left:8px">{{ $row->docgender }}</p>
                                @endforeach

                            </div>
                        </div>

                    </div>


                </div>




                {{-- @*============= Qualification ==========*@ --}}


                <div class="col-md-4">
                    <div class="shadow p-3 text-center" style=" border-radius:15px">
                        <h4 style="  " id="cardText"> Schedule </h4>
                    </div>
                    <div style="background: #ecf0f3 ; padding:15px; margin-top:20px">


                        <div class="d-flex ml-3 mt-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <p style="margin-left:8px">
                            <p>
                                <span> </span>
                            </p>

                        </div>
                        <div class="d-flex ml-3 mt-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <p style="margin-left:8px">
                            <p>
                                <span> </span>
                            </p>

                        </div>
                        <div class="d-flex ml-3 mt-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <p style="margin-left:8px">
                            <p>
                                <span> </span>
                            </p>

                        </div>
                        <div class="d-flex ml-3 mt-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <p style="margin-left:8px">
                            <p>
                                <span> </span>
                            </p>

                        </div>
                        <div class="d-flex ml-3  mt-3">
                            <i class="fas fa-angle-double-right mt-1" style="color: #f44718"></i>
                            <p style="margin-left:8px">
                            <p>
                                <span> </span>
                            </p>

                        </div>



                    </div>
                </div>




            </div>


        </div>



    </div>
@endsection
