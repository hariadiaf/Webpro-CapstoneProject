<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets\homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <title>Write In Private: Free Online Diary And Personal Journal | Penzu</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <body>
        <div class="container">
        <nav class="navbar navbar-expand-sm fixed-top" style='background-color:white;'>
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
height : 32px;
width : 166.281px;
border : 1px solid  #FFFFFF;
margin : 0 0 0 5px;
padding : 8px 16px 8px 16px;'>Create Your Journal</button>
            </form>
        </div>
        </nav>
        </div>


        <div class="firstlog">
            <a class="btn a-firstlog" href="/view/login" target="_self">Log in</a>
            <a class="btn a-firstlog" href="" ng-click="$ctrl.openSignupModal()">Sign up</a>
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
                    <a class="btn btn-block btn-primary" id="btnsignup" href="" style="">Start Your Free Journal Now!</a>
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
        <hr>
        <br><br>
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
    </body>

    </html>