<div class="wrapper">
    <!-- scroll value -->
    <!--<div id="scrollValue"></div>-->
    <!-- Home -->
    <section id="home" class="flex">
        <h1 class="welcomeTxt">
            <span class="animate">Hello, I'm <strong class="highlight">Rasmus</strong></span>
            <!--<span class="animate delay1">I'm a full-stack web developer.</span>-->
            <span class="animate delay1">I'm a multimediadesign student</span>
            <a href="#about" class="button animate delay2" id="welcomeBtn"><em class="fas fa-arrow-right" id="welcomeArrow1"></em> <span>Check me out</span> <em class="fas fa-arrow-left" id="welcomeArrow2"></em></a>
        </h1>
    </section>

    <!-- About -->
    <section id="about" class="">
        <div class="section-wrapper">
            <div class="sectionHeader">
                <h1 id="aboutHeader">About</h1>
                <hr id="aboutHr">
            </div>

            <div class="row flex-around m-b">

                <div class="hex-container">
                    <div class="hex-wrap">
                        <div class="hexagon">
                            <em class="mdi mdi-speedometer"></em>
                        </div>
                    </div>
                    <div class="hex-header">
                        Fast
                    </div>
                    <div class="hex-text">
                        Web-applications optimized for speed.
                    </div>
                </div>


                <div class="hex-container">
                    <div class="hex-wrap">
                        <div class="hexagon">
                            <em class="mdi mdi-cellphone-link"></em>
                        </div>
                    </div>
                    <div class="hex-header">
                        Responsive
                    </div>
                    <div class="hex-text">
                        Flexible layout fitting all screen sizes.
                    </div>
                </div>

                <div class="hex-container">
                    <div class="hex-wrap">
                        <div class="hexagon">
                            <em class="mdi mdi-lightbulb-outline"></em>
                        </div>
                    </div>
                    <div class="hex-header">
                        Intuitive
                    </div>
                    <div class="hex-text">
                        Easy to use, self-explanatory interfaces.
                    </div>
                </div>

            </div><!-- flex row -->

            <div class="row flex-around">
                <div class="w40 pos-rel">
                    <!-- hoverMeSVG -->
                    <svg version="1.1" id="hoverMeSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 73.9 74.6" style="enable-background:new 0 0 73.9 74.6;" xml:space="preserve">
                    <path class="hoverMe-0" d="M32.6,21.1c-1.3,4.9-2.7,8,2.5,19.9c6.1,13.9,18.5,20.4,24.8,23.4c-4.3-2,1.3,1.4,13,4.9
                          c-1.7-2.6-3.2-5.4-4.5-8.2c-4.9-12.6-4.1-7.6-4.1-7.6l-6.5,20.1c5.5-2.6,9.6-1.7,15.1-4.3c-7.8-11.1-19-12.5-30.9-25.2
                          C30.4,31.9,33.3,27.9,32.6,21.1z"/>
                    <text transform="matrix(0.9706 -0.2407 0.2407 0.9706 2.5399 23.7301)" class="hoverMe-1">Hover me!</text>
                    </svg>
                    <!-- /hoverMeSVG -->
                    <div id="flipCard" class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <!--<img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Rasmus portrait">-->
                                <img src="../assets/img/profilbillede.jpg" alt="Rasmus portrait">
                            </div>
                            <div class="flip-card-back">
                                <h2>Skills</h2> 

                                <!-- HTML -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">HTML</div>
                                    <div class="progress-bar-filler" style="width:60%"></div>
                                    <div class="progress-bar-percent">80%</div>
                                </div>

                                <!-- CSS -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">CSS</div>
                                    <div class="progress-bar-filler" style="width:50%"></div>
                                    <div class="progress-bar-percent">70%</div>
                                </div>

                                <!-- JavaScript -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">JavaScript</div>
                                    <div class="progress-bar-filler" style="width:45%"></div>
                                    <div class="progress-bar-percent">65%</div>
                                </div>

                                <!-- PHP -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">PHP</div>
                                    <div class="progress-bar-filler" style="width:60%"></div>
                                    <div class="progress-bar-percent">80%</div>
                                </div>

                                <!-- Photoshop -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">Photoshop</div>
                                    <div class="progress-bar-filler" style="width:30%"></div>
                                    <div class="progress-bar-percent">40%</div>
                                </div>

                                <!-- Illustrator -->
                                <div class="progress-bar">
                                    <div class="progress-bar-label">Illustrator</div>
                                    <div class="progress-bar-filler" style="width:20%"></div>
                                    <div class="progress-bar-percent">30%</div>
                                </div>

                            </div>
                        </div>
                    </div><!-- flip card -->
                    <!-- image for small screens -->
                    <img src="../assets/img/profilbillede.jpg" alt="Rasmus portrait" class="sm-screen-img">
                </div><!-- width 40 -->

                <div class="w50">
                    <div id="aboutMe">
                        <p>My name is Rasmus Andersen. <br> I'm 24 years old, I live in Denmark and I have a passion for making fast, flexible and user-friendly web-applications.</p>
                        <p>I'm currently studying multimediadesign at University College Lillebælt (UCL), in pursuit of the ability
                            to provide the best possible user experience through my work - primarily on the web.</p>
                    </div>
                </div>
            </div>
        </div><!-- section wrapper -->
    </section>

    <!-- Work -->
    <section id="work">
        <div class="section-wrapper">
            <div class="sectionHeader">
                <h1>Work</h1>
                <hr>
            </div>

            <div class="work-wrapper">

                    <!-- HealthPilot -->
                    <div class="workBox" id="hp" onclick="openModal(this.id)">
                        <img src="../assets/img/healthPilot.png" alt="healthpilot.dk"/>
                        <div class="overlay">
                            <div class="overlayHeader">HealthPilot</div>
                            <div class="overlayText">JavaScript + PHP</div>
                            <button class="overlayBtn" onclick="openModal('hp')">Learn more</button>
                        </div>
                    </div>

                    <!-- BoligPortal -->
                    <div class="workBox" id="bp" onclick="openModal(this.id)">
                        <img src="../assets/img/boligportal.jpg" alt="boligportal.webation.dk"/>
                        <div class="overlay">
                            <div class="overlayHeader">BoligPortal</div>
                            <div class="overlayText">JavaScript + PHP</div>
                            <button class="overlayBtn" onclick="openModal('bp')">Learn more</button>
                        </div>
                        </div>

                    <!-- Moving Art -->
                    <div class="workBox" id="ma" onclick="openModal(this.id)">
                        <img src="../assets/img/movingArtImg.jpg" alt="Moving Art Project"/>
                        <div class="overlay">
                            <div class="overlayHeader">Moving Art</div>
                            <div class="overlayText">Photoshop + Adobe Animate</div>
                            <button class="overlayBtn" onclick="openModal('ma')">Learn more</button>
                        </div>
                    </div>


                    <!-- Premiere Pro -->
                    <!-- Image source: https://da.m.wikipedia.org/wiki/Fil:Adobe_Premiere_Pro_CC_icon.svg -->
                    <div class="workBox" id="pp" onclick="openModal(this.id)">
                        <img src="../assets/img/premiereproicon.png" alt="Adobe Premiere project"/>
                        <div class="overlay">
                            <div class="overlayHeader">Video Editing</div>
                            <div class="overlayText">Adobe Premiere Pro</div>
                            <button class="overlayBtn" onclick="openModal('pp')">Learn more</button>
                        </div>
                    </div>

                    <!-- Website Redesign -->
                    <div class="workBox" id="rd" onclick="openModal(this.id)">
                        <img src="../assets/img/baagoeForside.png" alt="Website Redesign"/>
                        <div class="overlay">
                            <div class="overlayHeader">Website Redesign</div>
                            <div class="overlayText">Adobe XD + InDesign</div>
                            <button class="overlayBtn" onclick="openModal('rd')">Learn more</button>
                        </div>
                    </div>

                    <!-- Art installation project -->
                    <!-- Image source: https://sites.google.com/site/eventyranalyser/den-lille-pige-med-svovlstikkerne -->
                    <div class="workBox" id="ip" onclick="openModal(this.id)">
                        <img src="../assets/img/installationsprojektimg.jpg" alt="Website Redesign"/>
                        <div class="overlay">
                            <div class="overlayHeader">Installation Project</div>
                            <div class="overlayText">Adobe Animate + InDesign</div>
                            <button class="overlayBtn" onclick="openModal(ip)">Learn more</button>
                        </div>
                    </div>
            </div><!-- work wrapper -->
        </div><!-- section wrapper -->


        <!-- ! MODALS ! -->

        <!-- healthPilot modal -->
        <div id="hpModal" class="modal" onclick="closeModal('hp')">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('hp')">&times;</span>

                <div class="modal-header">
                    <h1>HealthPilot</h1>
                </div>

                <div class="modal-body">
                    <h2>What is HealthPilot</h2>
                    <p>
                        This is a project I've been working on in collaboration with my father-in-law since early 2018.
                        The goal of this project is to make a foundation for quality improvement within the danish healthcare system.
                        <br><br>
                        This web-application gives any patient the opportunity to rate and comment on 
                        the effectiveness, facilities, kindness, waiting time and overall experience with any healthcare institution around the country, 
                        while at the same time giving each institution the possibility to monitor and manage their own page within HealthPilot.
                        <br><br>
                        HealthPilot is also made to give users an easy and manageable way to find the best place for any kind of treatment. Users are able to 
                        filter their search by the name of an institution, by city and by category.
                        As the user is changing the search criteria a list and a map containing the search results updates live to fit the search criteria.
                        It is then possible to order the search results by name, rating, distance or price.
                    </p>

                    <h2>My role in this project</h2>
                    <p>
                        My job during this project has been mostly in the back-end along with front-end AJAX-functionality (live updates, no page reloads).
                        <br>
                        Prior to this project I had very little experience with AJAX-technology, but due to the fact that it adds such a significant boost to 
                        the workflow and the overall user-experience, it was neccesary for me to get familiar with this technology.
                    </p>
                </div>

                <div class="modal-footer">
                    <p><a href="https://healthpilot.dk" target="_blank" title="This link opens a new tab">Click here to visit HealthPilot.</a></p>
                </div>
            </div>
        </div><!-- healthPilot modal -->


        <!-- boligPortal modal -->
        <div id="bpModal" class="modal" onclick="closeModal('bp')">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('bp')">&times;</span>

                <div class="modal-header">
                    <h1>BoligPortal</h1>
                </div>

                <div class="modal-body">
                    <h2>What is BoligPortal</h2>
                    <p>
                        This website is a tool for finding, selling, renting or buying apartments, houses or rooms. It is a yet unfinished project that I have been working on by myself in my sparetime. The purpose of this project was primarily the practice of programming a moderately complex web-application run with pure AJAX and with a lot of back-end, as well as to showcase my programming ability when the project is finished.
                    </p>
                </div>

                <div class="modal-footer">
                    <p><a href="http://boligportal.webnation.dk/" target="_blank" title="This link opens a new tab">Click here to visit BoligPortal.</a></p>
                </div>
            </div>
        </div><!-- boligPortal modal -->


        <!-- movingArt modal -->
        <div id="maModal" class="modal" onclick="closeModal('ma')">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('ma')">&times;</span>

                <div class="modal-header">
                    <h1>Moving Art</h1>
                </div>

                <div class="modal-body">
                    <h2>Animation Workshop</h2>
                    <p>
                        This is a project that I made during the course of a workshop at my school called Moving Art. The objective was to find a piece of art, and create an illusion of life. At the time of me choosing this particular painting, I believed it to be painted by Picasso. I later found out that this is merely a copy of his art style, painted by an unknown artist.
                    </p>
                    <p>
                        This was a great introduction to Photoshop, as well as Adobe Animate. I learned a lot about seperating a single image into multiple layers, in order to be able to move them around independently of one another.
                    </p>
                </div>

                <div class="modal-footer">
                    <h2>Final result</h2>
                    <div class="media-container"><iframe src="https://webnation.dk/animation/movingArt/movingArtPicasso.html"></iframe></div>
                </div>
            </div>
        </div><!-- movingArt modal -->


        <!-- premierePro modal -->
        <div id="ppModal" class="modal" onclick="closeModal('pp');document.getElementById('hamburgVideo').pause();">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('pp');document.getElementById('hamburgVideo').pause();">&times;</span>

                <div class="modal-header">
                    <h1>Video Editing</h1>
                </div>

                <div class="modal-body">
                    <h2>Intro tour - Hamburg</h2>
                    <p>
                        When I started studying multimediadesign at University College Lillebælt, a three day tour to the german city of Hamburg was arranged by the school for the students to get to know each other. While we were there, some of our educators video documented the trip. These video clips were later given to us, as part of a lesson about video editing using Adobe Premiere Pro.
                    </p>
                    <p>
                        This was a great exercise to get to get familiar with Adobe Premiere Pro and some of its many features. Definitely an incredibly powerful tool for video editing.
                    </p>
                </div>

                <div class="modal-footer">
                    <h2>Final result</h2>
                    <div class="media-container">
                        <!-- Music used in the video: Ritalin - Ja dak -->
                        <video controls id="hamburgVideo">
                            <source src="../assets/video/hamburg_jadak_done.mp4" type="video/mp4">
                            Your browser does not support the <code>video</code> tag.
                        </video>
                    </div>
                </div>
            </div>
        </div><!-- premierePro modal -->


        <!-- websiteRedesign modal -->
        <div id="rdModal" class="modal" onclick="closeModal('rd')">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('rd')">&times;</span>

                <div class="modal-header">
                    <h1>Website Redesign</h1>
                </div>

                <div class="modal-body">
                    <h2>Introduction</h2>

                    <p>
                        This was a school related project. The goal of this project was to, in groups, conduct a systematic and heuristic evaluation, 
                        and based on findings thereof, prepare a client-report in Adobe InDesign compiling the most critical issues found throughout the website, as well as developing a functional prototype in Adobe XD.
                    </p>
                    <p>
                        My group was assigned to work with the wesbite: <a href="http://baagoe.info" target="_blank" title="This link opens a new tab">www.baagoe.info</a>.
                    </p>
                    <p>
                        This was the first time we got to really put the design theory and methods we had learned into action.
                    </p>

                    <h2>My role in this project</h2>
                    <p>
                        My primary job during this project was reviewing the HTML and CSS code upon which the website was running, sketching mockups for the layout of the new design, as well as developing the prototype.
                    </p>
                </div>

                <div class="modal-footer">
                    <h2>Results</h2>
                    <div class="flex">
                        <div class="w40">
                            <h3>Landing page before:</h3>
                            <img src="../assets/img/baagoebefore.png" alt="Baagoe.info landing page after redesign" height="400"/>
                        </div>
                        <div class="w40">
                            <h3>Landing page after:</h3>
                            <img src="../assets/img/baagoeForside.png" alt="Baagoe.info landing page after redesign" height="400"/>
                        </div>
                    </div>
                    <br>
                    <a href="https://xd.adobe.com/view/0144fa89-f4c2-4107-5e33-8f61c4fdd531-7775/?fbclid=IwAR25dIYHI9uREZBDcbLKAYTCx85OMm_5lUpa2uzniYhMUwNdWF072h8U5gY&fullscreen" target="_blank" title="This link opens a new tab">Click here to view the prototype.</a>
                </div>
            </div>
        </div><!-- websiteRedesign modal -->


        <!-- Installation Project modal -->
        <div id="ipModal" class="modal" onclick="closeModal('ip')">
            <!-- Modal content -->
            <div class="modal-content animate" onclick="doNothing(event)">
                <span class="close" onclick="closeModal('ip')">&times;</span>

                <div class="modal-header">
                    <h1>Installation Project</h1>
                </div>

                <div class="modal-body">
                    <h2>Introduction</h2>

                    <p>
                        This was a school related project, but for an actual client - Henrik Lübker, curator at the museum of H.C. Andersen in Odense, Denmark.
                    </p>
                    <p>
                        The objective of this project was to, in groups from two to five members, develop a concept and a visual prototype of an interactive user experience, that could fit in with the pre-exsisting exhibition.
                        Part of the task was also to use a specific design method called Design Thinking, as our design process.
                        Design Thinking is an agile, iterative process which amongst other things, seek to fully understand the user and the very core of the problem or obstacle that the user is facing.
                    </p>
                    <p>
                        We settled on a concept that we called <span class="italic">Eventyrstunnelen</span>.
                        <br>
                        The concept was to turn a fairytale by H.C. Andersen into a sensory experience, where users would enter a tunnel equipped an A/C adjusting the temperature to mimic that of the fairytale, projectors projecting an animated illustration of the fairytale across the walls, and a speaker reading out the fairytale.
                        To make this more interactive, the user would be requested to assist the character(s) within the fairytale.
                    </p>
                    <p>
                        For our visual prototype, we decided to make a short animation of his fairytale <span class="italic">The little match girl</span>, that represents an example of what could be projected across the walls within the tunnel.
                    </p>

                    <h2>My role in this project</h2>
                    <p>
                        My job during this project mostly involved the production of graphical elements, assembeling prototypes such as the short animation and document my work in an academic report.
                    </p>
                </div>

                <div class="modal-footer">
                    <h2>Final results</h2>
                    <h3 class="text-center">Visualization of the tunnel</h3>
                    <div class="media-container">
                        <img src="../assets/img/svovlstikstunnel.png" alt="Eventyrstunnelen"/>
                    </div>
                    <h3 class="text-center">Animation</h3>
                    <div class="media-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7BhqE10cKDI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div><!-- Installation Project modal -->
    </section>

    <!-- Contact -->
    <section id="contact">
        <svg id="contactCut" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366.5 107.5"><polygon class="contact-cut-1" points="0.5 0.33 683.5 95.01 1366.5 0.33 1366.5 107.5 0.5 107.5 0.5 0.33"/><polygon class="contact-cut-2" points="0 0 1366 0 683 94.68 0 0"/></svg>
        <div class="sectionHeader">
            <h1 class="white">Contact</h1>
            <hr class="bg-white">
            <p class="highlight">Have a question or want to work together?</p>
        </div>

        <div class="contactFormWrapper">
            <form autocomplete="off">
                <div class="contactInput">
                    <label for="contactName">Name<span class="required">*</span>
                        <input type="text" required placeholder="Enter your name" name="contactName" id="contactName">
                    </label>
                </div>

                <div class="contactInput">
                    <label for="contactEmail">Email<span class="required">*</span>
                        <input type="email" required placeholder="Enter your email" name="contactEmail" id="contactEmail">
                    </label>
                </div>

                <div class="contactInput">
                    <label for="contactMsg">Message<span class="required">*</span>
                        <textarea placeholder="Enter your message" required id="contactMsg" rows="4" cols="50"></textarea>
                    </label>
                </div>

                <div class="contactInput">
                    <input type="submit" class="button" value="Send">
                </div>
            </form>
        </div>
    </section>
    <div id="contactMe"></div>
</div><!-- wrapper -->