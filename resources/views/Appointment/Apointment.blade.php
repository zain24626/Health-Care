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
                        <div class="title signuptitle-div">Book Your Appointment Here!</div>
                        <div class="signup-in">
                            <form action="" method="POST">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label>{{ __('Name') }}</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input type="text" id="name" class=""
                                                placeholder="Enter Patient's Name" name="name" value="" required
                                                autocomplete="name" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>{{ __("Doctor's Name") }}</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="docname" type="text"
                                                class="" name="docname"
                                                value="" required autocomplete=""
                                                placeholder="Enter Doctor's Name">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Appointment Reason</label>
                                        <div class="username">
                                            <i class="lni lni-user"></i>
                                            <input id="reason" type=""
                                                class="" name="reason" required
                                                autocomplete="" placeholder="Explain The Reason">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label>Select Timing</label>
                                            <select name="time" style="border: none" class="username w-100 p-2">
                                                <option></option>
                                                <option value="1">Monday 5pm</option>
                                                <option value="2">Wednesday 7pm</option>
                                                <option value="3">Friday 6pm</option>
                                                <option value="4">Sunday 8pm</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>




                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <a href="" id="anchor"> <button id="button" class="button" type="submit">Confirm Appointment</button></a>
                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

        <script>

            $(document).ready(function(){
                $(".button").click(function(){
                    alert("Appointment Has Been Confirmed")
                })
            })

        </script>
@endsection



{{-- ============================================================================================================ --}}
