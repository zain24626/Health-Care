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
                        <h2 id="CommonDiseasesText" class="underline">Diseases</h2>
                    </div>
                    <a href="#"   id="dengue" >Dengue</a>
                    <a href="#"   id="LungCancer">Lung Cancer</a>
                    <a href="#"  id="Asthma">Asthma</a>
                    <a href="#"  id="KidneyDisease">Chronic Kidney Disease</a>

                </div>

            </div>




            <div class="col-md-7" id="DengueInfo">
                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline"> Dengue </h1>

                    <img src="/Index_Images/disease2.jpg" class="mt-3" alt="">

                    <p class="mt-2"><strong style="color:#f44718"> Dengue </strong> viruses are spread to people through
                        the bite of an infected
                        Aedes species mosquito. Dengue is
                        common in more than 100 countries around the world. About 1 in 4 people who are infected with dengue
                        will get sick. The most common symptom of dengue is fever with any of the following: nausea,
                        vomiting, rash, aches and pains (eye pain, typically behind the eyes, muscles, joint, or bone pain),
                        and any warning signs. Though most people recover after about a week, 1 in 20 people who get sick
                        will develop severe dengue. Severe dengue can result in shock, internal bleeding, and even death.
                        The best way to prevent dengue is to prevent mosquito bites.</p>

                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Prevention Tips </h1>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Avoid getting infected with dengue by preventing
                            mosquito bites. Use EPA-registered insect repellents when outdoors that contain one of the
                            following
                            ingredients: DEET, picaridin, IR3535, oil of lemon eucalyptus, para-menthane-diol, or
                            2-undecanone.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Wear long-sleeved shirts and long pants.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Treat clothing and gear with permethrin or buy permethrin-treated clothing and gear.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Dress your child in clothing that covers arms and legs. Cover strollers and baby carriers with
                            mosquito netting.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Choose a hotel or lodging with air conditioning or screens on windows and doors.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Once a week, empty and scrub, turn over, cover, or throw out any item that holds water, such as
                            tires, buckets, planters, toys, pools, birdbaths, or trash containers. Control mosquitoes inside
                            and outside your home.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> If you or a family member have dengue, it is important to avoid mosquito bites during the first
                            week of illness to prevent further spread of the virus.
                        </p>
                    </div>


                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Treatment </h1>


                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> There is no specific medicine to treat dengue infection. If you think you may have dengue fever,
                            you should use pain relievers with acetaminophen and avoid medicines with aspirin, which could
                            worsen bleeding. You should also rest, drink plenty of fluids, and see your doctor. If you start
                            to feel worse in the first 24 hours after your fever goes down, you should get to a hospital
                            immediately to be checked for complications.
                        </p>
                    </div>

                </div>

            </div>

            {{-- ==================== Lung cancer ========================= --}}

            <div class="col-md-7" id="LungCancerInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Lung Cancer </h1>

                    <img src="/Index_Images/disease1.jpg" class="mt-3" alt="">

                    <p class="mt-2"><strong style="color:#f44718"> Lung cancer </strong> is the leading cause of cancer
                        death in the United States. Cigarette smoking is the #1 cause of lung cancer, but it also can be
                        caused by using other forms of tobacco like pipes or cigars, breathing secondhand smoke, being
                        exposed to asbestos or radon, and having a family history of lung cancer. Lung cancer symptoms may
                        include coughing that gets worse or doesn’t go away, chest pain, shortness of breath, wheezing, and
                        coughing up blood. Other illnesses can cause these symptoms, too. If you have any symptoms, talk to
                        your doctor. For help to quit smoking, call 1 (800) QUIT-NOW, text “QUIT” to 47848 from your cell
                        phone, or visit cdc.gov/quit.</p>

                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Prevention Tips </h1>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> If you smoke, quit. For help, ask your doctor, call 1 (800) QUIT-NOW, or text the word QUIT to
                            47848 from your mobile phone.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Avoid breathing in smoke from other people’s cigarettes, cigars, or pipes.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Get your home tested for radon.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Be aware that cancer survivors who had radiation therapy to the chest are at higher risk of lung
                            cancer.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> If you are 50 to 80 years old, and you smoke now or quit within the past 15 years, and you
                            smoked a lot (1 pack a day for 20 years or 2 packs a day for 10 years), ask your doctor if lung
                            cancer screening is right for you.
                        </p>
                    </div>



                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Treatment </h1>


                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> People with non-small cell lung cancer can be treated with surgery, chemotherapy, radiation
                            therapy, targeted therapy, or a combination of these treatments. People with small cell lung
                            cancer are usually treated with radiation therapy and chemotherapy.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Surgery. An operation where doctors cut out cancer tissue.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Chemotherapy. Using special medicines to shrink or kill the cancer. The drugs can be pills you
                            take or medicines given in your veins, or sometimes both.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Radiation therapy. Using high-energy rays (similar to X-rays) to kill the cancer.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Targeted therapy. Using drugs to block the growth and spread of cancer cells. The drugs can be
                            pills you take or medicines given in your veins. You will get tests to see if targeted therapy
                            is right for your cancer type before this treatment is used.
                        </p>
                    </div>

                </div>

            </div>



            {{-- ==================== Asthma ========================= --}}

            <div class="col-md-7" id="AsthmaInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Asthma </h1>

                    <img src="/Index_Images/disease3.jpg" class="mt-3" alt="">

                    <p class="mt-2"><strong style="color:#f44718"> Inhale. Exhale. </strong> We do it
                        every day, but some days it’s harder if you have asthma. Both kids and adults can go through
                        repeated bouts of wheezing, trouble breathing, chest tightness, and nighttime or early morning
                        coughing. If you have asthma, you have it all the time, but will only have attacks when something
                        bothers your lungs. Certain things can trigger an asthma attack like smoke from cigarettes, smog and
                        air pollution, mold, dust mites, and even cockroaches! Anyone with asthma has it their entire life.
                        Outgrowing asthma is a myth.</p>

                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Prevention Tips </h1>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Work with your doctor to develop your personal Asthma Action Plan.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Know the warning signs of an asthma attack.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> Learn what your asthma triggers are and avoid them.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>Take your medicine exactly as your medical professional tells you to do.
                        </p>
                    </div>




                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Treatment </h1>


                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>The main injections for asthma are:
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> benralizumab (Fasenra)
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>mepolizumab (Nucala)
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> reslizumab (Cinqaero)
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> omalizumab (Xolair)
                        </p>
                    </div>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> <strong>Surgery</strong> <br>
                            A procedure called bronchial thermoplasty may be offered as a treatment for severe asthma. It
                            works well and there are no serious concerns about its safety.

                            You will be sedated or put to sleep using a general anaesthetic during a bronchial thermoplasty.

                            It involves passing a thin, flexible tube down your throat and into your lungs. Heat is then
                            used on the muscles around the airways to help stop them narrowing and causing asthma symptoms.

                        </p>
                    </div>

                </div>

            </div>

            {{-- ==================== Chronic kidney Disease ========================= --}}

            <div class="col-md-7  " id="kidneyDiseaseInfo" style="display: none">
                <div class="mt-5">

                    <h1 class="underline" id="CommonDiseasesText"> Chronic kidney Disease </h1>

                    <img src="/Index_Images/disease4.jpg" class="mt-3" alt="">

                    <p class="mt-2"> When people develop <strong style="color:#f44718"> chronic
                            kidney disease (CKD) </strong>, their kidneys become damaged and over time may not clean the
                        blood as well as
                        healthy kidneys. If kidneys do not work well, toxic waste and extra fluid accumulate in the body and
                        may lead to high blood pressure, heart disease, stroke, and early death. However, people with CKD
                        and people at risk for CKD can take steps to protect their kidneys with the help of their health
                        care providers.</p>

                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Prevention Tips </h1>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> A healhy, balanced diet can reduce your risk of kidney disease by keeping your blood pressure
                            and cholesterol at a healthy level.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> A balanced diet should include:
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> plenty of fruit and vegetables – aim for at least 5 portions a day
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>meals that include starchy foods, such as potatoes, wholegrain bread, rice or pasta
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>some dairy or dairy alternatives
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>some beans or pulses, fish, eggs, or meat as a source of protein
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>low levels of saturated fat, salt and sugar
                        </p>
                    </div>





                    <h1 class="mt-5 underline" id="CommonDiseasesText"> Treatment </h1>


                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>Prevention
                            There's no cure for chronic kidney disease (CKD), but treatment can help relieve the symptoms
                            and stop it getting worse.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> The main treatments are:
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>lifestyle changes – to help you stay as healthy as possible
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> medicine – to control associated problems, such as high blood pressure and high cholesterol
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> dialysis – treatment to replicate some of the kidney's functions, which may be necessary in
                            advanced (stage 5) CKD
                        </p>
                    </div>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> kidney transplant – this may also be necessary in advanced (stage 5) CKD
                        </p>
                    </div>

                </div>

            </div>




        </div>
    </div>


    <script>
       
            $(document).ready(function() {
            $('#LungCancerInfo').hide();
            $('#AsthmaInfo').hide();
            $('#kidneyDiseaseInfo').hide();

            $('#dengue').css('color' , 'black');
                $('#dengue').css('margin-left' , '20px');
            // $('#DengueInfo').hide();

            $('#LungCancer').click(function() {

                $('#DengueInfo').hide();
                $('#LungCancerInfo').show();
                $('#AsthmaInfo').hide();
                $('#kidneyDiseaseInfo').hide();

                $('#Asthma').css('color' , '#bbb');
                $('#Asthma').css('margin-left' , '0px');
               
                $('#KidneyDisease').css('color' , '#bbb');
                $('#KidneyDisease').css('margin-left' , '0px');
               
                $('#dengue').css('color' , '#bbb');
                $('#dengue').css('margin-left' , '0px');
               
                $('#LungCancer').css('color' , 'black');
                $('#LungCancer').css('margin-left' , '20px');
                
                $('#LungCancer').css('transition' , '0.4s');


            })
            $('#Asthma').click(function() {

                $('#DengueInfo').hide();
                $('#LungCancerInfo').hide();
                $('#AsthmaInfo').show();
                $('#kidneyDiseaseInfo').hide();

                $('#LungCancer').css('color' , '#bbb');
                $('#LungCancer').css('margin-left' , '0px');
               
                $('#KidneyDisease').css('color' , '#bbb');
                $('#KidneyDisease').css('margin-left' , '0px');
               
                $('#dengue').css('color' , '#bbb');
                $('#dengue').css('margin-left' , '0px');
               
                $('#Asthma').css('color' , 'black');
                $('#Asthma').css('margin-left' , '20px');

                $('#Asthma').css('transition' , '0.4s');


            })
            $('#KidneyDisease').click(function() {

                $('#DengueInfo').hide();
                $('#LungCancerInfo').hide();
                $('#AsthmaInfo').hide();
                $('#kidneyDiseaseInfo').show();

                $('#Asthma').css('color' , '#bbb');
                $('#Asthma').css('margin-left' , '0px');
               
                $('#LungCancer').css('color' , '#bbb');
                $('#LungCancer').css('margin-left' , '0px');
               
                $('#dengue').css('color' , '#bbb');
                $('#dengue').css('margin-left' , '0px');
               
                $('#KidneyDisease').css('color' , 'black');
                $('#KidneyDisease').css('margin-left' , '20px');

                $('#KidneyDisease').css('transition' , '0.4s');


            })
            $('#dengue').click(function() {

                $('#DengueInfo').show();
                $('#LungCancerInfo').hide();
                $('#AsthmaInfo').hide();
                $('#kidneyDiseaseInfo').hide();

                $('#Asthma').css('color' , '#bbb');
                $('#Asthma').css('margin-left' , '0px');
               
                $('#KidneyDisease').css('color' , '#bbb');
                $('#KidneyDisease').css('margin-left' , '0px');
               
                $('#LungCancer').css('color' , '#bbb');
                $('#LungCancer').css('margin-left' , '0px');
               
                $('#dengue').css('color' , 'black');
                $('#dengue').css('margin-left' , '20px');

                $('#dengue').css('transition' , '0.4s');


            })
        })
    </script>
@endsection
