<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <title>Write In Private: Free Online Diary And Personal Journal | Penzu</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        // jQuery untuk hide navbar
        (function ($) {
        $(document).ready(function(){            
            $(".navbar").hide();
            $(function () {
                $(window).scroll(function () {
                    // set distance user needs to scroll before we fadeIn navbar
                    if ($(this).scrollTop() <= 100) {
                        $('.navbar:visible').slideUp();
                    } else {
                        $('.navbar:hidden').slideDown();
                    }
                });
            });
        });
        }(jQuery));
    </script>
    <body>
        <div class="container">
        <nav class="navbar border-bottom navbar-expand-sm fixed-top" style='background-color:white;'>
        <div class="collapse navbar-collapse" id="navbarNav" style='margin-left: 14.7%;'>
            <a class="navbar-brand" href="#" style='margin-top: -3.5px;'>
                <img src="assets/img/pz-logo__red.png"  width="106" height="30.42" class="d-inline-block align-top" alt="">
                <span style='padding-left: 8px; font-family : "Open Sans", helvetica, sans-serif; font-size : 14px; color :  #8E8E93; padding-bottom: 5px;'>Your Private Online Journal</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-right" style='font-family : "Open Sans", helvetica, sans-serif;
            font-size : 14px;
            font-weight : 600;
            line-height : 14px;
            word-spacing : 0px;
            color :  #8E8E93 !important;'>
            <a class="nav-item nav-link active" href="#">PENZU PRO<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Login</a>
            </div>
            <form class="form-inline">
                <button class="btn btn-sm btncreate" type="button" style='font-family : "Open Sans", helvetica, sans-serif;
                font-size : 14px;
                font-weight : 600;
                line-height : 14px;
                text-align : center;
                white-space : nowrap;
                background-color :  #3498DB;
                color :  #FFFFFF;
                height : 34px;
                width : 4.5cm;
                max-width: 7.2cm;
                border : 1px solid  #FFFFFF;
                padding : 8px 16px 8px 16px;'>Create Your Journal</button>
            </form>
        </div>
        </nav>
        </div>


        <div class="firstlog">
            <a class="btn a-firstlog" href="/view/login" target="_self" style="font-weight : 600;">Log in</a>
            <a class="btn a-firstlog" href="" ng-click="$ctrl.openSignupModal()" style="font-weight : 600;">Sign up</a>
        </div>
        <div class="part1" style='background-image : url("assets/img/background-desk.jpg") !important;
        background-position: 50% 98%;
        background-repeat : no-repeat;
        background-size: cover;
        height : 846.594px;
        width : 1349px;
        display : block;
        overflow : hidden;'>
            <div class="container logoplus">
                <center>
                    <img id="logomain" src="assets/img/pz-logo__red.png" alt="">
                    <br>
                    <p id="tagline">Your private, 100% customizable online journal.
                        <br> Loved by over 2 million writers around the world.
                    </p>
                    <a class="btn btn-block btn-primary" id="btnsignup" href="" style="font-weight : 600;">Start Your Free Journal Now!</a>
                </center>
            </div>
        </div>

        <p id="featured">Loved by more than 2,000,000 writers, featured on...</p>
            
        <div class="container logos">
            <div class="row">
                <div class="col-">
                <img class="paralogo" id="lg-lifehacker" ng-src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-lifehacker.png" alt="LifeHacker logo" src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-lifehacker.png">
                </div>
                <div class="col-">
                <img class="paralogo" id="lg-gigaom" ng-src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-gigaom.png" alt="GigaOm logo" src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-gigaom.png">
                </div>
                <div class="col-">
                <img class="paralogo" id="lg-tnw" ng-src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-tnw.png" alt="The Next Web logo" src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-tnw.png">
                </div>
                <div class="col-">
                <img class="paralogo" id="lg-mash" ng-src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-mashable.png" alt="Mashable logo" src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-mashable.png">
                </div>
                <div class="col-">
                <img class="paralogo" id="lg-rw" ng-src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-readwrite.png" alt="ReadWrite logo" src="https://d3c2plo0qyv3hc.cloudfront.net/images/landing/press/logo-readwrite.png">
                </div>
            </div>
        </div>
        <hr><br><br>
        <center>
            <div class="container part2">
                <h2 style="padding-bottom: 20px;">What are you writing for?</h2>
                <p>Whether you’re looking for a tool to record your daily emotions and activities in a <u>reflective<br>journal</u>, keep track of milestones in a <u>food diary</u> or <u>pregnancy journal</u>, or even record your<br>dreams in a <u>dream journal</u>, Penzu has you covered.</p>
                <p>Penzu gives you all the tools you need to focus on the ideas you want to preserve, rather than<br>the process of writing itself.</p>
            </div>
            <a class="btn btn-primary getstarted" href="" ng-click="$ctrl.openSignupModal()">Get Started</a>
        </center>

        <div class="container privacy">
            <div class="row">
                <div class="col-">
                    <h2 style="padding-top: 20%; padding-bottom: 13px;">Privacy is our #1 Concern</h2>
                    <p>Even when carefully kept, paper journals can be read by anyone who happens upon them.<br>Penzu keeps your journals safe with double password protection and military strength<br>encryption so you can rest easy knowing that your entries are secure in the Penzu Vault.</p>
                    <a class="btn btn-primary getstarted2" href="" ng-click="$ctrl.openSignupModal()">Get Started</a>
                </div>
                <div class="col-sm">
                    <img id="priv-1" src="assets/img/feature_locking.jpg" alt="" style="height : 377px; width : 361px; margin-left: 19.2%; margin-top: 11%;">
                </div>
            </div>
            <div class="row">
                <div class="col-">
                    <img id="priv-1" src="assets/img/feature_devices.jpg" alt="" style="height : 495px; width : 828px; margin-left: -43.5%; margin-top: 5%;">
                </div>
                <div class="col-" style="margin-left: -29%; margin-top: 17.5%;">
                    <h2 style="padding-bottom: 8px;">Write from Anywhere</h2>
                    <p style="margin-bottom: 8px;">Take your journals wherever you go with the Penzu mobile apps for iPhone, iPad,<br>and Android phones and tablets.</p>
                    <a class="btn btn-primary getstarted2" href="" ng-click="$ctrl.openSignupModal()">Get Started</a>
                </div>
            </div>
        </div>
        <center>
        <div class="container" style="margin-left: 215px; margin-top: 1.55%;">
        <div class="row" style="padding-bottom: 5%;">
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__security2.png" alt="" style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>100% Private</div>
                <div class='detail-features'>Designed to focus on privacy, your<br>entries are totally private by default!</div>
            </div>
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__mobile.png" alt=""style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>Available Everywhere</div>
                <div class='detail-features'>Enjoy Penzu on the move. Available<br>for iOS and Android and totally free!</div>
            </div>
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__reminder.png" alt=""style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>Never Forget to Write</div>
                <div class='detail-features'>Custom email reminders help you<br>make sure you never forget to<br>write.</div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 5%;">
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__customize.png" alt=""style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>Fully Customizable Diary</div>
                <div class='detail-features'>Make each <span><a href="">journal</a></span> your own with<br>custom covers, backgrounds, and<br>fonts.</div>
                <a class="feature__cta btn btn-primary" href="/pro" target="_self">Learn More</a>
            </div>
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__search.png" alt=""style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>Smart Journal Search</div>
                <div class='detail-features'>Quickly and easily search through<br>your journals, entries, and tags.</div>
                <a class="feature__cta btn btn-primary" href="/pro" target="_self">Learn More</a>
            </div>
            <div class="col- kolomfeatures">
                <div>
                    <img src="assets/img/feature-icon__security.png" alt=""style="height : 80px; width : 80px;">
                </div>
                <div class='title-features'>Military Grade Security</div>
                <div class='detail-features'>Further protect your diary with<br>military-grade 256-bit AES encryption.</div>
                <a class="feature__cta btn btn-primary" href="/pro" target="_self">Learn More</a>
            </div>
        </div>
        </div>
        </center>
        <center>
            <h2 class="resource">Diary and Journal Writing Resources</h2>
            <div class="container" style="padding-bottom: 104px;">
                <div class="row">
                    <div class="col">
                        <div style='font-family : "Open Sans", helvetica, sans-serif; font-size : 16px; font-weight : 700; line-height : 17.6px; text-align : center;'
                            >Journaling basics</div>
                        <div>
                            <a href="#">What is a Journal?</a><br>
                            <a href="#">What is a Journal Entry?</a><br>
                            <a href="#">Benefits of Journaling</a><br>
                            <a href="#">Journal Types</a><br>
                            <a href="#">How to Write a Journal?</a><br>
                            <a href="#">Journal Examples</a><br>
                            <a href="#">Journal Prompts</a><br>
                        </div>
                    </div>
                    <div class="col">
                        <div style='font-family : "Open Sans", helvetica, sans-serif; font-size : 16px; font-weight : 700; line-height : 17.6px; text-align : center;'
                            >Types of Journals</div>
                        <div>
                            <a href="#">Bible Journal</a><br>
                            <a href="#">Dream Journal</a><br>
                            <a href="#">Prayer Journal</a><br>
                            <a href="#">Pregnancy Journal</a><br>
                            <a href="#">Reflective Journal</a><br>
                            <a href="#">Travel Journal</a><br>
                            <a href="#">5 Year Journal</a><br>
                            <a href="#">Gratitude Journal</a><br>
                        </div>
                    </div>
                    <div class="col">
                        <div style='font-family : "Open Sans", helvetica, sans-serif; font-size : 16px; font-weight : 700; line-height : 17.6px; text-align : center;'
                            >Diary Basics</div>
                        <div>
                        <div>
                            <a href="#">What is a Diary?</a><br>
                            <a href="#">What is a Diary Entry?</a><br>
                            <a href="#">How to Write Diary</a><br>
                            <a href="#">Diary Types</a><br>
                            <a href="#">Diary Software</a><br>
                            <a href="#">Diary Templates</a><br>
                            <a href="#">Digital Diaries</a><br>
                        </div>
                    </div>
                    </DIV>
                    <div class="col">
                        <div style='font-family : "Open Sans", helvetica, sans-serif; font-size : 16px; font-weight : 700; line-height : 17.6px; text-align : center;'
                            >Types of Diaries</div>
                        <div>
                        <div>
                                <a href="#">Academic Diary</a><br>
                                <a href="#">Food Diary</a><br>
                                <a href="#">Health Diary</a><br>
                                <a href="#">School Diary</a><br>
                                <a href="#">Secret Diary</a><br>
                                <a href="#">Wedding Diary</a><br>
                                <a href="#">Work Diary</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        <div class="container penzu-mobile">
                <img src="assets/img/mobile-app-icon.png" alt=""style="margin-left: 53.5%; margin-top: 15%; height: 112px; width: 112px;">
                <div id="penzu-mobile-text">
                <span><b>Penzu Mobile</b></span><br>Take your journal wherever you go<br>with our apps for iPhone, iPad, and<br>Android phones & tablets.
                </div>
                <div class="landing__mobile-btns">
                    <a class="mobile-btn apple" href="https://itunes.apple.com/us/app/penzu/id452674732?mt=8" target="_self">
                        <img ng-src="assets/img/btn-app-store.png" alt="Apple App Store Link to Penzu Mobile App" src="assets/img/btn-app-store.png">
                    </a>
                    <a class="mobile-btn play" href="https://play.google.com/store/apps/details?id=com.penzu.android&amp;hl=en" target="_self">
                        <img ng-src="assets/img/btn-play-store.png" alt="Google Play Store Link to Penzu Mobile App" src="assets/img//btn-play-store.png">
                    </a>
                </div>
        </div>
        <div class="closing">
            <h3>Ready to start writing? Sign up now!</h3>
            <a class="btn btn-primary getstarted" href="" ng-click="$ctrl.openSignupModal()">Get Started</a>
        </div>
        <footer>
            <div class="container">
            <div class="row">
                <div class="col">
                    <p><b>Penzu</b></p><hr>
                    <a href="">Free Signup</a><br>
                    <a href="">Penzu PRO</a><br>
                    <a href="">Login</a><br>
                    <a href="">Support</a>
                </div>
                <div class="col">
                    <p><b>Journals</b></p><hr>
                    <div class="row">
                        <div class="col">
                            <a href="">Journal Prompts</a><br>
                            <a href="">What is a Journal</a><br>
                            <a href="">Pregnancy Journal</a><br>
                            <a href="">Reflective Journal</a><br>
                        </div>
                        <div class="col">
                            <a href="">Bible Journal</a><br>
                            <a href="">Dream Journal</a><br>
                            <a href="">Journal Examples</a><br>
                            <a href="">Five Year Journal</a><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p><b>Diaries</b></p><hr>
                    <div class="row">
                        <div class="col">
                            <a href="">Secret Diary</a><br>
                            <a href="">Electronic Diary</a><br>
                            <a href="">Diary Templates</a><br>
                            <a href="">Wedding Diary</a><br>
                        </div>
                        <div class="col">
                            <a href="">School Diary</a><br>
                            <a href="">Health Diary</a><br>
                            <a href="">Food Diary</a><br>
                        </div>
                    </div>
                </div>
            </div>
            <center><p>Copyright Penzu Inc. 2019</p></center>
            </div>
        </footer>
    </body>
    </html>