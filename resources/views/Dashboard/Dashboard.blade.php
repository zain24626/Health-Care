
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <link rel="stylesheet" href="/MyCss/navbar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

</head>

<body >
   <h1>hello</h1>
    <title>dashboard </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="/MyCss/AdminCss/css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        
    </script>


    <div class="wrapper">
        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
             
                <img src="/AdminCss/img/img.jpg" style="border-radius: 100%;" class="sidebar__admin_image" />
                <h4 class="pt-3" style="letter-spacing: 2px; line-height: 14px; ">MR.SHAHBAZ</h4>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#" id="dashboard" class="dashboard"><i class="material-icons " id="icon"
                            >apps</i><span>Dashboard</span></a>
                </li>

                <li>
                    <a href="#" id="doctors"><i class="fa-solid fa-user-group icon"
                            ></i><span> Doctor's
                        </span></a>
                </li>

                <li>
                    <a href="#" id="addDoctorBtn"><i class="fa-solid fa-user-plus icon"
                            ></i><span> Add Doctor
                        </span></a>
                </li>

                <li>
                    <a href="#" id="patientsBtn">
                        <i class="fa-solid fa-hospital-user icon"
                            ></i><span>Patient's</span></a>
                </li>
                <li>
                    <a href="#" id="scheduleBtn">
                        <i class="fa-solid fa-calendar-days icon"></i><span>Doctor's
                            Schedule</span></a>
                </li>


            </ul>
        </nav>



        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand" href="#"> Dashboard </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        {{-- <span class="material-icons">person</span> --}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="main-content">

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats " style="border-radius: 15px">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <i class="fa-solid fa-user-group" id="dashicon" ></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"  ><strong>Doctor's</strong></p>
                                <h3 class="card-title">100</h3>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <i class="fa-solid fa-bed" id="dashicon"></i>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Patient's</strong></p>
                                <h3 class="card-title">150</h3>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        attach_money
                                    </span>

                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Revenue</strong></p>
                                <h3 class="card-title">$23,100</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Weekly sales
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        follow_the_signs
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>Followers</strong></p>
                                <h3 class="card-title">+245</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">update</i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

                {{-- ====================================== sign up form ========================================= --}}


                
    {{-- ====================================== sign up form ========================================= --}}

    <div class="container-fluid" id="registerform" style="margin-top: 100px">


        <div class="row" >
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




                                <div class="row text-center">
                                    <div class="col-md-6">
                                        <a href="" id="anchor"> <button id="button" class="registerAsDoctor" type="submit"> Register As
                                                Doctor</button></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="" id="anchor"> <button id="button" class="registerAsPatient" type="submit">Register As
                                                Patient</button></a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    {{-- ====================================== Register as doctor ========================================= --}}

    <div class="container-fluid" id="registerAsDoctor" style="margin-top: 100px">


        <div class="row" >
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
    {{-- ====================================== Register as patient ========================================= --}}

    <div class="container-fluid" id="registerAsPatient" style="margin-top: 100px">


        <div class="row" >
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



{{-- 
                <div class="row" id="signupform">
                    <div class="col-md-12 col-sm-6">

                        <div class="signupparentdiv d-flex justify-content-center">

                            <div class="signup-div " style="margin-left: ;">
                                <div class="title signuptitle-div">Register Doctor's Here</div>
                                <div class="signup-in">
                                    <form action="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="username" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="email" placeholder="Enter Your E-mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="password" placeholder="Enter Your Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="text" placeholder="Enter Your Address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="text" placeholder="Enter Your Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class=" mt-2">
                                                    <label>Select City</label>
                                                    <select class="username w-100">
                                                        <option></option>
                                                        <option value="Karachi">Karachi</option>
                                                        <option value="Lahore">Lahore</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <label>Age</label>
                                                <div class="username">
                                                    <i class="lni lni-user"></i>
                                                    <input type="text" placeholder="Age">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <label>Profile Picture</label>
                                                <div class="username w-100">
                                                    <i class="lni lni-user"></i>
                                                    <input type="file" placeholder="Select Picture">
                                                </div>
                                            </div>
                                            <div class="col-md-3">

                                                <label>Gender</label> <br>

                                                <select class="username w-100">
                                                    <option></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>


                                            </div>
                                            <div class="col-md-3">
                                                <label>Specialization</label> <br>

                                                <select class="username w-100">
                                                    <option></option>
                                                    <option value="Cardiologist">Cardiologist</option>
                                                    <option value="Audiologist">Audiologist</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <button class="signupformBtn">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div> --}}



                {{-- ====================================== doctors table ========================================= --}}


                <div id="doctorstable" class="mt-5 ">

                    <div class="row">
                        <div class="col-md-12">

                            <h3 class=" text-center display-5">Doctor's Detail's</h3>
                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-md-12">


                            <div class="body">


                                <div class="container container-table">
                                    <table class="neumorphic w-100">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Phone</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Specialization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="" alt=""></td>
                                                <td>Dr. shahbaz</td>
                                                <td>shahbaz@gmail.com</td>
                                                <td>shazi123</td>
                                                <td>012345678</td>
                                                <td>25</td>
                                                <td>Male</td>
                                                <td>Plot No. G-21/23, Block-8, Khaliquzzaman Road, Clifton، Block 8 Clifton
                                                </td>
                                                <td>Karachi</td>
                                                <td>Cardiologist</td>

                                                <td class="d-flex"> <button type="button" name="edit_button"
                                                        id="editBtn"
                                                        class="btn btn-warning btn-circle btn-sm edit_button">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button type="button" name="edit_button"
                                                        class="btn btn-danger btn-circle btn-sm edit_button ml-1">
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


                {{-- ====================================== Patient's Detail's ========================================= --}}


                <div id="patientstable" class="mt-5 ">

                    <div class="row">
                        <div class="col-md-12">

                            <h3 class=" text-center display-5">Patient's Detail's</h3>
                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-md-12">


                            <div class="body">


                                <div class="container container-table">
                                    <table class="neumorphic w-100">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Phone</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Address</th>
                                                <th>City</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="" alt=""></td>
                                                <td>Zain</td>
                                                <td>Zain@gmail.com</td>
                                                <td>zain123</td>
                                                <td>012345678</td>
                                                <td>25</td>
                                                <td>Male</td>
                                                <td>Plot No. G-21/23, Block-8, Khaliquzzaman Road, Clifton، Block 8 Clifton
                                                </td>
                                                <td>Karachi</td>

                                                <td class="d-flex"> <button type="button" name="edit_button"
                                                        id="editBtn"
                                                        class="btn btn-warning btn-circle btn-sm edit_button">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button type="button" name="edit_button"
                                                        class="btn btn-danger btn-circle btn-sm edit_button ml-1">
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



                {{-- ====================================== edit form ========================================= --}}

                <div class="row" id="editscheduleform">
                    <div class="col-md-12 col-sm-6">

                        <div class="parentdiv d-flex justify-content-center">

                            <div class="edit-div " style="margin-left: ;">
                                <div class="title title-div">Edit Doctor's Schedule</div>
                                <div class="edit-in">
                                    <div class="username">
                                        <i class="lni lni-user"></i>
                                        <input type="username" placeholder="Doctor Name">
                                    </div>
                                    <div class="username">
                                        <i class="lni lni-user"></i>
                                        <input type="date" placeholder=" Date">
                                    </div>
                                    <div class="username">
                                        <i class="lni lni-user"></i>
                                        <input type="username" placeholder=" Day">
                                    </div>
                                    <div class="username">
                                        <i class="lni lni-user"></i>
                                        <input type="time" placeholder="Time">
                                    </div>

                                    <button class="editformBtn">Update</button>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>


    <script>
        $(document).ready(function() {

            $("#doctorstable").hide();
            $("#patientstable").hide();
            $("#schedule").hide();
            $("#editscheduleform").hide();
            $("#registerform").hide();
            $("#registerAsDoctor").hide();
            $("#registerAsPatient").hide();
            $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();
                $("#registerform").hide();


            $("#dashboard").click(function() {
                $("#doctorstable").hide();
                $("#signupform").hide();
                $("#schedule").hide();
                $("#editscheduleform").hide();
                $("#patientstable").hide();
                $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();
                $("#registerform").hide();


            });

            $("#doctors").click(function() {
                $("#doctorstable").show();
                $("#signupform").hide();
                $("#schedule").hide();
                $("#editscheduleform").hide();
                $("#patientstable").hide();
                $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();
                $("#registerform").hide();


            });

            $("#addDoctorBtn").click(function() {
                $("#registerform").show();
                // $("#doctors").hide();
                $("#schedule").hide();
                $("#editscheduleform").hide();
                $("#patientstable").hide();
                $("#doctorstable").hide();
                $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();


            });


            $("#scheduleBtn").click(function() {
                $("#doctorstable").hide();
                $("#signupform").hide();
                $("#schedule").show();
                $("#editscheduleform").hide();
                $("#adduserform").hide();
                $("#patientstable").hide();
                $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();
                $("#registerform").hide();


            });

            $("#patientsBtn").click(function() {
                $("#doctorstable").hide();
                $("#signupform").hide();
                $("#schedule").hide();
                $("#editscheduleform").hide();
                $("#adduserform").hide();
                $("#registerAsPatient").hide();
                $("#registerAsDoctor").hide();
                $("#patientstable").show();
                $("#registerform").hide();


            });
            $(".registerAsDoctor").click(function() {
                $("#registerAsDoctor").show();
                $("#registerAsPatient").hide();
                $("#registerform").hide();
                
            });
            $(".registerAsPatient").click(function() {
                $("#registerAsPatient").show();
                $("#registerAsDoctor").hide();
                $("#registerform").hide();

            });




        })
    </script>





</body>

</html>

