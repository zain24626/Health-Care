@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/MyCss/AdminCss/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/custom.css">

     {{-- ====================================== schedule ========================================= --}}

     <div id="schedule" class="mt-5">

        <div class="row">
            <div class="col-md-12">

                <h3 class=" text-center display-5">Doctor's Schedule</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-12">


                <div class="body">


                    <div class="container container-table">
                        <table class="neumorphic w-100">
                            <thead>
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Schedule Date</th>
                                    <th>Schedule Day</th>
                                    <th>Start Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. shahbaz</td>
                                    <td>2022-06-17</td>
                                    <td>Friday</td>
                                    <td>10:00</td>
                                    <td><button class="btn btn-primary">Active</button></td>
                                    <td> <button type="button" name="edit_button" id="editBtn"
                                            class="btn btn-warning btn-circle btn-sm edit_button">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" name="edit_button"
                                            class="btn btn-danger btn-circle btn-sm edit_button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

    
@endsection