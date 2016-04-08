<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>ContactUs &CenterDot; Online bus booking</title>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('login'); ?>">Sign in</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('signup'); ?>">Sign up</a>
                        </li>
                    </ul>

                    <p class="navbar-text navbar-right"><strong>Operator only:</strong></p>
                    <ul  class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- contact pane -->
        <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="modular-title">
                                { Got Questions Talk to Us }
                            </h2>
                            <hr class="hr-maroon">
                        </div>
                    </div>
                    <div class="row well contact-wrapper">
                        <div class="col-md-12">
                            <p class="lead highlight-grey">Drop us a line and we will get back to you shortly.</p>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <form method="post" action="contactus_2.htm">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--<label for="firstname">First Name</label>-->
                                                    <input type="text" id="firstname" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--<label for="firstname">First Name</label>-->
                                                    <input type="text" id="lastname" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--<label for="firstname">First Name</label>-->
                                                    <input type="text" id="tel" class="form-control" placeholder="Telephone Number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!--<label for="firstname">First Name</label>-->
                                                    <input type="email" id="email" class="form-control" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <!--<label for="firstname">First Name</label>-->
                                                    <input type="text" id="subject" class="form-control" placeholder="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="message" rows="7" placeholder="Enter your message here" required>
                                                </textarea>
                                            </div>
                                            <div class="col-md-12 top-spacer">
                                                <button id="talkBtn" class="btn btn-lg btn-block">Talk to Us</button>
                                            </div>
                                            <br />
                                        </form>
                                    </div>
                                </div>

                            <div class="col-md-1">
                            </div>
                                    <div class="col-md-4 text16">
                                        <address>
                                            <strong>Customer Support</strong><br />
                                            hello@ma3ticket.co.ke<br />
                                            Monday - Sunday 8am - 8pm (GMT+3)<br />
                                            <abbr title="Phone">P:</abbr> (254) 722-000-000
                                        </address>

                                        <address>
                                            <strong>Operators Support</strong><br />
                                            info@ma3ticket.co.ke<br />
                                            Monday - Sunday 8am - 8pm (GMT+3)<br />
                                            <abbr title="Phone">P:</abbr> (254) 722-000-000
                                        </address>
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
