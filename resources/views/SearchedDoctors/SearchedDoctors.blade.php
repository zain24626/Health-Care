@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2 "></div>

            <div class="col-md-8">

                <h5 style="color: #CE3B3B ; font-family:serif">Best Specialists In Pakistan</h5>


                <div class="row divshadow mt-4 profilePannel" style="padding: 15px;">
                    <div class="col-md-3 SearchedDoctorsImg">
                        <img src="img.jpg" style="border-radius:50%;width:150px;height:150px;" alt="" />
                    </div>
                    <div class="col-md-6">
                        <div class="mt-4">
                            <h4 style="font-family: serif; color: #f44718 " id="DocName">Dr. Asim khan</h4>
                            <div class="d-flex w-100">
                                <h5 id="cardText">Qualification : <span id="cardDetails"> MBBS , MCPS </span></h5>
                            </div>
                            <div class="d-flex">
                                <h5 id="cardText">Specialist In : <span id="cardDetails"> Cardiologist </span></h5>
                                <p> </p>
                            </div>
                            <div class="d-flex">
                                <h5 id="cardText">City : <span id="cardDetails"> Karachi </span></h5>
                                <p></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 mt-sm-2 mt-md-1 text-center ViewProfileBtn ">
                        
                        <a href="/info"> <button class="button ">View Profile</button></a> <br>
                        <a href="/Appointment"> <button class="button ">Book Appointment</button></a>

                    </div>
                </div>



            </div>

            <div class="col-md-2 "></div>
        </div>
    </div>
@endsection
