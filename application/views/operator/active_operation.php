<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php
        foreach ($operatorDetails as $oppData) {
            $oppName = $oppData->operatorName;
            $oppMail = $oppData->operatorMail;
        }
        ?>
        <title><?php echo $oppName; ?> &CenterDot; Active operations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/timepicker.less'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body id="admin">

        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('op'); ?>">ma3ticket</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="">
                            <a href="<?php echo base_url("activeOperation"); ?>">Active operations</a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url("addOperation"); ?>">Add operations</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url("signout"); ?>">Sign out</a>
                        </li>
                    </ul>
                    <p class="navbar-right navbar-text">
                        Logged in as <?php echo $oppName; ?>
                    </p>
                </div>
            </div>
        </nav>


        <!-- Main operator pane -->
        <div class="container">
            <div class="text-left" id="introAdmin">
                <h1 class="hidden">Welcome to Schedules</h1>
                <p>You can view your current schedules here</p>
            </div>
            <div class="">
                <?php
                if ($numberActiveOperations > 0) {
                    ?>

                    <div class="card">
                        <?php
                        foreach ($activeOperations as $activeOpp):
                            $operationId = $activeOpp->scheduleId;
                            $operationFrom = $activeOpp->scheduleFrom;
                            $operationTo = $activeOpp->scheduleTo;
                            $operationDate = $activeOpp->scheduleDate;
                            $operationTime = $activeOpp->scheduleTime;
                            $operationBus = $activeOpp->scheduleBus;
                            $operationBusCapacity = $activeOpp->scheduleBusCapacity;
                            $operationBusCost = $activeOpp->scheduleBusCost;
                            $operationStatus = $activeOpp->scheduleStatus;
                            ?>
                            <!-- There is an operation available -->
                            <div class="media">
                                <a class="pull-left" href="<?php echo base_url("schedulePreview/$operationId"); ?>">
                                    <img class="media-object" src="<?php echo base_url("style/imgs/transport_6.png"); ?>" alt="<?php echo $operationBus; ?>">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $operationBus; ?></h4>
                                    <ul class="operationList">
                                        <li>
                                            <a>Travel date: <?php echo $operationDate;?></a>
                                        </li>
                                        <li>
                                            <a>Travel time: <?php echo $operationTime;?></a>
                                        </li>
                                        <li>
                                            <a>Bus capacity: <?php echo $operationBusCapacity;?></a>
                                        </li>
                                        <li>
                                            <a>Cost(one person): Ksh. <?php echo $operationBusCost;?></a>
                                        </li>
                                    </ul>
                                    <div class="more-btn pull-right">
                                        <a href="<?php echo base_url("schedulePreview/$operationId"); ?>">View more <span class="hidden-sm hidden-xs">and Update</span></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    } else {
                        ?>

                        <!-- There is no operation available -->
                        <div class="alert alert-success text-center">
                            <p>Sorry! You have no active schedules</p>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>


        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-timepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>

    </body>
</html>
