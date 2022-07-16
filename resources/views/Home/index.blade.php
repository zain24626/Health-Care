@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/MyCss/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

  
    <style>
        html::-webkit-scrollbar {
            width: 25px;
        }

        html::-webkit-scrollbar-track {
            border-radius: 50px;
            box-shadow: 5px 5px 10px #ccc inset, -5px -5px 10px #fff inset;
        }

        html::-webkit-scrollbar-thumb {
            border-radius: 50px;
            box-shadow: -5px -5px 5px #ccc inset, 5px 5px 5px #f2f2f2 inset;
        }

        /* .picdiv {
                    background-image: url(/Index_Images/3.jpg);
                    background-position: center;
                    background-size: cover;
                    width: 100%;
                    height: 100vh;


                } */

    
    </style>



    {{-- ======================= Section 1 ========================== --}}


    <div class="picdiv">
        {{-- <img src="/Index_Images/3.jpg" width="100%" id="sec1pic" alt="" srcset=""> --}}
    </div>
    <div class="container">

        <div class="row" id="sec1">
            {{-- <div class="text-center w-100"> --}}

            <div class="col-md-3"  id="sec1text">
                <h3 id="sec1heading">Find , Book <span style="color: rgb(122, 120, 120)">&</span> Consult Doctors</h3>
                <h6 id="text" style="color: white">How we can help you?</h6>

            </div>
            {{-- </div> --}}
            <div class="col-md-2 " id="specialist">


                <select class="inputstyle w-100 form-control mt-5  searchbox">
                    <option>Specialist</option>
                    <option value="Cadiologist">Cadiologist</option>
                    <option value="Audiologist">Audiologist</option>
                    <option value="Skin Specialist">Skin Specialist</option>
                </select>

            </div>
            <div class="col-md-4">
                <input type="text" class="form-control mt-5  searchbox" placeholder="Search...">
            </div>
            <div class="col-md-3">
                <a href="#"> <button class="button w-50 mt-5 p-1"><i class="fa-solid fa-search icon"></i></button></a>

            </div>

        </div>

    </div>

    <script>
        $('.button').click(function() {
            $(".button").css("outline", "none");

        })

        $(document).ready(function() {

            $('.button').click(function() {
                $(".button").css("outline", "none");

            })

            if ($(window).width() < 600) {

                $("#sec2").css("margin-top", "100px");
                $("#sec1pic").css("margin-top", "0px");
                $("#sec1").css("margin-left", "0px");
                $("#sec1heading").css('font-size', '15px')
                $('#container').addclass('bg-info');
                $("#sec1text").addclass('col-3');

            } else {

                $("#sec1pic").css("margin-top", "-100px");
                $("#sec1heading").css('font-size', '25px')
                // $("#sec1text").removeclass('col-3');

            }

        })


        $(window).resize(function() {
            if ($(window).width() < 600) {

                $("#sec1pic").css("margin-top", "0px");

            } else {

                $("#sec1pic").css("margin-top", "-100px");

            }

        })
    </script>


    {{-- ======================= Section  ========================== --}}
    {{-- ======================= Common Deseases ========================== --}}


    <div class="container text-center"  id="sec2">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="CommonDiseasesText">
                <h2 class="underline">Common Diseases</h2>
            </div>
            <div class="col-md-3"></div>
        </div>


        <div class="row mt-5">




            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Index_Images/disease2.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Dengue </a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Index_Images/disease1.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Lung Cancer </a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Index_Images/disease3.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Asthma</a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Index_Images/disease4.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Chronic Kidney Disease</a>
                        </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>


        </div>

        {{-- <button class="button" id="button">VIEW FULL MENU</button> --}}

        <a href="/diseases"> <button class="button mt-4">Click For More Detail's</button></a>


    </div>
    {{-- ======================= Section  ========================== --}}
    {{-- ======================= Inventions ========================== --}}


    <div class="container text-center mt-5 pt-5">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" id="CommonDiseasesText">
                <h2 class="underline">Medical Science Inventions</h2>
            </div>
            <div class="col-md-3"></div>
        </div>


        <div class="row mt-5">




            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Inventions_Images/1.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Thermometer </a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Inventions_Images/2.jpg" width="100%" height="180px" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Stethoscope </a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Inventions_Images/3.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> X-Ray Imaging</a> </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hover-underline-animation">
                <div class="card overflow-hidden" style="border: none;">

                    <div class="overflow-hidden">

                        <a id="computer_text" href=""class="product"> <img class="card-img-top zoom-computers "
                                src="/Inventions_Images/4.jpg" width="100%" alt=""> </a>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title"> <a id="computer_text" href="#"> Antibiotics</a>
                        </h6>
                        <h4 class="card-text color-orange"></h4>
                    </div>
                </div>
            </div>


        </div>

        {{-- <button class="button" id="button">VIEW FULL MENU</button> --}}

        <a href="/inventions"> <button class="button mt-4">Click For More Detail's</button></a>


    </div>




    <div class="mt-5 p-0" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-5 pt-5 w-100 d-flex align-items-end">
                    <div>
                        <img class="" src="/Index_Images/doc.png" alt="" srcset=""
                            style="width: 100%;">
                    </div>
                </div>
                <div class="col-md-7 pt-5 w-100 mt-5">
                    <h1 id="CommonDiseasesText" class="underline">Medical Services</h1>
                    <p style="font-size: 13px; color:#768ca5">Our healthcare professionals are dedicated to providing
                        the
                        best possible
                        care for patients, and are
                        supported by complete radiology and imaging services provided at Kalium.
                    </p>


                    <div class="row ">
                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 align-items-center">
                                <div>
                                    <i class="fa-solid fa-stethoscope servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">Check ups</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px; ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 align-items-center">
                                <div>
                                    <i class="fa-solid fa-briefcase-medical servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">Medical Advices</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 d-flex align-items-center">
                                <div>
                                    <i class="fa-solid fa-phone servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">24/7 Emergency</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px; ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 align-items-center">
                                <div>
                                    {{-- <i class="fa-solid fa-stretcher servicesIcon"></i> --}}
                                    <i class="fa-solid fa-bed-pulse servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">New Facilities</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 align-items-center">
                                <div>
                                    <i class="fa-solid fa-user-doctor servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">Professional Doctors</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px; ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w-100">
                            <div class="d-flex pt-3 align-items-center">
                                <div>
                                    <i class="fa-solid fa-wheelchair servicesIcon"></i>
                                </div>
                                <div>
                                    <h5 style="color: #2e5293; margin-left: 10px">Patient Care</h5>
                                    <p style="color: #768ca5; font-size: 15px; margin-left: 10px ">
                                        Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore
                                        magna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>




        <footer class="text-lg-start bg-light text-muted">

            <div class="mt-5 pt-5 pb-5 footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 about-company">
                            <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                            <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
                            <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
                            <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>

                        </div>
                        <div class="col-md-3 col-xs-12 links">
                            <h4 class="mt-lg-0 mt-sm-3">Specialist</h4>
                            <hr>
                            <ul class="m-0 p-0" style="list-style: none">
                                <li><a href="#">Cadiologist</a></li>
                                <li><a href="#">Audiologist</a></li>
                                <li><a href="#">Skin Specialist</a></li>
                                <li><a href="#">Gynecology</a></li>
                                <li><a href="#">Nephrology</a></li>

                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-12 links">
                            <h4 class="mt-lg-0 mt-sm-3">Services</h4>
                            <hr>
                            <ul class="m-0 p-0" style="list-style: none">
                                <li><a href="#">Check ups</a></li>
                                <li><a href="#">24/7 Emergency</a></li>
                                <li><a href="#">Professional Doctors</a></li>
                                <li><a href="#">Medical Advices</a></li>
                                <li><a href="#">Patient Care</a></li>

                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-12 links">
                            <h4 class="mt-lg-0 mt-sm-3">Useful Links</h4>
                            <hr>
                            <ul class="m-0 p-0" style="list-style: none">
                                <li><a href="#">Our clinic</a></li>
                                <li><a href="#">Patients</a></li>
                                <li><a href="#">Doctors</a></li>
                                <li><a href="#">Facilities</a></li>
                                <li><a href="#">Appointments</a></li>

                            </ul>
                        </div>

                    </div>
                    <hr>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <p class=""><small class="text-white-100 ">Health Care</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>







    </div>
    </div>
    {{-- <style>
        #myBtn {
            display: none;
            position: fixed;
            width: 30px;
            height: 30px;
            bottom: 25px;
            right: 25px;
            z-index: 99;
            color: #1f2029;
            font-size: 30px;
            line-height: 30px;
            border-radius: 50%;
            cursor: pointer;
            transition: .2s;
        }
    </style>
    <a onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;"><i class="fas fa-chevron-up"
            aria-hidden="true"></i></a> --}}
@endsection
