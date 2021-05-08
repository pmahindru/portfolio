<!-- this php only for contact form -->
<?php

//   this includes the function.php
// include "function.php";
// if (isset($_POST['submit'])) 
// {
//     echo "i am here bitch";
//     if (empty($_POST['first_name']) == 'submit' || empty($_POST['last_name']) == 'submit' || empty($_POST['email']) == 'submit' || empty($_POST['comments']) == 'submit') {
//         echo "Connected Successfully1";
//     }
//     // if the button is not empty then it will add the post
//     else
//     {
//         echo "add me in the database plsssss";
//         // specific time zone   
//         date_default_timezone_set('America/Halifax');

//         $fname = $_POST['first_name'];
//         $lname = $_POST['last_name'];
//         $Email = $_POST["email"];
//         $Comments = $_POST['comments'];
//         $date = $_SERVER['REQUEST_TIME'];
//         $time = date('Y-m-d H:i:s',($date));

//         $sql = "INSERT INTO `portfolio` (`userid`, `date`, `first_Name`, `last_name`, `email`, `comment`) VALUES (NULL, '$date', '$fname', '$lname', '$Email', '$Comments')";

//         echo "i am in the database yay baby";
//         if ($conn->query($sql) === TRUE) 
//         {
//             echo "Connected Successfully2";
//         } 
//         else 
//         {
//             echo "Connected Successfully3";
//         }
//         $conn->close();
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- all picture are taken from the google  -->
    <!-- this template is download from the bootstrap and i made so many change to make my own portfolio which is called (Pranav Mahindru) -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pranav Mahinrdru</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="pm/dist/css/styles.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="csshake.min.css">
    <!-- or from surge.sh -->
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
</head>
<body id="main-page">
    <!-- front page -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#main-page">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#eduexp">Education & Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Skills">Skills/Certifications</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ABOUT ME -->
    <header class="masthead" id="myname">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white" id="name">Pranav Mahindru</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5" id="text">Teaching Assstant at Dalhousie University.
                        <br>
                    Studying Bachelor's of Computer Science at Dalhousie University with interests in the field of Artificial Intelligence and Mathematics.</p>
                    <a href="#eduexp"><div class=" mouse btn js-scroll-trigger"></div></a> 
                </div>
            </div>
        </div>
    </header>

    <!-- -------------------------------EDUCATION and EXPERIENCE -------------------------  -->
    <section class="page-section4" id="eduexp" >
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-white my-4 container">

                    <h2 data-aos-duration="1200"  data-aos="fade-in" id="eduexp3">My Experience</h2>
                    <hr class="divider my-4" />

                    <div >
                        <ul class="timeline2" data-aos-duration="1200"  data-aos="slide-right">

                            <li class="event" data-date="&nbsp September 2020 - December 2020">
                                <h3 class="text-center text-white"> Teaching Assistant </h3>
                                <br>
                                <p class="text-white">
                                    1. Mentored students along with classroom instruction and provided support and guidance.
                                    <br>
                                    <br>
                                    2. Worked closely with the lead teacher to identify issues of students and critically develop solutions.
                                    <br>
                                    <br>
                                    3. Maintain a supportive, safe and clean classroom environment.
                                </p>
                            </li>
                            <li class="event" data-date="&nbsp September 2019 - December 2019">
                                <h3 class="text-center text-white"> Note Taker </h3>
                                <br>
                                <p class="text-white"> 
                                    1. Ensured notes are clear and comprehensive taken with fast and accurate typing.
                                    <br>
                                    <br>
                                    2. Provided the notes within 48 hours of the lecture organized in the agreed format, hence, meeting deadlines with accuracy.
                                </p>    
                            </li>
                            <li class="event" data-date="&nbsp September 2019 - December 2019">
                                <h3 class="text-center text-white"> Game Staff - Dalplex </h3>
                                <br>
                                <p class="text-white"> 
                                    1. Managed events for various sport games with the availability of all essential products.
                                    <br>
                                    <br>
                                    2. Collaborated with all team members to ensure there would be no discrepancies.
                                </p>    
                            </li>
                        </ul>

                    </div>

                    <h1 data-aos-duration="1200"  data-aos="fade-in" id="eduexp3">My Education</h1>
                    <hr class="divider my-4" />

                    <div>
                        <ul class="timeline2" data-aos-duration="1200"  data-aos="slide-right">

                            <li class="event" data-date="&nbsp September 2018 -   Present">
                                <h3 class="text-center text-white">Dalhousie University</h3>
                                <br>
                                <h2 class="text-center text-white">
                                    Studying Bachelors of Computer
                                </h2>
                                <br>
                                <p class="text-white">
                                    Science with interests in Algorithms, Artificial Intelligence, Big Data, and Mathematics.
                                </p>
                                <p class="text-white">
                                    1. Course Representative for Introduction to Computer Science (September 2019 - December 2019).
                                    <br>
                                    <br>
                                    2. TAX CLINIC — CVITP Income Tax Volunteer (April 2019).
                                </p>
                            </li>
                            <li class="event" data-date="&nbsp 2004 - 2018 &nbsp - High School">
                                <h3 class="text-center text-white"> Apeejay School </h3>
                                <br>
                                <p class="text-white"> Studied Physics, Chemistry and Mathemetics </p>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------------------------Projects---------------------------->
    <section class="page-section3" id="Projects" >
        <div >
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0" id="project" data-aos-duration="1200"data-aos="fade-out"> Projects </h2>
                    <hr class="divider my-4" />

                    <div class="text-white my-4" data-aos-duration="1200"  data-aos="fade-in" id="mobile">
                        <strong> NASA Space App — (Scratch)</strong>
                        <ul id="text-algin" style="list-style-type: none;">
                            <li>
                                Developed an adventure game using Scratch language that utilizes NASA's Earth Data to spread environmental awareness. Received a global nomination from NASA SpaceApps.
                            </li>
                        </ul>
                    </div>
                    <div class="text-white my-4" data-aos-duration="1200" data-aos="fade-in" id="mobile">
                        <strong> Track2Test —(HTML/CSS/Python) </strong>
                        <ul id="text-algin" style="list-style-type: none;">
                            <li>
                                Developed a mobile app software and revised screening processes to increase the accuracy and speed with which early testing can occur during COVID-19.
                            </li>
                            <li>
                                Developed a website to provide updated information on hospital availability to save the crucial time for emergency patients.
                            </li>
                            <li>
                                Tested and analyzed a true example using the interface created using HTML and Python.
                            </li>
                        </ul>
                    </div>
                    <div class="text-white my-4" data-aos-duration="1200" data-aos="fade-in" id="mobile">
                        <strong>Incentivizing precautionary measures of Natural Disasters — (Web Development)</strong>
                        <ul id="text-algin" style="list-style-type: none;"> 
                            <li>
                                Programmed a mobile app/website using HTML, CSS, Javascript to ensure future potential liabilities.
                            </li>
                            <li>
                                Solely responsible for creating the website with excellent design protocols highlighting the business plan of incentivizing the people and reducing the impact on climate change.
                            </li>
                        </ul>
                    </div>
                    <div class="text-white my-4" data-aos-easing = "ease-in-out" data-aos-duration="1200" data-aos="fade-in" id="mobile"> 
                        <strong>Curling, Search & Rescue — (ASEBA - Robotics)</strong>
                        <ul id="text-algin" style="list-style-type: none;">
                            <li>
                                Programmed the robot for ‘curling’ and ‘search & rescue’
                            </li>
                            <li>
                                Used ASEBA platform and the THYMIO II robot for the proposed tasks and the research for the architecture, design, sensors and features.
                            </li>
                        </ul>
                    </div>
                    <div class="text-white my-4" data-aos-easing = "ease-in-out" data-aos-duration="1000" data-aos="fade" id="mobile"> 
                        <strong>MineCraft World Edit  — (Java)</strong>
                        <ul id="text-algin" style="list-style-type: none;">
                            <li>
                                Analyzed algorithm complexity and OOP implementation of the open source code and drafted a detailed report of the analysis.
                            </li>
                            <li>
                                Evaluated the difficulty and complexity level of the Minecraft WorldEdit Sponge Mod and checking the efficiency and robustness.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a class="glow-on-hover" data-aos-duration="500" data-aos="fade" href="#Skills">My Skills</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ----------------------------------------skills--------------------------------->
    <section class="page-section" id="Skills">
        <div class="container">
            <h2 class="text-white" id="skill" data-aos-duration="3000"data-aos="fade-out">Skills & Certifications</h2>
            <hr class="divider my-4" />
            <div data-aos-duration="3000" data-aos="fade-in">
                <div id="pra">
                    <table>
                        <th id="tables" data-aos-duration="3000"data-aos="fade-out">
                            <a onclick="myFunction()" class="things py-3"> Development </a>
                            <a onclick="myFunction2()" class="things py-3"> Operating Systems </a> 
                            <a onclick="myFunction3()" class="things py-3">Software </a>
                            <a onclick="myFunction4()" class="things py-3"> Others </a> 
                            <a onclick="myFunction5()" class="things py-3"> Certifications</a> 
                        </th>
                    </table>
                    <br>
                    <br>
                </div>
                <!-- coped from the given source -->
                <!-- https://speckyboy.com/code-snippets-css3-bar-graphs/ -->
                <div class="skills" id="pra2">
                    <!-- table and add in the table below thngs  -->
                    <ul class="lines" id="line">
                        <li class="line l--0">
                            <span class="line__label2 title">
                                Skill level :
                            </span>
                        </li>
                        <li class="line l--25">
                            <span class="line__label">
                                basics
                            </span>
                        </li>
                        <li class="line l--50">
                            <span class="line__label">
                                Advanced
                            </span>
                        </li>
                        <li class="line l--75">
                            <span class="line__label">
                                Seasoned
                            </span>
                        </li>
                        <li class="line l--100">
                            <span class="line__label">
                                Expert
                            </span>
                        </li>
                    </ul>

                    <div class="charts" id="charts">
                        <div class="chart chart--dev" id="myDIV">
                            <span class="chart__title">Development</span>
                            <ul class="chart--horiz">
                                <li class="chart__bar" style="width: 80%;">
                                    <span class="chart__label">
                                        JAVA 
                                    </span>
                                    <span id="x">
                                        80% 
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 75%;">
                                    <span class="chart__label">
                                        FRONT-END & BACK-END
                                    </span>
                                    <span id="x">
                                        75% 
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 75%;">
                                    <span class="chart__label">
                                        HTML/CSS
                                    </span>
                                    <span id="x">
                                        75%  
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 49%;">
                                    <span class="chart__label">
                                        SQL
                                    </span>
                                    <span id="x">
                                        49%  
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 33%;">
                                    <span class="chart__label">
                                        PYTHON
                                    </span>
                                    <span id="x">
                                        33%  
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 22%;">
                                    <span class="chart__label">
                                        JavaScript
                                    </span>
                                    <span id="x">
                                        22%  
                                    </span>
                                </li>
                                <li class="chart__bar" style="width: 22%;">
                                    <span class="chart__label">
                                        SCRATCH
                                    </span>
                                    <span id="x">
                                        22%  
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div style="display: none;" class="chart chart--dev" id="myDIV2">
                            <span class="chart__title2">Operating Systems</span>
                            <br>
                            <ul class="chart--horiz">
                                <li class="chart__bar" style="width: 70%;">
                                    <span class="chart__label">
                                        ANDROID 
                                    </span>
                                    <span id="x">
                                        70%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 70%;">
                                    <span class="chart__label">
                                        MICROSOFT WINDOWS
                                    </span>
                                    <span id="x">
                                        70%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 70%;">
                                    <span class="chart__label">
                                        MACOS & IOS
                                    </span>
                                    <span id="x">
                                        70%  
                                    </span>
                                </li>
                                <br>
                            </ul>
                        </div>
                        <div style="display: none;" class="chart chart--dev" id="myDIV3">
                            <span class="chart__title3">Software</span>
                            <ul class="chart--horiz">
                                <li class="chart__bar" style="width: 90%;">
                                    <span class="chart__label">
                                        SUBLIME TEXT
                                    </span>
                                    <span id="x">
                                        90%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 85%;">
                                    <span class="chart__label">
                                        TERMINAL
                                    </span>
                                    <span id="x">
                                        85%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 85%;">
                                    <span class="chart__label">
                                        INTELLIJ
                                    </span>
                                    <span id="x">
                                        85%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 70%;">
                                    <span class="chart__label">
                                        MySQL 
                                    </span>
                                    <span id="x">
                                        70%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 49%;">
                                    <span class="chart__label">
                                        PYCHARM
                                    </span>
                                    <span id="x">
                                        49%  
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div style="display: none;" class="chart chart--dev" id="myDIV4">
                            <br>
                            <span class="chart__title4">Others</span>
                            <ul class="chart--horiz">
                                <li class="chart__bar" style="width: 90%;">
                                    <span class="chart__label">
                                        EXCELLENT TIIME MANAGEMENT SKILLS
                                    </span>
                                    <span id="x">
                                        90%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 85%;">
                                    <span class="chart__label">
                                        EFFICIENTS COLLABORATIVE SKILLS
                                    </span>
                                    <span id="x">
                                        85%  
                                    </span>
                                </li>
                                <br>
                                <li class="chart__bar" style="width: 85%;">
                                    <span class="chart__label">
                                        PROFICIENT COMMUNICATION SKILLS
                                    </span>
                                    <span id="x">
                                        85%  
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div style="display: none;" class="chart chart--dev" id="myDIV5">
                            <span class="chart__title5">Certifications</span>
                            <br>
                            <br>
                            <ul class="text-white">
                                <li>
                                    <span>
                                        ANALYZE RE DESIGN CHALLENGE (March 2019) ShiftKey Labs: Hack a work proof concept/prototype for a design challenge in 24 hours.
                                    </span>
                                </li>
                                <br>
                                <br>
                                <li>
                                    <span>
                                        ARTS-TECH FUSION HACKATHON (March 2019) ShiftKey Labs: Creating and developing an idea related to arts through a weekend long event.
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- end here for the skills -->
            </div>
        </div>
    </section>

    <!-- ---------------------------------------Contact---------------------------------->
    <section class="page-section2" id="contact">
        <div class="container">

            <!-- ------------------------------------heading and call and mail--------------------------------------------- -->
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0" class="text-white" id="contacts" data-aos-duration="3000"data-aos="fade-out">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <br>
                    <br>
                </div>
            </div>

            <div class="row">
                <div  class="col-lg-4 ml-auto text-center mb-5 mb-lg-0" data-aos-duration="3000" data-aos="fade-in">
                    <button id="call" ><a href="tel:+19022939827">
                        <i class="fas fa-phone fa-3x mb-3 text-white shake-slow"></i>
                        <div class="text-center text-white text-algin">+1 (902) 293-9827</div>
                    </a>
                </button>
            </div>

            <div class="col-lg-4 mr-auto text-center" data-aos-duration="3000" data-aos="fade-in">
                <button id="call" >
                    <a href="mailto:pranav.mahindru@dal.ca">
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <div class="letter-image">
                            <div class="animated-mail">
                                <div class="back-fold"></div>
                                <div class="letter">
                                    <div class="letter-border"></div>
                                    <div class="letter-title"></div>
                                    <div class="letter-context"></div>
                                    <div class="letter-stamp">
                                        <div class="letter-stamp-inner"></div>
                                    </div>
                                </div>
                                <div class="top-fold"></div>
                                <div class="body"></div>
                                <div class="left-fold"></div>
                            </div>
                            <div class="shadow"></div> 
                        </div>
                    </a>
                </button>
                <div class="mails" data-aos-duration="5000" data-aos="fade-out">
                    <a class="text-white text-algin text-center" href="mailto:pranav.mahindru@dal.ca">pranav.mahindru@dal.ca</a>
                </div>
            </div>
        </div>


        <!-- ----------------------------contaact form------------------------------------------ -->
        <br>
        <br>

        <button onclick="myFunction7()" id="testbutton" id="sty"> CONTACT ME</button>

        <br>
        <br>
        <br>
        <br>

        <div id="show" >
            <div  class="container2" class="input">
                <div class="row header">
                    <h1 id="h1">CONTACT ME &nbsp;</h1>
                    <a  onclick="document.getElementById('show').style.display='none';document.getElementById('contact').style.height= '500px'" class="close"> </a>
                </div>
                <div class="row">
                    <form action="index.php" method="post">
                        <ul class="ul">
                            <li>
                                <p class="left">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" placeholder="First name" class="input" required />
                                </p>
                                <p class="pull-right">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Last name" class="input" required />      
                                </p>
                            </li>

                            <li>
                                <p>
                                    <label for="email">Email <span class="req">*</span></label>
                                    <input type="email" name="email" placeholder="Email" class="input" required />
                                </p>
                            </li>        
                            <li><div class="divider"></div></li>
                            <li>
                                <label for="comments">Comments</label>
                                <textarea cols="46" rows="3" name="comments" class="input" required=""></textarea>
                            </li>

                            <li>
                                <input onclick="document.getElementById('show').style.display='none'" class="btn2 btn2-submit" type="submit" value="Submit" class="input"/>
                            </li>

                        </ul>
                    </form>  
                </div>
            </div>
        </div>

        <!-- ---------------------------social media------------------------------------ -->

        <div>
            <ul class="social"> 
                <li class="social2">
                    <a href="https://www.facebook.com/pranav.mahindru/">
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="cropped social3"><img src="pm/dist/assets/img/fb.png" height="auto" width="150%" id="fb"></span>
                    </a> 
                </li>

                <li class="social2">
                    <a href="https://twitter.com/Pranav33325622">
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="cropped social3"><img src="pm/dist/assets/img/tweet.png" height="auto" width="120%"></span>
                    </a> 
                </li>

                <li class="social2">
                    <a href="https://www.instagram.com/pranavmahindru16/">
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class=" social3"><img src="pm/dist/assets/img/insta.jpg" height="auto" width="80%"></span>
                    </a> 
                </li>

                <li class="social2">
                    <a href="https://www.linkedin.com/in/pmahindru/">
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"></span>
                        <span class="social3"><img src="pm/dist/assets/img/link.png" height="auto" width="80%" id="link"></span>
                    </a> 
                </li>

            </ul>  

        </div> 
    </div>
</section>

<br>

<div>
    <button onclick="topFunction()" id="myBtn"  data-aos-duration="1200"data-aos="slide-left" > 
        <a class="text-white text-algin" href="#main-page">
            <span id="co" class="glow">Back to top</span>
        </a>
    </button>
</div>

<!-- ---------------------------------------Footer--------------------------------------->
<footer class="text-white text-algin py-5">
    <div id="footer_text">
        ABOUT ME! 
    </div>
    <div id="footer_text2">
        &#169;2020 ALL RIGHTS RESERVED | DESIGNED BY PRANAV MAHINDRU 
    </div>
</footer>


<!-- ---------------------------------javascripts------------------------------------------------ -->
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="pm/dist/js/scripts.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>

<script>
    // ------------------top button----------------------------
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>
