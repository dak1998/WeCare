@extends('layouts.app')

@section('mainContent')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">WeCare</h1><br><br>
                <div class="row center">
                    <h5>Let's PayBack</h5>
                    <h6 class="header col s12 white-shadow">It's time we save the families of ones who protected us.</h6>
                </div>
                <div class="row center">
                    <a href="/about" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Know More</a>
                </div>
                <br><br>

            </div>
        </div>

        <div class="parallax">
            <img src="assets/background1n.jpg" style="transform: translate3d(-50%, 235.802px, 0px); opacity: 1;">
        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="center-content">
                        <img src="assets/logo_direct.png" width="70px" height="70px">
                        <h5 class="center">No MiddleMan!</h5>

                        <p class="light">Your wishes and donations are directly send to hearts and bank accounts of martyr's families.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="center-content">
                        <img src="assets/logo_aibot.png"width="70px" height="70px">
                        <h5 class="center">Connect Better!</h5>

                        <p class="light">Chat with our AI Bot to know better about us and how to use the portal.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="center-content">
                        <img src="assets/logo_track.png" width="70px" height="70px">
                        <h5 class="center">Track your Donations!</h5>

                        <p class="light">Track all your donations and view others' donations too.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>

                <div class="center-content">
                    <h1 class="header center teal-text text-lighten-2"> &#8377; {{$title}} already raised by {{$title}} citizens</h1><br><br>
                    <a href="/martyrs" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Contribute Now</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax">
            <img src="assets/background2n.jpg"  style="opacity: 1; transform: translate3d(-50%, 236.46px, 0px);">
        </div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="assets/background3n.jpg" style="opacity: 1; transform: translate3d(-50%, 275.73px, 0px);">
        </div>

    </div>
@endsection