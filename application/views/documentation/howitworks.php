<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>How Online Booking Works &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body>

        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">ma3ticket</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Top destinations <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Nairobi</a></li>
                                <li><a href="#">Mombasa</a></li>
                                <li><a href="#">Malindi</a></li>
                                <li><a href="#">Kitale</a></li>
                                <li><a href="#">Nakuru</a></li>
                                <li><a href="#">Eldoret</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Top operators <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Coast Bus </a></li>
                                <li><a href="#">Modern Coast </a></li>
                                <li><a href="#">Simba Coach </a></li>
                                <li><a href="#">Chania </a></li>
                                <li><a href="#">Mash</a></li>
                                <li><a href="#">Tahmed </a></li>
                                <li><a href="#">Coach</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url('login'); ?>">Sign in</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('signup'); ?>">Sign up</a>
                        </li>
                    </ul>

                    <p class="navbar-text navbar-right"><strong>| Operator only:</strong></p>

                    <ul  class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--HOW PANE-->

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="modular-title">
                                ~ How it Works ~
                            </h2>
                            <hr class="hr-maroon">
                        </div>
                    </div>
                    <div class="row contact-wrapper sitemap">
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="maroon-glyph"><h4><strong>What is ma3ticket Booking</strong></h4></div>
                                <p>ma3ticket.co.ke is a secure marketplace enabling bus travellers around East Africa view schedules, make selections, place their bookings and plan their trips. Whether in Coast, RiftValley,Up North Turkana or Nyaza, ma3ticket is changing the way YOU travel by bus.</p>

                            
                                <div class="top-spacer maroon-glyph"><h4><strong>So, how does it work?</strong></h4></div>
                                <p><strong>Search for your bus</strong><br />
                                    Plan your travel by searching for buses that use the route you want to travel and by the date of travel.</p>

                                    <p><strong>Pick your preferred bus operator</strong><br />
                                    With more than fifty bus operators listed from around Kenya, select your preferred operator either by time of departure, cost of the fare, amenities provided on board or the operator.</p>

                                    <p><strong>Have special requirements?</strong><br />
                                    Whether travelling as a large group, or in need of a bus to deviate from normal routing, or in need of a corporate plan, talk to us. We will be more than happy to help.</p>

                                    <p><strong>Available contact center</strong><br />
                                    Our contact center operates 12 hours a day, for 7 days a week. Call or email us and we will get back to you asap! Whether about the bus operator, available amenities, routing or timing issues, we are here for you.</p>

                                    <p><strong>Pay for your booking</strong><br />
                                    Having selected your preferred travel plan, we facilitate payments via mobile money within a period of time. Payment must be done withing this window to avoid the reservations being nullified.</p>

                                    <p><strong>Ticketing</strong><br />
                                    Once your payment is authenticated, you recieve your bus tickets via mobile. This ticket is verifiable at the bus operator at the time of boarding.</p>

                            </div>
                            <div class="row top-spacer">
                                <div class="col-md-4 col-xs-12">
                                    <a href="<?php echo base_url('welcome'); ?>" class="btn btn-primary btn-lg btn-block"><span class="white-imp">Book your bus &nbsp; <i class="fa fa-bus"></i></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    

                </div>
            </div>



        <div class="container clearfix services">
            <div class="servicelist route">
                <span>
                    Create account
                </span>
                <h2>BUS OPERATORS</h2>
            </div>
            <div class="servicelist busoperator">
                <span>
                    Search &amp; Book
                </span>
                <h2>TRAVELERS</h2>
            </div>
            <div class="servicelist ticketsold">
                <span>
                    Print your ticket
                </span>
                <h2>SPACE BOOKED</h2>
            </div>
            <div class="servicedetails">
                ma3ticket.com is a Kenyan online bus ticketing platform.
                You can now choose your bus and your seat, have the tickets delivered
                printed for you and pay the cash on delivery. Try the ma3ticket experience today.
            </div>
            <div class="text-center footer-links">
                <a href="<?php echo base_url('contactus');?>">Contact Us |</a>
                <a href="<?php echo base_url('howitWorks');?>">How It Works |</a>
                <a href="<?php echo base_url('Terms');?>">Terms & Condition |</a>
                <a href="<?php echo base_url('faqs');?>">FAQs</a>
            </div>
        </div>


        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>
    </body>
</html>
