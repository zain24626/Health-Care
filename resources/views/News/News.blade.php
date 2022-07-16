@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/CSS/style.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        

    <div class="jumbotron">

        <div class="row">
            <div class="col-md-4 ">
                <div class="sidebar ml-3 " style="margin-top: 120px">
                    <div>
                        <h2 id="CommonDiseasesText" class="underline">Latest News</h2>
                    </div>
                    <div class="mt-3">

                        <div class="d-flex">
                            <img src="/News_Images/1.jpg" width="100px" alt="">
                            <a href="#" id="FirstNews">Long COVID: Disrupted sleep, fatigue common months after
                                infection</a>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="/News_Images/2.jpg" width="100px" alt="">
                            <a href="#" id="SecondNews"> Long COVID still a risk, even for vaccinated people </a>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="/News_Images/3.jpg" width="100px" alt="">
                            <a href="#" id="ThirdNews"> Alopecia: FDA approves Olumiant for hair loss treatment </a>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="/News_Images/4.jpg" width="100px" alt="">
                            <a href="#" id="ForthNews"> Stroke recovery: How an existing drug may help the brain
                                repair itself </a>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="/News_Images/5.jpg" width="100px" alt="">
                            <a href="#" id="FifthNews"> Chronic migraine: Common anesthetic relieves pain in new study
                            </a>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-8" id="News1">

                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline"> Long COVID: Disrupted sleep, fatigue common months after
                        infection </h1>

                    <img src="/News_Images/1.jpg" width="100%" class="mt-3" alt="">

                    <p class="mt-2"> Trouble <strong style="color:#f44718"> slepping and fatigue </strong> are among
                        the often-reported symptoms of the condition known as “long COVID.” New research from the Cleveland
                        Clinic in Ohio presents the findings of researchers investigating sleep issues in people who have
                        recovered from COVID-19.</p>


                    <p> The research was presented in June at Sleep 2022, a meeting of the Associated Professional Sleep
                        Societies, a joint venture of the American Academy of Sleep Medicine (AASM) and the Sleep Research
                        Society (SRS).
                    </p>

                    <p>There is a risk of developing long COVID even for the vaccinated, and researchers suggest the
                        condition can persist for years for some people.</p>

                    <p>The researchers analyzed the experiences of 962 Cleveland Clinic ReCOVer Clinic patients between
                        February 2021 and April 2022. The individuals filled out the sleep disturbance and fatigue
                        questionnaire sections of the National Institutes of Health’s Patient-Reported Outcomes Measurement
                        Information System (PROMIS).</p>


                    <strong>The clinic found that its Black patients were more than three times more likely to have
                        moderate-to-severe sleep disturbances after recovering from COVID-19.</strong>

                    <p>Another factor that was associated with a higher than average incidence of sleep disturbance was
                        anxiety.</p>

                    <p>After factoring for age, race, and body mass index, the analysis concluded:</p>

                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p> After recovery from COVID-19, 41.3% of patients reported at least moderate sleep disturbances,
                            and 8% described severe sleep issues.
                        </p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <p>More than two-thirds of patients (67.2%) reported moderate fatigue.</p>
                    </div>

                    <h1 id="CommonDiseasesText" class="underline"> Anxiety and sleep disruption </h1>

                    <p>“Hundreds of studies,” said Dr. Grandner, “have characterized the strong but complex relationship
                        between sleep and anxiety. For example, anxiety causes a condition called ‘hyperarousal’ — where you
                        are often on alert even if there is no reason to be — and this is a common cause of sleep problems
                        in these individuals.”</p>

                    <strong>Dr. Pena Orbea noted the circular effect anxiety and lack of sleep might have on each other.

                    </strong>
                    <p>“There is a bidirectional effect,” pointed out Dr. Pena Orbea, “between sleep and mental health. Mood
                        disorders are highly prevalent among patients with sleep disturbances. Likewise, sleep disturbances
                        can increase the risk or exacerbate mental distress.”</p>

                    <h1 id="CommonDiseasesText" class="underline"> Fatigue more common than sleep disruption</h1>

                    <p>With more people, nearly two-thirds, reporting fatigue than reporting sleep disruption, there is some
                        unclarity in the relationship, if any, between the two.</p>

                    <p>Dr. Pena Orbea noted, “Our next steps will be to further investigate the interplay of fatigue and
                        mood with sleep disturbances as it relates to [the] Black race.”</p>

                    <p>“Sleep disturbance can cause fatigue,” said Dr. Grandner, “but many other things can as well. Then
                        again, many people may have difficulties with sleep that they may not even be aware of — for
                        example, shallow sleep — that leads them to feel less rested and more fatigued.”</p>





                </div>
            </div>


            <div class="col-md-8" id="News2">

                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline"> Long COVID still a risk, even for vaccinated people </h1>

                    <img src="/News_Images/2.jpg" width="100%" class="mt-3" alt="">

                    <p class="mt-2"><strong style="color:#f44718"> Long COVID </strong> can cause persistent COVID-19
                        symptoms including loss of smell, fatigue, mood changes, and brain fog in addition to disorders of
                        the heart, kidneys, and lungs. These symptoms emerge or continue at least one month after a
                        SARS-CoV-2 infection.</p>


                    <p> It is estimated that 7.7 to 23 million Americans may have developed long COVID, a condition also
                        called post-acute COVID or chronic COVID.
                    </p>

                    <p>A study at the Washington University School of Medicine in St. Louis and the Veterans Affairs St.
                        Louis Health Care System suggests that vaccination alone may not be enough to stop breakthrough
                        COVID-19 infectionsTrusted Source and prevent long COVID.</p>

                    <p>Dr. Ziyad Al-Aly, a clinical epidemiologist at Washington University and lead author of the study,
                        said:</p>


                    <strong>“Vaccinations remain critically important in the fight against COVID-19 […] But vaccines seem to
                        only provide modest protection against long COVID.”</strong>



                    <h1 id="CommonDiseasesText" class="underline"> Higher mortality risk</h1>

                    <p>In an interview Dr. Al-Aly explained that studying the control group helped ensure that the long
                        COVID symptoms observed weren’t due to undetected, pre-existing conditions.</p>

                    <strong>Compared to the control group, people who survived the first 30 days of a breakthrough infection
                        were 1.75 times more likely to die than if they did not develop COVID-19.

                    </strong>
                    <p>Those in the BTI group also had a greater risk of developing at least one post-acute disorder.</p>
                    <p>However, results also confirmed that COVID-19 vaccines provide protection. When comparing BTI to
                        unvaccinated individuals who had SARS-CoV-2 infections, the results indicated that COVID-19 vaccines
                        can lower the risk of death by 34% and long COVID by 15%.</p>

                    <h1 id="CommonDiseasesText" class="underline"> Fatigue more common than sleep disruption</h1>

                    <p>With more people, nearly two-thirds, reporting fatigue than reporting sleep disruption, there is some
                        unclarity in the relationship, if any, between the two.</p>

                    <p>Dr. Pena Orbea noted, “Our next steps will be to further investigate the interplay of fatigue and
                        mood with sleep disturbances as it relates to [the] Black race.”</p>

                    <p>“Sleep disturbance can cause fatigue,” said Dr. Grandner, “but many other things can as well. Then
                        again, many people may have difficulties with sleep that they may not even be aware of — for
                        example, shallow sleep — that leads them to feel less rested and more fatigued.”</p>





                </div>
            </div>

            <div class="col-md-8" id="News3">

                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline"> Alopecia: FDA approves Olumiant for hair loss treatment
                    </h1>

                    <img src="/News_Images/3.jpg" width="100%" class="mt-3" alt="">
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>The Food and Drug Administration (FDA) originally approved Olumiant (baricitinib) in 2018 to
                            treat rheumatoid arthritis.</strong> <br>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>The approval of Oluminant reportedly marks the first time the FDA approved a “systemic
                            treatment” for this form of alopecia.</strong>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>Olumiant is available in tablet form and is a daily medication.</strong>
                    </div>
                    <p> There are several forms of alopecia, including alopecia areata, an autoimmune skin disease that
                        causes bald patches. According to the American Academy of Dermatology Association (AAD), the immune
                        system attacks the hair follicles, which leads to hair falling out. </p>

                    <p>The National Organization for Rare Disorders reports that alopecia areata affects around 2.5 million
                        Americans. While many people experience mild cases of alopecia and only have one or two bald
                        patches, others develop more severe cases and have a significant amount of hair loss.</p>

                    <p>People can develop alopecia at any time in their lives, but the AAD indicates that most people who
                        have it first see symptoms by the time they are 30 years old.</p>

                    <h1 id="CommonDiseasesText" class="underline"> Alopecia treatment options</h1>

                    <p>While there is no cure for alopecia, there are some treatments available that can stimulate hair
                        growth.</p>


                    <p>Corticosteroids can either be injected into the affected area or applied as a topical treatment.
                        Doctors often prescribe topical corticosteroids to younger people with alopecia.</p>
                    <p>Another treatment is immunotherapy. According to the National Alopecia Areata Foundation, this
                        treatment “causes an allergic rash (allergic contact dermatitis) that looks like poison oak or ivy,
                        which alters the immune response.”</p>
                    <p>Finally, there is another type of drugs called Janus kinase (JAK) inhibitors. JAK inhibitors treat a
                        variety of inflammatory diseases.</p>

                    <strong>The FDA has now approvedTrusted Source another such drug, called Olumiant, traditionally used in
                        the treatment of rheumatoid arthritis, for the treatment of alopecia areata.</strong>



                    <h1 id="CommonDiseasesText" class="underline"> How Olumiant works</h1>

                    <p>CytokinesTrusted Source, which are proteins involved in cell signaling, play a role in autoimmune
                        diseases. When the body produces an excessive amount of cytokines, this can dysregulate the immune
                        system.</p>

                    <p>Oluminant works by interrupting cytokine cell signaling as well as the signaling pathways of enzymes.
                    </p>

                    <strong>This affects the body by lowering its immune system. As a result, Olumiant creates an
                        opportunity for the body to start growing hair again.</strong>



                </div>
            </div>



            <div class="col-md-8" id="News4">

                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline">Stroke recovery: How an existing drug may help the brain
                        repair itself
                    </h1>

                    <img src="/News_Images/4.jpg" width="100%" class="mt-3" alt="">
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>The brain can often find new ways to route signals around damaged areas to restore lost
                            function.</strong> <br>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>A new study in mice finds that administering a common drug soon after a neurological event
                            can help the brain successfully rewire itself.</strong>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>If further research validates the study’s conclusions, physicians may have a new tool for
                            preventing permanent stroke damage.</strong>
                    </div>
                    <p> Dr. Tedeschi is the corresponding author of a new study in mice that investigates the use of an
                        existing drug to help the brain repair itself after an ischemic strokeTrusted Source. </p>

                    <strong>The study found that administering gabapentin, an anticonvulsive medication, soon after a stroke
                        helps the brain more effectively work around damaged areas.</strong>
                    <p>The National Organization for Rare Disorders reports that alopecia areata affects around 2.5 million
                        Americans. While many people experience mild cases of alopecia and only have one or two bald
                        patches, others develop more severe cases and have a significant amount of hair loss.</p>

                    <p>Dr. Tedeschi explained: “I think that the way that the drug is [commonly] being prescribed, it’s to
                        deal with the consequences of […] maladaptive changes [that] are now intrinsically wired into the
                        system. So prescribing the drug if [the patients] have some sort of pain or [problematic]
                        excitability of a certain part of the brain […] it’s not going to wipe [it] out.”</p>

                    <p>By contrast, “[t]he way we intend to use it,” Dr. Tedeschi said, “it’s more or less as a prophylactic
                        type of drug.”</p>

                    <p>“Administering this class of drugs in an earlier phase, when the system has not yet committed to a
                        maladaptive route, then I think it’s really increasing the chances of something that we call an
                        adaptive response.”</p>

                    <h1 id="CommonDiseasesText" class="underline"> Suppressing excitability</h1>

                    <p>Gabapentin blocks two proteins, alpha-2 delta-1 and alpha-2 delta-2. Unchecked, these two proteins
                        normally increase after an event such as a stroke or brain injury, inhibiting the brain’s ability to
                        re-route lost function.</p>


                    <p>According to previous research by the same team, gabapentin blockade of alpha-2 delta-1 and alpha-2
                        delta-2 can prevent their normal inhibitory function, effectively lifting the brakes and enabling
                        nerves to grow and regenerate lost function.</p>
                    <p>The brain “needs these subunits to be there,” said Dr. Tedeschi, but after a stroke, “they’re setting
                        up the stage to create more excitability across the large area of the neural network and this
                        contributes to the establishment of detrimental conditions.”</p>
                    <p>Finally, there is another type of drugs called Janus kinase (JAK) inhibitors. JAK inhibitors treat a
                        variety of inflammatory diseases.</p>
                    <p>“Most of the time,” he said, “what we see is that under conditions where there is some form of
                        plasticity, excitability of networks tends to be suppressed.”</p>

                    <strong>The FDA has now approvedTrusted Source another such drug, called Olumiant, traditionally used in
                        the treatment of rheumatoid arthritis, for the treatment of alopecia areata.</strong>



                    <h1 id="CommonDiseasesText" class="underline"> When a neuron is hyperexcitable, it responds to a
                        lower-than-normal stimulus threshold.</h1>

                    <p>Dr. Tedeschi provided an example: “If you put your hands on a hard surface, you’re not supposed to
                        feel pain because you feel like there is a hard surface under your hand. If somehow the signal now
                        is miswired and there is hyperexcitability of the group of neurons that are controlling this
                        mechanical sensation, this information is perceived as a painful stimulus.”</p>

                    <p>“When there is out-of-control neuronal excitability, then these neurons will respond to a very light,
                        very low threshold input and that can cause muscle contraction even when you don’t want it,” said
                        Dr. Tedeschi.</p>
                    <p>Spontaneous seizures, pain, and muscle spasms are causally linked to hyperexcitability.</p>



                </div>
            </div>
            <div class="col-md-8" id="News5">

                <div class="mt-5">

                    <h1 id="CommonDiseasesText" class="underline">Chronic migraine: Common anesthetic relieves pain in new
                        study

                    </h1>

                    <img src="/News_Images/5.jpg" width="100%" class="mt-3" alt="">
                    <div class="d-flex mt-3">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>A new observational study suggests that intravenous administration of the anesthetic agent
                            lidocaine could help alleviate pain in individuals hospitalized with hard-to-treat chronic
                            migraines.</strong> <br>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>Nearly 88% of chronic migraine patients receiving intravenous lidocaine during
                            hospitalization showed a reduction in pain intensity at discharge.</strong>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-right-from-bracket mt-1 pr-2" style="color: #f44718"></i>
                        <strong>This study paves the way for randomized controlled trials to assess the effectiveness of
                            lidocaine in relieving hard-to-treat chronic migraines.</strong>
                    </div>
                    <p> Individuals with refractory migraines have persistent debilitating headaches that are unresponsive
                        to standard treatments. </p>

                    <p>A recent study published in the journal Regional Anesthesia & Pain Medicine reports that patients
                        hospitalized with refractory migraines showed a significant reduction in pain at discharge following
                        intravenous infusions of lidocaineTrusted Source along with other medications.</p>

                    <p>Although the effects of the treatment started to wane by the end of the month, around 43% of patients
                        showed sustained improvements in pain intensity at 1 month. The patients studied had the most severe
                        form of refractory migraine, and even such temporary relief from headaches can lead to significant
                        improvements in their quality of life.</p>

                    <p>The study’s author, Dr. Eric Schwenk, an anesthesiologist at Thomas Jefferson University in Woodbury,
                        NJ, told MNT, “For patients with refractory chronic migraine and their physicians, it may be worth
                        considering referral to an experienced center that can offer aggressive intravenous treatments such
                        as lidocaine if relief cannot be obtained from other medications.”</p>

                    <p>“However, lidocaine is not for everyone and does have some side effects such as</p>



                    <h1 id="CommonDiseasesText" class="underline"> Refractory migraines</h1>

                    <p>A migraine is a neurological condition involving debilitating pulsing or throbbing headaches, often
                        accompanied by increased sensitivity to sounds and light, nausea, and vomiting.</p>


                    <p>Migraines can occur either intermittently or on a chronic daily basis. Individuals with chronic
                        migraines experience headaches more than 15 times a month, with at least 8 days of migraines.</p>
                    <p>Chronic migraines affect about 1.4-2.2%Trusted Source of the global population and are highly
                        disabling, with a negative impact on occupational and social life.</p>
                    <p>Finally, there is another type of drugs called Janus kinase (JAK) inhibitors. JAK inhibitors treat a
                        variety of inflammatory diseases.</p>
                    <p>A significant minority of individuals with chronic migraines do not respond to standard treatments.
                        Such headaches are referred to as refractory chronic migraines.</p>


                    <p> ndividuals with chronic migraines who do not respond to outpatient interventions and exhibit severe
                        symptoms require hospitalization. Treatments for such chronic migraine patients include intravenous
                        infusions of various drugs such as nonsteroidal anti-inflammatory drugs, corticosteroids, and
                        neurolepticsTrusted Source.</p>

                    <p>These treatments are mostly based on evidence from observational studies rather than
                        placebo-controlled randomized clinical trials. This is because refractory chronic migraines can be
                        extremely disabling, and conducting placebo-controlled trials would be unethical.</p>
                    <p>Notably, individuals with the most severe form of refractory migraines also fail to respond to
                        inpatient treatments. Thus, there is a need for more research to identify medications that are
                        effective against refractory migraines.</p>

                    <p>Intravenous infusions of lidocaine, a local anesthetic commonly used to relieve pain, have shown
                        promise for the inpatient treatment of chronic headaches.</p>
                    <p>Although its mechanism of action remains unknown, lidocaine could relieve headaches by modulating
                        brain pathways involved in pain or reducing inflammation associated with migraines.</p>
                    <p>In the present study, the researchers further examined the ability of lidocaine to alleviate
                        refractory chronic migraines in hospitalized patients.

                    </p>

                    <h1 id="CommonDiseasesText" class="underline"> Limitations</h1>

                    <p>The authors acknowledged that the study had a few limitations. For instance, some of the patients did
                        not report for the follow-up office visit, resulting in missing data. The researchers were also
                        unable to account for the medicines used before admission in their analyses.</p>
                    <p>Dr. Werner Becker, a professor emeritus at the University of Calgary in Alberta, who was not involved
                        in the research, told MNT: “The study is a retrospective chart review, so there is no control group,
                        and there is missing data […]. As the study is not blinded, not placebo-controlled, and in fact has
                        no comparison group, the level of evidence provided by this study is weak.”</p>
                    <p>“However,” Dr. Becker added, “refractory chronic migraine is very disabling and difficult to treat,
                        so this study is still a significant contribution to the research literature for this patient
                        group.”</p>
                </div>
            </div>

        </div>

        <script>
            $(document).ready(function() {
                $('#News2').hide();
                $('#News3').hide();
                $('#News4').hide();
                $('#News5').hide();

                $('#FirstNews').css('color', 'black');
                $('#FirstNews').css('margin-left', '20px');
                // $('#DengueInfo').hide();

                $('#FirstNews').click(function() {

                    $('#News1').show();
                    $('#News2').hide();
                    $('#News3').hide();
                    $('#News4').hide();
                    $('#News5').hide();

                    $('#FirstNews').css('color', 'black');
                    $('#FirstNews').css('margin-left', '20px');
                    $('#FirstNews').css('transition', '0.4s');

                    
                    $('#SecondNews').css('color', '#bbb');
                    $('#SecondNews').css('margin-left', '0px');
                    
                    $('#ThirdNews').css('color', '#bbb');
                    $('#ThirdNews').css('margin-left', '0px');
                    
                    $('#ForthNews').css('color', '#bbb');
                    $('#ForthNews').css('margin-left', '0px');
                    
                    $('#FifthNews').css('color', '#bbb');
                    $('#FifthNews').css('margin-left', '0px');



                })
                $('#SecondNews').click(function() {

                    $('#News1').hide();
                    $('#News2').show();
                    $('#News3').hide();
                    $('#News4').hide();
                    $('#News5').hide();

                    $('#SecondNews').css('color', 'black');
                    $('#SecondNews').css('margin-left', '20px');
                    $('#SecondNews').css('transition', '0.4s');


                    $('#FirstNews').css('color', '#bbb');
                    $('#FirstNews').css('margin-left', '0px');

                    
                    $('#ThirdNews').css('color', '#bbb');
                    $('#ThirdNews').css('margin-left', '0px');
                    
                    $('#ForthNews').css('color', '#bbb');
                    $('#ForthNews').css('margin-left', '0px');
                    
                    $('#FifthNews').css('color', '#bbb');
                    $('#FifthNews').css('margin-left', '0px');

                })
                $('#ThirdNews').click(function() {

                    $('#News1').hide();
                    $('#News2').hide();
                    $('#News3').show();
                    $('#News4').hide();
                    $('#News5').hide();

                    $('#ThirdNews').css('color', 'black');
                    $('#ThirdNews').css('margin-left', '20px');
                    $('#ThirdNews').css('transition', '0.4s');


                    $('#FirstNews').css('color', '#bbb');
                    $('#FirstNews').css('margin-left', '0px');

                    
                    $('#SecondNews').css('color', '#bbb');
                    $('#SecondNews').css('margin-left', '0px');
                    
                    $('#ForthNews').css('color', '#bbb');
                    $('#ForthNews').css('margin-left', '0px');
                    
                    $('#FifthNews').css('color', '#bbb');
                    $('#FifthNews').css('margin-left', '0px');


                })
                $('#ForthNews').click(function() {

                    $('#News1').hide();
                    $('#News2').hide();
                    $('#News3').hide();
                    $('#News4').show();
                    $('#News5').hide();

                    $('#ForthNews').css('color', 'black');
                    $('#ForthNews').css('margin-left', '20px');
                    $('#ForthNews').css('transition', '0.4s');


                    $('#FirstNews').css('color', '#bbb');
                    $('#FirstNews').css('margin-left', '0px');

                    
                    $('#ThirdNews').css('color', '#bbb');
                    $('#ThirdNews').css('margin-left', '0px');
                    
                    $('#SecondNews').css('color', '#bbb');
                    $('#SecondNews').css('margin-left', '0px');
                    
                    $('#FifthNews').css('color', '#bbb');
                    $('#FifthNews').css('margin-left', '0px');


                })
               
                $('#FifthNews').click(function() {

                    $('#News1').hide();
                    $('#News2').hide();
                    $('#News3').hide();
                    $('#News4').hide();
                    $('#News5').show();

                    $('#FifthNews').css('color', 'black');
                    $('#FifthNews').css('margin-left', '20px');
                    $('#FifthNews').css('transition', '0.4s');


                    $('#FirstNews').css('color', '#bbb');
                    $('#FirstNews').css('margin-left', '0px');

                    
                    $('#ThirdNews').css('color', '#bbb');
                    $('#ThirdNews').css('margin-left', '0px');
                    
                    $('#SecondNews').css('color', '#bbb');
                    $('#SecondNews').css('margin-left', '0px');
                    
                    $('#ForthNews').css('color', '#bbb');
                    $('#ForthNews').css('margin-left', '0px');


                })
            })
        </script>
    @endsection
