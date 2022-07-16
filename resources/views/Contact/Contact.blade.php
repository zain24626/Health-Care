@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: font-primary;
            font-size: 16px;
            line-height: 1.8;
            font-weight: normal;
            background: #fafafa;
            color: lighten(black, 40%);
        }

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

        a {
            transition: .3s all ease;
            color: primary;


        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5 {
            line-height: 1.5;
            font-weight: 400;
            font-family: font-primary;
            color: black;
        }

        .bg-primary {
            background: primary !important;
        }

        .ftco-section {
            padding: 7em 0;
        }

        .ftco-no-pt {
            padding-top: 0;
        }

        .ftco-no-pb {
            padding-bottom: 0;
        }




        .img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .form-control {
            height: 44px;
            background: white;
            color: rgba(0, 0, 0, .8);
            font-size: 14px;
            border-radius: 2px;
            box-shadow: none !important;
            border: none;

        }

        textarea.form-control {
            height: inherit !important;
        }


        .wrapper {
            width: 100%;
        }

        .contact-wrap {
            background: #e8edf0;
        }


        .dbox {
            width: 100%;
            margin-bottom: 25px;
            padding: 0 20px;


        }

        .btn {
            padding: 12px 16px;
            cursor: pointer;
            border-width: 1px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 400;
            -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
            position: relative;
            margin-bottom: 20px;



        }


        .submitting {
            float: left;
            width: 100%;
            padding: 10px 0;
            display: none;
            font-size: 16px;
            font-weight: 500;
            color: primary;
        }
    </style>

    </head>

    <body>

        <img src="https://img.freepik.com/free-photo/contact-us-concept-business-woman-hand-pointing-icon-email-customer-service-call-center_2034-1944.jpg?w=2000"
            alt="" width="100%" height="100%">
        <section class="ftco-section">
            
            <div class="container" style="background: #e8edf0; border-radius:20px">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters mb-5">
                                <div class="col-md-7 pt-5">
                                    <div class="contact-wrap w-100 p-md-5 p-4 ">
                                        <h3 class="mb-4 underline" id="CommonDiseasesText">Contact Us</h3>
                                        <div id="form-message-warning" class="mb-4"></div>

                                        <form id="contactForm" name="contactForm" class="contactForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="name">Full Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="email">Email Address</label>
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Subject</label>
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="#">Message</label>
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button class="button mt-4">Send Message</button>
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 w-100">
                                    <div class="row pt-5 mt-5">
                                        <div class="col-md-6">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-map-marker contacticon"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Address:</span> 198 West 21th Street</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone contacticon"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane contacticon"></span>
                                                </div>
                                                <div class="text">
                                                    <p class="d-flex"><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-globe contacticon"></span>
                                                </div>
                                                <div class="text">
                                                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 ">

                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57938.16920739052!2d67.1612928!3d24.8250368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1656196185941!5m2!1sen!2s"
                                                width="100%" height="350" style="border: 0;" allowfullscreen="" loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            




                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
