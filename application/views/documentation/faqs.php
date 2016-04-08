<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>FAQs &CenterDot; Online bus booking</title>
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
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="modular-title">
                            Frequently Asked Questions ???
                        </h2>

                        <hr class="hr-maroon">

                    </div>
                </div>
                <div class="row trip-data">

                    <div class="col-md-1">
                        <!--Left Spacer Important-->
                    </div>

                    <div class="col-md-10">
                    
                <!-- Begin FAQ Accordion -->
                <div class="tab-content faq-cat-content">
                    <div class="tab-pane active in fade" id="faq-cat-1">
                        <div class="panel-group" id="accordion-cat-1">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-1">
                                        <h4 class="panel-title white-title">
                                            Can I change a booking that has already been confirmed?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-1">
                                    <div class="panel-body">
                                        It depends. You can request changes to your reservation—such as the dates or number of guests—but your changes will need to be approved by the bus operator. Most bus operators require adequate time notice for changes, and some of them have some charge for amending your booking.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-2">
                                        <h4 class="panel-title white-title">
                                            Can i book multiple seats using one person's details?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            Yes, you may book multiple seats using one person's details if they are travelling together as a group. This is acceptable across most bus operators, but may vary depending on the bus operator.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-3">
                                        <h4 class="panel-title white-title">
                                            How do I book a bus ticket?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            To book your bus ticket you simply need to select the place of origin, the destination, date of travel and if required, the return date and search. We'll show you the options and you'll just need to choose the one that fits you best and proceed.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-4">
                                        <h4 class="panel-title white-title">
                                            How do I know my booking was successful?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            When the booking is finalized and approved, it means that your seat was successfully booked. After making payment, you will receive your travel details by SMS (mTicket). Remember to pay attention to the travel details on the ticket. If payment is not made on time , the reserved seat is released. 
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-5">
                                        <h4 class="panel-title white-title">
                                            How do I board my bus?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                            Your SMS ticket is a valid ticket with a unique ID code that the bus operator will use to allow you to board. You only need to display your SMS ticket and once verified by the operator, you will board. This applies as well to all road pickups. 
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="faqs.htm#faq-cat-1-sub-6">
                                        <h4 class="panel-title white-title">
                                           What documents do I need to book a bus ticket?
                                            <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span>
                                        </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-6 "class="panel-collapse collapse">
                                    <div class="panel-body">
                                            Kenyan, Ugandan and Rwandan nationals must provide either National ID's or Passport. Travellers of other Nationalities must provide their passport. A contact telephone number must also be provided for all travellers.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-cat-2">
                        <div class="panel-group" id="accordion-cat-2">
                            <div class="panel panel-default panel-faq">
                                
                                <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                
                                <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default panel-faq">
                                
                                <div id="faq-cat-2-sub-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">If you have any more questions for us <a id="quiz" href="<?php echo base_url('contactus');?>">Contact Us</a><p>
            </div>
            <!--End FAQ Accordion-->
        
            <div class="col-md-1">
                <!--Right Spacer-->
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
