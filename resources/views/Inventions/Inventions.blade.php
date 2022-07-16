@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/CSS/style.css">
    <script src="/js/app.js"></script>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>


    <div class="jumbotron">

        <div class="row">
            <div class="col-md-3">
                <div class="sidebar ml-3" style="margin-top: 120px">
                    <div>
                        <h2 id="CommonDiseasesText" class="underline">Medical Invention's</h2>
                    </div>
                    <a href="#" id="thermometer"> Medical thermometer</a>
                    <a href="#" id="Stethoscope">Stethoscope</a>
                    <a href="#" id="X-Ray">X-Ray Imaging</a>
                    <a href="#" id="Antibiotics">Antibiotics</a>
                    <a href="#" id="HypodermicNeedle">Antibiotics</a>

                </div>

            </div>




            <div class="col-md-7" id="thermometerInfo">
                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline">Medical Thermometer
                    </h1>

                    <img src="/Inventions_Images/1.jpg" class="mt-3" alt="">

                    <p class="mt-2"><strong style="color:#f44718"> Thermometer </strong> are so ubiquitous today, yet we
                        are
                        not exactly sure who invented the device. Gabriel Fahrenheit first invented the mercury thermometer
                        in 1714, which is still in usage today. However, the first device used to measure temperature
                        appeared in the 1500s and was created by Galileo.

                        The device was based on the simple principle that a liquid’s density changes with respect to its
                        temperature. Nevertheless, mercury thermometers are being phased out in favor of the digital
                        thermometer due to the poisonous nature of mercury. .</p>



                </div>

            </div>

            {{-- ==================== Lung cancer ========================= --}}

            <div class="col-md-7" id="StethoscopeInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Stethoscope </h1>

                    <img src="/Inventions_Images/2.jpg" class="mt-3" alt="">


                    <p class="mt-2">Before the<strong style="color:#f44718"> Stethoscope</strong> was invented, doctors
                        would
                        listen to their patient's heartbeats by putting their ear on to their chests, a quite crude and
                        inefficient method. For instance, if there was considerable insulation between the actual heart and
                        exterior of his chest in the form of fat, this method failed.

                        French physician René Laënnec faced a similar situation when he couldn't accurately judge one of his
                        patients' heart rates on account that the patient had too much fat on him. He invented the
                        'stethoscope,' creating a trumpet-shaped wooden tube that amplified sounds coming from lungs and
                        heart. That principle of sound amplification has yet to change.</p>


                </div>

            </div>



            {{-- ==================== X-Ray ========================= --}}

            <div class="col-md-7" id="X-RayInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> X-Ray </h1>

                    <img src="/Inventions_Images/3.jpg" class="mt-3" alt="">


                    <p class="mt-2">It’s hard to imagine the correct diagnosis and treatment of injuries as common as
                        fractures without X-ray imaging technology. X-rays were accidentally discovered when a German
                        physicist Wilhelm Conrad Röntgen was studying electric currents passing through a gas of extremely
                        low pressure.

                        He observed that in a darkened room, the cathode ray tube covered with barium platinocyanide caused
                        a fluorescent effect. Since the cathode rays are invisible, he didn’t know what the rays were and
                        named it X-radiation for its unknown nature. He won the first-ever Nobel Prize in Physics in 1901
                        for his discovery.

                        The initial reception to the discovery, however, was met with hostility and mockery with a New York
                        Times journalist referring to it as “an alleged discovery of a method to photograph the invisible”..
                    </p>


                </div>

            </div>

            {{-- ==================== Chronic kidney Disease ========================= --}}

            <div class="col-md-7  " id="AntibioticsInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Antibiotics </h1>

                    <img src="/Inventions_Images/4.jpg" class="mt-3" alt="">


                    <p class="mt-2"> People most commonly associate the advent of antibiotics with Alexander Fleming’s
                        discovery of penicillin. In actuality, the age of antibiotics began in 1907 with the creation of
                        Salvarsan by Alfred Bertheim and Paul Ehrlich. Today this Salvarsan is known as Arsphenamine. It was
                        the first drug to effectively counter Syphilis, marking the beginning of anti-bacterial treatment.

                        Alexander Fleming’s discovery of anti-bacterial property of Penicillium Notatum in 1928 was when
                        antibiotics started gaining mass attention. Today, antibiotics have revolutionized medicine, and in
                        combination with vaccines have helped with eradicating diseases like tuberculosis.</p>


                </div>

            </div>
            {{-- ==================== Hypodermic Needle ========================= --}}

            <div class="col-md-7  " id="HypodermicNeedleInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Hypodermic Needle </h1>

                    <img src="/Inventions_Images/5.jpg" class="mt-3" alt="">


                    <p class="mt-2">A hypodermic needle with its austere appearance and a simple working principle was
                        invented only about 150 years ago. Before that in ancient Greece and Rome, physicians used thin
                        hollow tools to inject fluids into the body. In 1656, a dog was given an intravenous injection via a
                        goose quill by Christopher Wren.

                        The modern hypodermic needle was invented by Charles Pravaz and Alexander Wood somewhere in the
                        mid-1800s. Today, these needles are used to deliver correct drug dosage in treatment and extract
                        body fluids with minimal pain and risk of contamination.</p>


                </div>

            </div>




        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#StethoscopeInfo').hide();
            $('#X-RayInfo').hide();
            $('#AntibioticsInfo').hide();

            $('#thermometer').css('color', 'black');
            $('#thermometer').css('margin-left', '20px');
            // $('#thermometerInfo').hide();

            $('#Stethoscope').click(function() {

                $('#thermometerInfo').hide();
                $('#StethoscopeInfo').show();
                $('#X-RayInfo').hide();
                $('#AntibioticsInfo').hide();
                $('#HypodermicNeedleInfo').hide();

                $('#X-Ray').css('color', '#bbb');
                $('#X-Ray').css('margin-left', '0px');

                $('#Antibiotics').css('color', '#bbb');
                $('#Antibiotics').css('margin-left', '0px');

                $('#thermometer').css('color', '#bbb');
                $('#thermometer').css('margin-left', '0px');
                
                $('#HypodermicNeedle').css('color', '#bbb');
                $('#HypodermicNeedle').css('margin-left', '0px');

                $('#Stethoscope').css('color', 'black');
                $('#Stethoscope').css('margin-left', '20px');

                $('#Stethoscope').css('transition', '0.4s');


            })
            $('#X-Ray').click(function() {

                $('#thermometerInfo').hide();
                $('#StethoscopeInfo').hide();
                $('#X-RayInfo').show();
                $('#AntibioticsInfo').hide();
                $('#HypodermicNeedleInfo').hide();


                $('#Stethoscope').css('color', '#bbb');
                $('#Stethoscope').css('margin-left', '0px');

                $('#Antibiotics').css('color', '#bbb');
                $('#Antibiotics').css('margin-left', '0px');

                $('#thermometer').css('color', '#bbb');
                $('#thermometer').css('margin-left', '0px');
                $('#HypodermicNeedle').css('color', '#bbb');
                $('#HypodermicNeedle').css('margin-left', '0px');

                $('#X-Ray').css('color', 'black');
                $('#X-Ray').css('margin-left', '20px');

                $('#X-Ray').css('transition', '0.4s');


            })
            $('#Antibiotics').click(function() {

                $('#thermometerInfo').hide();
                $('#StethoscopeInfo').hide();
                $('#X-RayInfo').hide();
                $('#AntibioticsInfo').show();
                $('#HypodermicNeedleInfo').hide();

                $('#HypodermicNeedle').css('color', '#bbb');
                $('#HypodermicNeedle').css('margin-left', '0px');

                $('#X-Ray').css('color', '#bbb');
                $('#X-Ray').css('margin-left', '0px');

                $('#Stethoscope').css('color', '#bbb');
                $('#Stethoscope').css('margin-left', '0px');

                $('#thermometer').css('color', '#bbb');
                $('#thermometer').css('margin-left', '0px');

                $('#Antibiotics').css('color', 'black');
                $('#Antibiotics').css('margin-left', '20px');

                $('#Antibiotics').css('transition', '0.4s');


            })
            $('#thermometer').click(function() {

                $('#thermometerInfo').show();
                $('#StethoscopeInfo').hide();
                $('#X-RayInfo').hide();
                $('#AntibioticsInfo').hide();
                $('#HypodermicNeedleInfo').hide();

                $('#HypodermicNeedle').css('color', '#bbb');
                $('#HypodermicNeedle').css('margin-left', '0px');

                $('#X-Ray').css('color', '#bbb');
                $('#X-Ray').css('margin-left', '0px');

                $('#Antibiotics').css('color', '#bbb');
                $('#Antibiotics').css('margin-left', '0px');

                $('#Stethoscope').css('color', '#bbb');
                $('#Stethoscope').css('margin-left', '0px');

                $('#thermometer').css('color', 'black');
                $('#thermometer').css('margin-left', '20px');

                $('#thermometer').css('transition', '0.4s');


            })
           
            $('#HypodermicNeedle').click(function() {

                $('#thermometerInfo').hide();
                $('#StethoscopeInfo').hide();
                $('#X-RayInfo').hide();
                $('#AntibioticsInfo').hide();
                $('#HypodermicNeedleInfo').show();

                $('#HypodermicNeedle').css('color', 'black');
                $('#HypodermicNeedle').css('margin-left', '20px');

                $('#X-Ray').css('color', '#bbb');
                $('#X-Ray').css('margin-left', '0px');

                $('#Antibiotics').css('color', '#bbb');
                $('#Antibiotics').css('margin-left', '0px');

                $('#Stethoscope').css('color', '#bbb');
                $('#Stethoscope').css('margin-left', '0px');

                $('#thermometer').css('color', '#bbb');
                $('#thermometer').css('margin-left', '0px');

                $('#thermometer').css('transition', '0.4s');


            })
        })
    </script>
@endsection
