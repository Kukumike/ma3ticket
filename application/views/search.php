<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Search &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>
        <script>
            //validate
            //check if bus is full
            function checkCapacity() {
                var full = document.getElementById("busCapacity").value;

                if (full === "0") {
                    document.getElementById('errorFull').innerHTML = "**Bus Full**";

                }
            }
        </script>
    </head>
    <body id="search" onload="checkCapacity()">

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
                        <li><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Search pane -->
        <div class="navbar-search hidden-xs">
            <div class="container">
                <div class="searchForm">
                    <form class="formSearch" method="get" action="">
                        <div class="form-group inputOne">
                            <label class="control-label hidden" for="destinationFrom">From</label>
                            <input type="text" class="inputSearch" name="destinationFrom" id="destinationFrom" value="<?php echo $from; ?>" placeholder="From"/>
                        </div>
                        <div class="form-group inputTwo">
                            <label class="control-label hidden" for="destinationTo">Destination</label>
                            <input type="text" class="inputSearch" name="destinationTo" id="destinationTo" value="<?php echo $to; ?>" placeholder="To"/>
                        </div>
                        <div class="form-group inputThree">
                            <label class="control-label hidden" for="dpd1">Travel date</label>
                            <div class="date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">
                                <input id="dpd1" name="travelDate" class="inputSearch" size="16" type="text" value="<?php echo $travel_date; ?>">
                            </div>
                        </div>
                        <div class="form-group inputFour">
                            <input type="submit" value="Modify Search" class="destinationSubmit"/>
                        </div>
                    </form>
                </div>

            </div>            
        </div>
        <div class="container">
            <div class="col-md-5 pull-right">
                <form class="form ticketForm" method="get" action="<?php echo base_url('group'); ?>">
                    <button class="btn btnGroup">For Group | Organization Booking</button>
                </form>
            </div>
        </div>

        <!-- Results pane -->
        <div class="searchPane">
            <div class="container">
                <h4 id="scheduleDate"><b><?php echo "Departures: " . $travel_date . " {" . $num_search_result . " Buses available }"; ?></b></h4>                    

                <?php
                if ($num_search_result > 0) {
                    foreach ($search_result as $cur_results):
                        $busName = $cur_results->scheduleBus;
                        $busCapacity = $cur_results->scheduleBusCapacity;
                        $busPrice = $cur_results->scheduleBusCost;
                        $scheduleDate = $cur_results->scheduleDate;
                        $scheduleTime = $cur_results->scheduleTime;
                        $from = $cur_results->scheduleFrom;
                        $to = $cur_results->scheduleTo;
                        $id = $cur_results->scheduleId;
                        $bus_fair = $cur_results->scheduleBusCost;
                        $bus_capacity = $cur_results->scheduleBusCapacity;
                        $operatorId = $cur_results->operatorId;
                        ?>

                        <form class="form ticketForm" id="myForm" method="get" action="<?php echo base_url('ticket'); ?>">
                            <input type="hidden" value="<?php echo $id; ?>" name="scheduleId"/>
                            <input type="hidden" value="<?php echo $bus_fair; ?>" name="scheduleBusCost"/>
                            <input type="hidden" value="<?php echo $bus_capacity; ?>" name="scheduleBusCapacity"/>
                            <input type="hidden" value="<?php echo $operatorId; ?>" name="operatorId"/>

                            <div class="row trip-data">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <div>
                                        <div class="data" id="scheduleFrom">From: <?php echo $from ?></div>
                                        <div id="scheduleTime">Time: <?php echo $scheduleTime ?></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <div class="data" id="scheduleTo">To: <?php echo $to ?></div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="data" id="scheduleBus">Bus Name: <?php echo $busName ?></div>
                                    <div>Capacity: <input type="text" style="border-style: none;" id="busCapacity" readonly="" value="<?php echo $busCapacity ?>"></div>
                                    <p id="errorFull" style="color: red;font-weight: bold;"></p>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="data">KSH <?php echo $bus_fair ?> /=</div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <button type="submit" id="selectbtn" class="btn btn-danger btn-block" data-toggle="tooltip" data-placement="left" title="Select Bus" >SELECT BUS&nbsp; </button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-info text-center">
                        <p>Sorry. No results found</p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>



        <!-- Services -->
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
                <a href="<?php echo base_url('contactus'); ?>">Contact Us |</a>
                <a href="<?php echo base_url('howitWorks'); ?>">How It Works |</a>
                <a href="<?php echo base_url('Terms'); ?>">Terms & Condition |</a>
                <a href="<?php echo base_url('faqs'); ?>">FAQs</a>
            </div>
        </div>


        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>
    </body>
</html>
