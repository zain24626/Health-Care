@extends('layouts.app')

@section('content')

<div style="height:400px;overflow:hidden">

    <img src="/About_Images/about.jpg" width="100%">
    
</div>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5 pt-5">
            <h1>Meet the Team
            </h1>
            <p>Our team is a mixture of Silicon Valley veterans and highly skilled contractors around the world. On
                the Bay Area leadership team consists of: serial entrepreneur and veteran product manager David
                Weekly (Stanford CS, Google & Facebook product management, built two companies previously), our
                chief design officer Anna Western, and our iOS lead engineer Dustin Dettmer. The company has funding
                led by Future Ventures.</p>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-5" >
        <div class="col-md-4 mt-5"
            style="display: grid; align-items: center; justify-items: center;">
            <img id="teamimg" src="/About_Images/team_one.jpg" alt="" srcset="">
            <h3 class="mt-3">DAVID E. WEEKLY</h3>
            <h6>Founder & CEO</h6>
            <p class="text-center">Stanford CS, Google & Facebook product management, built two companies
                previously.</p>
        </div>
        <div class="col-md-4 mt-5" style="display: grid; align-items: center; justify-items: center;">
            <img id="teamimg" src="/About_Images/team_2.jpg" alt="" srcset="">
            <h3 class="mt-3">DAVID E. WEEKLY</h3>
            <h6>Founder & CEO</h6>
            <p class="text-center">Stanford CS, Google & Facebook product management, built two companies
                previously.</p>
        </div>
        <div class="col-md-4 mt-5" style="display: grid; align-items: center; justify-items: center;">
            <img id="teamimg" src="/About_Images/team_3.png" alt="" srcset="">
            <h3 class="mt-3">DAVID E. WEEKLY</h3>
            <h6>Founder & CEO</h6>
            <p class="text-center">Stanford CS, Google & Facebook product management, built two companies
                previously.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-4 mt-5"   style="display: grid; align-items: center; justify-items: center;">
            <img id="teamimg" src="/About_Images/team_one.jpg" alt="" srcset="">
            <h3 class="mt-3">DAVID E. WEEKLY</h3>
            <h6>Founder & CEO</h6>
            <p class="text-center">Stanford CS, Google & Facebook product management, built two companies
                previously.</p>
        </div>
        <div class="col-md-4 mt-5"  style="display: grid; align-items: center; justify-items: center;">
            <img id="teamimg" src="/About_Images/team_2.jpg" alt="" srcset="">
            <h3 class="mt-3">DAVID E. WEEKLY</h3>
            <h6>Founder & CEO</h6>
            <p class="text-center">Stanford CS, Google & Facebook product management, built two companies
                previously.</p>
        </div>
        <div class="col-md-2"></div>

    </div>


    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-5 pt-5"  >
            <h1 >Medical Advisory
                Board</h1>
            <p>While we've just begun our journey with the medical community, we're starting out by putting together
                a Medical Advisory Board that helps guide our decision making and approach to the medical community.
                We'd love to explore having you join; if you're a licensed medical professional who would like to
                help us, please send us an email at mrshahbaz087@gmail.com with your background and interest.</p>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row mt-5 pt-5">
        <div class="col-md-1"></div>

        <div class="col-md-5"  >
            <img id="advisor" src="/About_Images/advisor2.jpg" alt="" srcset="">
        </div>
        <div class="col-md-5" >
            <h3 class="mt-5" >
                DR. DANIEL
                KRAFT</h3>
            <p>Daniel Kraft is a Stanford and Harvard trained physician-scientist, inventor, entrepreneur, and
                innovator and is serving as the Chair of the XPRIZE Pandemic Alliance Task Force.</p>
        </div>

        <div class="col-md-1"></div>


    </div>

    <div class="row mt-5 pt-5">
        <div class="col-md-1"></div>

        <div class="col-md-5 " >
            <h3 class="mt-5 pt-5"
               >DR. DAN
                GARDNER</h3>
            <p>Diplomate, American Board of Psychiatry and Neurology
                Distinguished Life Fellow, American Psychiatric Association
                Voluntary Assistant Clinical Professor, Department of Psychiatry,
                ​UCSD School of Medicine</p>
        </div>
        <div class="col-md-5" style="display: grid; align-items: center; justify-items: center;">
            <img id="advisor" src="/About_Images/advisor3.jpg" alt="" srcset="">
        </div>

        <div class="col-md-1"></div>


    </div>
    <div class="row mt-5 pt-5">
        <div class="col-md-1"></div>

        <div class="col-md-5" style="display: grid; align-items: center; justify-items: center;">
            <img id="advisor" src="/About_Images/advisor4.jpg" alt="" srcset="">
        </div>
        <div class="col-md-5" >
            <h3 class="mt-5" >
                DR. MRUNALINI PARVATANENI</h3>
            <p>Mrunalini Parvataneni, MD is a Pediatric Ophthalmologist has spent over 15 years across the many
                facets of healthcare – as a high volume surgeon, as a key operational leader in one of the largest
                eye care practices in the US, as a hospital board member and as an advisor to health tech startups.
            </p>
        </div>

        <div class="col-md-1"></div>


    </div>

</div>
<style>
    #teamimg {
        clip-path: circle(50%);
        width: 50%;

    }

    #advisor {
        clip-path: circle(48%);
        width: 50%;
    }
</style>

{{-- <script>
    AOS.init();
</script> --}}





@endsection